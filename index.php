
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>medibay home</title>
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

  </head>
  <body id="content">
<?php include "mainheader.php"; ?>
	<br />
<a id="back2Top" title="Back to top" href="#">&#10148;</a>

<div class="sticky1">
<p class="s"><input type="search" class="mySearch" id="text-search" placeholder="search text" /></p>
</div>
<section>
<div class="mainlogo">
 <img src="img/logo1.png" style="width:100%" height="400px">
 <div class="colbtn">
 <a href="#get-start">Get Started</a>
 </div>
</div>
</section>

 <p id="get-start"> </p>
 <p></p>
 <p></p>
    <section id="home">
    <div class="container4">	
      <div style="text-align:center">
	   <p id=" <p id="get-start"> </p> </p>
        <h2><a name=""><u><font color="yellow" size="5px">Medi</font><font color="blue" size="5px">Bay</font></u></a></h2>      
      </div>
      <div class="row4">
        <div class="column4">		
		<h1><u><font color="red">Our</font> <font color="teal">Message</font></u></h1>
          <b> <p>Doctors won’t make you healthy</p>
            <p> Nutritionists won’t make you slim.</p>
            <p> Teachers won’t make you smart.</p>
            <p> Gurus won’t make you calm.</p>
              <p> Mentors won’t make you rich.</p>
              <p>Trainers won’t make you fit.</p>
              <p> Ultimately, you have to take responsibility. Save yourself<p> </b>
         </div>
        <div class="column4">


        <div class="innerdiv">
          <center> <h2><a name="login"> Registration / Login</a></h2> </center>
              <button id="btn001" class="btnr btn1"><a href="login.php">Sign Up</a></button>


          	 <button id="btn002" class="btnr btn2"><a href="login.php">Login</a></button>
        </div>

              <div id="id01" class="modal1">

<span onclick="document.getElementById('id01').style.display='none'" class="close01" title="Close Modal"><font color="red">×</font></span>
                  <form class="modal-content1 animate" action="/action_page.php">
                      <div class="container1">
          			<h3>Registration Form</h3>
                          <label><b>Email</b></label>
                          <input type="text" placeholder="Enter Email" name="email" required>
                          <label><b>Password</b></label>
                          <input type="password" placeholder="Enter Password" name="psw" required>
                          <label><b>Repeat Password</b></label>
                          <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
                          <input type="checkbox"> Remember me
                          <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                          <div class="clearfix">
                              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

                              <button type="submit" class="signupbtn">Sign Up</button>
                          </div>
                      </div>
                  </form>
              </div>
           <div id="id02" class="modal2">
                  <span onclick="document.getElementById('id02').style.display='none'" class="close01" title="Close Modal"><font color="red">×</font></span>
                  <form class="modal-content1 animate" action="/action_page.php">
                      <div class="container2">
                          <h3>Login Form</h3>
                          <label><b>Email</b></label>
                          <input type="text" placeholder="Enter Email" name="email" required>
                          <label><b>Password</b></label>
                          <input type="password" placeholder="Enter Password" name="psw" required>
                          <input type="checkbox"> Remember me
                          <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                          <div class="clearfix">
 <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn2">Cancel</button>
 <button type="submit" class="loginbtn2">Login</button>
                          </div>
                      </div>
                  </form>
              </div>
        </div>
      </div>
    </div>
 </section>
 &nbsp &nbsp
<center><p><font color="blue" size="7">CONTENTS</font></p></center>
 <br /><br />
 	    <section id="cards">
<div class="cardfolder">
<div class="containerc">
  <div class="cardc">
    <div class="contentc">
      <h2>MediBay</h2>
      <p>Medibay Service is introduced for the help of the patients </p>
      <a href="aboutmedibay.php">Read More</a>
    </div>
  </div>
  <div class="cardc">
    <div class="contentc">
      <h2>Popular Drugs</h2>
      <p>Drugs are used to make medicines and curing diseases.</p>
      <a href="medicines.php">Read More</a>
    </div>
  </div>
  <div class="cardc">
    <div class="contentc">
      <h2>Medicines</h2>
      <p>Medicines are used for medical treatment, and use for treatment of diseases.</p>
      <a href="medicinedetails.php">Read More</a>
    </div>
  </div>
  <div class="cardc">
    <div class="contentc">
      <h2>Genisys Team</h2>
      <p>Our Team Is making projects and giving services for helping the peoples.</p>
      <a href="ourteam.php">Read More</a>
    </div>
  </div>
</div>
</div>
<br />
    </section>

    <section id="news">
<p></p>
  <h2>News</h2>
  <div class="newsbox">
    <marquee direction="up" scrollamount="3" >
<b>
<ul type="square">
<?php include "news.php"; ?>
</ul>

</marquee>
  </div>
    </section>
	
    <section id="portfolio">
<p></p>
 <p></p>
