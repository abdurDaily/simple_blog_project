<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void {}

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        view()->composer('Backend.Layout.Layout', function ($view) {
            $users = User::select('name','email')->latest()->get()->take(3);
            $view->with([
                'users' => $users,
            ]);
        });
    }
}
