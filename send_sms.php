<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;


try {
$TO_NUMBER = $_POST["to_number"];
$FROM_NUMBER = $_POST["from_number"];
$SMS = $_POST["message"];
// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC01041e1b099256e23ddda67515257feb';
$auth_token = '55a0c45c90b21018f6e12fc23ea253ec';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]

// A Twilio number you own with SMS capabilities
$twilio_number = $FROM_NUMBER;
//DevTrx
$client = new Client($account_sid, $auth_token);
$message = $client->messages->create(
    // Where to send a text message (your cell phone?)
    $TO_NUMBER,
    array(
        'from' => $twilio_number,
        'body' => 'its jasbin'
    )
);

	echo "Message Sent";

} catch (Exception $e) {
    echo $e->getMessage();
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}