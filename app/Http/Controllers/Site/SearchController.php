<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Category;
use App\Models\Comment;

class SearchController extends Controller
{
        /* search news */
    public function newsSeach(Request $request){

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

        /* news comments qty */
        $response['newsCommentsQty'] = Comment::with('news')->get();

        /* preparando a pesquisa */
        $query = $request->input('q');
        /* $response['query'] = $query; */
        $response['news'] = News::with(['category.typeCategory', 'tags'])
            ->where('status', 'published')
            ->where(function ($q1) use ($query) {
                $q1->where('title', 'like', "%{$query}%")
                    ->orWhereHas('category', function ($q2) use ($query) {
                        $q2->where('name', 'like', "%{$query}%");
                    })
                    ->orWhereHas('category.typeCategory', function ($q3) use ($query) {
                        $q3->where('name', 'like', "%{$query}%");
                    })
                    ->orWhereHas('tags', function ($q4) use ($query) {
                        $q4->where('name', 'like', "%{$query}%");
                    });
            })
            ->orderByDesc('id')
            ->paginate(5);

        return view('site.search.index', $response, compact('query'));
    }
}
