<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {
        View::composer('site.layout.header', function ($view) {
            $headerNews = News::where('detach', 'destaque')
                ->orderBy('created_at', 'desc')
                ->take(5)
                ->get();

            $view->with('headerNews', $headerNews);
        });
        Carbon::setLocale('pt_BR');
    }
}
