<?php 
session_start();
include('../config.php');
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
<br /> <br />
 <!-------------------Header Section Start---------------->
<?php include "userheader.php"; ?>
<!----------------------Header Section End---------------->
	<br />
<a id="back2Top" title="Back to top" href="#">&#10148;</a>
    <div class="content-wrapper">
         <div class="container">
             <div class="row">         

<div class="col-md-12 col-md-offset-0">
               <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           View Medicines
                        </div>
                        <div class="panel-body">
<form role="form" method="post" action="">
						<div class="form-group">
<label>Search</label>
<input class="form-control" type="text" name="name" required autocomplete="off" />
</div>
 <button type="submit" name="login" class="btn btn-info">Search Medicine </button>
						</form><br>
                        <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Medicine Name</th>
											<th>Photo</th>
											<th>Type</th>
											<th>Cost</th>
											<th>Exp.</th>
											<th>Purpose</th>
                                            <th>Discription</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php 
//require_once("../config.php");
if(isset($_POST['login']))
{
	$name=$_POST['name'];
$query =mysql_query("select * from medicins where mname='$name' or purpose='$name'");
}else{
$query =mysql_query("select * from medicins");
}
         $records = mysql_num_rows($query);
		 $i=1;
while($row = mysql_fetch_array($query))
{
             ?>                                      
                                        <form role="form" method="post" action="admin_user_update.php">
										<tr class="odd gradeX">
                                            <td class="center"><?php echo $i;?></td>
                                            <td class="center"><?php echo $row['mname'];?></td>
                                            <td class="center"><a href="../admin/medicins/<?php echo $row['mphoto'];?>">Download</a></td>
                                            <td class="center"><?php echo $row['type'];?></td>
                                            <td class="center"><?php echo $row['cost'];?></td>
											<td class="center"><?php echo $row['exp'];?></td>
											<td class="center"><?php echo $row['purpose'];?></td>
											<td class="center"><?php echo $row['discrip'];?></td>
                                          </form>
										  <td><a href="medi_delete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to delete?');"" >  <button class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</button></td>
                                          
                                        </tr>
<?php
$i++;
} 
?>                                      
                                    </tbody>
                                </table>
                            </div>                        
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
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
<script>
/*Scroll to top when arrow up clicked BEGIN*/
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});
 /*Scroll to top when arrow up clicked END*/
</script>
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
    <script src="js/fastclick.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/fixed-responsive-nav.js"></script>
</body>
</html>
