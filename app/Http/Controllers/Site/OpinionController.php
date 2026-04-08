<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Category;
use App\Models\News;

class OpinionController extends Controller
{
    public function index(){

        $response['videos'] = Video::paginate(6);

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


        return view('site.opinion.index', $response);
    }
}
