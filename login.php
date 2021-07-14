<?php include('headfoot/header.php'); ?>


<div class="main-content">
	<div class="wrapper">
		<form method="POST" enctype="multipart/form-data">
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
	
	
	

	  $sql="INSERT into login set
	 username='$username',
	 password='$password'";
	 

	  echo $res=mysqli_query($conn,$sql) or die(mysqli_error());
	 
	  
	  if($res==true){
	  	$_session['add']="1 entry added";
	  	header();
	  }else{
	  	echo"not clicked yet";
	  }
}

 ?>