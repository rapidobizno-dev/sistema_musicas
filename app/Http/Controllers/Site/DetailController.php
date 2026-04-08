<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Comment;
use App\Models\Reply;
use App\Models\Category;
use App\Models\Video;

class DetailController extends Controller
{
    public function index(News $news)
    {

        /* recent news */
        $response['recentNews'] = News::orderByDesc('updated_at')->get()->take(6);

        /* related news */
        $response['relatedNews'] = News::where('category_id', $news->category_id)
            ->where('id', '!=', $news->id)
            ->orderByDesc('updated_at')
            ->get()
            ->take(4);

        /* comments */
        /*  $comments = Comment::where('news_id', $news->id)->orderByDesc('created_at')->get(); */

        /* replies */
        /* $replies = Reply::whereIn('comment_id', $comments->pluck('id'))->orderByDesc('created_at')->get(); */

        $response['comments'] = Comment::where('news_id', $news->id)
            ->with(['replies' => function ($query) {
                $query->orderByDesc('created_at');
            }])
            ->orderByDesc('created_at')
            ->get();

        /* comments quantity */
        $response['qtdComments'] = $response['comments']->count();
        
        /* increment views */
        $news->incrementViews();

        /* menu economy */
        $blueEconomyId = Category::where('name', 'Economia Azul')->get()->first();
        $greenEconomyId = Category::where('name', 'Economia Verde')->get()->first();
        $mineralResourceId = Category::where('name', 'Recursos Minerais')->get()->first();
        $bankingSectorId = Category::where('name', 'Sector Bancario')->get()->first();
        $agribusinessId = Category::where('name', 'Agronegócio')->get()->first();

        $response['blueEconomyId'] = $blueEconomyId;
        $response['greenEconomyId'] = $greenEconomyId;
        $response['mineralResourceId'] = $mineralResourceId;
        $response['bankingSectorId'] = $bankingSectorId;
        $response['agribusinessId'] = $agribusinessId;

        $response['economyCategories'] = [
            'blueEconomy' => $blueEconomyId ?? null,
            'greenEconomyId' => $greenEconomyId ?? null,
            'mineralResourceId' => $mineralResourceId ?? null,
            'bankingSectorId' => $bankingSectorId ?? null,
            'agribusinessId' => $agribusinessId ?? null
        ];
        
        $response['blueEconomy'] = News::whereHas('category', function($query){
            $query->where('name', 'Economia Azul');
        })->with('category')->orderByDesc('updated_at')->get()->take(4);

        $response['greenEconomy'] = News::whereHas('category', function($query){
            $query->where('name', 'Economia Verde');
        })->with('category')->orderByDesc('updated_at')->get()->take(4);

        $response['mineralResource'] = News::whereHas('category', function($query){
            $query->where('name', 'Recursos Minerais');
        })->with('category')->orderByDesc('updated_at')->get()->take(4);

        $response['bankingSector'] = News::whereHas('category', function($query){
            $query->where('name', 'Sector Bancario');
        })->with('category')->orderByDesc('updated_at')->get()->take(4);
        
        $response['agribusiness'] = News::whereHas('category', function($query){
            $query->where('name', 'Agronegócio');
        })->with('category')->orderByDesc('updated_at')->get()->take(4);
        /*end menu economy */

         /* news per category percent */
        $response['nationalNewsQty'] = News::whereHas('category', function ($query) {
            $query->where('name', 'Nacional');
        })->count();
        $response['internationalNewsQty'] = News::whereHas('category', function ($query) {
            $query->where('name', 'Internacional');
        })->count();
        $response['businessNewsQty'] = News::whereHas('category', function ($query) {
            $query->where('name', 'Negócios');
        })->count();
        $response['TechnologyinnovationNewsQty'] = News::whereHas('category', function ($query) {
            $query->where('name', 'Tecnologia');
        })->count();
        $response['opinionsNewsQty'] = Video::count();

         /* news comments qty */
        $response['newsCommentsQty'] = Comment::with('news')->get();

        return view('site.detail.index', ['news' => $news] + $response);
    }

    public function comments(Request $request, News $news)
    {

        $request->validate([
            'comment' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
        ], [
            'comment.required' => 'O comentário é obrigatório.',
            'first_name.required' => 'O primeiro nome é obrigatório.',
            'last_name.required' => 'O sobrenome é obrigatório.',
            'email.required' => 'O email é obrigatório.',
            'email.email' => 'O email deve ser um endereço de email válido.',
        ]);

        Comment::create([
            'comment' => $request->comment,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'news_id' => $news->id,
        ]);

        return redirect()->back()->with('success', 'Comentário enviado com sucesso!');
    }

    public function reply(Request $request, Comment $comment)
    {

        $request->validate([
            'reply' => 'required|string',
        ], [
            'reply.required' => 'A resposta é obrigatória.',
        ]);

        Reply::create([
            'reply' => $request->reply,
            'comment_id' => $comment->id,
        ]);


        return redirect()->back()->with('success', 'Resposta enviada com sucesso!');
    }

}
