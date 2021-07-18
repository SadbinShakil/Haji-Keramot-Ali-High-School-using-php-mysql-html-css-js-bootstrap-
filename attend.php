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
	<title>Attendance Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

	<!--bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<style type="text/css">
		.a{
			margin-left: 500px;
		}
	</style>

</head>
<body align="center" class="attendancetaking">
	<!--<header class="headerdiv">
		<div class="logodiv">
			<a href="index.html"><img src="mainlogo.gif"></a>
		</div>
	</header >-->
	<?php
	include('navbarforteacher.php');

	?>
	<div class="a">
		

		<div class="panel panel-default container">
			<div class="panel-heading">
				

			</div>
			<br>
			<br>
			<div>
				<button class="btn btn-primary" onclick="window.location.href='addstudent.php';">Add New Student</button>
				<button class="btn btn-primary" onclick="window.location.href='view.php';">View Attendance</button>
				
				
			</div>
		<!--<form  method="POST">


			<P>Enter ClassID:</p>
				<input type="text" name="cid">

				<P>Enter Session:</p>
				<input type="number" name="sid">

				<input type="submit" value="submit" name="submit1">
			</form>-->

			<div class="card">

				<h5 class="card-header info-color white-text text-center py-4">
					<strong style="color: black;">Attendance Management System</strong>
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
									<label for="">Session</label>
									<input type="number" id="" class="form-control" name="sid">
								</div>
							</div>
						</div>

						
						<button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="submit1" value="submit1" type="submit">Submit</button>

						

					</form>

				</div>

			</div>

			<br>
			<br>


			<form method="POST">

				<div class="container">
					<div class="jumbotron">
						<div class="card">
							<div class="card-header">
								
							</div>
							<div class="card-body">
								<h5 class="card-title">Attendance Management System</h5>
								<div>
									<table class="table table-dark table-hover table-bordered">
										<thead>
											<tr>
												<th scope="col">Student ID</th>
												<th scope="col">Name</th>
												<th scope="col">Email</th>
												<th scope="col">Attendance</th>
											</tr>

										</thead>
										<tbody>
											<tr>

												<?php
												$cid="A";
												$sid="B";
												if(isset($_POST['submit1']))
												{

													$cid=$_POST['cid'];
                                //valpass($cid);
                                //GLOBAL $cid;
													$sid=$_POST['sid'];

													echo "<input type='' name='cid' value='$cid' hidden>";

													echo "<input type='' name='sid' value='$sid' hidden>";



													
													$sql="select id, name, email 
													from students as s
													where s.classid='$cid' AND s.session='$sid' ";
													$res=mysqli_query($conn,$sql);

													if(!$res)
													{
														echo "<script type='text/javascript'>alert('Query unsuccessfull!')</script>";
													}

													else {

														while($row = mysqli_fetch_assoc($res))
										{       //$sid=$row['id'];

									?>    <tr>
										<td><?php echo $row['id']; ?></td> 
										<td><?php echo $row['name']; ?></td> 
										<td><?php echo $row['email']; ?></td> 
										<td>
											<!--<button class="btn btn-primary" name="attendance[<?php echo $row['id']?>]" value="Present">Present</button>
												<button class="btn btn-danger" name="attendance[<?php echo $row['id']?>]" value="Present">Absent</button>!--> 

												<input type="checkbox" name="attendance[<?php echo $row['id']?>]" value="Present">Present
												<input type="checkbox" name="attendance[<?php echo $row['id']?>]" value="Absent">Absent                  	            	
											</td>
											
											

										</tr>
										<?php
									}
								}
							}
							?>
							
						</tbody>
					</table>
					<button class="btn btn-primary" type="submit" name="submit" value="submit">Submit</button>
					
				</form>

				
			</div>
		</div>
	</div>
	
</div>






<?php
function valpass($cid) {
	echo $cid;

                    //$c_id=$cid;
}


if(isset($_POST['submit']))
{
	$att=$_POST['attendance'];
	
	$cid=$_POST['cid'];
	$sid=$_POST['sid'];
	
	$date = date('Y/m/d');
					//echo "string0";

					//echo $cid;
					//echo "---" . $sid." "."<br>";


	foreach ($att as $key => $value) {
						//echo $cid;
		
		if ( $value== 'Present') {
							//echo "HIIIIIII";
			$query="insert into attendance(date,attendance,st_id,class_id,session) values('$date','Present','$key','$cid','$sid')";
			$insertResult=$conn->query($query);
				//echo $query;
				//echo "string1";
		}

						else{ //echo $val;
							$query="insert into attendance(date,attendance,st_id,class_id,session) values('$date','Absent','$key','$cid','$sid')";
				//echo $query;
				//echo "string2";
							$insertResult=$conn->query($query);
						} 
					}

					if($insertResult){
						echo "<script type='text/javascript'>alert('Attendance Taken successfully!')</script>";
					}else{
						echo "<script type='text/javascript'>alert('Attendance Taken unsuccessfull!')</script>";
					}

				}


				?>
				


			</div>
		</body>
		</html>

