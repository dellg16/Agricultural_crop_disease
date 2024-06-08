<?php 
include "connect.php";
$id=$_GET['id'];
$delete="delete from upload where id='$id'";
$dq=mysqli_query($con,$delete);
if ($dq) {
	header('location:disease.php');
}
else{
	echo "recorde not deleted";
}
echo"hello";
?>