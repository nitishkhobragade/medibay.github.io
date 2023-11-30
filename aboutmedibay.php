<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>about medibay</title>
    <meta name="author" content="Adtile">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	
	<link rel="stylesheet" href="css/styled.css">	
	<link rel="stylesheet" href="css/footer.css">
	
	<link rel="shortcut icon" href="img/favicon1.png" type="image/x-icon" />
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <link rel="stylesheet" href="css/ie.css">
    <![endif]-->
    <script src="js/responsive-nav.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<style>
body{
    display: inline-block;
    margin-top: 15px;

}
</style>
  </head>
  <body>
<?php include "header.php"; ?>
<br />
<a id="back2Top" title="Back to top" href="#">&#10148;</a>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
<center><h2><u><font color="red">Medi</font><font color="cyan">Bay</font></u></h2></center>

<p>Medibay Is a Patients Medical Records Management System Developed by the genesys team, this project is developed for helping the peoples</p>

<p>In this Project any patient can register and upload/update his/her medical records and access them anywhere when they require their medical data.</P>

<p>Patient Medical Record Management System can be used by all peoples and institutions especially medical institutions to maintain the medical data of their patients and keep safe. Achieving this objective is difficult using paperwork system or any institutes personal data management system as the information is scattered, can be redundant and collecting relevant information may be very time costing, all these problems are solved using this project.</p>


<?php include "footer.php"; ?>
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
  <script type="text/javascript">

  myHilitor.remove();

</script>

    <script src="js/fastclick.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/fixed-responsive-nav.js"></script>
  </body>
</html>
