<?php

namespace App\Listeners;

use App\Events\StatusEvent;
use App\Notifications\StatusNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class StatusListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(StatusEvent $event): void
    {
        //
        $event->user->notify(new StatusNotification($event->task));
    }
}
