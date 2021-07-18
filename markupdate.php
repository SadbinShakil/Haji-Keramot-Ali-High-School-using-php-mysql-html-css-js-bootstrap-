<?php
session_start();
if (!isset( $_SESSION['username'])) {
	header('location:teacherLoginform.php');
}

?>

<?php
include("connection.php");

error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mark Update</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

	<!--bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<style type="text/css">

		.aa{
			margin-left: 90px;
		}
		.a{
			margin-left: 400px;
		}
	</style>

	
</head>

<body align="center" class="attendancetaking">
	<?php
	include('navbarforteacher.php');

	?>


	<div class="a">



		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<!--<header class="headerdiv">
		<div class="logodiv">
			<a href="index.html"><img src="mainlogo.gif"></a>
		</div>
	</header>-->

	<div class="panel panel-default container">
		<div class="panel-heading">
			

		</div>
		<br>
		<div class="aa">
			
			<button class="btn btn-primary" onclick="window.location.href='viewmark.php';">View Marks</button>
		</div>
		<br>
		<form  method="POST">


			<!--<P>Enter ClassID:</p>
				<input type="text" name="cid">
				<P>Enter CourseID:</p>
					<input type="text" name="sid">
					<P>Enter Session:</p>
						<input type="number" name="session">
						<P>Enter Term:</p>
							<input type="text" name="term">

							
							<br><button class="btn btn-primary" type="submit" value="submit" name="submit">Submit</button>
						</form>-->

						<div class="card">

							<h5 class="card-header info-color white-text text-center py-4">
								<strong style="color: black;">Mark Update Form</strong>
							</h5>


							<div class="card-body px-lg-5 pt-0">


								<form class="text-center" style="color: black;" method="POST">

									<div class="form-row">
										<div class="col">

											<div class="md-form">
												<label for="">Class ID</label>
												<input type="" id="" class="form-control" name="cid">

											</div>
										</div>
										<div class="col">

											<div class="md-form">
												<label for="">Course ID</label>
												<input type=" " id="" class="form-control" name="sid">
											</div>
										</div>
									</div>


									<div class="md-form mt-0">
										<label for="">Session</label>
										<input type="" id="" class="form-control" name="session">

									</div>

									<div class="md-form">
										<label for="">Term</label>
										<input type="" id="" class="form-control" aria-describedby="" name="term">


									</div>


									<button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="submit1" value="submit" type="submit">Submit</button>



								</form>

							</div>

						</div>
						<br>
						
						<div class="box-body table-responsive no-padding">
							<form method="POST">

								<div class="container">
									<div class="jumbotron">

										<div class="card">
											<h5 class="card-header">Featured</h5>
											<div class="card-body">
												<h5 class="card-title"></h5>

												<table class="table table-dark table-hover table-bordered">
													<thead>
														<tr>
															<th scope="col">Student ID</th>
															<th scope="col">Name</th>
															<th scope="col">Email</th>
															<th scope="col">Subject</th>
															<th scope="col">Session</th>
															<th scope="col">Term</th>
															<th scope="col">Parent ID</th>
															<th scope="col">Grade</th>

														</tr>
													</thead>


													<tbody>

														<tr>

															<?php

															if(isset($_POST['submit1']))
															{

																$cid=$_POST['cid'];
																$sid=$_POST['sid'];
																$session=$_POST['session'];
																$term=$_POST['term'];

																echo "<input type='' name='cid' value='$cid'  hidden>";
																echo "<input type='' name='sid' value='$sid'  hidden>";
																echo "<input type='' name='session' value='$session'  hidden>";
																echo "<input type='' name='term' value='$term'  hidden>";

																$sql="select id, name, email, parentid 
																from students as s
																where s.classid='$cid'";
																$res=mysqli_query($conn,$sql);

																if(!$res)
																{
																	echo "<script type='text/javascript'>alert('Query unsuccessful!')</script>";
																}

																else {

																	while($row = mysqli_fetch_assoc($res))
							                                        {


																		?>    <tr>
																			<td><?php echo $row['id']; ?></td> 
																			<td><?php echo $row['name']; ?></td> 
																			<td><?php echo $row['email']; ?></td> 
																			<td><?php echo $sid ;?></td>
																			<td><?php echo $session ;?></td>
																			<td><?php echo $term ;?></td>
																			<td><?php echo $row['parentid'] ;?></td>
																			<td>
																				<input type="number" name="mark[<?php echo $row['id']?>]">

																			</td>



																		</tr>
																		<?php
                                                                        $temp=$row['parentid'];
																		echo " <input type='' name='pid' value='$temp' hidden>";
																	}
																}
															}
															?>

														</div>
													</div>

												</div>
											</div>




										</tbody>
									</table>
									<button class="btn btn-primary" type="submit" name="submit" value="submit">Submit</button>

									
									
								</form>

								<?php


								if(isset($_POST['submit']))
								{
									$mark=$_POST['mark'];

									$sid=$_POST['sid'];
									$cid=$_POST['cid'];
									$session=$_POST['session'];
									$term=$_POST['term'];
                                    $pid=$_POST['pid'];



									foreach ($mark as $key => $value) {

										$query="INSERT INTO grade(studentid,grade,courseid,classid,session,term,parentid) values('$key','$value','$sid','$cid','$session','$term','$pid')";


										if(mysqli_query($conn,$query)){
											echo "<script type='text/javascript'>alert('Mark Updated successfully!')</script>";
										}
										else{
											echo "<script type='text/javascript'>alert('Mark Updated unsuccessfull!')</script>";
										}

									}
								}


								?>

							</div>
						</body>
						</html>

