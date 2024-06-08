<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.container {
  max-width: 600px;
  height: 490px;
  margin: 0 auto;
  padding: 20px;
  border:2px solid gray;
  box-shadow: 2px 4px 4px black;
  transform: translate(20px,30px);
}
header {
    background-color: #333;
    color: #fff;
    padding: 15px;
    text-align: center;
}

label {
  font-weight: bold;
  position: relative;
  top:-30px;
}

input, textarea {
  width: 80%;
  padding: 10px;
  margin-bottom: 7px;
  position: relative;
  top:-30px;
  left:50px;
}

button {
  padding: 10px 30px;
  position: relative;
  top:-30px;
  left:150px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  width: 50%;
}

button:hover {
  background-color: #0056b3;
}
h2{
  text-align: center;
  position: relative;
  top:px;
  font-size: 32px;
}
#mess{
  position:relative;
  top:-100px;
}
.close {
            position: absolute;
            top: 10px;
            right: 4px;
            cursor: pointer;
        }
        .back-button {
            position: fixed;
            top: 20px;
            left: 1600px;
            padding: 20px;
            width:10px;
            color:white;
            background:#333;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
footer {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    text-align: center;
    position: relative;
    top:50px;
}
</style>
</head>
<body><header>
            <h1>Contact US</h1>
            <button class="back-button" onclick="goBack()"><i class="fa fa-close" style="font-size:23px"></i></button>
        </header>
<div class="container">
   
  <h2>Contact Us</h2>
  <br><br>
  <form action="contact.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <label id="mess">Message:</label>
    <textarea id="message" name="message" rows="4" required></textarea><br><br>
    <label for="date">Date:</label>
    <input type="date" id="date" name="date" required><br><br>
    <button type="submit">Submit</button>
  </form>
</div>
</body>
</html>
<footer>
            <p>&copy; 2024 Agriculture Department</p>
        </footer>
        <script>
  function goBack() {
           window.location.replace("index.php");
        }
    </script>
<?php
error_reporting(0);
include("connect.php");
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $date=$_POST['date'];
    
    $in="INSERT INTO contact VALUES (0,'$name','$email','$message', '$date')";
    $data=mysqli_query($con,$in);
    if($data)
    {
      echo "date saved";
    }
    else
    {
      echo "Please try again to save your";
    }
    
?>

