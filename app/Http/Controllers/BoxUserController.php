<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use wataridori\ChatworkSDK\ChatworkRoom;
use wataridori\ChatworkSDK\ChatworkSDK;

class BoxUserController extends Controller
{
    public function index()
    {
//        $me = $this->api->me();
        $roomId = '61611115';
        $room = new ChatworkRoom($roomId);
        $members = $room->getMembers();
        $room->sendMessageToAll('Test');
        echo "<pre>";
        print_r($members);
        echo "<br>";
        die();
        return $me;
    }
}
