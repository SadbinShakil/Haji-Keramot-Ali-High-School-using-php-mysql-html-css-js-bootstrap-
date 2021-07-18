<?php

session_start();
?>


<?php
include("connection.php");

error_reporting(0);
?>

<?php

if(isset($_POST['submit']))
{
  $username=$_POST['username'];
  $password=$_POST['pass'];

  
  $sql="select * 
  from teachers as t
  where '$username'= t.name ;";
  $res=mysqli_query($conn,$sql);

  $row = mysqli_fetch_assoc($res);

    $check_pass= password_verify($password, $row['password']);

  
  if($check_pass){
   //echo "Login Successful";
   echo "<script type='text/javascript'>alert('Login Successful')</script>";
   $_SESSION['username']=$username;
    echo "<script> window.location='teacherF.php'</script>";
   //header('location:teacherF.php');
 }
 else{
   echo "<script type='text/javascript'>alert('Login successfull! Incorrect Username or Password')</script>";
    echo "<script> window.location='teacherLoginform.php'</script>";
   //header('location:teacherLoginform.php');
 }      
}
?>