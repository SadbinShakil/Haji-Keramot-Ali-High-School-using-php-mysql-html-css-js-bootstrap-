
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

$cidErr = $sessErr = $subErr= $timeErr ="";
$cid = $sess =$sub= $time ="";


if ($_SERVER["REQUEST_METHOD"] == "POST")
{

   if (empty($_POST["cid"])) {
    $cidErr = 'Class ID is requred';
} else {
    $cid = input($_POST["cid"]);
}


if (empty($_POST["sess"])) {
    $sessErr = 'Session is requred';
} else {
    $sess = input($_POST["sess"]);
}

if (empty($_POST["sub"])) {
    $subErr = 'Subject is requred';
} else {
    $sub = input($_POST["sub"]);
}

if (empty($_POST["time"])) {
    $timeErr = "Enter Time";
} else {
    $time = input($_POST['time']);
    
}






if (empty($cidErr) && empty($sessErr) && empty($timeErr) && empty($subErr)) {
    
    $query= "INSERT INTO class(classid,session,time,subject) VALUES('$cid','$sess','$time','$sub')";
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
    <title>Assign Class Time</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <!-- Link is using for google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

    <style>
        .error {color: #FF0000;}

        .a{
            margin-left: 500px;
            margin-top: 40px;
        }
        .ad{
            background: url('bg3.jpg')no-repeat center center fixed ;
            -moz-background-size: cover;
            -webkik-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            font-family: 'Josefin Sans', sans-serif;
        }

        
    </style>

    
    
</head>
<body class="ad">
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

<div class="a">



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
       <!--<h2 align="center" color="black" font-weight=30px>Add New Admin</h2>
        <form  method="POST" align="center">
                   
                        
                <P>Enter Admin ID :</p>
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
                
                

                <br><br><button class="btn btn-primary" type="submit" value="submit" name="submit">Submit</button>
            </form>-->
            <!-- Material form register -->
            <div class="card">

                <h5 class="card-header info-color white-text text-center py-4">
                    <strong style="color: black;">Assign Class Time</strong>
                </h5>


                <div class="card-body px-lg-5 pt-0">


                    <form class="text-center" style="color: black;" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

                        <div class="form-row">
                            <div class="col">

                                <div class="md-form">
                                    <label for="">Class ID</label>
                                    <input type="" id="" class="form-control" name="cid">
                                    <span class="error">*<?php if (isset($cidErr)) echo $cidErr; ?></span>

                                </div>
                            </div>
                            <div class="col">

                                <div class="md-form">
                                   <label for="">Session</label>
                                   <input type="number" id="" class="form-control" name="sess">
                                   <span class="error">*<?php if (isset($sessErr)) echo $sessErr; ?></span>
                               </div>
                           </div>
                       </div>

                       <div class="col">

                                <div class="md-form">
                                   <label for="">Subject</label>
                                   <input type="text" id="" class="form-control" name="sub">
                                   <span class="error">*<?php if (isset($subErr)) echo $subErr; ?></span>
                               </div>
                           </div>


                       <div class="md-form mt-0">
                        <label for="">Time</label>
                        <input type="Time" id="" class="form-control" name="time">
                        <span class="error">*<?php if (isset($timeErr)) echo $timeErr; ?></span>

                    </div>

                    
            
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="submit" value="submit" type="submit">Submit</button>

            

        </form>
    </div>
</div>

</div>
</body>
</html>