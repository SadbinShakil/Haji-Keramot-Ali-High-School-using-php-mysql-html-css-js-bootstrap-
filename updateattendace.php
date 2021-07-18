
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
	<title>Update Attendance</title>
  <style type="text/css">
    .a{
      margin-left: 450px;
      margin-top: 20px;
    }
  </style>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<?php
  include('navbarforteacher.php');

  ?>
  <div class="a">
    
  
    <div class="card">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Attendance Status Update</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">

            <!-- Form -->
            <form class="text-center" style="color: #757575;" method="POST">

                <div class="form-row">
                    <div class="col">
                        <!-- First name -->
                        <div class="md-form">
                           <label for="">Enter Date</label>
                            <input type="Date" id="" class="form-control" name="date">
                           
                        </div>
                    </div>
                    <div class="col">
                        <!-- Last name -->
                        <div class="md-form">
                          <label for="">Enter Class ID</label>
                            <input type="text" id="" class="form-control" name="cid">
                            
                        </div>
                    </div>

                    <div class="col">
                        <!-- Last name -->
                        <div class="md-form">
                           <label for="">Enter Session</label>
                            <input type="number" id="" class="form-control" name="sid">
                           
                        </div>
                    </div>
                </div>

                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                      <label for="">Enter Student ID</label>
                        <input type="" id="" class="form-control" name="id">
                        
                    </div>
                </div>

            </div>
            <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                       <label for="">Enter Attendance Status</label>
                        <input type="checkbox" id="" class="form-control" name="att" value="Present">Present
                        <input type="checkbox" id="" class="form-control" name="att" value="Absent">Absent
                       
                    </div>
                </div>
                
          

            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit" name="submit">Submit</button>

        </form>
        <!-- Form -->

    </div>

</div>


<?php 

if (isset($_POST['submit'])) {
 $date=$_POST['date'];
 $cid=$_POST['cid'];
 $sid=$_POST['sid'];
 $id=$_POST['id'];
 $att=$_POST['att'];



 $slq="UPDATE attendance SET attendance='$att' WHERE st_id='$id' AND date='$date' AND class_id='$cid' AND session='$sid';  ";
   $res=mysqli_query($conn,$slq);

 
 $row=mysqli_fetch_assoc($res);

 if ($res) {
    
       echo "<script type='text/javascript'>alert('Attendance Updated successfully!')</script>";
       header('attend.php');
   }
   else{
       echo "<script type='text/javascript'>alert('Attendance Update unsuccessfull!')</script>";
       header('attend.php');
   }
}

?>
</div>
</body>
</html>