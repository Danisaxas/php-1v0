<?php
// send_sms.php

require_once 'vendor/autoload.php';

use Twilio\Rest\Client;

function sendSMS($phoneNumber, $verificationCode) {
    $sid = $_ENV['TWILIO_ACCOUNT_SID'];
    $token = $_ENV['TWILIO_AUTH_TOKEN'];
    $from = $_ENV['TWILIO_PHONE_NUMBER'];

    $client = new Client($sid, $token);

    try {
        $client->messages->create(
            $phoneNumber,
            [
                'from' => $from,
                'body' => "Tu código de verificación es: $verificationCode"
            ]
        );
    } catch (Exception $e) {
        echo 'Error al enviar SMS: ' . $e->getMessage();
    }
}
?>
