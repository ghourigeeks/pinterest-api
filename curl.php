<?php

$url            = 'https://api.pinterest.com/v5/oauth/token';

$client_id      = '1478633';

$client_secret  = '2e231912a9471b7d82b4b6e81a8ee1d51b34c10b';

$redirect_uri   = 'https://intern.geeksroot.net/';

$code           = '3229fcd2531611131a8de9797c4e9839dd42ef2e';

$ch             = curl_init();

curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_POST, TRUE);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(

'grant_type' => 'authorization_code',

'code' => $code,

'client_id' => $client_id,

'client_secret' => $client_secret,

'redirect_uri' => $redirect_uri

)));

$response = curl_exec($ch);

$err = curl_error($ch);

curl_close($ch);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}



?>