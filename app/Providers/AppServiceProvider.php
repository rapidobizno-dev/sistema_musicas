<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Support\Facades\App;
Use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{

    public function register()
    {
        //
    }

    public function boot()
    {
        view::composer('layouts._admin.header', function ($view) {
            /* notifications */
            $authUser = auth()->user();
            $notifications = collect();

            if ($authUser) {
                $notifications = $authUser->unreadNotifications()
                    ->latest()
                    ->limit(5)
                    ->get();
            }

            $view->with('notifications', $notifications);
        });
        Carbon::setLocale('pt_BR');
    }
}
