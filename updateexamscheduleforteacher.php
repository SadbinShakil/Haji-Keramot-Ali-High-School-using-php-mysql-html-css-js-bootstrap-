<?php
include("connection.php");

error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Upload Exam Schedule</title>
  <style type="text/css">
    
    .a{
      margin-left: 500px;
    }
  </style>

  <!--bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="style.css">

  
  
</head>
<body>

	<!--<header>
  <div class="headerdiv">
    <div class="logodiv">
      <img src="mainlogo.gif">
    </div>
  
</div>
</header>-->
<?php
                    include('navbarforadmin.php');
            ?>

            <div class="a">
             
              

             <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
             <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
             <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
             <table align="center">

<!--<table align="center">
	<form method="POST" enctype="multipart/form-data" >
	Session:
    <input type="number" name="session"><br>

    Classid:
    <input type="" name="classid"><br>

    Select File to Upload:
    <input type="file" name="file"><br>
  <button type="submit" name="submit">Submit</button>
</form>

</table>

</body>
</html>-->


<div class="card">

  <h5 class="card-header info-color white-text text-center py-4">
    <strong style="color: black;">Update Exam Schedule</strong>
  </h5>

  
  <div class="card-body px-lg-5 pt-0">

    
    <form class="text-center" style="color: black;" method="POST" enctype="multipart/form-data">

      <div class="form-row">
        <div class="col">
          
          <div class="md-form">
            <label for="">Session</label>
            <input type="number" id="" class="form-control" name="session">
            
          </div>
        </div>
        <div class="col">
         
          <div class="md-form">
           <label for="">Class ID</label>
           <input type="" id="" class="form-control" name="classid">
         </div>
       </div>
     </div>

     
     <div class="md-form mt-0">
      <label for="">Select a File to Upload</label>
      <input type="file" id="" class="form-control" name="file">
      
    </div>


    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="submit" value="submit" type="submit">Submit</button>

    

  </form>

</div>

</div>
</div>
</table>

</body>
</html>

<?php
if (isset($_POST['submit'])){
	$filename=$_FILES['file']['name'];
	$sess=$_POST['session'];
	$cid=$_POST['classid'];

	$destination= 'files/' . $filename;
	$extension= pathinfo($filename,PATHINFO_EXTENSION);
	$file= $_FILES['file']['tmp_name'];
	$size= $_FILES['file']['size'];

  $date = date('Y/m/d');

  if(!in_array($extension,['zip','pdf','png','docx','jpg','jpeg','xls'])){
   // echo "File Extension is not Supported";
     echo "<script type='text/javascript'>alert('File Extension is not Supported!')</script>";
  }
  elseif ($size>1000000) {
    //echo "File is too learge";
     echo "<script type='text/javascript'>alert('File is too Large!')</script>";
  }
  else{
    if(move_uploaded_file($file, $destination)){
     $query= "INSERT INTO examschedule(classid,session,size,filename,Date) VALUES('$cid','$sess','$size','$filename','$date')";

     $data=mysqli_query($conn,$query);
     if($data){
      
       echo "<script type='text/javascript'>alert('ExamSchedule Updated successfully!')</script>";
     }
     else{
       echo "<script type='text/javascript'>alert('ExamSchedule Update unsuccessfull!')</script>";
     }
   }
 }
}
?>

<?php

if (isset($_GET['file_id'])) {

 $id=$_GET['file_id'];

 $sql= "SELECT * FROM examschedule WHERE id='$id' ";

 $res=mysqli_query($conn,$sql);

 $file= mysqli_fetch_assoc($res);

 $filepath= 'files/' . $file['filename'];

 echo $file['filename'];
 echo "string1";

 if(file_exists($filepath)){
  header('Content-Type: Application/octet-stream');
  header('Content-Description: File Transfer');
  header('Content-Disposition: attachment; filename=' . basename($filepath));
  header('Expires: 0');
  header('Cache-Control: must-revalidate');
  header('Pragma: public');
  header('Content-Length:' . filesize('files/'.$file['filename']));

  readfile('/files'.$file['filename']);

}

}

?>