<center> <h2><a name="">Portfolio</a></h2> </center>
<div class="ss-container">
  <div class="mySlides fade">
    <div class="numbertext">1/3</div>
    <img src="img/img12.jpg" style="width:100%" height="400px">
      <div class="rext">First</div>
    </div>
    <div class="mySlides fade">
      <div class="numbertext">2/3</div>
      <img src="img/img7.jpg" style="width:100%" height="400px">
        <div class="rext">Second</div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">3/3</div>
        <img src="img/img3.jpg" style="width:100%" height="400px">
          <div class="rext">Third</div>
        </div>
      </div>
      <br>
      <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>

    </section>
	
    <section id="contact">
 <p></p>
 <p></p>
<div class="container01">
  <div style="text-align:center">
    <h2><a name="">Contact Us</a></h2>
   <b> <p>If you want to contact us, leave us a message:<p> </b>
  </div>
  <div class="row">
    <div class="column">
      <form method="post" action="contactus.php">
        <label for="fname">First Name<span><font color="red">*</font></span></label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name<span><font color="red">*</font></span></label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country<span><font color="red">*</font></span></label>
        <select id="country" name="country">
          <option value="india">India</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
          <option value="russia">Russia</option>
          <option value="australia">Australia</option>
        </select>
      
    </div>
	 <div class="column">
	 <label for="subject">Subject<span><font color="red">*</font></span></label>
	 <input type="text" id="consub" name="consub" placeholder="Your subject..">
	         <label for="subject">Message<span><font color="red">*</font></span></label>
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:70px"></textarea>
        <input type="submit" value="Submit">
    </div>
	</form>
  </div>
</div>
    </section>

    <section id="services">
<p></p>
 <p></p>
 <center>
<h1><u><font color="red">Our</font> <font color="cyan">Services</font></u></h1>
<h3>choose from below what service you want to use.</h4>
</center>
<div class="responsive01">
  <div class="gallery01">
				<div class="imgBxpic01">
					<img src="img/img2.jpg">
				</div>
    <div class="desc01">
						<h2>Admin Services</h2>
					<p>Admin has authority to manage this service and make changes in the website.</p>
					<a href="view_medi.php">Read More</a>
	</div>
  </div>
</div>


<div class="responsive01">
  <div class="gallery01">
				<div class="imgBxpic01">
					<img src="img/img11.jpg">
				</div>
    <div class="desc01">
						<h2>View Medicines</h2>
					<p>Medicines are used for curing diseases, 
					Some of medicines are listed in our websites for general information for the patients.</p>
					<a href="medicines.php">Read More</a>
	</div>
  </div>
</div>

<div class="responsive01">
  <div class="gallery01">
				<div class="imgBxpic01">
					<img src="img/gallery-06.jpg">
				</div>
    <div class="desc01">
						<h2>Patient Services</h2>
					<p>Patients/user are the peoples who register in our website,
					and uses the Medibay service.</p>
					<a href="#get-start">Read More</a>
	</div>
  </div>
</div>

<div class="responsive01">
  <div class="gallery01">
				<div class="imgBxpic01">
					<img src="img/hospital.jpg">
				</div>
    <div class="desc01">
						<h2>Search Hospitals</h2>
					<p>People can easily find the nearby hospitals by using our service,
			and view their details.</p>
					<a href="#">Read More</a>
	</div>
  </div>
</div>

<div class="clearfix01"></div>



<section id="about">

<!-------------------Footer Section Start---------------->
<?php include "footer.php"; ?>
<!-------------------Footer Section End------------------>
 </section>
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
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
 </script>
<script>
function openForm1() {
  document.getElementById("myForm1").style.display = "block";
}

function closeForm1() {
  document.getElementById("myForm1").style.display = "none";
}
</script>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}
function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script>
function checkpassword1() {
  var x = document.getElementById("mypass1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function checkpassword2() {
  var x = document.getElementById("mypass2");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
var input = document.getElementById("mypass1");
var text = document.getElementById("text");
input.addEventListener("keyup", function(event) {

if (event.getModifierState("CapsLock")) {
    text.style.display = "block";
  } else {
    text.style.display = "none"
  }
});

var input = document.getElementById("mypass2");
var text = document.getElementById("text2");
input.addEventListener("keyup", function(event) {

if (event.getModifierState("CapsLock")) {
    text.style.display = "block";
  } else {
    text.style.display = "none"
  }
});
</script>
  <script>
        var modal = document.getElementById('id01');
        window.onclick = function(event) {
            if (event.target == modal1) {
                modal.style.display = "none";
            }
        }
    </script>
	  <script>
        var modal = document.getElementById('id02');
        window.onclick = function(event) {
            if (event.target == modal2) 
                modal2.style.display = "none";
            }
        }
    </script>
	<script type="text/javascript">

  myHilitor.remove();

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

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="js/highlight.js"></script>
<script type="text/javascript">
$(function() {
    $('#text-search').bind('keyup change', function(ev) {
        // pull in the new value
        var searchTerm = $(this).val();

        // remove any old highlighted terms
        $('body').removeHighlight();

        // disable highlighting if empty
        if ( searchTerm ) {
            // highlight the new term
            $('body').highlight( searchTerm );
        }
    });
});
</script>

	
    <script src="js/fastclick.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/fixed-responsive-nav.js"></script>
  </body>
</html>
