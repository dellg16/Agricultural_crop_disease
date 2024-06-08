<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Farmer Issues by Date</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body
        {
             background-image: url('greenery.jpg');
          background-repeat: no-repeat;
          background-size: 2000px;
         font-family: Arial, sans-serif;
         background-color: #f4f4f4;
         margin: 0;
         padding: 0;
        }
    form{
        position: relative;
        left:700px;
        box-shadow: 2px 4px 4px 4px gray;
        height:200px;
        width:400px;
    }
    .nav{
  background-color: whitesmoke;
  box-shadow: 2px 4px 4px grey ;
  position: relative;
  top:2px;
}
.close {
            position:relative;
            top: 7px;
            right: 17px;
            cursor: pointer;
        }
        .back-button {
            position: fixed;
            top: 20px;
            left: 1650px;
            padding: 20px;
            width:10px;
            color:white;
            background:#333;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    h2{
        text-align: center;
        position: relative;
        top:18px;
    }
    label{
        font-size: 20px;
        margin: 10px;
    }
    input{
        width:70%;
        padding: 7px;
    }
    input[type="submit"]{
        margin: 10px;
        position: relative;
        left:70px;
    }
    table{
        width:70%;
        position: relative;
        left:300px;
        font-size: 20px;
        background-color: white;
    }
    td{
        text-align: center;
    }
    </style>
</head>
<body>
    <div class="nav">
<img src="plantix4.png"style="height:100px; width:200px;">
 <button class="back-button" onclick="goBack()"><i class="fa fa-close" style="font-size:23px"></i></button>
</div>
    <form action="datereport.php" method="post">
        <h2>Search Farmer Issues by Date</h2>
        <br><br>
        <label for="search_date">Date:</label>
        <input type="date" id="search_date" name="search_date" required><br><br>
        <input type="submit" value="Search">
    </form>
</body>
</html>
<script>
  function goBack() {
           window.location.replace("Admin.php");
        }
    </script>
<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "crop";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $search_date = $_POST['search_date'];

    $stmt = $conn->prepare("SELECT date, name, crop, problems FROM problem WHERE date = ?");
    $stmt->bind_param("s", $search_date);

    $stmt->execute();

    $stmt->bind_result($date, $name, $crop, $problems);

    echo "<h2>Records for Date: $search_date</h2>";
    
    echo "<table border=''>
            <tr>
                <th>Date</th>
                <th>Name</th>
                <th>Crop</th>
                <th>Problems</th>
            </tr>";

    while ($stmt->fetch()) {
        echo "<tr>
                <td>$date</td>
                <td>$name</td>
                <td>$crop</td>
                <td>$problems</td>
              </tr>";
    }
    echo "</table>";

    $stmt->close();
}

$conn->close();
?>
