<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define(
            'user',
            function ($user) {
                if ($user->role == 'user') {
                    return true;
                }

                return false;
            }
        );

        Gate::define(
            'junior',
            function ($user) {
                if ($user->role == 'junior') {
                    return true;
                }

                return false;
            }
        );

        Gate::define(
            'senior',
            function ($user) {
                if ($user->role == 'senior') {
                    return true;
                }

                return false;
            }
        );
    }
}
