<?php
session_start();
$value = $_POST['money'];
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_05c8865894819a66be496c69228",
                  "X-Auth-Token:test_b6ccff61a6d12056e395e9bbf39"));
$payload = Array(
    'purpose' => 'payment',
    'amount' => $value,
    'phone' => '9999999999',
    'buyer_name' => 'Rakesh',
    'redirect_url' => 'http://localhost/curl/redirect.php',
    'send_email' => true,
    'send_sms' => true,
    'email' => 'taskrakesh591@gmail.com',
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 
$response = json_decode($response);
// echo "<pre>";
// print_r($response);
$_SESSION['UID'] = $response->payment_request->id;
header('location:'.$response->payment_request->longurl);
die();
?>