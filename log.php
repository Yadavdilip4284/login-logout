<link rel="stylesheet" type="text/css" href="css/style.css">

<div class="body">
<div  class="container">
<form method="POST" >
			
				<div>
					<label>Username</label>
					
						<input type="text" name="username" placeholder="enter your email" id="user">
					</div>
				
					<div><label>Password</label>
					
						<input type="password" name="password" placeholder="enter password" id="pass">
					</div>
				<div>
						<button class="btn"  name="submit"><a href="" >submit</a></button>
			</div>
		</form>
	</div>
</div>
<?php 	
include('headfoot/config/conn.php');
if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * from log WHERE admin_name='$username' and admin_pass='$password'";

$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
	if($res==true){
		$count=mysqli_num_rows($res);
		if($count==1){
			$_SESSION['login']="admin login successfully";
			header("location:".URL.'manage.php');
		}else{
			echo"<script>alert('incorrect user or pass')</script>";
		}
	}
}
 ?>