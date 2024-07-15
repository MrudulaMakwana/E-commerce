<?php
require_once 'vendor/autoload.php';

$client = new Google_Client();
$client->setClientId('clitid');
$client->setClientSecret('clientsecret');
$client->setRedirectUri('uri');
$client->addScope('email');
$client->addScope('profile');
?>
