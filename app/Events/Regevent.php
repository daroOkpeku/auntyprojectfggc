<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class Regevent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
       public $name;
       public $email;
       public $verification_code;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($name, $email, $verification_code)
    {
       $this->name = $name;
       $this->email = $email;
       $this->verification_code = $verification_code;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
