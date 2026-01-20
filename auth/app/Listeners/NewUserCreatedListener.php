<?php

namespace App\Listeners;

use App\Events\NewUserCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NewUserCreatedListener
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
    public function handle(NewUserCreated $event)
    {
        if ($event->value) {
            echo "User Registered Successfully 🎊";
            die;
        } else {
            echo "Register Fail";
        }
    }
}
