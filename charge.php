<?php
require_once('vendor/autoload.php');

\Stripe\Stripe::setApiKey('sk_test_akewmWD8mhBHYHz4jrZlrn2b00ni5LLf67');

$data = filter_var_array($_POST, FILTER_SANITIZE_STRING );

$email = $data['email'];
$first_name = $data['first_name'];
$last_name = $data['last_name'];
$token = $_POST['stripeToken'];

echo $email, $first_name, $last_name, $token;

$customer = \Stripe\Customer::create([
  'email' => $email,
  'source' => $token
  ]);

$charge = \Stripe\Charge::create([
  'amount' => 2000,
  'currency' => 'eur',
  'description' => 'test',
  'customer' => $customer
  ]);
