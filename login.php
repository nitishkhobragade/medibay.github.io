<?php 
session_start();
include('config.php');
error_reporting(0);
if($_SESSION['login']!=''){
$_SESSION['login']='';
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title></title>
    <link rel="stylesheet" href="css/styled.css">
	<link rel="stylesheet" href="css/footer.css">
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	
	<link rel="shortcut icon" href="img/favicon1.png" type="image/x-icon" />
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <link rel="stylesheet" href="css/ie.css">
    <![endif]-->
    <script src="js/responsive-nav.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	

<script type="text/javascript">
function valid()
{
if(document.signup.password.value!= document.signup.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.signup.confirmpassword.focus();
return false;
}
return true;
}
</script>
<script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#emailid").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>    

</head>
<body>

 <!-------------------Header Section Start---------------->
<?php include "loginheader.php"; ?>
<!----------------------Header Section End---------------->
<br /><br />
&nbsp &nbsp &nbsp &nbsp 
    <div class="content-wrapper">
         <div class="container">
             <div class="row">         
<div class="col-md-4 col-sm-4 col-md-offset-0" >
<div class="panel panel-info">
<div class="panel-heading">
<b><font color="red">User Login Form</font></b>
</div>
<div class="panel-body">
<form role="form" method="post">

<div class="form-group">
<label>Enter Username</label><span><font color="red">*</font></span>
<input class="form-control" type="text" name="username" required autocomplete="off" />
</div>
<div class="form-group">
<label>Password</label><span><font color="red">*</font></span>
<input class="form-control" type="password" name="pass" required autocomplete="off"  />
</div>
<div class="form-group">
<label>Select User</label><span><font color="red">*</font></span>
<select class="form-control"  name="user" required autocomplete="off" />
<option value="">Select</option>
<option value="Patient">Patient</option>
<option value="Admin">Admin</option>
</select>
</div>
 <button type="submit" name="login" class="btn btn-info">Login </button>
 <p> Forget Password <a href="forgotpassword.php">click here </a></p>
</form>
 </div>
</div>
</div>
<?php 
if(isset($_POST['login']))
{
$user=$_REQUEST['username'];
$pass=$_REQUEST['pass'];
$type=$_REQUEST['user'];
	if($type=='Patient')
     {
		 $query =mysql_query("select * from user where username='$user' and pass='$pass' and status='active'");
         $records = mysql_num_rows($query);
         $row = mysql_fetch_array($query);
            if ($records==0)
              {
                 echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login.php\';</script>';
              }else{
	              $_SESSION['Id']=$row['0'];
	              $_SESSION['Ccode']=$row['1'];
                  $_SESSION['Pass']=$row['2'];
                  $_SESSION['Cname']=$row['3'];
                  $_SESSION['Caddress']=$row['4'];
                  $_SESSION['CMob']=$row['5'];
                  //header("location:student/stu_profile.php");
				   echo '<script type="text/javascript">alert("welcome to Patient Panel");window.location=\'user/stu_profile.php\';</script>';
                   } 
	 }else{
						    if($type=='Admin')
                                {
									$query =mysql_query("select * from admin where username='$user' and pass='$pass' and status='confirm'");
         $records = mysql_num_rows($query);
         $row = mysql_fetch_array($query);
            if ($records==0)
              {
                 echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'login.php\';</script>';
              }else{
	              $_SESSION['Id']=$row['0'];
	              $_SESSION['Ccode']=$row['1'];
                  $_SESSION['Pass']=$row['2'];
                  $_SESSION['Cname']=$row['3'];
                  $_SESSION['Caddress']=$row['4'];
                  $_SESSION['CMob']=$row['5'];
                  //header("location:admin/stu_profile.php");
				  echo '<script type="text/javascript">alert("welcome to Admin Panel");window.location=\'admin/adm_profile.php\';</script>';
                   }
	                            }else{
									echo '<script type="text/javascript">alert("Invalid User");window.location=\'login.php\';</script>';
	                                 }
	             
	      }

}
?>  
<div class="col-md-8 col-md-offset-0">
               <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          <b><font color="red"> USER SINGUP FORM </font></b>
                        </div>
                        <div class="panel-body">
                            <form name="signup" method="post" onSubmit="return valid();">
<div class="form-group">
<div class="row">
<div class="col-md-6">
<label>Enter Full Name</label><span><font color="red">*</font></span>
<input class="form-control" type="text" name="name" autocomplete="off" required />
</div>
 
<div class="col-md-3">                                      
<label>Enter Gender</label><span><font color="red">*</font></span>
<select class="form-control" type="text" name="gender" autocomplete="off" required />
<option value="">Select Gender</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select>
</div>
<div class="col-md-3">                                      
<label>Enter DOB</label><span><font color="red">*</font></span>
<input class="form-control" type="date" name="dob" autocomplete="off" required />
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<div class="col-md-4">
<label>Mobile Number :</label><span><font color="red">*</font></span>
<input class="form-control" type="text" name="mob" maxlength="10" autocomplete="off" required />
</div>
 
<div class="col-md-8">                                      
<label>Enter Email</label><span><font color="red">*</font></span>
<input class="form-control" type="email" name="email" id="emailid" onBlur="checkAvailability()"  autocomplete="off" required  />
   <span id="user-availability-status" style="font-size:12px;"></span> 
</div>
</div>
</div>

<div class="form-group">
<div class="row">
<div class="col-md-6">
<label>Enter Password</label><span><font color="red">*</font></span>
<input class="form-control" type="password" name="password" autocomplete="off" required  />
</div>
 
<div class="col-md-6">                                      
<label>Confirm Password </label><span><font color="red">*</font></span>
<input class="form-control"  type="password" name="confirmpassword" autocomplete="off" required  />
</div>
</div>
</div>
 <div class="form-group">
<label>Enter Address</label><span><font color="red">*</font></span>
<textarea class="form-control" name="addr" required autocomplete="off" /></textarea>
</div>
 <button type="submit" name="submit" class="btn btn-info">Register </button>   
</form> 
<?php 
if(isset($_POST['submit']))
{
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$pass=$_REQUEST['password'];
$gender=$_REQUEST['gender'];
$dob=$_REQUEST['dob'];
$mob=$_REQUEST['mob'];
$addr=$_REQUEST['addr'];
$query =mysql_query("insert into user (username,pass,name,mob,gender,addr,dob,status) values ('$email','$pass','$name','$mob','$gender','$addr','$dob','active')");
 echo '<script type="text/javascript">alert("Registration Completed Successfully");window.location=\'login.php\';</script>';
}
?>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                            </div>
        </div>
    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
    <!-------------------Footer Section Start---------------->
<?php include "footer.php"; ?>
<!-------------------Footer Section End------------------>

<script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  </script>

    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
	
    <script src="js/fastclick.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/fixed-responsive-nav.js"></script>
</body>
</html>
