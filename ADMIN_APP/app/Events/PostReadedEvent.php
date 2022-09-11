<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;

use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PostReadedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    protected $_data;
    public function __construct($data)
    {
        $this->_data=$data;
    }

    public function getData(){
        return $this->_data;
    }

}
