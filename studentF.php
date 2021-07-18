<?php
session_start();
if (!isset($_SESSION['username'])) {
	header('location:studentLoginform.php');
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Students Feature</title>
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
	include('navbarforstudent.php');
	?>
	

	<!--<nav class="teachernav">
			<a href="index.html">Home</a>
			<a href="viewgrades.php" action='_blank'>View Grades</a>
			<a href="viewclasstime.php">View Class Time</a>
			<a href="viewexamschedule.php">View Exam Schedule</a>
			<a href="viewnoticeboard.php">View Noticeboard</a>
		</nav>-->
		<!-- <div class="dropdown">
  <button class="dropbtnteacher">Login</button>
  <div class="dropdown-content">
    <a href="adminLoginform.php" target="_blank">Admin Login</a>
    <a href="studentLoginform.php" target="_blank">Student Login</a>
    <a href="teacherLoginform.php" target="_blank">Teacher Login</a>
  </div>
</div> -->
<main class="studentmain">
	<section class="leftstudent">
		<div>
			
		</div>
		<h2>
			
		</h2>
		<h1>
			
		</h1>
		<p>
			
		</p>
	</section>
	<section class="middlestudent">
		
	</section>
	<section class="rightstudent">
		<h1>Hello <?php echo $_SESSION['username'];  ?></h1>
		
		
	</section>
</main>

</header>

</body>
</html>