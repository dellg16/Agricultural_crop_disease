<?php 
include "connect.php";
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		body{
			background: #d6d6d6;
		}
		.nav{
  background-color: whitesmoke;
  box-shadow: 2px 4px 4px grey ;
}
#btn1{
  background-color: blue;
  color:white;
  font-size: 22px;
  position: relative;
  top: -70px;
  left:1300px;
  border-radius: 20px;
}
		#formdiv{
			position: relative;
			left: 390px;
			top: 100px;
			width: 600px;
			height: 400px;
			background-image: url("istockphoto-1312991431-170667a.jpg");
			background-size: 100%;
			box-shadow: 2px 2px 2px 2px gray;

		}
		label{
			position: absolute;
                     font-size: 20px;
			left: 150px;
			color:#02744efa;
		}
		#namellabel{
			position: relative;
			top: -20px;
		}
		input{
			position: absolute;
			left: 150px;
			width: 308px;
			height: 30px;
			outline: none;
			border: none;
		}
		#rr{
			position: relative;
			top: 10px;
		}
		#price{
			position: relative;
			top: 15px;
			left: 50px;
		}
		#image{
			height: 30px;
			width: 310px;
			background: #b1b1b1;
			position: relative;
			top: 0px;


		}
		::-webkit-file-upload-button{
			background: #02744efa;
			
			height: 30px;
		}
		#titile{
			position: absolute;
			top: 10px;
			left: 200px;
			color: black;
			text-shadow: 2px 2px 2px red;
			font-size: 30px;
		}
		input[type="submit"]{
          width: 100px;
          height: 30px;
          background: green;
          color: white;
           top: 350px;
           border:2px solid black;
		}
   #cancel{
   	position: absolute;
   	left: 360px;
  		  width: 100px;
          height: 30px;
          top: 350px;
          background: red;
          color: whitesmoke;
   }
   .container{
width: 100%;
height: auto;
position: relative;
left: 30px;
display: flex;
flex-direction: row;
justify-content: space-around;
flex-flow: wrap;
}
.box{
width: 23%;
height: 610px;
background:#fafafa;
margin: 30px;
box-sizing: border-box;
font-size:20px ;
box-shadow: 2px 4px 4px gray;
border-radius: 20px;
}
#item{
	position: relative;
	left:0px;
	width: 390px;
	height:250px ;
	border-radius: 20px;

}
@media screen and (max-width: 1200px){
	.box{
		width: 40%;
	}
}
@media screen and (max-width: 600px){
	.box{
		width: 90%;
	}
}
#id{
 font-size: 20px;
 z-index: 200;
 position: relative;
 top: 10px;
 color:white;
}
#namedata{
 font-size: 25px;
 z-index: 200;
 position: relative;
 top: -20px;
 left: 30px;
 color:red;
}
#pricedata{
 font-size: 20px;
 z-index: 200;
 position: relative;
 top: -15px;
 left: 30px;
 color:blue;
 width: 300px;
	height: 100px;
	color: black;
	overflow: hidden;
	overflow: scroll;
}

#delete{
background: red;
color: white;
position: relative;
top: -670px;
left:2px;

}
#show_item{
	background: green;
color: white;
position: relative;
top: -668px;
}
#Edit{
	background: blue;
color: white;
position: relative;
top: -670px;
left:1px;
}
#information{
	position: relative;
	left: 60px;
	width: 300px;
	top: -10px;
	height: 50px;
}
#iname{
	position: relative;
	top: 30px;
}
#infor{
position: relative;
	left: 150px;
	width: 310px;
	top: -67px;	
	font-size: 20px;
}
#show{
	position: relative;
	left: 500px;
	top: -10px;
	background: blue;
	color: white;
}
a{
	color: white;
}
mark{
	color:black;
	font-weight: bold;
	background: none;
}
#inform{
	width: 300px;
	height: 100px;
	position: relative;
	left:20px;
	color:black;
	overflow: hidden;
	overflow: scroll;
}
#abc{
	background:white;
	position: relative;
	left: -68px;
	top: -12px;
	font-size: 15px;
}
#abc:hover{
	color: black;
	background: yellow;
}
a{
	color: black;
}

	</style>
</head>
<body>
	<div class="nav">
<img src="plantix4.png"style="height:100px; width:200px;">
</div>
	<div class="container">
		<?php 
     $s="select * from upload";
     $sq=mysqli_query($con,$s);
    while($f=mysqli_fetch_array($sq)){
		?>
	<div class="box">
		
		<?php echo "<img  id='item'src='".$f['image']."' width='500' height='150'>" ?>
		<?php echo "<div id='id'> Id :".$f['id']."</div>";?>
		<?php echo "<div id='namedata'>".$f['name']."</div>";?><?php echo"<div id='pricedata'><b>Occurance:</b>".$f['occurance']."</div>";?>
		<?php echo"<div id='pricedata'><b>Symptoms:</b>".$f['symptoms']."</div>";?>
		<?php echo"<div id='inform'><mark>control measures : </mark>".$f['control']."</div>";?>
		<br><br>
		<a href="show.php"><button id="show_item">show </button></a>

		<a href="edit.php?id=<?php echo $f['id'];?>&name=<?php echo $f['name'];?>&image=<?php echo $f['image'];?>&occurance=<?php echo $f['occurance'];?>&symptoms=<?php echo $f['symptoms'];?>&control=<?php echo $f['control'];?>"><button id="Edit">Edit</button></a>

		<a href="delete.php?id=<?php echo $f['id'];?>"><button id="delete">Delete</button></a>

	</div>
<?php 
}
?>
</div>
</body>
</html>


