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
	<title>Delete Teacher Form</title>
  <link rel="stylesheet" type="text/css" href="style.css">

  <style type="text/css">
    .feesub{
        background: url('bg3.jpg')no-repeat center center fixed ;
        -moz-background-size: cover;
        -webkik-background-size: cover;
        -o-background-size: cover;
        background-size: cover;  
    }

    .a{
        margin-left: 450px;
    }
</style>
<!-- Link is using for google fonts -->
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

<!--bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body class="feesub">
	<!--<header class="headerdiv">
		<div class="logodiv">
			<a href="index.html"><img src="mainlogo.gif"></a>
		</div>
	</header>-->
  <?php
  include('navbarforadmin.php');

  ?>
	<!--<h2 align="center" color="black" font-weight=30px>Fee Submission Form</h2>
		<form  method="POST" align="center">
                   
                        
				<P>Enter Student ID :</p>
				<input type="text" name="id" required="">
				<P>Amount:</p>
				<input type="number" name="amount" required="">
				<P>Date:</p>
				<input type="date" name="date" required="">
				<P>ClassID:</p>
				<input type="text" name="cid" required="">
				<P>Session:</p>
				<input type="year" name="session" required="">
				
				

				<br><br><button class="btn btn-primary" type="submit" value="submit" name="submit">Submit</button>
          </form>-->
          <br>
          <br>
          <div class="a">
            
            <br>
            <br>

            <div class="card">

                <h5 class="card-header info-color white-text text-center py-4">
                    <strong style="color: black;">Delete Teacher Form</strong>
                </h5>

                
                <div class="card-body px-lg-5 pt-0">

                  
                    <form class="text-center" style="color: black;" method="POST">

                        <div class="form-row">
                            <div class="col">
                              
                                <div class="md-form">
                                   <label for="">Teacher ID</label>
                                   <input type="" id="" class="form-control" name="tid">
                                   
                               </div>
                             </div>
                           </div>


               <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="submit" value="submit" type="submit">Submit</button>

               

           </form>

       </div>

   </div>


   <?php

   if(isset($_POST['submit']))
   {
    $id =$_POST['tid'];

    
    $query= "DELETE FROM teachers WHERE id = '$id' ";

    $res=mysqli_query($conn,$query);
    if($res){
       echo "<script type='text/javascript'>alert('Deletion successfully!')</script>";
   }else{
       echo "<script type='text/javascript'>alert('Deletion unsuccessfull!')</script>";
   }
}


?>
</div>

</body>
</html>
