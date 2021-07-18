<?php
session_start();
if (!isset($_SESSION['userid'])) {
  header('location:parentLoginform.php');
}

?>


<?php
include("connection.php");

error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
  <title>View NoticeBoard</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

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
 <!-- <header class="headerdiv">
    <div class="logodiv">
      <a href="index.html"><img src="mainlogo.gif"></a>
    </div>
  </header>-->
  <?php
  include('navbarforparent.php');

  ?>
  <div class="a">
  <!--<h1 align="center">NoticeBoard</h1>



  <form  method="POST" align="center">
    
    
      <P>Enter ClassID:</p>
        <input type="text" name="cid">
        <P>Enter Session:</p>
        <input type="number" name="session">

       <br><br><button class="btn btn-primary" type="submit" value="submit" name="submit">Submit</button>
     </form>-->
     <br>
     <div class="card">

      <h5 class="card-header info-color white-text text-center py-4">
        <strong style="color: black;">View Child's NoticeBoard</strong>
      </h5>


      <div class="card-body px-lg-5 pt-0">


        <form class="text-center" style="color: black;" method="POST" enctype="multipart/form-data">

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


        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="submit" value="submit" type="submit">Submit</button>



      </form>

    </div>

  </div>








  <br>
  <br>


  <div class="container">
    <div class="jumbotron">

      <div class="card">
        <h5 class="card-header"></h5>
        <div class="card-body">
          <h5 class="card-title">NoticeBoard</h5>

          <table class="table table-dark table-hover table-bordered">
            <thead>
              <tr>
                <th scope="col">Notice Upload Date</th>
                <th scope="col">Class Id</th>
                <th scope="col">Session</th>
                <th scope="col">File Size</th>
                <th scope="col">Notice Title</th>
                <th class="float-right" scope="col">File</th>
              </tr>
            </thead>
            <tbody>
              <tr>


                <?php 

                if(isset($_POST['submit']))
                {
                  $cid=$_POST['cid'];

                  $session=$_POST['session'];


                  $query= "select * from noticeboard as n
                  where n.session='$session' AND n.classid='$cid' ";
                  $res= mysqli_query($conn,$query);

                  if(!$res)
                  {
                    echo "<script type='text/javascript'>alert('Query unsuccessfull!')</script>";
                  }

                  else {



                    while($row = mysqli_fetch_assoc($res))
                      {  ?>


                        <tr>
                          <td><?php echo $row['Date'];?></td>
                          <td><?php echo $row['classid'];?></td>
                          <td><?php echo $row['session'];?></td>

                          <td><?php echo $row['size'];?></td>
                          <td><?php echo $row['noticetitle'];?></td>

                          <td>
                            <a href="uploadnoticeboardforparents.php? file_id= <?php echo $row['id']?> "> Download </a>
                          </td>


                        </tr>


                        <?php
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
