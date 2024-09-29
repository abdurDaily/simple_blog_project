<?php

namespace App\Providers;

use App\Models\Logo;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function ($view) {
            $notificationCount = User::where('status', 0)->count();
            $fetchSocialData =  Setting::select('id','social_name','social_link')
            ->where('social_link', '!=', null )
            ->get();
            $logo = Logo::first();

            $view->with([
                'notificationData' => $notificationCount,
                'fetchSocialData' => $fetchSocialData,
                'logo' => $logo,
            ]);
        });
    }
}

