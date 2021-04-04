<?php

require 'vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_51IVVw4Ir0OCLVikdiQfkrf1pkESj1JbHPzUIvFFaScbNztIuqpAXhWp1xaOVH1EhN7tWrS1UZZwFIySQLFxy7dfO00d2HRW24Z');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost/keshavmuzik';

$checkout_session = \Stripe\Checkout\Session::create([
  'payment_method_types' => ['card'],
  'line_items' => [[
    'price_data' => [
      'currency' => 'inr',
      'unit_amount' =>2000,
      'product_data' => [
        'name' => 'Prime Muzik subscription',
        'images' => ["https://i.imgur.com/EHyR2nP.png"],
      ],
    ],

  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);

echo json_encode(['id' => $checkout_session->id]);