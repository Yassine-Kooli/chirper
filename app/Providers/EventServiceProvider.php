<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\ChirpCreated;
use App\Listeners\SendChirpCreatedNotifications;


class EventServiceProvider extends ServiceProvider
{
    
    protected $listen = [

        ChirpCreated::class => [
            SendChirpCreatedNotifications::class,
        ],

        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    
    public function boot(): void
    {
        //
    }

    
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
