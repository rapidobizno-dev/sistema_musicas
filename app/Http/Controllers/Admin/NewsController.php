<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Tag;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Notifications\NewsNotification;
use Illuminate\Support\Facades\Gate;

class NewsController extends Controller
{

    public function index()
    {
        //
        $response['news'] = News::orderByDesc('id')->get();
        /* notifications */
        $admin = auth()->user();
        $response['notifications'] = $admin->notifications()->limit(5)->get();
        /* end notifications */

        return view('admin.news.list.index', $response);
    }

    public function create()
    {
        //
        //trazendo as categorias
        $response['categories'] = Category::all();
        /* notifications */
        $admin = auth()->user();
        $response['notifications'] = $admin->notifications()->limit(5)->get();
        /* end notifications */

        return view('admin.news.create.index', $response);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:10000',
            'status' => 'required|in:draft,published,filed',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date' => 'required|date|after_or_equal:today',
            'detach' => 'required|in:normal,destaque,urgente',
            'category_id' => 'required|exists:categories,id',
        ], [
            'title.required' => 'O título é obrigatório.',
            'subtitle.required' => 'O subtítulo é obrigatório.',
            'status.required' => 'Obrigatório selecionar um status.',
            'description.max' => 'O campo descrição não pode ter mais de 10000 caracteres.',
            'image.image' => 'O arquivo deve ser uma imagem.',
            'image.mimes' => 'A imagem deve ser do tipo: jpeg, png, jpg ou gif.',
            'image.max' => 'A imagem não pode ter mais de 2MB.',
            'date.required' => 'A data é obrigatória.',
            'date.date' => 'Informe uma data válida.',
            'date.after_or_equal' => 'A data não pode ser anterior à data atual.',
            'detach.required' => 'O campo destaque é obrigatório.',
            'detach.in' => 'O valor do destaque é inválido.',
            'category_id.required' => 'A categoria é obrigatória.',
            'category_id.exists' => 'A categoria selecionada é inválida.',
        ]);

        /* $news = News::create($request->all()); */
        $data = $request->except('_token');

        // Upload da imagem
        $imageName = null;
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $extension = $image->extension();
            $imageName = md5($image->getClientOriginalName() . strtotime('now')) . '.' . $extension;
            $image->move(public_path('img/news'), $imageName);
            $data['image'] = $imageName; // Adiciona o nome da imagem ao array de dados
        }

        /* News::create($data); */

        // Salvar as tags
        /* if ($request->has('tags')) {
            $news->tags()->sync($request->tags);
        } */

        if ($data['status'] == 'filed') {
            // Buscar admin (pode ser por role, por exemplo)
            $admin = User::where('role', 'admin')->first();
            $news = News::create($data);

            /* registrando atividade */
            if($news){
                activity()
                    ->causedBy(auth()->user()) // quem fez a ação
                    ->performedOn($news)     // qual model foi afetado
                    ->withProperties(['title' => $news['title']])
                    ->log('Criou uma nova notícia, que foi arquivada');
            }
            // Enviar notificação
            if ($admin) {
                $admin->notify(new NewsNotification($news));
            }
        } else {
            $news = News::create($data);

            /* registrando atividade */
            if($news){
                activity()
                    ->causedBy(auth()->user()) // quem fez a ação
                    ->performedOn($news)     // qual model foi afetado
                    ->withProperties(['title' => $news['title']])
                    ->log('Criou uma nova notícia');
            }
        }

        return redirect()->route('admin.news.index')->with('success', 'Notícia criado com sucesso!');
        return redirect()->back()->with('error', 'Ocorreu um erro ao salvar Notícia!');
    }

    public function show(News $news)
    {
        /* notifications */
        $admin = auth()->user();
        $response['notifications'] = $admin->notifications()->limit(5)->get();
        /* end notifications */
        $response['news'] = $news;
        return view('admin.news.details.index', $response);
    }

    public function edit(News $news)
    {
        //
        $response['categories'] = Category::all(); // Or any other query to fetch categories
        /* notifications */
        $admin = auth()->user();
        $response['notifications'] = $admin->notifications()->limit(5)->get();
        /* end notifications */
        $response['news'] = $news;
        return view('admin.news.edit.index', $response);
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:10000',
            'status' => 'required|in:draft,published,filed',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date' => 'required|date',
            'detach' => 'required|in:normal,destaque,urgente',
            'category_id' => 'required|exists:categories,id',
        ], [
            'title.required' => 'O título é obrigatório.',
            'subtitle.required' => 'O subtítulo é obrigatório.',
            'status.required' => 'Obrigatório selecionar um status.',
            'description.max' => 'O campo descrição não pode ter mais de 1000 caracteres.',
            'image.image' => 'O arquivo deve ser uma imagem.',
            'image.mimes' => 'A imagem deve ser do tipo: jpeg, png, jpg ou gif.',
            'image.max' => 'A imagem não pode ter mais de 2MB.',
            'date.required' => 'A data é obrigatória.',
            'date.date' => 'Informe uma data válida.',
            'detach.required' => 'O campo destaque é obrigatório.',
            'detach.in' => 'O valor do destaque é inválido.',
            'category_id.required' => 'A categoria é obrigatória.',
            'category_id.exists' => 'A categoria selecionada é inválida.',
        ]);

        $data = $request->except('_token', '_method', 'image');

        // Atualiza o slug baseado no título se necessário
        if ($request->has('title') && $request->title !== $news->title) {
            $data['slug'] = Str::slug($request->title);
        }

        // Processar imagem se for enviada
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Remover imagem antiga se existir
            if ($news->image && file_exists(public_path('img/news/' . $news->image))) {
                unlink(public_path('img/news/' . $news->image));
            }

            $image = $request->file('image');
            $extension = $image->extension();
            $imageName = md5($image->getClientOriginalName() . strtotime('now')) . '.' . $extension;
            $image->move(public_path('img/news'), $imageName);
            $data['image'] = $imageName;
        }

        // Atualiza todos os campos de uma vez
        //$news->update($request->all());
        $news->update($data);

        // Atualizar as tags
        /* if ($request->has('tags')) {
            $news->tags()->sync($request->tags);
        } else {
            $news->tags()->sync([]); // Se não enviar nenhuma tag, remove todas
        } */

        return redirect()->route('admin.news.index')->with('success', 'Notícia atualizada com sucesso!');
        return redirect()->back()->with('error', 'Ocorreu um erro ao atualizar Notícia!');
    }

    public function destroy(News $news)
    {
        //
        if (Gate::denies('isAdmin', $news)) {
            abort(403, 'Acesso negado.');
        }
        $news->delete();

        return redirect()->route('admin.news.index')
            ->with('success', 'Notícia eliminado com sucesso');
    }
    /* mantendo o conteudo no editor */
    public function editorNews(News $news)
    {
        return response()->json($news);
    }

}
