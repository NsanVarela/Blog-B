<?php 
$con = mysqli_connect("localhost","root","root");

if (!$con)
{
  die();
}

mysqli_select_db($con, "dotcode");
?>