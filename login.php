<?php
session_start();

$servername = "localhost";
$db_username = "id21606916_root";
$db_password = "Sameed12541*";
$dbname = "id21606916_webapp";

$conn = new mysqli($servername, $db_username, $db_password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username; // Set the session variable
        header("Location: upload.php");
        exit();
    } else {
        echo '<script>alert("Invalid username or password.");</script>';
    }
}

$conn->close();
?>
