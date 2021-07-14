<?php include('headfoot/header.php'); ?>
<?php
 include('headfoot/config/conn.php');

$id=$_GET['id'];
 $sql="DELETE from login where
	id=$id";

	$res=mysqli_query($conn,$sql);
	
	
	if($res==true){
		$_SESSION['delete']="entry deleted";
		header("location:".URL.'manage.php');
	}else{
		$_SESSION['delete']="entry failed to deleted";
		header("location:".URL.'manage.php');
	}






  ?>