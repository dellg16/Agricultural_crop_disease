<?php 
include "connect.php";
$id=$_GET['id'];
$delete="delete from regi where id='$id'";
$dq=mysqli_query($con,$delete);
if ($dq) {
	header('location:admin.php');
}
else{
	echo "recorde not deleted";
}
echo"hello";
?>