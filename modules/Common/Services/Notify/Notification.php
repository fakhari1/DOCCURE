<?php

namespace Common\Services\Notify;

use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use IPPanel\Errors\ResponseCodes;
use User\Models\User;
use IPPanel\Client;
use IPPanel\Errors\Error;
use IPPanel\Errors\HttpException;

class Notification
{
    public function sendEmail(User $user, Mailable $mailable)
    {
        Mail::to($user)->send($mailable);
    }

    public function sendSms(User $user, string $text)
    {
        $client = new Client(get_sms_api_key());

        $phoneNumber = "98$user->mobile";


        try{
            $messageId = $client->send(
                "+9810001",          // originator
                [$phoneNumber],    // recipients
                "ippanel is awesome",// message
                "description"        // is logged
            );

        } catch (Error $e) { // ippanel error
            var_dump($e->unwrap()); // get real content of error
            echo $e->getCode();

            // error codes checking
            if ($e->code() == ResponseCodes::ErrUnprocessableEntity) {
                echo "Unprocessable entity";
            }
        } catch (HttpException $e) { // http error
            var_dump($e->getMessage()); // get stringified error
            echo $e->getCode();
        }

//        $message = $client->getMessage($messageId);
//
//        echo $message->state;   // get message status
//        echo $message->cost;     // get message cost
//        echo $message->returnCost;
    }


}
