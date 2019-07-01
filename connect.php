<?php
include 'db.php';
$name=$_REQUEST['t1'];
$roll=$_REQUEST['t2'];
$email=$_REQUEST['t3'];
$mob=$_REQUEST['t4'];
$mac=$_REQUEST['t5'];
$x=mysqli_query($con,"insert into student values('$name','$roll','$email','$mob','$mac')");
if($x)
{
echo"Record Inserted Successfully";
}
else
{
echo"Error Occured";
}
?>