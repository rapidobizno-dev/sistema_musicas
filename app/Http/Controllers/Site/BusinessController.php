<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Category;

class BusinessController extends Controller
{
    public function index(){

        $response['post1'] = News::whereHas('category', function($query){
            $query->where('name', 'Negocios');
        })->where('detach', 'Destaque')
        ->orderByDesc('updated_at')
        ->get()
        ->take(1);

        $post2 = News::whereHas('category', function($query){
            $query->where('name', 'Negocios');
        })->orderByDesc('updated_at')
        ->take(3)
        ->get();

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



        $response['post2'] = json_encode($post2);
        $response['recentNews'] = News::orderByDesc('updated_at')->get()->take(6);
        
        return view('site.business.index', $response);
    }

    /* public function lernMore(){
        $post2 = News::whereHas('category', function($query){
            $query->where('name', 'Negocios');
        })->orderByDesc('updated_at')->take(3)->get();

        return response()->json($post2);
    } */
}
