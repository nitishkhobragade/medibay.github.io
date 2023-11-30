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
table{
border-collapse:collapse;
border-spacing:0 1px;
font-size: 20px;
width:100%;
}
th{
background-color:#4287f5;
color:white;
}
th,td{
width:150px;
text-align:center;
border:1px solid black;
padding:5px;
}
h2{
color: #4287f5;
}
h3{
border: 3px solid green;
border-radius: 17px;
}
li,p{
font-size:15px;
font-height: 3px;
}
.line2{
background-color: silver;
}
div.allmed{
padding-left: 20px;
font-weight: 20;
}
section{
margin-top: 10px;
}

.search-table-outter {margin-bottom:30px; }
.search-table{table-layout: fixed; margin:40px auto 0px auto;  overflow-x:scroll; }
.search-table, td, th{border-collapse:collapse; border:1px solid #777;}
th{padding:20px 7px; font-size:15px; color:#444; background:#66C2E0;}
td{padding:5px 10px; height:35px;}
tr:nth-child(even)  {background: #f5f5f5;}
tr:nth-child(odd)   {background: #FFF;}
</style>
  </head>
  <body>
<?php include "header.php"; ?>
<br />
<a id="back2Top" title="Back to top" href="#">&#10148;</a>

<h2>Classification Table</h2>
<p>Type something in the input field to search the table for medicines:</p>  
<input id="myInput" type="text" placeholder="Search..">
<br><br>
<div style="overflow-x:auto;">
<div class="search-table-outter wrapper">
<table class="search-table inner">
  <thead>
  <tr>
    <th>Medicine  Name</th>
    <th>Amount</th>
    <th>Type</th>
  </tr>
  </thead>
  <tbody id="myTable">
   <tr>
    <td colspan="3"><h3><a href="medicinedetails.php#oralmedicines">1.Oral Medicines</a></h3></td>
  </tr>
  <tr>
    <td colspan="3"><h4>1.1 Basic Medicines<h4></td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md1">acetylsalicylic acid</a></td>
    <td>500mg</td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md2">aluminium hydroxide</a></td>
    <td>500mg</td>
    <td>caps/tab</td>
  </tr>
 <tr>
    <td><a href="medicinedetails.php#md3">amoxycilline</a></td>
    <td>250mg</td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md3">amoxycilline</a></td>
    <td>500mg</td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md4">ampicilline</a></td>
    <td>250mg</td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md4">ampicilline</a></td>
    <td>500mg</td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md51">carbon adsorbent</a></td>
    <td>500mg</td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md6">chlorpheniramine maleate</a></td>
    <td>4mg</td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md8">ciprofloxacine</a></td>
    <td>500mg</td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md9">cotrimoxazole</a></td>
    <td>120mg</td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md9">cotrimoxazole</a></td>
    <td>480mg</td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md10">diazepam</a></td>
    <td>5mg</td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md11">diclofenac</a></td>
    <td>50mg</td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md13">erythromycine</a></td>
    <td>250mg</td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md13">erythromycine</a></td>
    <td>500mg</td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md14">ferrous sulfate+folic acid</a></td>
    <td>200+0.40mg</td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md15">folic acid</a></td>
    <td>5mg</td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md16">indometacine</a></td>
    <td>25mg</td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md18">mebendazole</a></td>
    <td>100mg</td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md18">mebendazole</a></td>
    <td>500mg</td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md19">metronidazole</a></td>
    <td>250mg</td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md21">niclozamide</a></td>
    <td>500mg</td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md22">nystatine</a></td>
    <td>500.000IU</td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md23">ORS</a></td>
    <td></td>
    <td>sachet</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md24">paracetamol</a></td>
    <td>120mg/5ml</td>
    <td>syrup</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md24">paracetamol</a></td>
    <td>500mg</td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md25">phenoxy methyl penicilline</a></td>
    <td>250mg</td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md26">prednisolone</a></td>
    <td>5mg</td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md27">promethazine</a></td>
    <td>1mg/ml</td>
    <td>syrup</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md27">promethazine</a></td>
    <td>25mg</td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md29">retinol (vit A)</a></td>
    <td>100.000IU</td>
    <td>cap</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md29">retinol (vit A)</a></td>
    <td>200.000IU</td>
    <td>cap</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md20">multivitamine</a></td>
    <td></td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td colspan="3"><h4>1.2 Malaria medecines</h4></td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md5">artesunate + mefloquine</a></td>
    <td></td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md7">chloroquine</a></td>
    <td>100mg</td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md7">chloroquine</a></td>
    <td>150mg</td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md28">quinine</a></td>
    <td>300mg</td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md30">tetracycline</a></td>
    <td>250mg</td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td colspan="3"><h4>1.3	Birth spacing medicines</h4></td>
  </tr>
  <tr>
    <td><a href="#">progesterone + oestradiol</a></td>
    <td>0.15mg+0.03mg</td>
    <td>blister</td>
  </tr>
    <tr>
    <td colspan="3"><h4>1.4	STD medicines</h4></td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md52">cefixime</a></td>
    <td>200mg</td>
    <td>caps/tab</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md12">doxycycline</a></td>
    <td>100mg</td>
    <td>caps/tab</td>
  </tr>
      <tr>
    <td colspan="3"><h3><a href="medicinedetails.php#externalmedicines">2. EXTERNAL MEDICINES</a></h3></td>
  </tr>
  <tr>
    <td colspan="3"><h4>2.2	Ophtalmological medicines</h4></td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md38">tetracycline</a></td>
    <td>1%</td>
    <td>ophtalmic ointment</td>
  </tr>
  <tr>
    <td colspan="3"><h4>2.3	STD medicines</h4></td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md32">clotrimazole</a></td>
    <td>500mg</td>
    <td>ovule</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md36">nystatine</a></td>
    <td>100.000 IU</td>
    <td>ovule</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md35">miconazol</a></td>
    <td>2%</td>
    <td>cream</td>
  </tr>
   <tr>
    <td colspan="3"><h4>2.4	Dermatological medicines</h4></td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md31">benzyl benzoate</a></td>
    <td>25%</td>
    <td>solution</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md34">ketokonazol</a></td>
    <td>2%</td>
    <td>cream</td>
  </tr>
  <tr>
    <td colspan="3"><h4>2.5	Antiseptics and Disinfectants medicines</h4></td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md33">gentian violet</a></td>
    <td></td>
    <td>powder</td>
  </tr>
  <tr>
    <td><a href="medicinedetails.php#md37">povidone iodine</a></td>
    <td>10%</td>
    <td>solution</td>
  </tr>
   
  </tbody>
</table>
</div>
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
