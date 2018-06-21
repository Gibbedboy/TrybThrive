<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$account_sid = "AC23779123a19c9a3cccede0e07d2de0f4";
$auth_token = "5fe14a90eb58ebb9fdaf462af116c56f";
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]

// A Twilio number you own with SMS capabilities
$twilio_number = "+14063004261";

$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    '+14066008437',
    array(
        'from' => $twilio_number,
        'body' => 'This is a test message.'
    )
);