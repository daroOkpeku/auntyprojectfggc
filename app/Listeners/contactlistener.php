<?php

namespace App\Listeners;

use App\Events\contactevent;
use App\Mail\contactmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class contactlistener
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
    public function handle(contactevent  $event)
    {
        // $request->name, $request->email, $request->comments
        $data = [
         'name'=>$event->name,
         'email'=>$event->email,
         'comments'=>$event->comments
        ];

        Mail::send("fggcowerrioga@yahoo.com ")->send(new contactmail($event->name,$event->email, $event->comments));
    }
}
