<?php
$servername = "localhost";
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "crop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the form data
$date = $_POST['date'];
$name = $_POST['name'];
$crop = $_POST['crop'];
$problems = $_POST['problems'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO problem (date, name, crop, problems) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $date, $name, $crop, $problems);

// Execute the statement
if ($stmt->execute()) {
    echo "New record created successfully";
    header("location:feedback.php");
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
