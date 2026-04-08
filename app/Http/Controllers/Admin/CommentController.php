<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\News;
use Illuminate\Support\Facades\Storage;

class CommentController extends Controller
{

    public function index()
    {
        //
        $response['comments'] = Comment::orderByDesc('id')->get();
         /* notifications */
        $admin = auth()->user();
        $response['notifications'] = $admin->notifications()->limit(5)->get();
        /* end notifications */
        return view('admin.comments.list.index', $response);
    }

    public function create()
    {
        //
        $news = News::all(); // Busca todas as notícias cadastradas
        return view('admin.comments.create.index', compact('news'));
    }

    public function store(Request $request)
    {
        //
        $request->validate([
            'text_comment' => 'required|string|max:1000',
            'author_comment' => 'required|string|max:255',
            'date' => 'required|date|after_or_equal:today',
            'news_id' => 'required|exists:news,id',
        ], [
            'text_comment.required' => 'O conteúdo é obrigatório.',
            'author_comment.required' => 'O autor é obrigatório.',
            'text_comment.max' => 'O campo comentário não pode ter mais de 1000 caracteres.',
            'author_comment.max' => 'O campo autor não pode ter mais de 255 caracteres.',
            'news_id.exists' => 'A notícia selecionada não existe.',
        ]);

        Comment::create([
            'text_comment' => $request->text_comment,
            'author_comment' => $request->author_comment,
            'date' => $request->date,
            'news_id' => $request->news_id,
        ], [
            'text_comment.required' => 'O conteúdo é obrigatório.',
            'author_comment.required' => 'O autor é obrigatório.',
            'text_comment.max' => 'O campo comentário não pode ter mais de 1000 caracteres.',
            'author_comment.max' => 'O campo autor não pode ter mais de 255 caracteres.',
            /* 'news_id.exists' => 'A notícia selecionada não existe.', */
        ]);

        return redirect()->route('admin.comments.index')->with('success', 'Comentário criado com sucesso.');
        return redirect()->back()->with('error', 'Ocorreu um erro ao salvar Comentário!');
    }

    public function show(Comment $comment)
    {
         /* notifications */
        $admin = auth()->user();
        $response['notifications'] = $admin->notifications()->limit(5)->get();
        /* end notifications */

        $response['comment'] = $comment;
        $response['news'] = News::where('id', $comment->news_id)->get()->first();
        return view('admin.comments.details.index', $response);
    }

    public function edit(Comment $comment)
    {
         /* notifications */
        $admin = auth()->user();
        $response['notifications'] = $admin->notifications()->limit(5)->get();
        /* end notifications */

        $response['comment'] = $comment;
        return view('admin.comments.edit.index', $response);
    }

    public function update(Request $request, Comment $comment)
    {
        //
        $request->validate([
            'text_comment' => 'required|string|max:1000',
            'author_comment' => 'required|string|max:255',
            'date' => 'required|date|after_or_equal:today',
            /* 'news_id' => 'required|exists:news,id', */
        ], [
            'text_comment.required' => 'O conteúdo é obrigatório.',
            'author_comment.required' => 'O autor é obrigatório.',
            'text_comment.max' => 'O campo comentário não pode ter mais de 1000 caracteres.',
            'author_comment.max' => 'O campo autor não pode ter mais de 255 caracteres.',
            /* 'news_id.exists' => 'A notícia selecionada não existe.', */
        ]);

        $comment->update([
            'text_comment' => $request->trait_exists,
            'author_comment' => $request->author_comment,
            'date' => $request->date,
            'news_id' => $request->news_id,
        ]);

        return redirect()->route('admin.comments.index')->with('success', 'Comentário atualizado com sucesso.');
        return redirect()->back()->with('error', 'Ocorreu um erro ao atualizar Comentário!');
    }

    public function destroy(Comment $comment)
    {
        //
        $comment->delete();

        return redirect()->route('admin.comments.index')->with('success', 'Comentário excluído com sucesso.');
    }
}
