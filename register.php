<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-image: url('greenery.jpg');
    background-repeat: no-repeat;
    background-size: 2000px;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .nav{
          position: relative;
          top:-280px;
          left:-350px;
          background-size: 100%;
  background-color: whitesmoke;
  box-shadow: 2px 4px 4px grey ;
}
#btn{
  background-color: blue;
  color:white;
  font-size: 22px;
  position: relative;
  top: -280px;
  left:800px;
  border-radius: 20px;
}
        .register-container {
            background-color:whitesmoke;
            width: 500px;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            color: black;

        }
         
               .register-container h2 {
            text-align: center;
        }

        .register-form {
            display: flex;
            flex-direction: column;
        }

        .register-form label{
        margin-bottom: 5px;
        color: black;
        font-size: 18px;

        } 
        h2{
        	font-size: 40px;
        	color: red;
        }
        .register-form input {
            margin-bottom: 5px;
            height: 30px;



        }

        .register-form input {
            padding: 7px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color:;
            font-size: 15px;
            font-bold: 5px;
            
        
        }

        .register-form button {
            background-color: #f25278;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            align-self: center;
            cursor: pointer;
            width: 200px;
            font-size: 18px;
        }

    </style>
</head>
<body>
    <div class="register-container">
        <h2><b> Register form</b></h2>
        <form class="register-form" action="register.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" pattern="^[A-Za-z]+$" required>
             <br>
            <label for="contact">contact</label>
            <input type="text" id="contact" name="contact" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
            <br>
            <label for="age">Password</label>
            <input type="password" id="password" name="password" required>
             <br>
            <label for="password">Confirm Password:</label>
            <input type="password" id="conpassword" name="conpassword" pass(); required>
            <br>
            <label for="text">Address1:</label>
            <input type="text" id="occupation" name="addr" required>
                 <br>
                  <label for="text">Address2:</label>
                 <input type="text" id="occupation1" name="addrs" required>
            <br>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
<?php 
error_reporting(0);
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

$name=$_POST['name'];
$contact=$_POST['contact'];
$password=$_POST['password'];
$conpassword=$_POST['conpassword'];
$address1=$_POST['addr'];
$address2=$_POST['addrs'];
 if (empty($password) || empty($conpassword)) {
        echo "Both password fields are required.";
    } else {
        // Check if passwords match
        if ($password === $conpassword) {
            // Proceed with registration logic (e.g., save to database)
            echo "Passwords match. Registration successful.";
            // Here, you would typically hash the password before saving to the database
            // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            // Save $hashed_password to the database
        } else {
            echo "Passwords do not match. Please try again.";
        }
    }

$in="insert into regi values(0,'$name','$contact','$password','$conpassword','$address1','$address2')";
$iq=mysqli_query($con,$in);
if ($iq) {
  echo "<a href='login.php'> register successfully</a>";
 
}
else{
	echo "Invalid";
}
?>