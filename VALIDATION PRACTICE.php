<!DOCTYPE html>
<html>
<head>
	<title>Validation</title>

	<link rel="stylesheet" type="text/css" href="style.css">
		<!--bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<!-- Link is using for google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>
<header>
	<div class="headerdiv">
		<div class="logodiv">
			<img src="mainlogo.gif">
		</div>
	
</div>
</header>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong style="color: black;">Add New Student</strong>
    </h5>

   
    <div class="card-body px-lg-5 pt-0">

      
        <form class="text-center" style="color: black;" method="POST">

            <div class="form-row">
                <div class="col">
                  
                    <div class="md-form">
                    	<label for="materialRegisterFormFirstName">Student ID</label>
                        <input type="text" id="materialRegisterFormFirstName" class="form-control" name="id">
                         <span class="error">*<?php if (isset($stidErr)) echo $stidErr; ?></span>
                        
                    </div>
                </div>
                <div class="col">
                   
                    <div class="md-form">
                    	 <label for="materialRegisterFormLastName">Name</label>
                        <input type="text" id="materialRegisterFormLastName" class="form-control" name="name">
                        <span class="error">*<?php if (isset($nameErr)) echo $nameErr; ?></span>
                    </div>
                </div>
            </div>

           
            <div class="md-form mt-0">
            	<label for="materialRegisterFormEmail">Password</label>
                <input type="password" id="materialRegisterFormEmail" class="form-control" name="pass">
                <span class="error">*<?php if (isset($passErr)) echo $passErr; ?></span>
                
            </div>

            <div class="md-form">
            	<label for="materialRegisterFormPassword">Phone Number</label>
                <input type="phone" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock" name="phone">
                <span class="error">*<?php if (isset($phnErr)) echo $phnErr; ?></span>
                
                
            </div>

          
            <div class="md-form">
            	 <label for="materialRegisterFormPhone">Email</label>
                <input type="email" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="email">
                <span class="error">*<?php if (isset($emailErr)) echo $emailErr; ?></span>
               
                
            </div>
          
            <div class="md-form">
            	<label for="materialRegisterFormPhone">Gender</label>
                <input type="radio" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="sex" value="Male">Male<br>
                 <input type="radio" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="sex" value="Female">Female<br>
                 <span class="error">*<?php if (isset($sexErr)) echo $sexErr; ?></span>
                
                
            </div>
          
            <div class="md-form">
            	<label for="materialRegisterFormPhone">Date of Birth</label>
                <input type="Date" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="dob">
                <span class="error">*<?php if (isset($dobErr)) echo $dobErr; ?></span>
                
               
            </div>
            
            <div class="md-form">
            	 <label for="materialRegisterFormPhone">Admission Date</label>
                <input type="Date" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="addate">
                <span class="error">*<?php if (isset($admdobErr)) echo $admdobErr; ?></span>
               
                
            </div>
            <div class="md-form">
            	<label for="materialRegisterFormPhone">Address</label>
                <input type="" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="add">
                <span class="error">*<?php if (isset($addErr)) echo $addErr; ?></span>
                
                
            </div>
            
            <div class="md-form">
            	<label for="materialRegisterFormPhone">Parent ID</label>
                <input type="" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="pid">
                <span class="error">*<?php if (isset($pidErr)) echo $pidErr; ?></span>
                
                
            </div>
           
            <div class="md-form">
            	<label for="materialRegisterFormPhone">Class ID</label>
                <input type="" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="cid">
                <span class="error">*<?php if (isset($cidErr)) echo $cidErr; ?></span>
                
            </div>

            
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" name="submit" value="submit" type="submit">Submit</button>

            

        </form>

    </div>

</div>



		<?php


function input($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        $data = htmlentities($data);
        return $data;
    }

    $stidErr = $nameErr = $passErr = $phnErr= $emailErr  = $sexErr = $dobErr = $admdobErr = $addErr = $pidErr = $cidErr = "";
    $stid = $name = $pass = $phn = $email = $sex = $dob = $admdob = $addr = $pid = $cid = "";




	if(isset($_POST['submit']))
	{

    if (empty($_POST["id"])) {
            $stidErr = "Enter Student ID";
        } else {
            $stid = input($_POST['id']);
            if (!preg_match("/[a-Z0-9]{,5}^$", $stid)) {
                $passErr = "Please Enter a ID in between 0-5 character";
            } else {
            }
        }






/*
        $stid =$_POST['id'];
        $name =$_POST['name'];
        $pass =$_POST['pass'];
        $phn =$_POST['phone'];
        $email =$_POST['email'];
        $sex =$_POST['sex'];
        $dob =$_POST['dob'];
        $admdob =$_POST['addate'];
        $addr =$_POST['add'];
        $pid =$_POST['pid'];
        $cid =$_POST['cid'];

        if ((!empty($stid))&& (!empty($name))&& (!empty($pass))&& (!empty($phn))&& (!empty($email))&& (!empty($sex))&& (!empty($dob))&&(!empty($admdob))&&(!empty($add))&&(!empty($pid))&&(!empty($cid))) {
        	$query= "INSERT INTO students VALUES('$id','$name','$password','$phone','$email', '$sex', '$dob','$addmissiondate','$address','$parentid','$classid')";

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

	</body>
</html>
*/

</body>
</html>