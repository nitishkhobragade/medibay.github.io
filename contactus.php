<?php 

include('config.php');
$fname=$_REQUEST['firstname'];
//$mreport=$_REQUEST['mreport'];
$lname=$_REQUEST['lastname'];
$country=$_REQUEST['country'];
$consub=$_REQUEST['consub'];
$subject=$_REQUEST['subject'];

date_default_timezone_set("Asia/Kolkata");
$apply=date("Y-m-d");
$status="pending";
$query =mysql_query("insert into contact(fname,lname,country,consub,subject,apply) values ('$fname','$lname','$country','$consub','$subject','$apply')");
 echo '<script type="text/javascript">alert("Information Submitted");window.location=\'index.php\';</script>';

?>