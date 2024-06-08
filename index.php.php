<!DOCTYPE html>
<html>
<head>
    <title> main page</title>
<style>
*{
    margin:0;
    padding: 0;
}
        .navbar {
            background-color:#f5f5dc;
            overflow: hidden;
            margin-top:-35px;
            padding: 10px;
        }

        .navbar a {
            float: left;
            font-size: 18px;
            color: black;
            text-align: center;
            padding: 18px 35px;
            text-decoration: none;
             margin-left: 120px;
        }
        .navbar a:hover{
            background-color:blue;
            color: white ;
        }


* {box-sizing: border-box;}
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
h1{
   text-align:center;
   color:white;
   font-size:30px;
   position:relative;
   top: -20px;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 20px;
  font-size: 20px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 10px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 24px;
  margin:0;
  position: relative;
  left:-22px;
  top:-22px;
  width: 1750px;
  height:1700px;
}

span.psw {
 float: right;
  padding-top: 16px;
}

#btn1{
    position:relative;
    left:10px;
    font-size: 18px;
}
#btn2{
    position:relative;
    left:150px;
    font-size: 18px;
}
h2{
    text-align: center;
}
.mySlides {
  position :relative;
  top: -5px;
  left: -30px;
  display:none;
  height: 530px;
  width: -34px;
}
.imgtext {
  position: absolute;
  top: 50px;
  left: 550px;
  font-size: 40px;
  transform: translate(-50%, -50%);
  text-shadow: 5px 2px 2px yellow;
  color:black;
}
.imgtext:hover{
    font-size:41px;}
* {box-sizing: border-box;}

.mySlides {display: none;}
img {vertical-align: middle;}

.slideshow-container {
  position: relative;
  margin:8px;
  left:30px;
}
.header{
    background-color:black;
    background-size: 100%;
    font-size: 40px;
}
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
#img1{
    position:relative;
    left:50px;
    top:10px;
}
#regi{
    height:0px;
    width:50px;

}
#log{
    background-color: blue;
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
</style>
</head>
<body>
<div class="container">
    <div class="header">
    <img src="plantix4.png" id="img1" style="height:70px; width:100px;">
    <h1>Agriculture Crop Diseases..</h1>
</div>
    <br><br>

<div class="navbar">
            <a href="#">Home</a>
            <a href="about.php">About Us</a>
            <a href="Contact.php">Contact Us</a>
             <a href="feedback1.php">Feedback</a>
            <a href="choose.php" id="log">Login</a>
            </div>
            
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="crop.jpg" style="width:100%; height:110%;">
 
</div>

<div class="mySlides fade">
  <img src="crop3.jpg" style="width:100%; height:110%;">
</div>

<div class="mySlides fade">
  <img src="crop4.jpg" style="width:100%; height:110%;">
</div>
<div class="mySlides fade">
  <img src="crop5.jpg" style="width:100%; height:110%;">
</div>
<div class="mySlides fade">
  <img src="crop1.avif" style="width:100%; height:110%;">
</div>
</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>



