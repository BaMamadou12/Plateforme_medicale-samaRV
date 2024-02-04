<?php

namespace App\Providers;

use App\Models\Admin;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

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
        $this->registerPolicies();

        Gate::define('admin', function ($user) {
            return Admin::where('user_id', $user->id)->exists();
        });
    }

    /**
     * Register the application's policies.
     *
     * @return void
     */

}
