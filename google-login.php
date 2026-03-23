<?php

require 'vendor/autoload.php';

$client = new Google_Client();

$client->setClientId("185280678671-sv0cqeov4m505v4748p8p0gi6vrsncig.apps.googleusercontent.com");
$client->setClientSecret("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");
$client->setRedirectUri("http://localhost/google-login.php");

$client->addScope("email");
$client->addScope("profile");

if (!isset($_GET['code'])) {

    $login_url = $client->createAuthUrl();
    header('Location: ' . $login_url);
    exit();

} else {

    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

    $client->setAccessToken($token['access_token']);

    $google_service = new Google_Service_Oauth2($client);

    $data = $google_service->userinfo->get();

    $name = $data['name'];
    $email = $data['email'];

    echo "<h2>Login Successful</h2>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email;

}
?>