<?php
require 'vendor/autoload.php';

use Google\Client as Google_Client;

$client = new Google_Client();
$client->setClientId('YOUR_GOOGLE_CLIENT_ID');

$post_data = file_get_contents('php://input');
$request = json_decode($post_data);

$token = $request->credential;

$payload = $client->verifyIdToken($token);

if ($payload) {
    $userid = $payload['sub'];
    $email = $payload['email'];
    $name = $payload['name'];

    // Connect to your database
    $mysqli = new mysqli("localhost", "username", "password", "database");

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Check if user already exists
    $stmt = $mysqli->prepare("SELECT id FROM users WHERE google_id = ?");
    $stmt->bind_param("s", $userid);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 0) {
        // User does not exist, insert into database
        $stmt = $mysqli->prepare("INSERT INTO users (google_id, name, email) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $userid, $name, $email);
        $stmt->execute();
    }

    // Start a session and set user data
    session_start();
    $_SESSION['userid'] = $userid;
    $_SESSION['email'] = $email;
    $_SESSION['name'] = $name;

    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}
?>
