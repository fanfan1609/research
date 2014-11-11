<?php
$subscribe_url = "https://us9.api.mailchimp.com/2.0/lists/subscribe";

$email_struct = new StdClass();

$email_struct->email = 'vqdat169@gmail.com';

$parameters = array(
    'apikey' => '1b3fb79f58bad5e55821179c05bb552f-us9',
    'id' => '0508e2dc53', // 0508e2dc53
    'email' => $email_struct,
    'double_optin' => false,
    'send_welcome' => true
);

$curl = curl_init($subscribe_url);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($parameters));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($curl);

var_dump(json_decode($response));