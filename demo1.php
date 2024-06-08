<?php
session_start();

// In a real-world scenario, you should use a more secure method for authentication
$admin_password = "admin123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'];
    if ($password === $admin_password) {
        $_SESSION['admin'] = true;
        header("Location: dashboard.html"); // Redirect to admin page after successful login
    } else {
        echo "<h2>Invalid password</h2>";
    }
}
?>
