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
	<title>View Class Time</title>

  <!--bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <style type="text/css">
   table, th, td {
    border: 1px solid black;
  }

  body{
   background: url('bg3.jpg')no-repeat center center fixed ;
   -moz-background-size: cover;
   -webkik-background-size: cover;
   -o-background-size: cover;
   background-size: cover;
 }
 .a{
  margin-left: 500px;
}


</style>

</head>
<body>
  <?php
  include('navbarforstudent.php');

  ?>
		<!--<form  method="POST" align=center>
                   
                        
				<P>Enter Classid:</p>
				<input type="" name="cid">

                <P>Enter Session:</p>
                <input type="Number" name="session">

                <P>Enter CourseName:</p>
                <input type="text" name="cname">

			<br><br><button class="btn btn-primary" type="submit" value="submit" name="submit">Submit</button>
		</form>-->
    <div class="a">

      <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
          <strong style="color: black;">View Class Time</strong>
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
           </div>


           <div class="md-form mt-0">
            <label for="">Session</label>
            <input type="number" id="" class="form-control" name="session">
            
          </div>
          <div class="md-form mt-0">
            <label for="">Subject</label>
            <input type="" id="" class="form-control" name="cname">
            
          </div>


          <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="submit" value="submit" type="submit">Submit</button>

          

        </form>

      </div>

    </div>
    <br>
    <br>
    <br>


    <div class="container">
      <div class="jumbotron">
        <div class="card">
          <h5 class="card-header"> Class Time</h5>
          <div class="card-body">
            <h5 class="card-title"></h5>


            <table class="table table-dark table-hover table-bordered">
              <thead>
                
                <tr>
                  <th scope="col"> Subject</th>
                  <th scope="col">Class ID</th>
                  <th scope="col">Time</th>
                  <th scope="col">Session</th>
                  <th scope="col">Room Number</th>
                </tr>

              </thead>
              <tbody>
                <tr>

                  <?php

                  if(isset($_POST['submit']))
                  {
                    $cid=$_POST['cid'];
                    $session=$_POST['session'];
                    $cname=$_POST['cname'];
                    
                    $sql="select * 
                    from class as c
                    where c.classname='$cname' AND c.session='$session' AND c.classid='$cid' " ;
                    $res=mysqli_query($conn,$sql);

                    if(!$res)
                    {
                      echo "<script type='text/javascript'>alert('Query Failed!')</script>";
                   }

                   else {

                     while($row = mysqli_fetch_assoc($res))
                     {
                      

                      
                      echo "<tr>";
                      echo "<td>";
                      echo $row['classname'];
                      echo "</td>";            
                      echo "<td>";
                      echo $row['classid'];
                      echo "</td>";
                      
                      
                      echo "<td>";
                      echo $row['time'];
                      echo "</td>";
                      
                      
                      echo "<td>";
                      echo $row['session'];
                      echo "</td>";

                      echo "<td>";
                      echo $row['room'];
                      echo "</td>";
                      
                      
                      
                      
                      echo"</tr> ";



                      
                      

                    }

                  }
                }


                ?>
              </tr>
            </tbody>

          </table>
        </div>
      </body>
      </html>



