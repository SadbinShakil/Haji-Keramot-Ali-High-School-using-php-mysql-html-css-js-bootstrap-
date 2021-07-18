<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:adminLoginform.php');
}

?>



<?php
include("connection.php");

error_reporting(0);
?>


<?php

function input($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    $data = htmlentities($data);
    return $data;
}

$tidErr = $nameErr = $passErr = $phnErr= $emailErr  = $sexErr = $dobErr = $addErr = $hdobErr = $salErr = "";
$tid = $name = $pass = $phn = $email = $sex = $dob = $add = $hdate = $salary = "";


if ($_SERVER["REQUEST_METHOD"] == "POST")
{

   if (empty($_POST["id"])) {
    $tidErr = 'Teacher ID is requred';
} else {
    $tid = input($_POST["id"]);
}


if (empty($_POST["name"])) {
    $nameErr = 'Name is requred';
} else {
    $name = input($_POST["name"]);
}

if (empty($_POST["pass"])) {
    $passErr = "Enter password";
} else {
    $pass = input($_POST['pass']);
    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,20}$/', $pass)) {
        $passErr = "Use at least one Upper and one Lower case and a number. Should be in between 8-20 character'";
    }
}

if (empty($_POST["phone"])) {
    $phnErr = "Please Enter phone number";
} else {
    $phn = input($_POST["phone"]);
    if (!preg_match('/^\+?(88)?0?1[356789]+[0-9]{8}$/', $phn)) {
        $phnErr = "Enter a valid BD phone number";
    } 
}

if (empty($_POST["email"])) {
    $emailErr = "Email is requred";
} else {
    $email = input($_POST['email']);
    if (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email)) {
        $emailErr = "Enter a valid email";
    } 
}

if (empty($_POST["sex"])) {
    $sexErr = 'Gender is requred';
} else {
    $sex = input($_POST["sex"]);
}

if (empty($_POST["dob"])) {
    $dobErr = 'Date of Birth is requred';
} else {
    $dob = input($_POST["dob"]);
}

if (empty($_POST["add"])) {
    $addErr = 'Address is requred';
} else {
    $add = input($_POST["add"]);
}

if (empty($_POST["addate"])) {
    $hdobErr = 'Hire Date is requred';
} else {
    $hdate = input($_POST["addate"]);
}

if (empty($_POST["salary"])) {
    $salErr = 'Salary is requred';
} else {
    $salary = input($_POST["salary"]);
}



if (empty($tidErr) && empty($nameErr) && empty($passErr) && empty($emailErr) && empty($phnErr)  && empty($sexErr) && empty($dobErr) && empty($hdobErr)  && empty($salErr)  && empty($addErr)) {
    $str_pass= password_hash($pass, PASSWORD_BCRYPT);
    $query= $query= "INSERT INTO teachers(id,name,password,phone,email,address,sex,dob,hiredate,salary) VALUES('$tid','$name','$str_pass','$phn','$email', '$add', '$sex','$dob','$hdate','$salary')";

    $data=mysqli_query($conn,$query);

    if($data){

     echo "<script type='text/javascript'>alert('Added successfully!')</script>";
       //header('location:teacherF.php');
 }
 else{
     echo "<script type='text/javascript'>alert('Added unsuccessfull!')</script>";
 }

}
}


?>


<!DOCTYPE html>
<html>
<head>
    <title>Teacher Add Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        .error {
         color: #FF0000;
     }

     .aa{
        margin-left: 500px;
    }
</style>

<!-- Link is using for google fonts -->
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

</head>
<body class="addstudent">
   <!-- <header>
    <div class="headerdiv">
        <div class="logodiv">
            <img src="mainlogo.gif">
        </div>
    
</div>
</header>-->
<?php
include('navbarforadmin.php');
?>

