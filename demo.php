<?php
session_start();
require_once('connect.php');

if (isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
    // Admin is logged in, proceed with submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $info = $_POST['info'];
        $sql = "INSERT INTO information (info) VALUES (?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $info);
        if ($stmt->execute()) {
            echo "<h2>Information Submitted Successfully</h2>";
        } else {
            echo "<h2>Error submitting information</h2>";
        }
        $stmt->close();
    }
} else {
    echo "<h2>Access Denied. Only admin can submit information.</h2>";
}
?>
