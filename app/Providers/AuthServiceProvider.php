<?php

namespace App\Providers;

use App\Role;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $user = \Auth::user();

        
        // Auth gates for: User management
        Gate::define('user_management_access', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Roles
        Gate::define('role_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('role_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Users
        Gate::define('user_access', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_view', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('user_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

        // Auth gates for: Countries
        Gate::define('country_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('country_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('country_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('country_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('country_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Customers
        Gate::define('customer_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('customer_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('customer_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('customer_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('customer_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Rooms
        Gate::define('room_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('room_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('room_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('room_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('room_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Bookings
        Gate::define('booking_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('booking_create', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('booking_edit', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('booking_view', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        Gate::define('booking_delete', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });

        // Auth gates for: Find room
        Gate::define('find_room_access', function ($user) {
            return in_array($user->role_id, [1, 2]);
        });
        // Auth gates for: add category
        Gate::define('category_create', function ($user) {
            return in_array($user->role_id, [1]);
        });
        // Auth gates for: add category
        Gate::define('category_edit', function ($user) {
            return in_array($user->role_id, [1]);
        });
        Gate::define('category_delete', function ($user) {
            return in_array($user->role_id, [1]);
        });

    }
}
