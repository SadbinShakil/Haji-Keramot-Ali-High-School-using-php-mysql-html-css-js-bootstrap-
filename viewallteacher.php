<?php
session_start();
if (!isset( $_SESSION['username'])) {
	header('location:adminLoginform.php');
}

?>

<?php
include("connection.php");

error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
	<title>View All the Teachers</title>

	 <style type="text/css">
	 	.a{
        margin-left: 400px;
        margin-top: 10px;
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
  include('navbarforadmin.php');

  ?>
	<!--<header class="headerdiv">
		<div class="logodiv">
			<a href="index.html"><img src="mainlogo.gif"></a>
		</div>
	</header>
	-->

			<div class="a">


			<div class="container">
				<div class="jumbotron">
					<div class="card">
						<h5 class="card-header">View Teachers</h5>
						<div class="card-body">
							<h5 class="card-title"></h5>


							<table class="table table-dark table-hover table-bordered">
								<thead>

									<tr>
										<th scope="col">Name</th>
										<th scope="col">Email</th>
										<th scope="col">Phone Number</th>
										<th scope="col">HireDate</th>
										<th scope="col">Address</th>
									</tr>

								</thead>
								<tbody>
									<tr>


										<?php

											$query= "select name,email,phone,hiredate,address from teachers
											
											;

											";
											$res= mysqli_query($conn,$query);



											if(!$res)
											{
												echo "<script type='text/javascript'>alert('Query unsuccessfull!')</script>";
											}

											else {  

												while($row = mysqli_fetch_assoc($res))
												{  




													echo "<tr>";

													echo "<td>";
													echo $row['name']; 
													echo "</td>";



													echo "<td>";
													echo $row['email'];
													echo "</td>";


													echo "<td>";
													echo $row['phone'];
													echo "</td>";

													echo "<td>";
													echo $row['hiredate'];
													echo "</td>";

													echo "<td>";
													echo $row['address'];
													echo "</td>";

													echo "</tr>";

                        //echo "</tbody>";
						//echo "</table>";


												}

											}
										



										?>
									</tr>
								</tbody>
							</table>





						</div>
					</div>

				</div>
			</div>

			

</div>

		</body>
		</html>
