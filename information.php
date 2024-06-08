<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html, body {
  height: 100%;
  width: 100%;
  margin: 0;
  font-family: 'Roboto', sans-serif;

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
#btn4{
  background-color:red;
  color:white;
  font-size: 20px;
  position: relative;
  top: -70px;
  left:1500px;
  border-radius: 10px;
  border: none;
}
.container {
  max-width: 1100px;
  height: 500px;
  margin-top:50px;
  margin-left: 100px;
  padding: 15px;
  display: flex;
  box-shadow: 2px 2px solid grey ;
  backgound-color: grey;
}
.left-column {
  width: 65%;
  position: relative;
}
 
.right-column {
  width: 35%;
  margin-top: 60px;
}
.left-column img {
  width: 100%;
  position: absolute;
  left: 300;
  top: -30;
  box-shadow: 2px 4px 4px grey;
  height: 100%;
  border-radius: 20px;
}
.product-description {
  border-bottom: 1px solid #E1E8EE;
  margin-bottom: 20px;
  position: relative;
  top:400px;
  left:-100px;

}
.product-description span {
  font-size: 32px;
  color:rebeccapurple;
  letter-spacing: 1px;
  text-decoration: none;
  height: 200px;
  width:1200px;
  margin: -300px;
}
.product-description h1 {
  font-weight:bold;
  font-size: 52px;
  color:red;
  letter-spacing: -2px;
  width:1000px;
  margin:30px -62px;
}
.product-description pp {
  font-size: 16px;
  font-weight: 300;
  color:black;
}
mark{
  background: none;
  color:black;
  font-size: 22px;
  margin: -350px;

}
.back-button {
            position: fixed;
            top: 10px;
            left: 1640px;
            padding: 30px;
            width:10px;
            color:black;
            background:whitesmoke;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
.checked {
  color: orange;
}
#pp{
  background: none;
  color:black;
  font-size: 22px;
}

#btn{
   font-size: 20px;  
  color:white;
  background:blue;
  
}
#btn:hover{
  background:darkgreen;
}
a{
  color: white;
  text-decoration: none;
}
.i1{
  position: relative;
  top:400px;
  left:-200px;
}
h1{
   position:relative;
   left:-100px;
}

</style>
  </head>
  <body>
    <div class="nav">
<img src="plantix4.png"style="height:100px; width:200px;">
<button class="back-button" onclick="goBack()"><i class="fa fa-close" style="font-size:23px"></i></button>
</div>
<button type="submit" id="btn4"><a href="problem.php">Add Problems</button></a>
  <?php

  include("connect.php");
  error_reporting(0);
  $name=$_GET['name'];

  $image=$_GET['image'];

  $s="select * from upload where name='$name'";
     $sq=mysqli_query($con,$s);
    while($f=mysqli_fetch_array($sq)){
  ?>


<div class="container">
  <div class="left-column">
   <?php echo "<img  id='item' src='".$f['image']."' width='290' height='150'>" ?>
  </div>
  <div class="right-column">
    <div class="product-description">
      
        <h1><?php echo $f['name'];?></h1>
        <br>
      <span id="pp"><b>Occurance:</b> <?php echo $f['occurance'];?></span>
      <br>
      <span id="pp"><b>Symptoms:</b> <?php echo $f['symptoms'];?></span>
      <br>
      <p><mark><b>Control Measures:</b><?php echo $f['control'];?> </mark></p>
      <br>
      
    </div>

<br><br>
    <a href="checkout.php?name=<?php echo $name;?>"><button id="btn"><i class="fa fa-shopping-cart"> By Now</a></button></i>
    <?php
  }
  ?>

</body>

</html>
<script>
  function goBack() {
           window.location.replace("show.php");
        }
    </script>