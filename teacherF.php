<?php
session_start();
if (!isset( $_SESSION['username'])) {
	header('location:teacherLoginform.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Teachers Feature</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Link is using for google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

	<style type="text/css">
		body{
			background: url('bg3.jpg')no-repeat center center fixed ;
			-moz-background-size: cover;
			-webkik-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
	</style>

</head>
<body>
<!--<header class="headerdiv">
	<div class="logodiv">
			<a href="index.html"><img src="mainlogo.gif"></a>
		</div>
	</header>-->
	<?php
	include('navbarforteacher.php');

	?>
	<div>
		
	</div>

	<!--<nav class="teachernav">
			<a href="index.html"><b>Home</b></a>
			<a href="addstudent.php"><b>Add Student</b></a>
			<a href="attend.php"><b>Take Attendance</b></a>
			<a href="markupdate.php"><b>Marks Update</b></a>
			<a href="feesub.php"><b>Fee Submission</b></a>
		</nav>-->
		<!-- <div class="dropdown">
  <button class="dropbtnteacher">Login</button>
  <div class="dropdown-content">
    <a href="adminLoginform.php" target="_blank">Admin Login</a>
    <a href="studentLoginform.php" target="_blank">Student Login</a>
    <a href="teacherLoginform.php" target="_blank">Teacher Login</a>
  </div>
</div> -->
<main class="teachermain">
	<section class="leftteacher">
		<h2>
			
		</h2>
		<h1>
			
		</h1>
		<p>
			
		</p>
	</section>
	<section class="middleteacher">
		
	</section>
	<section class="rightteacher">
		<h1>Hello Mr. <?php echo $_SESSION['username'];  ?></h1>
		
		
	</section>
</main>


</body>
</html>