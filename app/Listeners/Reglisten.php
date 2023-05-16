<?php

namespace App\Listeners;

use App\Events\Regevent;
use App\Mail\Regmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class Reglisten
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
     * @param  object  $event
     * @return void
     */
    public function handle(Regevent $event)
    {
     $data = [
     'name'=> $event->name,
     'email'=>$event->email,
     'verification_code'=> $event->verification_code
     ];
     Mail::to($event->email)->send(new Regmail($data));
    }
}
