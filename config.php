<?php

require_once('vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


//$publickey = $_ENV(WALLET_PUBLIC_KEY);
// $api_address = "https://sandbox.wallets.africa/bills/airtime/purchase";
$api_address = "https://sandbox.wallets.africa/bills/airtime/providers";

//$headers = [    'Authorization' => 'Bearer  'uvjqzm5xl6bw',    'Accept'        => 'application/json',];