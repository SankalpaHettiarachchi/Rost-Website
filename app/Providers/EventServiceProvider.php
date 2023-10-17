<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events;
use App\Listeners;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        'App\Events\Admin_accept' => [
            'App\Listeners\SendAdminAcceptEmail'
        ],
        'App\Events\Admin_remove' => [
            'App\Listeners\AdminRemoveEmail'
        ],
        'App\Events\Student_Registerd' => [
            'App\Listeners\Student_Registerd_Email'
        ],
        'App\Events\Student_Removed' => [
            'App\Listeners\Student_Removed_Email'
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
