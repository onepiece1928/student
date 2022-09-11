<?php 

session_start();

include("../include/connection.php");

if (isset($_POST['login'])) {

	$uname= $_POST['uname'];
	$password=$_POST['pass'];

	$error=array();

	$q = "SELECT * FROM teacher WHERE username='$uname' AND password='$password'";

	$qq= mysqli_query($connect,$q);

	$row= mysqli_fetch_array($qq);

	if (empty($uname)) {

		$error['login'] = "Enter Username";
	}else if (empty($password)){

		$error['login']= "Enter Password";
	}

	if(count($error)==0){

		$query="SELECT * FROM teacher WHERE username='$uname' AND password='$password'";

		$res= mysqli_query($connect,$query);

		if(mysqli_num_rows($res)) {

			echo "<script>alert('Done')</script>";

			 $_SESSION['student'] = $uname;

			 header("Location:index.php");
		}else{

			 echo "<script>alert('Invalid Account')</script>";
		}
	}
}

if(isset($error['login'])) {

	$l= $error['login'];

	$show = "<h5 class='text-center alert alert-danger'>$l</h5>";
}else{

	$show="";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Teacher login page</title>
</head>
<body style="background-image: url(https://cache.careers360.mobi/media/article_images/2022/7/9/VIT-Bhopal-Academic-Block.jpg); background-repeat: no-repeat; background-size: cover;">
	<?php 
	include("../include/header.php");

	?>

	<div class="container-fluid">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-3"></div>

				<div class="col-md-6 jumbotron my-3">
					<h5 class="text-center my-2">Teacher login</h5>

					    <div>
					    	<?php echo $show; ?>
					    </div>

					<form method="post">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="uname" class="form-control" autocomplete="off" placeholder="Enter username">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password"  name="pass" class="form-control" autocomplete="off">
						</div>

						<input type="submit" name="login" class="btn btn-success" value="Login">
					</form>
				</div>

				<div class="col-md-3"></div>
			</div>
		</div>
	</div>

</body>
</html>