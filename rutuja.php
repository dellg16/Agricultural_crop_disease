<?php
session_start();

// Replace these with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the admin table
$username = $_POST['username'];
$password = $_POST['password'];
$sql_admin = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result_admin = $conn->query($sql_admin);

// Fetch data from the agronomist table if not found in the admin table
if ($result_admin->num_rows == 0) {
    $sql_agronomist = "SELECT * FROM agrimaster WHERE name='$username' AND password='$password'";
    $result_agronomist = $conn->query($sql_agronomist);

    if ($result_agronomist->num_rows > 0) {
        // Login successful for agronomist, set session variables and redirect to dashboard
        $_SESSION['username'] = $username;
        $_SESSION['user_type'] = 'agronomist'; // You can use this later to distinguish between admin and agronomist
        header("Location: agriculture.php");
    } else {
        // Login failed, redirect back to login page
        header("Location: adlogin.php");
    }
} else {
    // Login successful for admin, set session variables and redirect to dashboard
    $_SESSION['username'] = $username;
    $_SESSION['user_type'] = 'admin'; // You can use this later to distinguish between admin and agronomist
    header("Location:datereport.php");
}

$conn->close();
?>
