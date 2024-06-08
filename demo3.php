<?php
session_start();
require_once('connect.php');

// Retrieve approved information from the database
$sql = "SELECT * FROM information WHERE approve = TRUE";
$result = $con->query($sql);

$approved_info = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $approved_info[] = $row['info'];
    }
}

$con->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Approved Information</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Approved Information</h2>
        <?php foreach ($approved_info as $info) { ?>
            <p><?php echo $info; ?></p>
        <?php } ?>
    </div>
</body>
</html>
