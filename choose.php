<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body{
       background-image: url('greenery.jpg');
    background-repeat: no-repeat;
    background-size: 2000px;
  }
.button {
	position: relative;
	left:700px;
  border-radius: 4px;
  background-color:lightslategrey;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
p{
	position: relative;
	left:700px;
	font-size: 22px;
	font-weight: bold;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
a{
	text-decoration: none;
	color: white;
}
.nav{
  background-color: whitesmoke;
  box-shadow: 2px 4px 4px grey ;
}
#btn{
  background-color: blue;
  color:white;
  font-size: 22px;
  position: relative;
  top: -70px;
  left:1300px;
  border-radius: 20px;
}
h2{
  color:white;
  background-color: blue;
  width:340px;
}

</style>
</head>
<body>
<div class="nav">
<img src="plantix4.png"style="height:100px; width:200px;">
</div>
<h2>Please choose the correct option</h2>
<p> If You are user then click here</p>
<div class="down-arrow"></div>
<button class="button"><a href="login.php"><span>Farmer Login </span></button></a>
<br><br><br>
<p>If your Admin/Agronomist then click here</p>
<div class="down-arrow"></div>
<button class="button"><a href="adlogin.php"><span>Login</span></button></a>

</body>
</html>
