<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crop";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from POST request
$id = $_POST['id'];
$status = $_POST['status'];

// Update status in the database
$sql = "UPDATE adminapproved SET status='$status' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Status updated successfully";
} else {
    echo "Error updating status: " . $conn->error;
}

$conn->close();
?>

