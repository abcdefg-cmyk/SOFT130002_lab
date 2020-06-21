<?php
$con = mysqli_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysqli_select_db('pj2-travel',$con);
$sql = "SELECT * from travelimage ";
$result = mysqli_query($sql,$con);
print_r(mysqli_fetch_array($result,$con));

mysqli_close($con);
?>