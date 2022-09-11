<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Teacher's Dashboard</title>
</head>
<body>

	<?php
      include("../include/header.php");
	 ?>
	 <div class="container-fluid">
	 	<div class="col-md-12">
	 		<div class="row">
	 			<div class="col-md-2" style="margin-left:-30px;">
	 				<?php
                       include("sidenav.php");
	 				 ?>
	 			</div>
	 			<div class="col-md-10">
	 				<div class="container-fluid">
	 					<h5 style="margin-top: 10px;">Teacher Dashboard</h5>
	 					<div class="col-md-12">
	 						<div class="row">
	 							<div class="col-md-3 mx-2 my-2 bg-info" style="height: 150px;">

	 								<div class="col-md-12">
	 									<div class="row">
	 										<div class="col-md-8">
	 											<h5 class="text-white my-4">My </h5>
	 											<h5 class="text-white">Information</h5>
	 										</div>
	 										<div class="col-md-4">
	 											<a href="myinfo.php"><i class="fa fa-user-circle fa-3x my-3" style="color: white;"></i></a>
	 										</div>
	 									</div>
	 								</div>
	 							</div>
	 							<div class="col-md-3 mx-2 my-2 bg-success" style="height: 150px;">
	 								<div class="col-md-12">
	 									<div class="row">
	 										<div class="col-md-8">
	 											<h5 class="text-white my-4">Class</h5>
	 										</div>
	 										<div class="col-md-4">
	 											<a href="class.php"><i class="fa fa-sharp fa-solid fa-user-tie fa-3x my-3" style="color: white;"></i></a>
	 										</div>
	 									</div>
	 								</div>
	 							</div>
	 						</div>
	 					</div>
	 				</div>
	 			</div>
	 		</div>
	 	</div>
	 </div>

</body>
</html>