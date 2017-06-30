<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use wataridori\ChatworkSDK\ChatworkApi;
use wataridori\ChatworkSDK\ChatworkSDK;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $api;
    public $hoiApi = 'f783d95865c5ac562c988223ca5049c7';

    public function __construct(ChatworkApi $api)
    {
        ChatworkSDK::setApiKey('9053b23bfc30ac0f9b067c3eaab08b8a');
        ChatworkSDK::setSslVerificationMode(false);
        $this->api = $api;
    }
}
