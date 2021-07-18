<?php
include("connection.php");

error_reporting(0);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	<!--bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<style type="text/css">
		.bg{
			background: url('bg3.jpg')no-repeat center center fixed ;
			-moz-background-size: cover;
			-webkik-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
		.form-container{
			background: #fff;
			padding: 30px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px 0px #000;
		}
	</style>

	
	
</head>
<body class="bg">

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<header class="headerdiv">
		<div class="logodiv">
			<a href="index.html"><img src="mainlogo.gif"></a>
		</div>
	</header>
	<!--<h2 align="center" color="black" font-weight=30px>Admin Login Form</h2>
		<form  method="POST" action="adminloginvalidate.php" align="center">
                   
                        
				<P>Enter Username:</p>
				<input type="text" name="username">
				<P>Enter Password:</p>
				<input type="password" name="pass">

				<br><br><button class="btn btn-primary" type="submit" value="submit" name="submit">Submit</button>
			</form>-->


			<h2 align="center" font-weight=30px><b>Admin Login Form</b></h2>


			<section class="container-fluid">
				<section class="row justify-content-center">
					<section class="col-12 col-sm-6 col-md-3">
						<form class="form-container" method="POST" action="adminloginvalidate.php">
							<div class="form-group">
								<label for="ex">Username</label>
								<input type="name" class="form-control" name="username">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="password" class="form-control" name="pass">
							</div>
							
							<button type="submit" value="submit" name="submit" class="btn btn-primary">Login</button>
						</form>
						
					</section>
					
				</section>
			</section>


		</body>
		</html>