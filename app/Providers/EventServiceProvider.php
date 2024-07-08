<?php

namespace App\Providers;

use App\Events\UserCreatedEvent;
use Illuminate\Support\ServiceProvider;
use App\Listeners\CreateUserTreeListener;
use App\Listeners\UpdateFinicalReportListener;
use Bavix\Wallet\Internal\Events\TransactionCreatedEvent;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    protected $listen = [
       

        UserCreatedEvent::class => [
            CreateUserTreeListener::class,
        ],

        TransactionCreatedEvent::class => [
            UpdateFinicalReportListener::class,
        ],
    ];
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
