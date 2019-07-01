<?php

include 'db.php';
$rn =  $_REQUEST['roll'];
   $r = mysqli_query($con,"delete  from student where roll='$rn' ");

header('location:report.php');


?>