<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;
use App\Models\Comment;

class EconomyController extends Controller
{
    public function index($id)
    {

        /* headers */
        $category = Category::where('id', $id)->get()->first();

        /* Como não se salva acentos, essa é pra colocar acento nos nomes das categorias */
        if ($category->name == 'Agronegocio') {
            $category->name = 'Agronegócio';
            $response['category'] = $category;
        } elseif ($category->name == 'Sector Bancario') {
            $category->name = 'Sector Bancário';
            $response['category'] = $category;
        } else {
            $response['category'] = $category;
        }
        /* all news */
        $response['news'] = News::where('category_id', $id)
            ->with('category')
            ->orderByDesc('updated_at')
            ->paginate(4);

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

        $response['blueEconomy'] = News::whereHas('category', function ($query) {
            $query->where('name', 'Economia Azul');
        })->with('category')->orderByDesc('updated_at')->get()->take(4);

        $response['greenEconomy'] = News::whereHas('category', function ($query) {
            $query->where('name', 'Economia Verde');
        })->with('category')->orderByDesc('updated_at')->get()->take(4);

        $response['mineralResource'] = News::whereHas('category', function ($query) {
            $query->where('name', 'Recursos Minerais');
        })->with('category')->orderByDesc('updated_at')->get()->take(4);

        $response['bankingSector'] = News::whereHas('category', function ($query) {
            $query->where('name', 'Sector Bancario');
        })->with('category')->orderByDesc('updated_at')->get()->take(4);

        $response['agribusiness'] = News::whereHas('category', function ($query) {
            $query->where('name', 'Agronegócio');
        })->with('category')->orderByDesc('updated_at')->get()->take(4);
        /*end menu economy */

        /* news comments qty */
        $response['newsCommentsQty'] = Comment::with('news')->get();

        return view('site.economy.index', $response);
    }
}
