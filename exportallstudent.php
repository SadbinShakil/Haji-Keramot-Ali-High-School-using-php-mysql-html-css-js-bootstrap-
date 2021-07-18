<?php
include("connection.php");

error_reporting(0);
?>

<?php  

$output = '';
if(isset($_POST["export"]))
{
                    $cid=$_POST['cid'];
                    $session=$_POST['session'];
                    $cname=$_POST['cname'];
$sql="select *  from class as c
       where c.subject='$cname' AND c.session='$session' AND c.classid='$cid' " ;
 $result = mysqli_query($conn, $sql);
 if($result)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                         <th>Subject</th>  
                         <th>Classid</th>  
                         <th>Time</th>  
                         <th>Session</th> 
       
                    </tr>
  ';
  while($row = mysqli_fetch_assoc($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["subject"].'</td>  
                         <td>'.$row["classid"].'</td>  
                         <td>'.$row["time"].'</td>  
                         <td>'.$row["session"].'</td>  
       
                    </tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
 }
}
?>