<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{

    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    public function boot()
    {
        $this->registerPolicies();

        // Gate para admins
        Gate::define('isAdmin', function (User $user) {
            return $user->role === 'admin';
        });

        // Gate para editores
        Gate::define('isEditor', function (User $user) {
            return $user->role === 'editor';
        });

        // Gate para usuários comuns
        Gate::define('isUser', function (User $user) {
            return $user->role === 'user';
        });
    }
}
