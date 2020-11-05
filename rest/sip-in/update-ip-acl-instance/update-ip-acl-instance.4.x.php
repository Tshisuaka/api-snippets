<?php
// Get the PHP helper library from https://twilio.com/docs/libraries/php
require_once('/path/to/twilio-php/Services/Twilio.php'); // Loads the library

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX"; 
$token = "your_auth_token"; 
$client = new Services_Twilio($sid, $token);

// Get an object from its sid. If you do not have a sid,
// check out the list resource examples on this page
$ip_access_control_list = $client->account->sip->ip_access_control_lists->get("AL32a3c49700934481addd5ce1659f04d2");
$ip_access_control_list->update(array(
        "FriendlyName" => "Avons Lieutenants"
    ));
echo $ip_access_control_list->friendly_name;