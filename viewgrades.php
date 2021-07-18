<?php
session_start();
if (!isset($_SESSION['username'])) {
	header('location:studentLoginform.php');
}

?>


<?php
include("connection.php");

error_reporting(0);
?>


<!DOCTYPE html>
<html>
<head>
	<title>View Grades</title>
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
<!--bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	
	<style type="text/css">
		table , th, td{
			border: 1px solid black;
		}
		.viewatt{
			background: url('bg3.jpg')no-repeat center center fixed ;
			-moz-background-size: cover;
			-webkik-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
		body{
			 background-image: url('bg3.jpg');
		}

		.a{
			margin-left: 500px;
		}
	</style>


</head>

<body class="viewmarks">
	<!--<header class="headerdiv">
		<div class="logodiv">
			<a href="index.html"><img src="mainlogo.gif"></a>
		</div>
	</header>-->


<?php
include('navbarforstudent.php');

?>

	


	<!--<form  method="POST" align="left">
		
		
		<P>Enter StudentID:</p>
			<input type="text" name="sid">
			<P>Enter ClassID:</p>
				<input type="text" name="cid">
				<P>Enter SubjectID:</p>
				<input type="text" name="subid">
				<P>Enter Session:</p>
				<input type="number" name="session">

			<br><br><button class="btn btn-primary" type="submit" value="submit" name="submit">Submit</button>
			</form>-->
<div class="a">
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong style="color: black;">View Marks</strong>
    </h5>

   
    <div class="card-body px-lg-5 pt-0">

      
        <form class="text-center" style="color: black;" method="POST">

            <div class="form-row">
                <div class="col">
                  
                    <div class="md-form">
                      <label for="">Student ID</label>
                        <input type=" " id="" class="form-control" name="sid">
                        
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
              <label for="materialRegisterFormEmail">Subject</label>
                <input type=" " id="materialRegisterFormEmail" class="form-control" name="subid">
                
            </div>
            <div class="md-form mt-0">
              <label for="">Term</label>
                <input type="" id="" class="form-control" name="term">
                
            </div>

            <div class="md-form mt-0">
              <label for="">Session</label>
                <input type="number" id="" class="form-control" name="session">
                
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
  <h5 class="card-header">View Marks/Grade</h5>
  <div class="card-body">
    <h5 class="card-title"></h5>


     <table class="table table-dark table-hover table-bordered">
    <thead>
                            
                            <tr>
                            <th scope="col"> Student ID</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Class ID</th>
                            <th scope="col">Session</th>
                            <th scope="col">Term</th>
                            <th scope="col">Marks/Grades</th>
                            </tr>

                        </thead>
                        <tbody>
                        <tr>


			<?php

			if(isset($_POST['submit']))
			{
				$sid=$_POST['sid'];
				$cid=$_POST['cid'];
				$subid=$_POST['subid'];
				$session=$_POST['session'];
				$term=$_POST['term'];
				

				$query= "select * from grade as g
				where g.session='$session' AND g.courseid='$subid' AND g.classid='$cid' AND g.studentid='$sid' AND g.term='$term' 
				;

				";
				$res= mysqli_query($conn,$query);
				if(!$res)
				{
					 echo "<script type='text/javascript'>alert('Query Failed!')</script>";
				}

				else {
					  

                        echo "<tr>";  
					while($row = mysqli_fetch_assoc($res))
					{
						           
						echo "<td>";
						echo $row['studentid'];
						echo "</td>";
						
						
						echo "<td>";
						echo $row['courseid'];
						echo "</td>";
						
						
						echo "<td>";
						echo $row['classid'];
						echo "</td>";

						echo "<td>";
						echo $row['session'];
						echo "</td>";

						echo "<td>";
						echo $row['term'];
						echo "</td>";
						

						echo "<td>";
						echo $row['grade'];
						echo "</td>";
						echo "</tr>";
						
						

					}

				}
			}
			


			?>
		
		</div>

   </tr>
</tbody>

		</table>
	</div>
	</body>
	</html>
