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
        .login-container {
            background-color:whitesmoke;
            
            width: 400px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            color: black;
            position: relative;
            left:40px;

        }

        .login-container h2 {
            text-align: center;
        }

        .login-form {
            display: flex;
            flex-direction: column;
        }

        .login-form label{
        margin-bottom: 10px;
        color: black;

        } 
        .login-form input {
            margin-bottom: 10px;



        }

        .login-form input {
            padding: 7px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color:;
            font-size: 15px;
            font-bold: 5px;
            
        
        }

        .login-form button {
            background-color:blue;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            align-self: center;
            cursor: pointer;
            width: 200px;
        }
        
    </style>
</head>
<body>

<br><br>
    <div class="login-container">
        <h2><b> Login..</b></h2>
        <form class="login-form" action="login.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>

            <button type="submit">Login</button>
            <br>
            <center><a href="register.php">Register</a></center>
        </form>
    </div>
</body>
</html>
<?php
// Establish a database connection (replace with your database credentials)
 error_reporting(0);
$host = "localhost";
$username = "root";
$password = "";
$database = "crop";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user input from the login form
$name = $_POST['name'];
$password = $_POST['password'];

// Query the database to check if the provided email and password match
$sql = "SELECT * FROM regi WHERE name='$name' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
        echo "Login successful!";
 header('Location:show.php');
         
  
} else {
    // Login failed
    echo "Invalid login credentials. Please try again.";
}

// Close the database connection
$conn->close();
?>
