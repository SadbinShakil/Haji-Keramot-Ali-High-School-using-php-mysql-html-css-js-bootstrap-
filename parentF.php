<?php
session_start();

if (!isset($_SESSION['userid'])) {
	header('location:parentLoginform.php');
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Parents Feature</title>
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


		.aaa{
			margin-left: 40px;
		}
	</style>
</head>
<body>
 <?php
                    include('navbarforparent.php');
					?>
					
<!--<header class="headerdiv">
	<div class="logodiv">
			<a href="index.html"><img src="mainlogo.gif"></a>
		</div>

		
	</header>-->
	              


	<!--<nav class="teachernav">
			<a href="index.html">Home</a>
			<a href="parentmarkview.php" action='_blank'>View Childs Grades</a>
			<a href="viewclasstime.php">View childs Class Time</a>
			<a href="viewexamschedule.php">View childs Exam Schedule</a>
			<a href="viewnoticeboard.php">View Noticeboard</a>
			<a href="view.php">View Childs Attendance</a>

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
			</section>
	<section class="rightteacher">
		<h1>Hello Mr.  <?php echo $_SESSION['userid'];  ?></h1>
		
		
	</section>
		</main>

</header>

</body>
</html>