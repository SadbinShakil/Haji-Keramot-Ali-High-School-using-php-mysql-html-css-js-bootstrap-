<<?php
include("connection.php");

error_reporting(0);
?>


<!DOCTYPE html>
<html>
<head>
	<title>input</title>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <!--bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style type="text/css">
     table, th, td {
      border: 1px solid black;
  }



</style>

</head>
<body>
    <header class="headerdiv">
        <div class="logodiv">
            <a href="index.html"><img src="mainlogo.gif"></a>
        </div>
    </header>
    <form  method="POST">
     
        
        <P>Enter FirstName to See the Data:</p>
            <input type="text" name="name">
            <br><br><button class="btn btn-primary" type="submit" value="submit" name="submit">Submit</button>
        </form>


        <?php

        if(isset($_POST['submit']))
        {
            $name=$_POST['name'];
            
            $sql="select * 
            from students as s
            where '$name'=s.name;

            ";
            $res=mysqli_query($conn,$sql);

            if(!$res)
            {
               echo "<script type='text/javascript'>alert('Query Unsuccessful!')</script>";
           }

           else {

             while($row = mysqli_fetch_assoc($res))
             {
                 echo "<table class='aaa'>";
                 echo " <tr> ";
                 echo "<th> ID";  echo "</th> ";
                 echo "<th>Name";  echo "</th> ";
                 
                 echo"</tr> ";

                 
                 echo "<tr>";
                 echo "<td>";
                 echo $row['id'];
                 echo "</td>";            
                 echo "<td>";
                 echo $row['name'];
                 echo "</td>";
                 
                 
                 



                 echo "</table>";
                 

             }

         }
     }


     ?>
 </body>
 </html>



 $row = "whatever"
 <FORM METHOD= "POST">
    <table>
        <? php
        foreach $i in $row
        {
            <tr>
            <td>
            id
            </td>
            <td>
            name
            </td>
            <td>
            emial
            </td>
            <td>
            <input type="radiobutton" name=$i.id>  10
            </td>