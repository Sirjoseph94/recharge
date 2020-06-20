<?php

require_once('config.php');
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $api_address,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "chunked",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer uvjqzm5xl6bw"
  ),
));

$response = curl_exec($curl);
// echo ($response);

curl_close($curl);