<div class="aa">
      <!--<h2 align="center" color="black" font-weight=30px>Add New Teacher</h2>
        <form  method="POST" align="center">
                   
                        
                <P>Enter Teacher ID :</p>
                <input type="text" name="id" required="">
                <P>Enter Name:</p>
                <input type="text" name="name" required="">
                <P>Enter Password:</p>
                <input type="Password" name="pass" required="">
                <P>Enter Phone Number:</p>
                <input type="Number" name="phone" required="">
                <P>Enter Email:</p>
                <input type="email" name="email" required="">
                <P>Gender:</p>
                <input type="radio" name="sex" value="Male">Male<br>
                <input type="radio" name="sex" value="Female">Female<br>

                <P>Enter Date of Birth:</p>
                <input type="Date" name="dob" required="">
                <P>Enter Hire Date:</p>
                <input type="Date" name="addate" required="">
                <P>Enter Address:</p>
                <input type="text" name="add" required="">
                
                <P>Enter Salary:</p>
                <input type="Number" name="salary" required="">
                

                <br><br><button class="btn btn-primary" type="submit" value="submit" name="submit">Submit</button>
            </form>-->


            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!--<h2 align="center" font-weight=30px><b>Add New Student</b></h2>


 <section class="container-fluid">
    <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-3">
            <form class="form-container" method="POST">
  <div class="form-group">
    <label for="ex">Student ID</label>
    <input type="" class="form-control" name="id">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input type="name" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label for="ex">Password</label>
    <input type="password" class="form-control" name="pass">
  </div><div class="form-group">
    <label for="ex">Phone Number</label>
    <input type="Number" class="form-control" name="phone">
  </div><div class="form-group">
    <label for="ex">Email Address</label>
    <input type="email" class="form-control" name="email">
  </div><div class="form-group">
    <label for="ex">Gender</label>
    <input type="radio" class="form-control" name="sex" value="Male">Male<br>
    <input type="radio" class="form-control" name="sex" value="Female">Female
  </div><div class="form-group">
    <label for="ex">Date of Birth</label>
    <input type="Date" class="form-control" name="dob">
  </div><div class="form-group">
    <label for="ex">Admission Date</label>
    <input type="Date" class="form-control" name="addate">
  </div><div class="form-group">
    <label for="ex">Address</label>
    <input type="" class="form-control" name="add">
  </div><div class="form-group">
    <label for="ex">Parent ID</label>
    <input type="" class="form-control" name="pid">
  </div>
  <div class="form-group">
    <label for="ex">Class ID</label>
    <input type="" class="form-control" name="cid">
  </div>
 
  <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
            
        </section>
        
    </section>
</section>

-->
<!-- Material form register -->
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong style="color: black;">Add New Teacher</strong>
    </h5>


    <div class="card-body px-lg-5 pt-0">


        <form class="text-center" style="color: black;" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

            <div class="form-row">
                <div class="col">

                    <div class="md-form">
                        <label for="">Teacher ID</label>
                        <input type="text" id="" class="form-control" name="id">
                        <span class="error">*<?php if (isset($tidErr)) echo $tidErr; ?></span>
                        
                    </div>
                </div>
                <div class="col">

                    <div class="md-form">
                       <label for="">Name</label>
                       <input type="text" id="" class="form-control" name="name">
                       <span class="error">*<?php if (isset($nameErr)) echo $nameErr; ?></span>
                   </div>
               </div>
           </div>

           
           <div class="md-form mt-0">
            <label for="">Password</label>
            <input type="password" id="" class="form-control" name="pass">
            <span class="error">*<?php if (isset($passErr)) echo $passErr; ?></span>

        </div>

        <div class="md-form">
            <label for="">Phone Number</label>
            <input type="phone" id="" class="form-control" aria-describedby="" name="phone">
            <span class="error">*<?php if (isset($phnErr)) echo $phnErr; ?></span>


        </div>


        <div class="md-form">
           <label for="">Email</label>
           <input type="email" id="" class="form-control" aria-describedby="" name="email">
           <span class="error">*<?php if (isset($emailErr)) echo $emailErr; ?></span>


       </div>

       <div class="md-form">
        <label for="">Gender</label>
        <input type="radio" id="" class="form-control" aria-describedby="" name="sex" value="Male">Male<br>
        <input type="radio" id="" class="form-control" aria-describedby="" name="sex" value="Female">Female<br>
        <span class="error">*<?php if (isset($sexErr)) echo $sexErr; ?></span>


    </div>

    <div class="md-form">
        <label for="">Date of Birth</label>
        <input type="Date" id="" class="form-control" aria-describedby="" name="dob">
        <span class="error">*<?php if (isset($dobErr)) echo $dobErr; ?></span>


    </div>

    <div class="md-form">
       <label for="">Address</label>
       <input type="" id="" class="form-control" aria-describedby="" name="add">
       <span class="error">*<?php if (isset($addErr)) echo $addErr; ?></span>


   </div>
   <div class="md-form">
    <label for="">Hire Date</label>
    <input type="Date" id="" class="form-control" aria-describedby="" name="addate">
    <span class="error">*<?php if (isset($hdobErr)) echo $hdobErr; ?></span>


</div>

<div class="md-form">
    <label for="">Salary</label>
    <input type="number" id="" class="form-control" aria-describedby="" name="salary">
    <span class="error">*<?php if (isset($salErr)) echo $salErr; ?></span>


</div>




<button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="submit" value="submit" type="submit">Submit</button>



</form>

</div>
</div>

</div>
</body>
</html>