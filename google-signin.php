<?php
require_once 'google-config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_token = $_POST['idtoken'];

    try {
        $payload = $client->verifyIdToken($id_token);
        if ($payload) {
            $userid = $payload['sub'];
            $email = $payload['email'];
            $name = $payload['name'];

            // Connect to MySQL database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "e_db";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Check if user exists
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = $conn->query($sql);

            if ($result->num_rows == 0) {
                // Insert new user
                $sql = "INSERT INTO users (google_id, name, email) VALUES ('$userid', '$name', '$email')";
                $conn->query($sql);
            }

            // Store user data in session
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $name;

            echo "Welcome, " . htmlspecialchars($name);
        } else {
            echo "Invalid ID token";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Invalid request method";
}
?>
