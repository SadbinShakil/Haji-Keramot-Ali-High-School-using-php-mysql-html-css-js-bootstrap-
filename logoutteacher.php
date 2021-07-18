<?php
session_start();

session_destroy();
echo "<script type='text/javascript'>alert('You Are Logged Out!')</script>";
header('location:teacherLoginform.php');

?>