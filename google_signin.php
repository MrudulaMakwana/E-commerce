<?php
require_once 'vendor/autoload.php';

$client = new Google_Client(['client_id' => 'YOUR_GOOGLE_CLIENT_ID']);
$id_token = json_decode(file_get_contents('php://input'), true)['id_token'];

try {
    $payload = $client->verifyIdToken($id_token);
    if ($payload) {
        $userid = $payload['sub'];
        $email = $payload['email'];
        $name = $payload['name'];
        
        // Connect to the database
        $servername = "localhost";
        $username = "root"; // Use your database username
        $password = ""; // Use your database password
        $dbname = "your_database"; // Use your database name

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Check if the user already exists
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows == 0) {
            // Insert new user
            $sql = "INSERT INTO users (name, email, google_id) VALUES ('$name', '$email', '$userid')";
            if ($conn->query($sql) === TRUE) {
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false, 'message' => 'Database error']);
            }
        } else {
            echo json_encode(['success' => true]);
        }
        
        $conn->close();
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid ID token']);
    }
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
?>
