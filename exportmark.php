<?php
include("connection.php");

error_reporting(0);
?>

<?php  

$output = '';
if(isset($_POST["export"]))
{
                    $cid=$_POST['cid'];
                    $sub=$_POST['subid'];
                    $session=$_POST['session'];
                    $term=$_POST['term'];
$sql= "select * from grade as g
                where g.session='$session' AND g.courseid='$sub' AND g.classid='$cid'  AND g.term='$term' 
                ;

                ";
 $result = mysqli_query($conn, $sql);
 if($result)
 {
  $output .= '
   <table class="table" bordered="1">  
                    <tr>  
                      <th>Student ID</th>
                      <th>Subject</th>
                      <th>Class ID</th>
                      <th>Session</th>
                      <th>Term</th>
                      <th>Marks</th> 
       
                    </tr>
  ';
  while($row = mysqli_fetch_assoc($result))
  {
   $output .= '
    <tr>  
                         <td>'.$row["studentid"].'</td>  
                         <td>'.$row["subject"].'</td>  
                         <td>'.$row["classid"].'</td>  
                         <td>'.$row["session"].'</td> 
                         <td>'.$row["term"].'</td> 
                         <td>'.$row["grade"].'</td>
       
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