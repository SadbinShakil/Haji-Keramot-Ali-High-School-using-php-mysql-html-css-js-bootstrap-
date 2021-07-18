<?php
session_start();
if (!isset($_SESSION['username'])) {
	header('location:adminLoginform.php');
}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Admin's Feature</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Link is using for google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	<style type="text/css">
		.admin{
			background: url('bg3.jpg')no-repeat center center fixed ;
			-moz-background-size: cover;
			-webkik-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}

		.a{
			margin-left: 40px;
		}
	</style>
</head>


<body class="admin">
<!--<header class="headerdiv">
	<div class="logodiv">
			<a href="index.html"><img src="mainlogo.gif"></a>
		</div>
	</header>-->
	<?php
	include('navbarforadmin.php');
	?>
	<div class="a">
		<?php echo "Hello ".$_SESSION['username'] ;   ?>
	</div>

	<!--<nav class="teachernav">
			<a href="index.html"><b>Home</b></a>
			<a href="addteacher.php"><b>Add Teacher</b></a>
			<a href="addadmin.php"><b>Add Admin</b></a>
			<a href="uploadnoticeboard.php"><b>Notice Update</b></a>
			<a href="uploadexamschedule.php"><b>Exam Schedule Update</b></a>
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
		
	<section class="rightteacher">
		<h1>Hello Mr.  <?php echo $_SESSION['username'];  ?></h1>
		
		
	</section>
</main>


</body>
</html>

</html>