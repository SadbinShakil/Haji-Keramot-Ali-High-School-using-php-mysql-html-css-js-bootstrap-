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
	<title>View Attendance</title>

	<style type="text/css">
		.a{
			margin-left: 450px;
		}
		.p{
			margin-top: 20px;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">


	<!--bootstrap -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	


</head>
<body class="viewatt">
	<?php
  include('navbarforteacher.php');

  ?>
	<!--<header class="headerdiv">
		<div class="logodiv">
			<a href="index.html"><img src="mainlogo.gif"></a>
		</div>
	</header>-->

	<div class="a">
		
	
	<div class="p">

		<button class="btn btn-primary" onclick="window.location.href='updateattendace.php';">Update Attendance</button>


	</div>


	<!--<form  method="POST" align="center">
		
		
		<P>Enter Date:</p>
			<input type="date" name="date">
			<P>Enter ClassID:</p>
				<input type="text" name="cid">

				<br><br><button class="btn btn-primary" type="submit" value="submit" name="submit">Submit</button>
			</form>-->


			<div class="card">

  <h5 class="card-header info-color white-text text-center py-4">
    <strong style="color: black;">View Attendance</strong>
  </h5>


  <div class="card-body px-lg-5 pt-0">


    <form class="text-center" style="color: black;" method="POST">

      <div class="form-row">
        <div class="col">

          <div class="md-form">
            <label for="">Session</label>
            <input type="number" id="" class="form-control" name="sid">

          </div>
        </div>
        <div class="col">

          <div class="md-form">
           <label for="">Class ID</label>
           <input type="" id="" class="form-control" name="cid">
         </div>
       </div>
     </div>


     <div class="md-form mt-0">
      <label for="">Date</label>
      <input type="date" id="" class="form-control" name="date">

    </div>


    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="submit" value="submit" type="submit">Submit</button>



  </form>

</div>
</div>

<br>
<br>


			<div class="container">
				<div class="jumbotron">
					<div class="card">
						<h5 class="card-header">View Attendance</h5>
						<div class="card-body">
							<h5 class="card-title"></h5>


							<table class="table table-dark table-hover table-bordered">
								<thead>

									<tr>
										<th scope="col"> Student ID</th>
										<th scope="col">Date</th>
										<th scope="col">Status</th>
										<th scope="col">Class ID</th>
										<th scope="col">Session</th>
									</tr>

								</thead>
								<tbody>
									<tr>


										<?php

										if(isset($_POST['submit']))
										{
											$date=$_POST['date'];
											$cid=$_POST['cid'];
											$sid=$_POST['sid'];
											


											$query= "select * from attendance as a
											where a.date='$date' AND a.class_id='$cid' AND a.session='$sid'
											;

											";
											$res= mysqli_query($conn,$query);



											if(!$res)
											{
												 echo "<script type='text/javascript'>alert('Query Failed!')</script>";
											}

											else {  

												while($row = mysqli_fetch_assoc($res))
												{  




													echo "<tr>";

													echo "<td>";
													echo $row['st_id']; 
													echo "</td>";



													echo "<td>";
													echo $row['date'];
													echo "</td>";


													echo "<td>";
													echo $row['attendance'];
													echo "</td>";

													echo "<td>";
													echo $row['class_id'];
													echo "</td>";
													
													echo "<td>";
													echo $row['session'];
													echo "</td>";
													echo "</tr>";

                        //echo "</tbody>";
						//echo "</table>";


												}

											}
										}



										?>
									</tr>
								</tbody>
							</table>


<form method="post" action="exportatt.php">
      <?php 

      
     echo " <input type='' name='date' value='$date'  hidden>";
      echo " <input type='' name='cid' value='$cid' hidden>";
       echo " <input type='' name='sid' value='$sid' hidden>";
      
      
       ?>

     <input type="submit" name="export" class="btn btn-success" value="ExportToExcel">
    </form>


						</div>
					</div>

				</div>
			</div>

			


</div>
		</body>
		</html>
