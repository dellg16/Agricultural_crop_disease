<?php
include "connect.php";
$id=$_GET['id'];
 //echo $id;

?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		body{
/*			background: #d6d6d6;*/
	                background-image: url('greenery.jpg');
    background-repeat: no-repeat;
    background-size: 2000px;	

		}
		.nav{
  background-color: whitesmoke;
  box-shadow: 2px 4px 4px grey ;
  padding: 10px;
  margin: -20px;
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
		#formdiv{
			position: relative;
			left: 590px;
			top: 80px;
			width: 600px;
			height: 500px;
			background-color:ghostwhite;
/*            background-color: rosybrown;*/
            border-radius: 5px;
            box-shadow: 4px 10px 10px gray;

		}
		#titile{
			position:relative;
			top: -40px;
			left: 200px;
			color: black;
			font-weight: bold;
			font-size: 30px;
		}
		label{
			position:relative;
                     font-size: 22px;
			left: 10px;
			color:#02744efa;
		}
		#namelabel1{
			position: relative;
			left:-270px;
			top: 30px;
			
		}
		#namellabel2{
			position: relative;
			top: 2px;
		}
		#namellabel3{
			position: relative;
			top: 10px;
		}
		#rr{
			position: relative;
			top: 24px;
		}
		#infor{
                      position: relative;
	              top: 37px;	
               }
		
		input{
			position:relative;
			left: 230px;
			width: 308px;
			height: 40px;
			outline: none;
			border: none;
		}
		#name{
	             position: relative;
	             top: 0px;
	             left:220px;
                   }
		
		#price{
			position: relative;
			top: 10px;
			left:100px;
		}
		#price2{
			position: relative;
			top:20px;
			left:100px;
                  	
                  }
		#image{
			height: 40px;
			width: 310px;
			background: #b1b1b1;
			position: relative;
			top: 30px;
			left:50px;
                  }
                  #information{
	               position: relative;
	               left: 55px;
	               width: 300px;
	               top: 40px;
	               height: 50px;
                        }

		::-webkit-file-upload-button{
			background: #02744efa;
			
			height: 30px;
		}
		
		input[type="submit"]{
          width: 100px;
          height: 30px;
          background: green;
          color: white;
           top: 50px;
           left:100px;
           border:2px solid black;
		}
   #cancel{
   	position: absolute;
   	left: 360px;
  		  width: 100px;
          height: 30px;
          top: 445px;
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
height: 330px;
background:#fafafa;
margin: 20px;
box-sizing: border-box;
font-size:20px ;
border: 2px solid black;
}
#item{
	position: relative;
	left: 0px;
	width: 301px;

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
 left: 100px;
 color:red;
}
#pricedata{
 font-size: 20px;
 z-index: 200;
 position: relative;
 top: -15px;
 left: 100px;
 color:blue;
}

#delete{
background: red;
color: white;
position: relative;
top: -350px;

}
#show_item{
	background: green;
color: white;
position: relative;
top: -350px;
}
#Edit{
	background: blue;
color: white;
position: relative;
top: -350px;
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
	color:red;
	background: none;
}
#inform{
	width: 300px;
	height: 100px;
	color: grey;
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
	<?php 
     $s="select * from upload where id= $id";
     $sq=mysqli_query($con,$s);
    while($f=mysqli_fetch_array($sq)){
	?>	
<div class="nav">
<img src="plantix4.png"style="height:100px; width:200px;">
</div>
	<div id="formdiv">
		<form action="disease.php" method="POST" enctype="multipart/form-data">
			<br><br><br>
			<label id="titile">Update Crop Diseases</label>

			<label id="namelabel1">Crop Disease name :</label>
		<input type="text" name="name" placeholder="crop name" id="name" value= "<?php echo $f['name'];?>" required><br><br>

                <label id="namellabe2">Occurance :</label>
		<input type="text" name="occur" placeholder="occurance" id="price" value= "<?php echo $f['occurance'];?>" required><br><br>

		<label id="namellabel3">Symptoms :</label>
		<input type="text" name="symp" placeholder="symptoms" id="price2" value="<?php echo $f['symptoms'];?>" required></textarea><br><br>

			<label id="rr">Affeceted Crop :</label>
			<input type="file" name="file"  id="image" value="<?php echo $f['image'];?>" required><br><br>

			<label id="infor">Control measures:</label>
			<input type ="text" name="contr" id="information" value= "<?php echo $f['control'];?>" required><br><br>

			<input type="submit" name="submit" value="update" id="submit" onclick="confirm('yes/no');">
	<button id="cancel"><a href="agriculture.php">Cancel</button></a>		

		</form>
	</div><br><br><br><br><br><br><br><br>

	<div class="container">
		</body>
</html>
<?php
}
?>

<?php
if (isset($_POST['submit'])) {
	
$name=$_POST['name'];
$occur=$_POST['occur'];
$symp=$_POST['symp'];
$file=$_FILES['file']['name'];
$tmpname=$_FILES['file']['tmp_name'];
$folder='item_img/'.$file;
$contr=$_POST['contr'];
move_uploaded_file($tmpname, $folder);
if (!$name==""&& !$occur==""&& !$symp==""&& !$folder=="" &&!$contr==""){
		$up="update upload set  name='$name',occur='$occur', symp='$symp', contr='$contr',image='$folder' where id='$id'";
	}
$q=mysqli_query($con,$up);
if ($q) {
	header('location:upload.php');
}
else{
echo "data not insert into database!";
}
}
else{

}


	?>




		

 
     