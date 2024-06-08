<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>Crop Problems Form</title>
<style>
  body {
    background-image: url('greenery.jpg');
    background-repeat: no-repeat;
    background-size: 2000px;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
   .nav{
  background-color: whitesmoke;
  box-shadow: 2px 4px 4px grey ;
  position: relative;
  top:2px;
}
#date{
   width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  
}
#btn{
  background-color: blue;
  color:white;
  font-size: 22px;
  position: relative;
  top: -70px;
  left:1200px;
  border-radius: 20px;
  border: none;
}
#btn2{
  background-color:red;
  color:white;
  font-size: 22px;
  position: relative;
  top: -70px;
  left:1500px;
}
a{
  text-decoration: none;
  color: white;
}

  
  form {
    max-width: 400px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 2px 4px 4px grey;
  }
  
  h2 {
    text-align: center;
    color:red;
    font-size: 42px;
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
  
  input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
  input[type="submit"]:hover {
    background-color: #45a049;
  }
  h2{
    color: red;
    font-size: 42px;
  }
</style
</head>
<body>
<div class="nav">
<img src="plantix4.png"style="height:100px; width:200px;">
</div>
<button type="submit" id="btn2"><a href="feedback.php">Logout</button></a>

<h2>Crop Problems Form</h2>

<form action="prob.php" method="post">
  <div>
    <label for="date">Date:</label><br>
    <input type="date" id="date" name="date" required>
  </div>
  <div>
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required>
  </div>
  <div>
    <label for="crop">Crop:</label><br>
    <input type="text" id="crop" name="crop" required>
  </div>
  <div>
    <label for="problems">Problems:</label><br>
    <textarea id="problems" name="problems" rows="4" cols="50" required></textarea>
  </div>
  <div>
    <input type="submit" value="Submit">
  </div>
</form>

</body>
</html>
