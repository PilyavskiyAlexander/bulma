<?php

namespace App\Listeners;

use App\Events\EmailEvent;
use App\Mail\ClientRequest;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailEventListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  EmailEvent  $event
     * @return void
     */
    public function handle(EmailEvent $event)
    {
        \Log::info('Test');
        \Mail::to('pilyavskiy.a@gmail.com')->send(new ClientRequest($event->clientRequest));
    }
}
