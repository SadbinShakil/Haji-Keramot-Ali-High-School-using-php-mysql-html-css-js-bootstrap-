<?php
include("connection.php");

error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Attendance Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body align="center" class="attendancetaking">
	<div class="panel panel-default container">
		<div class="panel-heading">
			<h1 style="text-align: center;">Attendance management system</h1>

		</div>
		<div>
			<a href="addstudent.php">Add</a>
			<a href="#">View</a>
		</div>
		<!--<form  method="POST">


			<P>Enter ClassID:</p>
				<input type:"text" name="cid">

				<input type="submit" value="submit" name="submit">
			</form>-->
			<form method="POST">
				<div class="box-body table-responsive no-padding">
					<table class="table table-hover" align="center" border="2px solid black">
						<tr>
							<th>Student ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Attendance</th>

						</tr>
						<tr>

							<?php

							$sql="select id, name, email 
							from students as s
							where s.classid='1A'";
							$res=mysqli_query($conn,$sql);

							if(!$res)
							{
								echo "<script type='text/javascript'>alert('Query Unsuccessful!')</script>";
							}

							else {

								while($row = mysqli_fetch_assoc($res))
									{       $sid=$row['id'];

								?>    <tr>
									<td><?php echo $row['id']; ?></td> 
									<td><?php echo $row['name']; ?></td> 
									<td><?php echo $row['email']; ?></td> 
									<td>
										<input type="checkbox" name="attendance[$row['id'];" value="Present">Present
										<input type="checkbox" name="attendance[$row['id'];" value="Absent">Absent                  	            	
									</td>

								</tr>
								<?php
							}
						}
						
						?>


					</table>
					<input type="submit" name="submit" value="submit">
				</form>

				<?php

				if(isset($_POST['submit']))
				{
					$att=$_POST['attendance'];
					$date = date('Y/m/d');

					foreach ($att as $key => $value) {
						if ($value=='Present') {
							$query="insert into attendance(date,attendance,st_id) values('$date','Present','$key')";
							$insertResult=$conn->query($query);
						}

						else{
							$query="insert into attendance(date,attendance,st_id) values('$date','Absent','$key')";
							$insertResult=$conn->query($query);
						}  
					}

					if($insertResult){
						echo "Attendance Taken";
					}

				}


				?>
			</body>
			</html>

