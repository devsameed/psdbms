<?php

$servername = "localhost";
$db_username = "id21606916_root";
$db_password = "Sameed12541*";
$dbname = "id21606916_webapp";


$conn = new mysqli($servername, $db_username, $db_password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sqlAlter = "ALTER TABLE upload MODIFY COLUMN filename VARCHAR(255)";
$conn->query($sqlAlter);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name1 = $_POST['memb1_name'];
    $id1 = $_POST['memb1_id'];
    $name2 = $_POST['memb2_name'];
    $id2 = $_POST['memb2_id'];
    $name3 = $_POST['memb3_name'];
    $id3 = $_POST['memb3_id'];
    $name4 = $_POST['memb4_name'];
    $id4 = $_POST['memb4_id'];
    $projDescription = $_POST['projDecription'];

    // File upload handling
    $target_dir = "uploads/"; // Specify your target directory
    $target_file = $target_dir . basename($_FILES["projFile"]["name"]);

    if (move_uploaded_file($_FILES["projFile"]["tmp_name"], $target_file)) {
        // File uploaded successfully, insert into database
        $sql = "INSERT INTO upload (name1, id1, name2, id2, name3, id3, name4, id4, pd, filename) VALUES ('$name1', '$id1', '$name2', '$id2', '$name3', '$id3', '$name4', '$id4', '$projDescription', '$target_file')";

        if ($conn->query($sql) === TRUE) {
            echo "File uploaded and record inserted successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error uploading the file.";
    }
}

// Close the database connection
$conn->close();
?>
