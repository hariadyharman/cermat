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
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
         $this->registerPolicies();

    // Gate untuk role Guest
    Gate::define('guest', function ($user) {
        return $user->role === 'guest';
    });

    // Gate untuk role Peserta
    Gate::define('peserta', function ($user) {
        return $user->role === 'peserta';
    });

    // Gate untuk role Admin
    Gate::define('admin', function ($user) {
        return $user->role === 'admin';
    });
    // Gate untuk role Admin atau Peserta
        Gate::define('admin_or_peserta', fn($user) => in_array($user->role, ['admin','peserta']));
    }
}

