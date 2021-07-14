<?php include('headfoot/header.php'); ?>


<div class="main-content">
	<div class="wrapper">
		<form method="POST" >
			<table>
				<tr>
					<td><label>Username</label></td>
					<td>
						<input type="text" name="username" placeholder="enter your email">
					</td>
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td>
						<input type="password" name="password" placeholder="enter password">
					</td>
				</tr>
				<tr>
					
					<td>
						<button class="btn" name="submit"><a href="">submit</a></button>
					</td>
				</tr>
			</table>
			
		</form>
		
	</div>
</div>


<?php include('headfoot/footer.php'); ?>
<?php 
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];

	$sql="INSERT INTO login SET
	username='$username',
	password='$password'
	";

	 $res=mysqli_query($conn,$sql);
	if($res==true){
		$_SESSION['add']="entery added";
		header("location:".URL.'manage.php');
	}else{
		$_SESSION['add']="entery failed to add";
		header("location:".URL.'manage.php');
	}

}


 ?>
