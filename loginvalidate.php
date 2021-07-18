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
  from users
  where '$username'=username AND '$password'=password;";
  $res=mysqli_query($conn,$sql);

  $row = mysqli_fetch_assoc($res);

  
  if($row['username']==$username && $row['password']==$password){
   echo "Login Successful";
   header('location:teacherF.php');
 }
 else{
   echo "Login Unsuccessful";
   header('location:index.html');
 }      
}
?>