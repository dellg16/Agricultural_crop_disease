<?php
include('connect.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Crop Disease Feedback Form</title>
<style>
  body {
    background-image: url('greenery.jpg');
    background-repeat: no-repeat;
    background-size: 2000px;
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
  }
  .nav{
  background-color: whitesmoke;
  box-shadow: 2px 4px 4px grey ;
  position: relative;
  top:2px;
}
#btn{
  background-color: blue;
  color:white;
  font-size: 22px;
  position: relative;
  top: -70px;
  left:1300px;
  border-radius: 20px;
  border: none;
}
  
  form {
    max-width: 600px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
  }
  
  h2 {
    text-align: center;
    color: #333;
  }
  
  label {
    font-weight: bold;
  }
  
  input[type="text"],
  textarea {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  
  textarea {
    height: 100px;
  }
  
  button[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
  }
  
  input[type="submit"]:hover {
    background-color: #45a049;
  }
  a{
    text-decoration: none;
    color:black;
  }
  h2{
    font-size: 40px;
    color:red;
  }
</style>
</head>
<body>
<div class="nav">
<img src="plantix4.png"style="height:100px; width:200px;">
</div>
<h2>Crop Disease Feedback Form</h2>

<form action="feedback.php" method="post">
  <div>
    <label for="crop">Crop Name:</label><br>
    <input type="text" id="crop" name="crop" required>
  </div>
  <div>
    <label for="disease">Disease:</label><br>
    <input type="text" id="disease" name="disease" required>
  </div>
  <div>
    <label for="location">Location:</label><br>
    <input type="text" id="location" name="location" required>
  </div>
  <div>
    <label for="description">Description:</label><br>
    <textarea id="description" name="description" rows="4" cols="50" required></textarea>
  </div>
  <div>
    <button type="submit">Submit</button></a>
  </div>
</form>

</body>
</html>
<?php 
$server="localhost";
$user="root";
$pass="";
$db="crop";
$con=mysqli_connect($server,$user,$pass,$db);
if($con)
{
  #echo "connnection okkk!!";
       

}else
{
  
}
$crop=$_POST['crop'];
$disease=$_POST['disease'];
$Location=$_POST['location'];
$description=$_POST['description'];
$in="insert into feedback values(0,'$crop','$disease','$Location','$description')";
$iq=mysqli_query($con,$in);
if ($iq) {
  echo "Thanks for feedback!!";
 echo  "<a href='feedback1.php'>click me</a>";
 
}
else{
  echo "Invalid";
}
?>