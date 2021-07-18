<?php
include("connection.php");

error_reporting(0);
?>

<?php  

$output = '';
if(isset($_POST["export"]))
{
                    $date=$_POST['date'];
                      $cid=$_POST['cid'];
                      $sid=$_POST['sid'];
$sql= "select * from attendance as a
                      where a.date='$date' AND a.class_id='$cid' AND a.session='$sid'
                      ;

                      ";
 $result = mysqli_query($conn, $sql);
 if($result)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                      <th> Student ID</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Class ID</th>
                    <th>Session</th>
       
                    </tr>
  ';
  while($row = mysqli_fetch_assoc($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["date"].'</td>  
                         <td>'.$row["attendance"].'</td>  
                         <td>'.$row["class_id"].'</td>  
                         <td>'.$row["session"].'</td> 
                         <td>'.$row["st_id"].'</td> 
                        
       
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