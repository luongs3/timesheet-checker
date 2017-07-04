<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use wataridori\ChatworkSDK\ChatworkRoom;
use wataridori\ChatworkSDK\ChatworkSDK;

class BoxUserController extends Controller
{
    public function index($roomId)
    {
        $room = new ChatworkRoom($roomId);
        $members = $room->getMembers();

        return $members; // $member in $members is not Array, so need to be converted $member->toArray()
    }

    public function getNameAllMembersInBox($roomId)
    {
        $room = new ChatworkRoom($roomId);
        $members = $room->getMembers();
        $names = [];

        foreach ($members as $member) {
            $names[] = $member->toArray()['name'];
        }

        return $names;
    }

}
