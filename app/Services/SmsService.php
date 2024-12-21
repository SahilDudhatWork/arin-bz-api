<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class SmsService
{
    /**
     * Send SMS using the Bulk SMS API.
     *
     * @param string $message
     * @param string $phoneNumber
     * @return mixed
     */
    public function sendSms($message, $phoneNumber)
    {
        $url = 'http://sms.bulksmsind.in/v2/sendSMS';

        $response = Http::get($url, [
            'username'   => env('SMS_USERNAME'),
            'message'    => $message,
            'sendername' => env('SMS_SENDER_NAME'),
            'smstype'    => env('SMS_TYPE'),
            'numbers'    => $phoneNumber,
            'apikey'     => env('SMS_API_KEY'),
            'peid'       => env('SMS_PE_ID'),
            'templateid' => env('SMS_TEMPLATE_ID'),
        ]);

        // You can return the response or handle errors here
        return $response->json();
    }
}
