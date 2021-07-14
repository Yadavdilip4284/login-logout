<?php include('headfoot/config/conn.php'); ?>
<link rel="stylesheet" type="text/css" href="css/style.css">

<div class="main-content">
	<div class="header">
		<h1>Admin panel</h1>
		<form method="post">
		<button class="btn" name="logout">logout</button>
		</form>
		</div>
		<?php 	
			if(isset($_POST['logout'])){
				$_SESSION['destroy'];
				header('location:'.URL.'log.php');
			}
		 ?>
		<div>
		<?php  
		if(isset($_SESSION['add'])){
			echo $_SESSION['add'];
			unset($_SESSION['add']);
		}
		if(isset($_SESSION['delete'])){
			echo $_SESSION['delete'];
			unset($_SESSION['delete']);
		}

		?>
		<br>
		<button class="btn" name="add"><a href="add.php">add</a></button><br>
		<table class="tbl_full">
			<tr>
				<th>srno</th>
				<th>username</th>
				<th>password</th>
				<th>action</th>
			</tr>
			<?php  
			$sql="SELECT * from login";
			$res=mysqli_query($conn,$sql);
			if($res==true){
				echo$count=mysqli_num_rows($res);
				if($count>0)
				$srno=1;
				{
					while($rows=mysqli_fetch_assoc($res)){
						$id=$rows['id'];
						$username=$rows['username'];
						$password=$rows['password'];
						?>
						<tr>
							<td><?php echo $srno++;?></td>
							<td><?php echo $username;?></td>
							<td><?php echo $password;?></td>
							<td>
							<button class="btn" name="edit"><a href="">edit</a></button>
							<button class="btn" name="delete"><a href="<?php echo URL; ?>delete.php?id=<?php echo $id;?>">delete</a></button>
							</td>
						</tr>
						<?php
					}
				}

			}

			?>
			

		</table>
	</div>
</div>
<?php include('headfoot/footer.php'); ?>
<?php


?>