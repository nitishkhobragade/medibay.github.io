<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>medibay home</title>
    <meta name="author" content="Adtile">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/aboutus.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/footer.css">
	
	<link rel="shortcut icon" href="img/favicon1.png" type="image/x-icon" />
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <link rel="stylesheet" href="css/ie.css">
    <![endif]-->
    <script src="js/responsive-nav.js"></script>
  </head>
  <body>
<?php include "header.php"; ?>
<br />
<a id="back2Top" title="Back to top" href="#">&#10148;</a>

<div class="myteam">
<center>
<h2>About Genesys Team</h2>
</center>
<p><u><font color="red" size="5px">Gene</font><font color="blue" size="5px">sys</font></u> Team is the name given to our team of seven team members we are students of computer science engineering , and we develop projects for the help of the peoples our teams speciality is to develop web based projects in usually php language using html,css & js also we are creating a web portal for technical help of the peoples , technical help like problems related to computer , smartphone , or netork related problems , people can ask us the queries related to their problem and we will try to give the possible solution we can give , for more information you can Developer through mail, whatsapp, twitter , or contact number we provided in our website </p>
<br /><br />
<center>
<h3>Some information about this team's members are given below </h3>
</center>
    <section id="aboutus">
<div class="container12">
  <div style="text-align:center">
    <h2><a name="">Nitish Khobragade</a></h2>
   <b> <p>Developer , Coder , Analyst</p> </b>
  </div>
  <div class="row12">
    <div class="column12">
<img src="img/nitish3.jpeg" style="width:100%">
    </div>
	 <div class="column12">
<p> Support Group Member</p>
<p> Nitish Khobragade is the leader of team genesys and has developed this project
using analysis of this project and by coding , developed this project with help of other team members</p>
    </div>
  </div>
</div>
<br /><br /><br />
<div class="container12">
  <div style="text-align:center">
    <h2><a name="">Poonam Bhelave</a></h2>
   <b> <p>Design , Maintenance</p> </b>
  </div>
  <div class="row12">
    <div class="column12">
<p> Support Group Member</p>
<p> Miss Poonam Bheave is a member of team genesys and played a very important role in this projects
she done the designing of the project and also maintaining the whole project</p>
    </div>
	 <div class="column12">
<img src="img/poonam3.jpg" style="width:100%">
    </div>
  </div>
</div>
<br /><br /><br /><br />


<br /><br /><br />
    </section>
</div>
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
