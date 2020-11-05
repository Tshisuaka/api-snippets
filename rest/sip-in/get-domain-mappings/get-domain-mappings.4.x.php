<?php
// Get the PHP helper library from https://twilio.com/docs/libraries/php
require_once('/path/to/twilio-php/Services/Twilio.php'); // Loads the library

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX"; 
$token = "your_auth_token"; 
$client = new Services_Twilio($sid, $token);

// Loop over the list of ip_access_control_list_mappings and echo a property for each one
foreach ($client->account->sip->domains->get('SD32a3c49700934481addd5ce1659f04d2')->ip_access_control_list_mappings as $ip_access_control_list_mapping) {
    echo $ip_access_control_list_mapping->friendly_name;
}