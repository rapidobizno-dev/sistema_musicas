<?php

use App\Http\Controllers\Site\BusinessController;
use App\Http\Controllers\Site\DetailController;
use App\Http\Controllers\Site\FinancialmarketController;
use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\NacionalController;
use App\Http\Controllers\Site\InternationalController;
use App\Http\Controllers\Site\OpinionController;
use App\Http\Controllers\Site\TechnologyinnovationController;
use App\Http\Controllers\Site\EconomyController;
use App\Http\Controllers\Site\SearchController;
use App\Models\News;

/*-------------------------------------------------------
                    Site Routes
-------------------------------------------------------*/

Route::redirect('/', 'site/home');
Route::get('site/home', [HomeController::class, 'index'])->name('site.home');
Route::get('site/national', [NacionalController::class, 'index'])->name('site.national');
Route::get('site/international', [InternationalController::class, 'index'])->name('site.international');
Route::get('site/finacialmarket', [FinancialmarketController::class, 'index'])->name('site.financialmarket');
Route::get('site/detalhes/{news:slug}', [DetailController::class, 'index'])->name('site.details');
Route::get('site/business/', [BusinessController::class, 'index'])->name('site.business');
Route::get('site/opinion', [OpinionController::class, 'index'])->name('site.opinion');
Route::get('site/technologyinnovation', [TechnologyinnovationController::class, 'index'])->name('site.technologyinnovation');
Route::get('site/economy/{id}', [EconomyController::class, 'index'])->name('site.economy');

/* search Route */
Route::get('site/search', [SearchController::class, 'newsSeach'])->name('site.search');

/* Lern-More */
/* Route::get('site/lernMore', [BusinessController::class, 'lernMore'])->name('lern.more'); */

/* rotas para as tabelas de mercado economico */
Route::get('table', function () {
    return view('extra._financialMarket.index');
})->name('site.table');
Route::get('ordersbook', function () {
    return view('extra._orderBooks.index');
})->name('site.ordersbook');
Route::get('taxas', function () {
    return view('extra._rate.index');
})->name('site.taxas');
Route::get('midleprice', function () {
    return view('extra._middlePrice.index');
})->name('site.midleprice');
Route::get('dashboard', function () {
    return view('extra._dashboard.index');
})->name('site.dashboard');
/* end rotas para as tabelas de mercado economico */

/* commets route */
Route::post('site/details/{news}/comments', [DetailController::class, 'comments'])->name('site.comments');

/* reply route */
Route::post('site/details/comments/{comment}/reply', [DetailController::class, 'reply'])->name('site.reply');

