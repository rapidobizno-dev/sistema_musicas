<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\News;
use App\Models\Video;
use Illuminate\Http\Request;
use App\Models\Comments;
use App\Models\Rate;

class HomeController extends Controller
{
    public function index()
    {
        /* all news */
        $response['news'] = News::all();

        /* modal detach news */
        $response['modalDetachNews'] = News::where('detach', 'Destaque')->orderByDesc('updated_at')->get()->take(1);

        /* only carocel news */
        $response['newsCarocel'] = News::where('detach', 'Destaque')->orderByDesc('updated_at')->get()->take(4);

        /* 1 recent detach news */
        $response['recentNationalDetach'] = News::whereHas('category', function ($query) {
            $query->where('name', ['Nacional']);
        })->with('category')
            ->where('detach', 'Destaque')
            ->orderByDesc('updated_at')
            ->get()
            ->take(1);

        /* 2 recent national news */
        $response['recentNationalNews'] = News::whereHas('category', function ($query) {
            $query->where('name', ['Nacional']);
        })->with('category')
            ->orderByDesc('updated_at')
            ->get()
            ->take(2);

        /* 6 national news */
        $response['nationalNews'] = News::whereHas('category', function ($query) {
            $query->where('name', 'Nacional');
        })->orderByDesc('updated_at')->get()->take(6);

        /* 2 first national news */
        $response['nationalNews1'] = News::whereHas('category', function ($query) {
            $query->where('name', 'Nacional');
        })->with('category')->orderByDesc('updated_at')->get()->take(2);

        /* 2 national news order by title  */
        $response['nationalNews2'] = News::whereHas('category', function ($query) {
            $query->where('name', 'Nacional');
        })->with('category')->orderBy('title', 'desc')->get()->take(2);

        /* 2 oldest national news */
        $response['nationalNews3'] = News::whereHas('category', function ($query) {
            $query->where('name', 'Nacional');
        })->with('category')->orderBy('updated_at', 'asc')->get()->take(2);

        /* 4 international news */
        $response['internationalNews'] = News::whereHas('category', function ($query) {
            $query->where('name', 'Internacional');
        })->with('category')->orderByDesc('updated_at')->get()->take(4);

        /* first detach international news */
        $response['recentInternationalDetach'] = News::whereHas('category', function ($query) {
            $query->where('name', 'Internacional');
        })->with('category')
            ->where('detach', 'Destaque')
            ->orderByDesc('updated_at')
            ->get()
            ->take(1);

        /* 2 first international news */
        $response['recentInternationalNews'] = News::whereHas('category', function ($query) {
            $query->where('name', 'Internacional');
        })->with('category')
            ->orderByDesc('updated_at')
            ->get()
            ->take(2);

        /* 4 oldest international news */
        $response['internationalNews2'] = News::whereHas('category', function ($query) {
            $query->where('name', 'Internacional');
        })->with('category')->get()->take(4);

        /* 4 news of business category */
        $response['business'] = News::whereHas('category', function ($query) {
            $query->where('name', 'Negocios');
        })->with('category')->get()->take(4);

        /* 4 news of technology category */
        $response['technologyinnovation'] = News::whereHas('category', function ($query) {
            $query->where('name', 'Tecnologia');
        })->with('category')->get()->take(4);

        /* Detach opinion */
        $response['opinionDetach'] = Video::Where('detach', 'Destaque')->orderByDesc('updated_at')->get();

        /* Opinion */
        $response['opinion'] = Video::get()->take(4);
        
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

        /* news ranking footer */
        $response['newsRanking'] = News::mostViewed(8)->get();

        /* rate to conversor */
        $response['rate'] = Rate::get()->first();

        return view('site.home.index', $response);
    }
}
