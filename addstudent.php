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


<?php

function input($data)
{
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    $data = htmlentities($data);
    return $data;
}

$stidErr = $nameErr = $passErr = $phnErr= $emailErr  = $sexErr = $dobErr = $admdobErr = $addErr = $pidErr = $cidErr = $pnameErr = $pphnErr = $ppassErr = $sidErr = "";
$stid = $name = $pass = $phn = $email = $sex = $dob = $admdob = $addr = $pid= $sid = $pname = $pphn = $ppass = $cid = "";


if ($_SERVER["REQUEST_METHOD"] == "POST")
{

   if (empty($_POST["id"])) {
    $stidErr = 'Student ID is requred';
} else {
    $stid = input($_POST["id"]);
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

if (empty($_POST["addate"])) {
    $admdobErr = 'Admission Date is requred';
} else {
    $admdob = input($_POST["addate"]);
}

if (empty($_POST["add"])) {
    $addErr = 'Address is requred';
} else {
    $add = input($_POST["add"]);
}

if (empty($_POST["pid"])) {
    $pidErr = 'Parent ID is requred';
} else {
    $pid = input($_POST["pid"]);
}
if (empty($_POST["pname"])) {
    $pnameErr = 'Parent Name is requred';
} else {
    $pname = input($_POST["pname"]);
}
if (empty($_POST["pphn"])) {
    $pphnErr = 'Parent Phn number is requred';
} else {
     $pphn = input($_POST["pphn"]);
    if (!preg_match('/^\+?(88)?0?1[356789]+[0-9]{8}$/', $pphn)) {
        $pphnErr = "Enter a valid BD phone number";
    } 
}
if (empty($_POST["ppass"])) {
    $ppassErr = 'Parent Password is requred';
} else {
    $ppass = input($_POST['ppass']);
    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,20}$/', $ppass)) {
        $ppassErr = "Use at least one Upper and one Lower case and a number. Should be in between 8-20 character'";
    }
}
if (empty($_POST["cid"])) {
    $cidErr = 'Class ID is requred';
} else {
    $cid = input($_POST["cid"]);
}
if (empty($_POST["sid"])) {
    $sidErr = 'Session is requred';
} else {
    $sid = input($_POST["sid"]);
}


if (empty($stidErr) && empty($nameErr) && empty($passErr) && empty($emailErr) && empty($phnErr)  && empty($sexErr) && empty($dobErr) && empty($admdobErr)  && empty($pidErr)  && empty($cidErr)  && empty($addErr)) {
    $str_pass= password_hash($pass, PASSWORD_BCRYPT);
     $str_ppass= password_hash($ppass, PASSWORD_BCRYPT);

    $query= "INSERT INTO students(id,name,password,phone,email,sex,dob,addmissiondate,session,address,parentid,parentname,parentphone,parentpass,classid) VALUES('$stid','$name','$str_pass','$phn','$email', '$sex', '$dob','$admdob','$sid','$add','$pid','$pname','$pphn','$str_ppass','$cid')";


    $query2= "INSERT INTO parents(id,password,name,phone) VALUES('$pid','$str_ppass','$pname','$pphn')";

    $data=mysqli_query($conn,$query);
     $data=mysqli_query($conn,$query2);

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
    <title>Student Add Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        .error {color: #FF0000;}

        .a{
            margin-left: 450px;
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
include('navbarforteacher.php');

?>
<div class="a">




    <!--<h2 align="center" color="black" font-weight=30px>Add New Student</h2>
        <form  method="POST" align="center">
                   
                        
                <P>Enter Student ID :</p>
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
                <P>Enter Admission Date:</p>
                <input type="Date" name="addate" required="">
                <P>Enter Address:</p>
                <input type="text" name="add" required="">
                <P>Enter Parent ID:</p>
                <input type="text" name="pid" required="">
                <P>Enter Class ID:</p>
                <input type="text" name="cid" required="">
                

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
        <strong style="color: black;">Add New Student</strong>
    </h5>


    <div class="card-body px-lg-5 pt-0">


        <form class="text-center" style="color: black;" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

            <div class="form-row">
                <div class="col">

                    <div class="md-form">
                        <label for="">Student ID</label>
                        <input type="text" id="" class="form-control" name="id">
                        <span class="error">*<?php if (isset($stidErr)) echo $stidErr; ?></span>
                        
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
       <label for="">Admission Date</label>
       <input type="Date" id="" class="form-control" aria-describedby="" name="addate">
       <span class="error">*<?php if (isset($admdobErr)) echo $admdobErr; ?></span>


   </div>
   <div class="md-form">
    <label for="">Address</label>
    <input type="" id="" class="form-control" aria-describedby="" name="add">
    <span class="error">*<?php if (isset($addErr)) echo $addErr; ?></span>


</div>

<div class="md-form">
    <label for="">Parent ID</label>
    <input type="" id="" class="form-control" aria-describedby="" name="pid">
    <span class="error">*<?php if (isset($pidErr)) echo $pidErr; ?></span>


</div>
<div class="md-form">
    <label for="">Parent Name</label>
    <input type="" id="" class="form-control" aria-describedby="" name="pname">
    <span class="error">*<?php if (isset($pnameErr)) echo $pnameErr; ?></span>


</div>
<div class="md-form">
    <label for="">Parent Phone Number</label>
    <input type="" id="" class="form-control" aria-describedby="" name="pphn">
    <span class="error">*<?php if (isset($pphnErr)) echo $pphnErr; ?></span>


</div>

<div class="md-form">
    <label for="">Parent Password</label>
    <input type="password" id="" class="form-control" aria-describedby="" name="ppass">
    <span class="error">*<?php if (isset($ppassErr)) echo $ppassErr; ?></span>


</div>



<div class="md-form">
    <label for="">Class ID</label>
    <input type="" id="" class="form-control" aria-describedby="" name="cid">
    <span class="error">*<?php if (isset($cidErr)) echo $cidErr; ?></span>

</div>
<div class="md-form">
    <label for="">Session</label>
    <input type="" id="" class="form-control" aria-describedby="" name="sid">
    <span class="error">*<?php if (isset($sidErr)) echo $sidErr; ?></span>

</div>


<button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="submit" value="submit" type="submit">Submit</button>



</form>

</div>
</div>

</div>
</body>
</html>