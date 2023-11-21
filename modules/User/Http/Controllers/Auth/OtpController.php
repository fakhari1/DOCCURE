<?php

namespace User\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use User\Http\Requests\OtpSendRequest;
use User\Models\User;

class OtpController extends Controller
{

    public function send(OtpSendRequest $request)
    {
        $apiKey = "wUEd3myV2-T7zeWdT_L9aFoKXG4CruGL5a5ZaTij3Y4=";

        $client = new \IPPanel\Client($apiKey);


        $messageId = $client->send(
            "+9810001",          // originator
            ["98{$request->mobile}"],    // recipients
            "ippanel is awesome",// message
            "description"        // is logged
        );

        dd($messageId);
    }

    public function get()
    {

    }
}
