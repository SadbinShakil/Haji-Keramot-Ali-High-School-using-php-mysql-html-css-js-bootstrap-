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
        $pid=$_POST['pid'];
         $password=$_POST['pass'];

      
       $sql="select * 
       from parents as p
       where p.id='$pid' ";
       
        $res=mysqli_query($conn,$sql);
         $row=mysqli_fetch_assoc($res);

         $check_pass= password_verify($password, $row['password']);

           if ($check_pass) {
           		 echo "<script type='text/javascript'>alert('Login successfull!')</script>";
                //$_SESSION['userid']=$pid;
               $_SESSION['userid']=$row['name'];
           		echo "<script> window.location='parentF.php'</script>";
           	}
           	else{
           		 echo "<script type='text/javascript'>alert('Login unsuccessfull! Wrong Username or Password')</script>";
               echo "<script> window.location='parentLoginform.php'</script>";
                //header('location:parentLoginform.php');
           		
           	}    
            }  
	
?>