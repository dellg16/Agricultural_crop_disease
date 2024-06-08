<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Feedback</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
  <style> 
    *{
      margin: 0;
      padding:0;
      box-sizing: border-box;
      font-family: 'poppins',sans-serif;
    }
.container{
  width:100%;
  height: 100vh;
  background-color: aliceblue;
  display:flex;
  align-items: center;
  justify-content: center;
}
.feedbackbox{
  background:#fff;
  padding: 50px 100px;
  border-radius: 10px;
  display:flex;
  flex-direction: column;
  align-items: center;
  box-shadow: 2px 4px 4px black;
}
c
header {
    background-color: #333;
    color: #fff;
    padding: 35px;
    text-align: center;
    margin:2px 0;
}
footer {
    background-color: #333;
    color: #fff;
    padding: 30px 0;
    text-align: center;
    position: relative;
    top:-150px;
}
.emoji{
  width: 100px;
  height: 100px;
  border-radius: 50%;
  margin-bottom: 30px;
}
.emoji img{
  width: 80px;
  margin: 0 10px;
}
#emoji{
 display: flex;
 align-items: center;
 transform: translateX(-400px);
 transition: 0.3 sec;
}
.rating .fas{
 font-size: 40px;
 color:#e4e4e4;
 cursor: pointer;

}


  </style>

</head>
<body>
  <header>
            <h1> Give Feedback</h1>
            <button class="back-button" onclick="goBack()"><i class="fa fa-close" style="font-size:23px"></i></button>
        </header>
  <div class="container">
<div class="feedbackbox">
  <div class="emoji">
    <div id="emoji">
   <img src="img/poor.png">
    <img src="img/bad.png">
     <img src="img/okay.png">
      <img src="img/good.png">
       <img src="img/excellent.png">
     </div>
  </div>
  <div class="rating">
 <i class="fas fa-star"></i>
 <i class="fas fa-star"></i>
 <i class="fas fa-star"></i>
 <i class="fas fa-star"></i>
 <i class="fas fa-star"></i>
  </div>
</div>
  </div>
  <footer>
            <p>&copy; 2024 Agriculture Department</p>
        </footer>
  <script> 
  var stars= document.getElementsByClassName("fas");
  var emoji=document.getElementById("emoji");
  stars[0].onclick = function(){
    stars[0].style.color="#ffd93b";
    stars[1].style.color=" #e4e4e4";
    stars[2].style.color=" #e4e4e4";
    stars[3].style.color=" #e4e4e4";
    stars[4].style.color=" #e4e4e4";
    emoji.style.transform="translateX(0)";

  }
  stars[1].onclick = function(){
    stars[0].style.color="#ffd93b";
    stars[1].style.color=" #ffd93b";
    stars[2].style.color=" #e4e4e4";
    stars[3].style.color=" #e4e4e4";
    stars[4].style.color=" #e4e4e4";
    emoji.style.transform="translateX(-100px)";
  }
  stars[2].onclick = function(){
    stars[0].style.color="#ffd93b";
    stars[1].style.color=" #ffd93b";
    stars[2].style.color="#ffd93b";
    stars[3].style.color=" #e4e4e4";
    stars[4].style.color=" #e4e4e4";
    emoji.style.transform="translateX(-200px)";
  }
  stars[3].onclick = function(){
    stars[0].style.color="#ffd93b";
    stars[1].style.color=" #ffd93b";
    stars[2].style.color="#ffd93b";
    stars[3].style.color=" #ffd93b";
    stars[4].style.color=" #e4e4e4";
    emoji.style.transform="translateX(-300px)";
  }
  stars[4].onclick = function(){
    stars[0].style.color="#ffd93b";
    stars[1].style.color=" #ffd93b";
    stars[2].style.color="#ffd93b";
    stars[3].style.color=" #ffd93b";
    stars[4].style.color=" #ffd93b";
    emoji.style.transform="translateX(-400px)";
  }
  </script>
  <script>
  function goBack() {
           window.location.replace("index.php");
        }
    </script>
</body>
</html>
