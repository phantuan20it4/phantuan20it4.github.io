<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('752574569900-ndmo0vk5n7qqnsssn9k79h89es8e58ng.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('CtZjVv7Sxnl9LSOJkFc2IW7_');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/bansach/google_index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>
