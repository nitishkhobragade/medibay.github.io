<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>medibay home</title>
    <meta name="author" content="Adtile">
    <meta name="viewport" content="width=device-width,initial-scale=1">

	<link rel="stylesheet" href="css/styles.css">

	
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
border-spacing:0 1px;
}
th{
background-color:#4287f5;
color:white;
}
th,td{
width:auto;
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
font-size:20px;
background: -webkit-linear-gradient(skyblue,orange);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
}
h4{
color: red;
}
li,p{
font-size:17px;
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



#back2Top {
    width: 40px;
    line-height: 40px;
    overflow: hidden;
    z-index: 999;
    display: none;
    cursor: pointer;
    -moz-transform: rotate(270deg);
    -webkit-transform: rotate(270deg);
    -o-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
    transform: rotate(270deg);
    position: fixed;
    bottom: 50px;
    right: 0;
    background-color: #DDD;
    color: #555;
    text-align: center;
    font-size: 30px;
    text-decoration: none;
}
#back2Top:hover {
    background-color: #DDF;
    color: #000;
}
</style>
  </head>
  <body>
<?php include "header.php"; ?>
<br />
<a id="back2Top" title="Back to top" href="#">&#10148;</a>

<div class="sticky1">
<p class="s"><input type="search" class="mySearch" id="text-search" placeholder="search text" /></p>
</div>
<br /><br /><br/>
<section id="allmedicines">
<div class="allmed"><br /><br /><br/>
<center><h2 id="oralmedicines">1.ORAL MEDICINES</a></h2></center>
<p id="md1"></p>
<br /><br /><br />
<center>
<h3>ACETYLSALICYLIC ACID 500mg (Pain Killer and antipyretic)</h3>
</center>
<p>(Aspirine® 500 mg, Aspirine pH8® 500 mg, Claragine® 500 mg, Aspro®...)</p>
<h4>Indications</h4>
<ul>
<li>Mild to moderate pain</li>
<li>Fever</li>
<li>Joint or muscular pain</li>
</ul>
<h4>Dosage</h4>
<ul>
<li>-Child: 25 to 50 mg/kg/day in 3 divided doses</li>
<li>-Adult: 1 to 3 g/ day in 3 divided doses</li>
<li>Maximum dose:</li>
<p>Child: 50mg/kg/day </p>
<p>Adult: 4g/day</p>
</ul>
<div style="overflow-x:auto;"> <table border="1">
<thead>
  <tr>
    <th>Weight</th>
    <th>Tablet</th>
    <th>Morning</th>
	<th>Noon</th>
	<th>Evening</th>
  </tr>
  </thead>
    <tbody id="myTable">
  <tr>
    <td>Adult</td>
    <td>500mg</td>
    <td>1 tab</td>
	<td>1 tab</td>
	<td>1 tab</td>
  </tr>
    <tr>
    <td>15-35kg</td>
    <td>500mg</td>
    <td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
  </tr>
    <tr>
    <td>8-15kg</td>
    <td>500mg</td>
    <td><sup>1</sup>&frasl;<sub>4</sub> tab</td>
	<td><sup>1</sup>&frasl;<sub>4</sub> tab</td>
	<td><sup>1</sup>&frasl;<sub>4</sub> tab</td>
  </tr>
  <tr>
    <td>4-8kg</td>
    <td colspan="4" rowspan="2"> Do Not Administer</td>

  </tr>
  <tr>
    <td>< 4kg</td>
  </tr>
	</tbody>
</table> </div>
<br />
<h4>Side effects</h4>
<p>May cause epigastric pain, hemorrhage, or allergic reactions,
 in this case, stop treatment and give paracetamol</p>
<h4>Precautions</h4>
<ul>
<li>•Do not administer:</li>
<p>-If epigastric pain, alcoholism, hemorrhage, asthma.</p>
<p>-To children under 1 year (prefer Paracetamol </p>
<li>•Do not use tablets with a strong smell of vinegar, but a slight acetic acid smell is always present.</li>
<li>•Pregnancy: avoid during the third trimester (prefer paracetamol) </li>
<li>•Breast-feeding: avoid (prefer paracetamol) </li>
</ul>
<h4>Remarks:</h4>
<ul>
<li>-Take during meals, preferably with a lot of drinking water.</li>
<li>-Storage: - below 30 ºC</li>
</ul>
<p id="md2"></p>
<br /><br /><br />
<center>
<h3 >ALUMINIUM HYDROXIDE 500mg (Antacid)</h3>
</center>
<p>(Maalo®x, Supralox®, Rocgel®, Gelox®, Gelusil®...)</p>
<h4>Indications</h4>
<ul>
<li>-Stomach burnings</li>
</ul>
<h4>Dosage</h4>
<ul>
<li>-Child: rarely indicated. When necessary: 75 mg/ kg /day.</li>
<li>-Adult: 1.5 g to 3g/ day in 3 divided doses after meals or 500 mg during attacks.</li>
</ul>
<div style="overflow-x:auto;"> <table border="1">
<thead>
  <tr>
    <th>Weight</th>
    <th>Tablet</th>
    <th>Morning</th>
	<th>Noon</th>
	<th>Evening</th>
  </tr>
  </thead>
    <tbody id="myTable">
  <tr>
    <td>Adult</td>
    <td>500mg</td>
    <td>1 to 2 tab</td>
	<td>1 to 2 tab</td>
	<td>1 to 2 tab</td>
  </tr>
    <tr>
    <td>15-35kg</td>
    <td>500mg</td>
    <td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
  </tr>
    <tr>
    <td>8-15kg</td>
    <td>500mg</td>
	<td colspan="4" rowspan="3"> Do Not Administer</td>
  </tr>
  <tr>
    <td>4-8kg</td>
	<td></td>
  </tr>
  <tr>
    <td>< 4kg</td>
	<td></td>
  </tr>
	</tbody>
</table> </div>
<br />
<h4>Duration:</h4> <p>3 to 5 days, longer if necessary</p>
<h4>Precautions</h4>
<ul>
<li>•Avoid alcohol, coffee, tea, coca-cola, carbonated drinks, spices and tobacco.</li>
</ul>
<h4>Remarks:</h4>
<ul>
<li>-Chew tablets after meals</li>
</ul>
<p id="md3"></p>
<br /><br /><br />
<center>
<h3 >AMOXICILLINE 250mg</h3>
<h3 >AMOXICILLINE 500mg</h3>
</center>
<p>Antibiotic: prescription under medical supervision</p>
<br />
<p>(A-Gram®, Bristamox®, Clamoxyl®, Hiconcil®, Flemoxine®, Amodex® ,Amophar®,
 ramidil®, Bactox® , Zamocilline®, Amoxicap®…)</p>
<h4>Indications</h4>
<ul>
<li>-Respiratory infections with fever in children under 5 years.</li>
<li>-Genito-urinary infections, especially in pregnant women.</li>
<li>-Puerperal sepsis.</li>
</ul>
<h4>Dosage</h4>
<ul>
<li>-Child: 50 mg/ kg/day in 2 divided doses</li>
<li>-Adult: 1 to 2 g / day in 2 divided doses</li>
<li>-In case of severe infections, doses may be increased and given 3 times daily.
 A twice daily prescription is generally preferable to ensure treatment compliance.</li>
</ul>
<div style="overflow-x:auto;"> <table border="1">
<thead>
  <tr>
    <th>Weight</th>
    <th>Tablet</th>
    <th>Morning</th>
	<th>Noon</th>
	<th>Evening</th>
	<th>Duration</th>
	<th>Total Treatment</th>
  </tr>
  </thead>
    <tbody id="myTable">
  <tr>
    <td rowspan="2">Adult</td>
	<td>250 mg</td>
	<td>2 to 4 tab</td>
    <td></td>
    <td>2 to 4 tab</td>
	<td>Min 5 days</td>
	<td>20 to 40 tabs</td>
  </tr>
  <tr>
	<td>500 mg</td>
	<td>1 to 2 tab</td>
    <td></td>
    <td>2 to 4 tab</td>
	<td></td>
	<td>10 to 20 tabs</td>
  </tr>
    <tr class="line2">
    <td rowspan="2">15-35kg</td>
	<td>250 mg</td>
	<td>1<sup>1</sup>&frasl;<sub>2</sub> tab</td>
    <td></td>
    <td>1<sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td></td>
	<td>15 tabs</td>
  </tr>
  <tr class="line2">
  	<td>500 mg</td>
	<td><sup>3</sup>&frasl;<sub>4</sub> tab</td>
    <td></td>
    <td><sup>3</sup>&frasl;<sub>4</sub> tab</td>
	<td></td>
	<td>7.5 tabs</td>
  <tr>
    <tr>
    <td rowspan="2">8-15kg</td>
	<td>250 mg</td>
	<td>1 tab</td>
    <td></td>
    <td>1 tab</td>
	<td></td>
	<td>10 tabs</td>
  </tr>
  <tr>
 	<td>500 mg</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
    <td></td>
    <td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td></td>
	<td>5 tabs</td>
  </tr>
  <tr class="line2">
    <td rowspan="2">4-8kg</td>
 	<td>250 mg</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
    <td></td>
    <td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td></td>
	<td>5 tabs</td>
  </tr>
  <tr class="line2">
   	<td>500 mg</td>
	<td><sup>1</sup>&frasl;<sub>4</sub> tab</td>
    <td></td>
    <td><sup>1</sup>&frasl;<sub>4</sub> tab</td>
	<td></td>
	<td>2.5 tabs</td>
  </tr>
  <tr>
    <td>< 4kg</td>
	<td>Use Syrup</td>
    <td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
  </tr>
	</tbody>
</table> </div>
<br />
<h4>Duration:</h4> 
<ul>
<li>-Minimum 5 days</li>
<li>-10 days in case of genito-urinary infections in pregnant women or puerperal infections.</li>
</ul>
<h4>Precautions</h4>
<ul>
<li>-Do not administer if known allergy to penicillin’s family.</li>
<li>-Do not combine with other antibiotics without medical advice.</li>
</ul>
<h4>Remarks:</h4>
<ul>
<li>-Storage: bellow 30 º.</li>
</ul>
<p id="md4"></p>
<br /><br /><br />
<br />
<center>
<h3 >AMPICILLINE 250mg</h3>
<h3 >AMPICILLINE 500mg</h3>
</center>
<p>Antibiotic: prescription under medical supervision</p>
<br />
<p>(Britapen®, Penbritin®, Pentrexyl®, Totapen®…)</p>
<h4>Indications</h4>
<ul>
<li>-Respiratory infections with fever in children under 5 years.</li>
<li>-Genito-urinary infections, especially in pregnant women.</li>
<li>-Puerperal sepsis.</li>
</ul>
<h4>Dosage</h4>
<ul>
<li>-Child: 100mg/kg/day in 2 divided doses</li>
<li>-Adult: 2 to 4 g/ day in 2 divided doses</li>
<li>-In case of severe infections, doses may be increased and given 3 times daily.
 A twice-daily prescription is generally preferable to ensure treatment compliance.</li>
</ul>
<div style="overflow-x:auto;"> <table border="1">
<thead>
  <tr>
    <th>Weight</th>
    <th>Tablet</th>
    <th>Morning</th>
	<th>Noon</th>
	<th>Evening</th>
	<th>Duration</th>
	<th>Total Treatment</th>
  </tr>
  </thead>
    <tbody id="myTable">
  <tr>
    <td rowspan="2">Adult</td>
	<td>250 mg</td>
	<td>4 to 8 tab</td>
    <td></td>
    <td>4 to 8 tab</td>
	<td rowspan="11">Min 5 days</td>
	<td>40 to 80 tabs</td>
  </tr>
  <tr>
	<td>500 mg</td>
	<td>2 to 4 tab</td>
    <td></td>
    <td>2 to 4 tab</td>

	<td>20 to 40 tabs</td>
  </tr>
    <tr class="line2">
    <td rowspan="2">15-35kg</td>
	<td>250 mg</td>
	<td>3 tab</td>
    <td></td>
    <td>3 tab</td>

	<td>30 tabs</td>
  </tr>
  <tr class="line2">
  	<td>500 mg</td>
	<td>1<sup>1</sup>&frasl;<sub>2</sub> tab</td>
    <td></td>
    <td>1<sup>1</sup>&frasl;<sub>2</sub> tab</td>

	<td>15 tabs</td>
  <tr>
    <tr>
    <td rowspan="2">8-15kg</td>
	<td>250 mg</td>
	<td>2 tab</td>
    <td></td>
    <td>2 tab</td>

	<td>20 tabs</td>
  </tr>
  <tr>
 	<td>500 mg</td>
	<td>1 tab</td>
    <td></td>
    <td>1 tab</td>

	<td>10 tabs</td>
  </tr>
  <tr class="line2">
    <td rowspan="2">4-8kg</td>
 	<td>250 mg</td>
	<td>1 tab</td>
    <td></td>
    <td>1 tab</td>

	<td>10 tabs</td>
  </tr>
  <tr class="line2">
   	<td>500 mg</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
    <td></td>
    <td><sup>1</sup>&frasl;<sub>2</sub> tab</td>

	<td>5 tabs</td>
  </tr>
  <tr>
    <td rowspan="2">< 4kg</td>
   	<td>250 mg</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
    <td></td>
    <td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td>5 tabs</td>
  </tr>
  <tr>
   	<td>500 mg</td>
	<td><sup>1</sup>&frasl;<sub>4</sub> tab</td>
    <td></td>
    <td><sup>1</sup>&frasl;<sub>4</sub> tab</td>

	<td>2.5 tabs</td>
  </tr>
	</tbody>
</table> </div>
<br />
<h4>Duration:</h4> 
<ul>
<li>-Minimum 5 days</li>
<li>-10 days in case of genito-urinary infections in pregnant women or puerperal infections.</li>
</ul>
<h4>Precautions</h4>
<ul>
<li>-Take one or two hours after meal.</li>
<li>-Do not administer if known allergy to the product (penicillin’s family).</li>
<li>-Do not combine with other antibiotics without medical advice.</li>
<li>-For oral Ampicillin should preferably be replaced by oral amoxicillin,
 which is used for the same indications as ampicillin but,
 because of its better intestinal absorption, even on a full stomach, only half the dose is required.</li>
</ul>
<h4>Remarks:</h4>
<ul>
<li>-Storage: bellow 30 º.</li>
</ul>
<p id="md5"></p>
<br /><br /><br />
<center>
<h3 >ARTESUNATE + MEFLOQUINE (Anti- malaria)</h3>
</center>
<h4>A+M2®	A+M3®	A+M4®</h4>
<br />
<h4>Indications</h4>
<ul>
<li>-First line treatment of uncomplicated malaria.</li>
</ul>
<h4>Dosage</h4>
<h5>A+M2 (Artesunate 50mg + Mefloquine 250mg)</h5>
<p>Strict use for only children between 16 kg to 25 kg (or between 6 to 11 years.)</p>
<ul>
<li>-The 1st day: take 1 big tablet and 1 small tablet 2 times a day.</li>
<li>-The 2nd day: take 2 small tablets once daily.</li>
<li>-The 3rd day: take 2 small tablets once daily.</li>
</ul>
<h5>A+M3 (Artesunate 50mg + Mefloquine 250mg)</h5>
<p>Adult between 25 to 35 kg or between 11 to 15 years of age.</p>
<ul>
<li>-The 1st day :
The 1st take 2 big tablets and 2 small tables.
The 2nd take 1 big table and 1 small tablet.</li>
<li>-The 2nd day: take 3 small tablets once daily.</li>
<li>-The 3rd day: take 3 small tablets once daily.</li>
</ul>
<h5>A+M4 (Artesunate 50mg + Mefloquine 250mg)</h5>
<p>Adult of 35 kg or more than 35 kg (from 15 years of age.)</p>
<ul>
<li>-The 1st day: take 2 big tablets and 2 small tablets two times a day.</li>
<li>-The 2ndday: take 4 small tablets once daily.</li>
<li>-The 3rdday: take 4 small tablets once daily.</li>
</ul>

<h4>Side effects</h4>

<p>May cause: dizziness and vomiting.</p>
<br />
<h4>Duration:</h4> 
<ul>
<li>-3 days</li>
</ul>
<h4>Precautions</h4>
<ul>
<p>Do not administer if:</p>
<li>-Cardio-pathy</li>
<li>-Epilepsies</li>
<li>-The first trimester of pregnancy should be avoided.</li>
</ul>
<p id="md51"></p>
<br /><br /><br />
<center>
<h3 >CARBON ABSORBANT 500mg (Digestion Problem)</h3>
</center>
<h4>(Carbophos®)</h4>
<br />
<h4>Indications</h4>
<ul>
<li>-Difficult digestion, particularly when associated with meteorism</li>
</ul>
<h4>Dosage</h4>
<p>Restricted to Adults: 1 to 2 tablets to be chewed and swallowed with a little water,
     after meal and when pain is felt.</p>
<br />
<h4>Duration of treatment:</h4> 
<ul>
<li>-according to the clinical response.</li>
</ul>
<h4>Precautions</h4>
<ul>
<p>Avoid giving to patients with a known allergy to one of its constituents.</p>
<li>-Pregnancy: avoid.</li>
<li>-Breast- feeding: avoid.</li>
</ul>
<h4>Remarks</h4>
<ul>
<li>-This medicinal product can reduce the effectiveness of many other medicinal products.</li>
<p>As a precaution, they should be taken two hours apart.</p>
<li>-Feces are black.</li>
<li>-Storage:</li>
</ul>
<p id="md52"></p>
<br /><br /><br />
<center>
<h3>CEFIXIME 200mg</h3>
</center>
<p>Antibiotic: prescription under medical supervision</p>
<h4>(Suprax®, Oroken 200 mg®)</h4>
<br />
<h4>Indications</h4>
<p>Susceptible infections, resistant to first-line antibiotics.</p>
<ul>
<li>•Bacterial pneumonia</li>
<li>•Sinusitis , recurrent acute otitis media</li>
<li>•Gonorrhea.</li>
<li>•Other Sexual Transmitted infections ( cervicitis, Pelvic Inflammatory Disease)</li>
</ul>
<h4>Dosage</h4>
<ul>
<li>-Child over 6 months : 8 mg / kg / day in 2 divided doses</li>
<li>-Adult: 200 mg to 400 mg /day in 2 divided doses.</li>
<li>-Gonorrhea: 400mg / day as a single dose.</li>
</ul>
<br />
<div style="overflow-x:auto;"> <table border="1">
<thead>
  <tr>
    <th>Weight</th>
    <th>Tablet: 200mg</th>
    <th>Morning</th>
	<th>Evening</th>
	<th>Duration</th>
	<th>Total Treatment</th>
  </tr>
  </thead>
    <tbody id="myTable">
  <tr>
    <td>Adult</td>
	<td>Anti-bacteria</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> to 1 tab</td>
    <td><sup>1</sup>&frasl;<sub>2</sub> to 1 tab</td>
	<td>Minimum 4 days</td>
	<td>4 to 8 tabs</td>
  </tr>
  <tr>
	<td></td>
	<td>Gonorrhea</td>
    <td colspan="2">2 tab</td>
	<td>single dose</td>
	<td>2 tabs</td>
  </tr>
    <tr class="line2">
    <td>Children over 6 months</td>
	<td colspan="3">8 mg/kg/day in 2 divided doses</td>
	<td colspan="2">Minimum 4 days</td>
  </tr>
	</tbody>
</table> </div>
<br />
<h4>Duration</h4> 
<ul>
<li>-Minimum 4 days</li>
<li>-Gonorrhea: single dose.</li>
</ul>
<h4>Side Effects</h4> 
<ul>
<li>-May cause: gastro- intestinal diturbances, headache, dizziness.</li>
</ul>
<h4>Precautions</h4>
<ul>
<p>Avoid giving to patients with a known allergy to one of its constituents.</p>
<li>-Do not administer if known allergy to the same family of antibiotic (cephalosporin).</li>
<li>-Administer with caution to penicillin-allergic patients (amoxycilline, Ampicillin...)
     5 to 10 % of them may also be allergic to cephalosporin</li>
</ul>
<h4>Remarks</h4>
<ul>
<li>-Reduce dosage in case of renal failure.</li>
<li>-Storage: - bellow 30 º</li>
</ul>
<p id="md6"></p>
<br /><br /><br />
<center>
<h3>CHLORPHENAMINE=CHLORPHENIRAMINE 4mg (Sedative antihistaminic)</h3>
</center>
<p>(Teldrin®, Trimeton®)</p>
<h4>Indications</h4>
<ul>
<li>-Allergic reactions due to drugs, insect bites, food…</li>
<li>-Contact dermatitis or seasonal allergy</li>
<li>-Dry cough of allergic origin</li>
</ul>
<h4>Dosage</h4>
<ul>
<li>-Child from 2 to 5 years: 1 mg every 4 to 6 hours; do not exceed 6 mg/ day</li>
<li>-Child from 6 to 12 years: 2 mg every 4 to 6 hours, do not exceed 12 mg/day</li>
<li>-Adult: 4 mg every 4 to 6 hours. Do not exceed 24 mg/day.</li>
</ul>
<div style="overflow-x:auto;"> <table border="1">
<thead>
  <tr>
    <th>Weight</th>
    <th>Tablet</th>
    <th>Morning</th>
	<th>Noon</th>
	<th>Evening</th>
  </tr>
  </thead>
    <tbody id="myTable">
  <tr>
    <td>Adult</td>
    <td>4 mg</td>
    <td>1 tab</td>
	<td>1 tab</td>
	<td>1 tab</td>
  </tr>
    <tr>
    <td>15-35kg</td>
    <td>4 mg</td>
    <td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
  </tr>
    <tr>
    <td>8-15kg</td>
    <td>4 mg</td>
    <td><sup>1</sup>&frasl;<sub>4</sub> tab</td>
	<td><sup>1</sup>&frasl;<sub>4</sub> tab</td>
	<td><sup>1</sup>&frasl;<sub>4</sub> tab</td>
  </tr>
  <tr>
    <td>4-8kg</td>
	<td>4 mg</td>
    <td colspan="3" rowspan="2"> Do Not Administer</td>
  </tr>
  <tr>
    <td>< 4kg</td>
	<td>4 mg</td>
  </tr>
	</tbody>
</table> </div>
<br />
<h4>Duration:</h4>
<p>single dose for 1 to 3 days, accordingly to clinical response.</p>
<h4>Side effects</h4>
<p>May cause: drowsiness, administer with caution
 when driving operating machinery.
</p>

<h4>Precautions</h4>
<ul>
<li>•-Do not administer to children under 2 years</li>
<li>•-Risk of increased sedation when combined with alcohol and drugs acting
 on the central nervous system such as Diazepam,
 Phenobarbital and Chlorpromazine.</li>
<li>•-Pregnancy: avoid </li>
<li>•-Breast-feeding: avoid. </li>
</ul>
<h4>Remarks:</h4>
<ul>
<li>-Storage: - below 30 ºC</li>
</ul>
<p id="md7"></p>
<br /><br /><br />
<center>
<h3 >CHLOROQUINE 100mg (Anti- malaria)</h3>
<h3 >CHLOROQUINE 150mg (Anti- malaria)</h3>
</center>
<br />
<p>(Aralen®, Nivaquine100 mg®, Resochin®)</p>
<h4>Indications</h4>
<ul>
<li>Uncomplicated Plasmodium malariae malaria or Plasmodium vivax malaria</li>
<li>-Genito-urinary infections, especially in pregnant women.</li>
<li>-Puerperal sepsis.</li>
</ul>
<h4>IMPORTANT</h4>
<ul>
<li>-Equivalence for salt and base:</li>
<li>-100 mg base = around 130 mg sulfate = around 160 mg phosphate or diphosphate</li>
<li>-150 mg base = around 200 mg sulfate = around 250 mg phosphate or diphosphate</li>
</ul>
<h4>Dosage</h4>
<h5>Child and adult</h5>
<ul>
<li>-•The 1st day: 10 mg base/kg one dose.</li>
<li>-•The 2nd day: 10 mg base/kg one dose.</li>
<li>-•The 3rd day: 5 mg base/kg one dose.</li>
</ul>
<div style="overflow-x:auto;"> <table border="1">
<thead>
  <tr>
    <th>Weight(kg)</th>
	<th>Age(yrs)</th>
    <th>Tablet(mg)</th>
    <th>Day:1</th>
    <th>Day:2</th>
    <th>Day:3</th>
	<th>Total Treatment</th>
  </tr>
  </thead>
    <tbody id="myTable">
  <tr>
    <td rowspan="2">16-25</td>
 	<td rowspan="2">6-11</td>
	<td>100</td>
    <td>3 tab</td>
    <td>1<sup>1</sup>&frasl;<sub>2</sub>tab</td>
    <td>1<sup>1</sup>&frasl;<sub>2</sub>tab</td>
	<td>6 tabs</td>
  </tr>
  <tr>
	<td>150</td>
    <td>2 tab</td>
    <td>1tab</td>
    <td>1tab</td>
	<td>4 tabs</td>
  </tr>
    <tr class="line2">
    <td rowspan="2">25-35</td>
	<td rowspan="2">11-15</td>
	<td>100</td>
    <td>4<sup>1</sup>&frasl;<sub>2</sub>tabs</td>
    <td>3 tabs</td>
    <td>1<sup>1</sup>&frasl;<sub>2</sub>tab</td>
	<td>8 tabs</td>
  </tr>
  <tr class="line2">
	<td>150</td>
    <td>3 tabs</td>
    <td>2 tabs</td>
    <td>1 tab</td>
	<td>6 tabs</td>
  <tr>
    <tr>
    <td rowspan="2">35-45</td>
 	<td rowspan="2">15-18</td>
	<td>100</td>
    <td>6 tabs</td>
    <td>3 tabs</td>
    <td>3 tabs</td>
	<td>12 tabs</td>
  </tr>
  <tr>
	<td>150</td>
    <td>4 tabs</td>
    <td>2 tabs</td>
    <td>2 tabs</td>
	<td>8 tabs</td>
  </tr>
  <tr class="line2">
    <td rowspan="2">>45</td>
 	<td rowspan="2">>18</td>
	<td>100</td>
    <td>6 tabs</td>
    <td>6 tabs</td>
	<td>6 tabs</td>
	<td>15 tabs</td>
  </tr>
  <tr class="line2">
	<td>150</td>
    <td>4 tabs</td>
	<td>4 tabs</td>
	<td>2 tabs</td>
	<td>10 tabs</td>
  </tr>
 
	</tbody>
</table> </div>
<br />
<h4>Duration:</h4> 
<ul>
<li>3 days</li>
</ul>
<h4>Side effects</h4>
<p>May cause: vomiting and frequent headache but it does not cause a serious danger.</p>

<h4>Remarks</h4>
<ul>
<li>-Toxic dose:</li>
<p>•child :20 mg base/kg in one dose</p>
<p>•adult : 2 g base in one dose</p>
<li>-Never forget that the therapeutic oral dose is equivalent to a toxic dose when given by injection.</li>
<li>Storage: </li>
</ul>
<p id="md8"></p>
<br /><br /><br />
<center>
<h3>CIPROFLOXACIN 500mg</h3>
</center>
<p>Antibiotic: prescription under medical supervision</p>
<h4>(Ciflox®, Ciproxin®, Uniflox 500 mg®...</h4>
<br />
<h4>Indications</h4>
<ul>
<li>•-Lungs, Urine and intestinal infections.</li>
<li>•-Gonococcus infections.</li>
<li>•-Typhoid Fever.</li>
</ul>
<h4>Dosage</h4>
<ul>
<li>-Child: ciprofloxacin is not recommended (if doctors or medical staff consider
being essential: 10 to 30 mg/kg/day in 2 divided doses; for the treatment of
shigellosis dysenteries: 30 mg /kg /day in 2 divided doses).</li>
<li>-Adult: 500 to 1500 mg / day, depending on severity, in 2 divided doses.</li>
<p>•Shigellosis:1000 mg/ day in 2 divided doses for 5 days</p>
<p>•Gonorrhea: 500 mg as single dose.</p>
</ul>
<br />
<div style="overflow-x:auto;"> <table border="1">
<thead>
  <tr>
    <th>Weight</th>
    <th>Tablet: 500mg</th>
    <th>Morning</th>
	<th>Noon</th>
	<th>Evening</th>
	<th>Duration</th>
	<th>Total Treatment</th>
  </tr>
  </thead>
    <tbody id="myTable">
  <tr>
    <td rowspan="2">Adult</td>
	<td>Shigellosis</td>
	<td>1 tab</td>
	<td></td>
    <td>1 tab</td>
	<td>5 days</td>
	<td>10 tabs</td>
  </tr>
  <tr>
	<td>child</td>
    <td colspan="6">Do Not Administer</td>
  </tr>
	</tbody>
</table> </div>
<br />
<h4>Duration</h4> 
<ul>
<li>-Minimum 5 days</li>
<li>-Gonorrhea: single dose.</li>
<li>-Typhoid Fever: 5-7days.</li>
</ul>
<h4>Side Effects</h4> 

<p>May cause:</p>
<ul>
<li>-gastro-intestinal disturbance (nausea, vomiting, diarrhea)</li>
<li>-headache, dizziness, insomnia, hallucinations, convulsions</li>
<li>-arthralgia and myalgia, tendon failure</li>
</ul>
<h4>Precautions</h4>
<ul>
<li>-Pregnancy: CONTRA-INDICATED, except doctors or medical staff’s advice.</li>
<li>-Breast-feeding: CONTRA-INDICATED, except doctors or medical staff’s advice.</li>
</ul>
<h4>Remarks</h4>
<ul>
<li>-Avoid exposure to the sun.</li>
<li>-Drink a lot of liquid during the treatment.</li>
<li>-To avoid development of resistance, the use of ciprofloxacin must be restricted to infections resistant to first antibiotics.</li>
<li>-Antacids and iron salts decrease work of ciprofloxacin. Administer ciprofloxacin 2 hours before or 6 hours after these medications.</li>
<li>-Storage: - bellow 30 º</li>
</ul>
<p id="md9"></p>
<br /><br /><br />
<center>
<h3 >CO-TRIMOXAZOLE 120mg CO-TRIMOXAZOLE 480mg </h3>
<h3 >Sulfamethoxazole (SMX) +Trimethoprim (TMP)</h3>
</center>
<p>Antibiotic: prescription under medical supervision</p>
<br />
<p>(Bactrim®, Eusaprim®, Septrin®)</p>
<h4>Indications</h4>
<ul>
<li>-Lungs and Urine infections.</li>
<li>-Bacillary dysentery.</li>
<li>-Otitis.</li>
<li>-Gonococcus infections ,in areas where there is no Co-trimoxazole resistance</li>
<li>-Pneumocystis Carinii Pneumonia.</li>
</ul>
<h4>Dosage and duration</h4>
<ul>
<li>-Usual indications</li>
<p>•Child: CO-TRIMOXAZOLE: 36 mg/kg/day = (30 mg of Sulfamethoxazole (SMX) +
6 mg of Trimethoprim (TMP) / kg /day)	in 2 divided doses for 5 days minimum.</p>
<p>-Adult: 2 to 4 g/ day in 2 divided doses
In case of acute respiratory-tract infections in child less than 5 years, double the dose.</p>
<p>•Adult: CO-TRIMOXAZOLE: 1920 mg/day=(1600 mg of Sulfamethoxazole (SMX) + 320 mg of Trimethoprim (TMP) /day) in 2 divided doses for 5 days minimum.</p>

<li>-Gonorrhea: 10 tablets of CO-TRIMOXAZOLE 480mg = (400 mg of Sulfamethoxazole (SMX) +80 mg of Trimethoprim (TMP) / day) once daily for 3 days.</li>
<li>-Uncomplicated cystitis (bladder infection) in non-pregnant women:
CO-TRIMOXAZOLE: 2400mg of Sulfamethoxazole (SMX) + 480 mg of Trimethoprim (TMP) as a single dose.</li>
<li>-Pneumocystis carinii pneumonia: 100 mg of Sulfamethoxazole (SMX) + 20 mg of Trimethoprim (TMP) /kg /day in 4 divided doses for 14 to 21 days.</li>
</ul>
<div style="overflow-x:auto;"> <table border="1">
<thead>
  <tr>
    <th>Weight</th>
    <th>Tablet</th>
    <th>Morning</th>
	<th>Noon</th>
	<th>Evening</th>
	<th>Duration</th>
	<th>Total Treatment</th>
  </tr>
  </thead>
    <tbody id="myTable">
  <tr>
    <td rowspan="2">Adult</td>
	<td>120 mg</td>
	<td></td>
    <td></td>
	<td></td>
	<td rowspan="8">Min 5 days</td>
	<td></td>
  </tr>
  <tr>
	<td>480 mg</td>
	<td>2 tabs</td>
    <td></td>
	<td>2 tabs</td>

	<td>20 tabs</td>
  </tr>
  <tr class="line2">
    <td rowspan="2">15-35kg</td>
	<td>120 mg</td>
	<td></td>
    <td></td>
	<td></td>

	<td></td>
  </tr>
  <tr class="line2">
	<td>480 mg</td>
	<td>1 tab</td>
    <td></td>
	<td>1 tab</td>

	<td>10 tabs</td>
  </tr>
    <tr>
    <td rowspan="2">8-15kg</td>
	<td>120 mg</td>
	<td>1 tab</td>
    <td></td>
	<td>1 tab</td>

	<td>10 tabs</td>
  </tr>
  <tr>
	<td>480 mg</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
    <td></td>
	<td><sup>1</sup>&frasl;<sub>2</sub> tab</td>

	<td>2.5 tabs</td>
  </tr>
  <tr class="line2">
    <td rowspan="2">4-8kg</td>
	<td>120 mg</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
    <td></td>
	<td><sup>1</sup>&frasl;<sub>2</sub> tab</td>

	<td>5 tabs</td>
  </tr>
  <tr class="line2">
	<td>480 mg</td>
	<td><sup>1</sup>&frasl;<sub>4</sub> tab</td>
    <td></td>
	<td><sup>1</sup>&frasl;<sub>4</sub> tab</td>

	<td>2.5 tabs</td>
  </tr>
  <tr>
    <td rowspan="2">< 4kg</td>
   	<td>120 mg</td>
    <td colspan="5" rowspan="2"> DO NOT ADMINISTER</td>
  </tr>
  <tr>
   	<td>480 mg</td>
  </tr>
	</tbody>
</table> </div>
<br />
<h4>Side Effects:</h4> 
<ul>
<li>May cause: frequent gastro-intestinal disturbance.</li>
</ul>
<h4>Duration:</h4> 
<ul>
<li>-Minimum 5 days</li>
<li>-10 days in case of genito-urinary infections in pregnant women or puerperal infections.</li>
</ul>
<h4>Precautions</h4>
<ul>
<li>-Do not combine with other anti bacterial drugs.</li>
<li>-Do not administer to children less than 2 months</li>
<li>-Pregnancy: contra- indicated at the third trimester of her pregnancy</li>
<li>-Breast- feeding: avoid.</li>
</ul>
<h4>Remarks:</h4>
<ul>
<li>Drink a lot of liquid during treatment.</li>
</ul>
<p id="md10"></p>
<br /><br /><br />
<center>
<h3 >DIAZEPAM 5mg (Anxiolytic, Anticonvulsant, Muscle Relaxant) </h3>
</center>
<p>Prescription under medical supervision</p>
<br />
<p>( Tensium®, Valium®, Novazam 10 mg®)</p>
<h4>Indications</h4>
<ul>
<li>-Muscle spasms.</li>
<li>-Agitation and anxiety.</li>
<li>-Convulsions.</li>
</ul>
<h4>Dosage</h4>
<ul>
<li>-Child: 0.5 mg/kg/ day in 3 divided doses.</li>
<li>-Adult: 5 to 15 mg in 3 divided doses.</li>
<li>-Reduce the dose by one half in elderly patients.</li>
</ul>
<div style="overflow-x:auto;"> <table border="1">
<thead>
  <tr>
    <th>Weight</th>
    <th>Tablet</th>
    <th>Morning</th>
	<th>Noon</th>
	<th>Evening</th>
  </tr>
  </thead>
    <tbody id="myTable">
  <tr>
    <td>Adult</td>
	<td>5 mg</td>
	<td>1 tab</td>
    <td>1 tab</td>
	<td>1 tab</td>
  </tr>
  <tr class="line2">
    <td>15-35kg</td>
	<td>5 mg</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
  </tr>
    <tr>
    <td>8-15kg</td>
	<td>5 mg</td>
	<td><sup>1</sup>&frasl;<sub>4</sub> tab</td>
	<td><sup>1</sup>&frasl;<sub>4</sub> tab</td>
	<td><sup>1</sup>&frasl;<sub>4</sub> tab</td>
  </tr>
  <tr class="line2">
    <td>4-8kg</td>
	<td>5 mg</td>
    <td colspan="3" rowspan="2"> DO NOT ADMINISTER</td>
  </tr>
  <tr>
    <td>< 4kg</td>
   	<td>5 mg</td>
  </tr>
	</tbody>
</table> </div>
<br />
<h4>Side Effects:</h4> 
<ul>
<li>May cause drowsiness, administer with caution when driving or operating machinery.</li>
</ul>
<h4>Duration:</h4> 
<ul>
<li>According to clinical response.</li></ul>
<h4>Precautions</h4>
<ul>
<li>-Do not combine with other anti bacterial drugs.</li>
<li>-Do not administer to children less than 2 months</li>
<li>-Pregnancy: contra- indicated at the third trimester of her pregnancy</li>
<li>-Breast- feeding: avoid.</li>


<li>-Do not exceed indicated doses.</li>
<li>-Signs of over dosage: muscular weakness, ataxia…</li>
<li>-Signs of toxicity (5 times the therapeutic dose): hypothermic coma.</li>
<li>-Do not administer if respiratory insufficiency.</li>
<li>-Should only be administered exceptionally and with caution to children.</li>
<li>-Prolong use may produce dependence (±12 days). During withdrawal, reduce doses gradually.</li>
<li>-Risk of increased sedation when combined with alcohol and drugs acting on central nervous system such as chlorpromazine, Phenobarbital and chlorphenamine.</li>
<li>-Pregnancy: avoid</li>
<li>-Breast-feeding: avoid.</li>
</ul>
<h4>Remarks:</h4>
<ul>
<li>Storage:</li>
</ul>
<p id="md11"></p>
<br /><br /><br />
<center>
<h3>DICLOFENAC 50mg (Pain killer and anti-inflammatory)</h3>
</center>
<p>Antibiotic: prescription under medical supervision</p>
<h4>(Clofenac®, Voltaren®, Voldal®)</h4>
<br />
<h4>Indications</h4>
<p>Symptomatic Pain and inflammation in conditions such as:</p>
<ul>
<li>••Ligament and joint pain.</li>
<li>••Acute gout.</li>
<li>••And following some surgical procedures.</li>
</ul>
<h4>Dosage</h4>
<ul>
<li>-•Children: For juvenile chronic arthritis – oral, 1 to 3 mg/kg/day in 2 or 3 divided doses.</li>
<li>-•Adult: Oral 75 to 150mg daily in 3 divided doses.</li>
</ul>
<br />
<div style="overflow-x:auto;"> <table border="1">
<thead>
  <tr>
    <th>Weight</th>
    <th>Tablet</th>
    <th>Morning</th>
    <th>Noon</th>
	<th>Evening</th>
  </tr>
  </thead>
    <tbody id="myTable">
  <tr>
    <td>Adult</td>
	<td>50 mg</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> to 1 tab</td>
    <td><sup>1</sup>&frasl;<sub>2</sub> to 1 tab</td>
    <td><sup>1</sup>&frasl;<sub>2</sub> to 1 tab</td>
  </tr>
  <tr class="line2">
    <td>17-35 kg</td>
	<td colspan="4">1 to 3 mg /kg/day in 2 or 3 divided doses</td>
  </tr>
  <tr>
     <td>< 17 kg</td>
	<td colspan="4">Do not administer</td>
  </tr>
	</tbody>
</table> </div>
<br />
<h4>Duration</h4> 
<ul>
<li> 3-5 days. If there is no clinical response, go to the Health Center.</li>
</ul>
<h4>Side Effects</h4> 
<ul>
<li>-Risk of gastro-intestinal ulceration or stomach/intestinal problems, bleeding and perforation.</li>
<li>-May cause: headache, dizziness, nervousness, skin rash, itch, ear problem, edema, depression, drowsiness, insomnia, blurred vision and ocular reaction.</li>
</ul>
<h4>Precautions</h4>
<ul>
<li>-Avoid giving to patients who are sensitive to Aspirine.</li>
<li>Diclofenac should be given with care to patients with asthma or bronchospasm, 
bleeding disorders, cardiovascular disease, peptic ulceration, and renal failure.</li>
<li>-Pregnancy: Do not use.</li>
<li>-Breast- feeding: Do not use.</li>
</ul>
<h4>Remarks</h4>
<ul>
<p>Storage conditions:</p>
<li>-Store at a temperature of less than 25 ºC.</li>
<li>-Protect from moisture.</li>
</ul>
<p id="md12"></p>
<br /><br /><br />
<center>
<h3>DOXYCYCLINE 100mg</h3>
</center>
<h4>(Doxy 100®, Nordox®, Vibramycin®®, Monocline 100 mg®, Tolexine 100 mg®)
</h4>
<br />
<h4>Indications</h4>
<ul>
<li>-Brucellosis, borreliosis, rikettosiosis.</li>
<li>-Cholera.</li>
<li>-Syphilis.</li>
<li>-Infection due to Chlamydia trachomatis.</li>
<li>-Infection due to Balantidium coli.</li>
<li>-Atypical pneumopathy.</li>
</ul>
<h4>Dosage</h4>
<ul>

<li>-Child over 8 years: 4 mg / kg / day in 2 divided doses.</li>
<li>-Adult: 200 mg/day in 2 divided doses.</li>
<li>-Cholera treatment:</li>
<li>Child: 6 mg / kg as a single dose.</li>
<li>Adult: 300 mg as a single dose.</li>
</ul>
<br />
<div style="overflow-x:auto;"> <table border="1">
<thead>
  <tr>
    <th>Weight</th>
    <th>Tablet</th>
    <th>Morning</th>
    <th>Noon</th>
	<th>Evening</th>
	<th>Duration</th>
	<th>Total Treatment</th>
  </tr>
  </thead>
    <tbody id="myTable">
  <tr>
    <td>Adult</td>
	<td>100 mg</td>
	<td>1 tab</td>
    <td></td>
    <td>1 tab</td>
	<td>7 days</td>
	<td>14 tabs</td>
  </tr>
  <tr class="line2">
    <td>Adult</td>
	<td>100 mg</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
    <td></td>
    <td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td>7 days</td>
	<td>7 tabs</td>
  </tr>
  <tr>
     <td>8-15 kg</td>
	 <td>100 mg</td>
	<td colspan="5" rowspan="3">Do not administer</td>
  </tr>
  <tr>
     <td>4-8 kg</td>
	 <td>100 mg</td>
  </tr>
  <tr>
     <td>>4 kg</td>
	 <td>100 mg</td>
  </tr>
	</tbody>
</table> </div>
<br />
<h4>Duration</h4> 
<ul>
<li>-7 days</li>
<li>-In case of syphilis: 14 days</li>
</ul>
<h4>Side Effects</h4> 
<ul>
<li>May cause: gastro-intestinal disturbances, skin reaction, and photosensitivity.</li>
</ul>
<h4>Precautions</h4>
<ul>
<li>-Do not administer:</li>
<p>•To children less than 8 years (may damage teeth).</p>
<p>•If known allergy to tetracycline.</p>
<li>-Do not give simultaneously with iron salts or aluminum hydroxide (decreased intestinal absorption), administer at least 2 hours apart.</li>
<li>-It is recommended to use doxycycline instead of tetracycline for both pharmacological and cost reasons.</li>
<li>-Pregnancy : CONTRA-INDICATED</li>
<li>-Breast-feeding: CONTRA-INDICATED.</li>
</ul>
<h4>Remarks</h4>
<ul>
<li>-Take between meals, not with food</li>
<li>-Storage:  bellow 30°C</li>
<li>-Never use out-of-date Doxycycline (risk of renal acidosis)</li>
</ul>
<p id="md13"></p>
<br /><br /><br />
<center>
<h3 >ERYTHROMYCINE 250mg</h3>
<h3 >ERYTHROMYCINE 500mg</h3>
</center>
<p>Antibiotic: prescription under medical supervision</p>
<br />
<p>(Erythrocine®, Propiocine®, Egery®, Logecine®, Ery® 250 mg& 500 mg,Erytab®) </p>
<h4>Indications</h4>
<ul>
<li>-Upper and lower respiratory infections as a second-line treatment and in case of allergy or resistance to penicillin (amoxycilline, ampicillin)</li>
<li>-Syphilis in pregnant women and children in case of allergy to penicillin (amoxycilline, ampicillin…).</li>
<li>-Chlamydia néonatal conjunctivitis.</li>
</ul>
<h4>Dosage</h4>
<ul>
<li>-Respiratory infections</li>
<p>•Child: 30 to 50 mg /kg/ day in 2 divided doses.</p>
<p>•Adult: 1 to 3 g / day in 2 divided doses, depending on severity of infection</p>
In case of severe infections, it is recommended to give in 3 divided doses/ day.
<li>-Infections due to Chlamydia,H. ducreyi: 2g/day in 2 to 4 divided doses</li>
<li>-Syphilis: 2g/day in 2 to 4 divided doses</li>
<li>-Chlamydia neonatal conjunctivitis: 50 mg /kg /day in 4 divided doses.</li>
</ul>
<div style="overflow-x:auto;"> <table border="1">
<thead>
  <tr>
    <th>Weight</th>
    <th>Tablet</th>
    <th>Morning</th>
	<th>Noon</th>
	<th>Evening</th>
	<th>Duration</th>
	<th>Total Treatment</th>
  </tr>
  </thead>
    <tbody id="myTable">
  <tr>
    <td rowspan="2">Adult</td>
	<td>250 mg</td>
	<td>4 tab</td>
    <td></td>
    <td>4 tab</td>
	<td rowspan="8">Min 5 days</td>
	<td>40 tabs</td>
  </tr>
  <tr>
	<td>500 mg</td>
	<td>2 tab</td>
    <td></td>
    <td>2 tab</td>

	<td>20 tabs</td>
  </tr>
    <tr class="line2">
    <td rowspan="2">15-35kg</td>
	<td>250 mg</td>
	<td>2 to 4 tab</td>
    <td></td>
    <td>2 to 4 tab</td>

	<td>20 to 40 tabs</td>
  </tr>
  <tr class="line2">
  	<td>500 mg</td>
	<td>1 to 2 tab</td>
    <td></td>
    <td>1 to 2 tab</td>

	<td>10 to 20 tabs</td>
  </tr>
    <tr>
    <td rowspan="2">8-15kg</td>
	<td>250 mg</td>
	<td>1 tab</td>
    <td></td>
    <td>1 tab</td>
	<td>10 tabs</td>
  </tr>
  <tr>
 	<td>500 mg</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
    <td></td>
    <td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td>5 tabs</td>
  </tr>
  <tr class="line2">
    <td rowspan="2">4-8kg</td>
 	<td>250 mg</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
    <td></td>
    <td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td>5 tabs</td>
  </tr>
  <tr class="line2">
   	<td>500 mg</td>
	<td></td>
    <td></td>
	<td></td>	
	<td></td>
  </tr>
  <tr>
    <td rowspan="2">< 4kg</td>
 	<td>250 mg</td>
	<td colspan="5" rowspan="2">AVOID</td>
  </tr>
    <tr>
   	<td>500 mg</td>
  </tr>
	</tbody>
</table> </div>
<br />
<h4>Duration:</h4> 
<ul>
<li>-Respiratory infections: minimum 5 days</li>
<li>-Infections due to chlamydia and Haemophylus ducreyi: 7 days</li>
<li>-Primary syphilis: 15 days</li>
<li>-Chlamydia neonatal conjunctivitis:14 days</li>
</ul>
<h4>Precautions</h4>
<ul>
<li>-Do not combine with ergotamine and aminophyline, especially in pediatrics.</li>
<li>-Administer with caution in case of hepatic failure.</li>
</ul>
<h4>Remarks:</h4>
<ul>
<li>-Take between meals.</li>
<li>-Storage: bellow 30 º.</li>
</ul>
<p id="md14"></p>
<br /><br /><br />
<center>
<h3>FERROUS SULFATE 200mg + FOLIC ACID 0.40mg (Red blood cell formation)</h3>
</center>
<h4>(Eryfer®, Fero-Grad®, Resoferon®, Tardyferon B9®)</h4>
<br />
<h4>Indications</h4>
<ul>
<li>-Prevention of anemia during pregnancy.</li>
<li>-Treatment of iron-deficiency anemia: inadequate dietary intake, intestinal parasitic diseases, blood loss.</li>
</ul>
<h4>Dosage</h4>
<ul>
<li>-Prevention:
Child: 1 to 2 mg/kg once daily.
Pregnant women (60 to 120 mg once daily or in 2 divided doses) =1 to 2 tablets/day.</li>
<li>-Treatment:
Child: 3 to 6 mg / kg / day in 2 to 3 divided doses.
Adult: 120 to 180 mg /day in 2 to 3 divided doses =2 to 3 tablets/day</li>
<li>-Do not exceed indicated doses.</li>
<li>-Toxic dose: 100 mg /kg ferrous sulfate (=30 mg/kg elemental iron).</li>
<li>-Signs of over dosage: diarrhea with blood, heart failure.</li>
</ul>
<br />
<div style="overflow-x:auto;"> <table border="1">
<thead>
  <tr>
    <th>Age</th>
    <th>Tablet</th>
    <th>Morning</th>
    <th>Noon</th>
	<th>Evening</th>
  </tr>
  </thead>
    <tbody id="myTable">
  <tr>
    <td>Adult (Pregnancy)</td>
	<td>Prevention</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> to 1 tab</td>
    <td></td>
    <td><sup>1</sup>&frasl;<sub>2</sub> 1 tab</td>
  </tr>
  <tr class="line2">
    <td></td>
	<td>Treatment</td>
	<td>t to 1<sup>1</sup>&frasl;<sub>2</sub> tab</td>
    <td></td>
    <td>1 to 1<sup>1</sup>&frasl;<sub>2</sub> tab</td>
  </tr>
  <tr>
     <td>child</td>
	 <td>Prevention</td>
	<td colspan="3">1 to 2 mg/kg once daily</td>
  </tr>
    <tr class="line2">
     <td></td>
	 <td>Treatment</td>
	 <td colspan="3"> 3 to 6 mg/kg/day in 2 to 3 divided doses</td>
  </tr>
	</tbody>
</table> </div>
<br />
<h4>Duration</h4> 
<ul>
<li>-Prevention: during risk period (pregnancy, malnutrition)</li>
<li>-Treatment: 2 months minimum.</li>
</ul>
<h4>Side Effects</h4> 
<ul>
<li>May cause: gastro-intestinal disturbances, skin reaction, and photosensitivity.</li>
</ul>
<h4>Precautions</h4>
<ul>
<li>-Do not administer in case of sickle-cell anemia.</li>
<li>-Do not exceed the recommended dose, especially in children.</li>
<li>-Absorption of both iron salts and tetracycline or antacids is decreased when they are given concomitantly. Administer each drug at least 2 hours apart.</li>
</ul>
<h4>Remarks</h4>
<ul>
<li>-Take during meals to avoid gastro- intestinal disturbances</li>
<li>-Black coloring of the stools</li>
</ul>
<p id="md15"></p>
<br /><br /><br />
<center>
<h3>FOLIC ACID 5mg (Red blood cell formation)</h3>
</center>
<h4>(Folvite®, Speciafoldine®)</h4>
<br />
<h4>Indications</h4>
<ul>
<li>Folate-deficient megaloblastic anemia: severe malnutrition, repeated attacks of malaria,
intestinal parasitic diseases.
</li>
</ul>
<h4>Dosage</h4>
<ul>
<li>-Child: 5 to 15 mg once daily</li>
<li>-Adult: 10 to 20 mg once daily</li>
<li>-In case of severe anemia, it is recommended to the double doses.</li>
</ul>
<br />
<div style="overflow-x:auto;"> <table border="1">
<thead>
  <tr>
    <th>Age</th>
    <th>Tablet</th>
    <th>Morning</th>
    <th>Noon</th>
	<th>Evening</th>
	<th>Duration</th>
	<th>Total Treatment</th>
  </tr>
  </thead>
    <tbody id="myTable">
  <tr>
    <td>Adult</td>
	<td>5 mg</td>
	<td colspan="3">10 to 20 mgs once daily</td>
    <td>Minimum 15 days</td>
    <td>30 to 60 tabs</td>
  </tr>
  <tr class="line2">
    <td>Child</td>
	<td>5 mg</td>
	<td colspan="3">5 to 15 mgs once daily</td>
    <td>Minimum 15 days</td>
    <td>15 to 45 tabs</td>
  </tr>
	</tbody>
</table> </div>
<br />
<h4>Duration:</h4> 
<ul>
<li>15 to 30 days</li>
</ul>
<h4>Remarks</h4>
<ul>
<li>Storage below 30°C</li>
</ul>
<p id="md16"></p>
<br /><br /><br />
<center>
<h3 >INDOMETACIN 25mg (Pain killer and anti-inflammatory)</h3>
</center>
<p>prescription under medical supervision</p>
<br />
<p>(Artracin®, Inacid®, Indocid® 25 mg) </p>
<h4>Indications</h4>
<ul>
<li>-Symptomatic treatments of pains and inflammation.</li>
<li>-Rheumatic diseases.</li>
<li>-Gout.</li>
</ul>
<h4>Dosage</h4>
<ul>
<li>Adult: 50 to 150 mg /day in 3 divided doses</li>
</ul>
<div style="overflow-x:auto;"> <table border="1">
<thead>
  <tr>
    <th>Weight</th>
    <th>Tablet</th>
    <th>Morning</th>
	<th>Noon</th>
	<th>Evening</th>
  </tr>
  </thead>
    <tbody id="myTable">
  <tr>
    <td>Adult</td>
	<td>25 mg</td>
	<td>1 to 2 tab</td>
	<td>1 to 2 tab</td>
	<td>1 to 2 tab</td>
  </tr>
  <tr class="line2">
    <td>15-35kg</td>
	<td>25 mg</td>
	<td rowspan="4" colspan="3">DO	NOT ADMINISTER</td>
  </tr>
    <tr>
    <td>8-15kg</td>
	<td>25 mgmg</td>
  </tr>
  <tr class="line2">
    <td>4-8kg</td>
 	<td>25 mg</td>
  </tr>
  <tr>
    <td>< 4kg</td>
 	<td>25 mg</td>
  </tr>
	</tbody>
</table> </div>
<br />
<h4>Side effects</h4>
<ul>
<li>May cause: headache, dizziness, gastro- intestinal disturbances or ulcerations.</li>
</ul>
<h4>Precautions</h4>
<ul>
<li>-Do not administer if: peptic ulcer, severe renal or hepatic failure, and asthma</li>
<li>-Do not administer to children.</li>
<li>-Administer with caution to elderly patients.</li>
<li>-Do not combine with other anti -inflammatory drugs (aspirin, ibuprofen...) or corticosteroids.</li>
<li>-Only prescribe for severe cases which do not improve with acetylsalicylic acid (aspirin)</li>
<li>-Pregnancy: CONTRA- INDICATED</li>
<li>-Breast-feeding: avoid</li>
</ul>
<h4>Remarks:</h4>
<ul>
<li>-Take with meals</li>
</ul>
<p id="md17"></p>
<br /><br /><br />
<center>
<h3>
LEVONORGESTREL 0.15 mg + ETHINYLESTRADIOL 0.03 mg
(Combined contraception)</h3>
</center>
<h5>This product doesn’t prevent HIV/AIDS and other STDs</h5>
<p>Prescription under medical supervision</p>
<h4>OK®</h4>
<br />
<h4>Indications</h4>
<ul>
<li>Oral contraception.</li>
</ul>
<h4>Dosage and administration</h4>
<ul>
<li>One pill daily swallowed with liquid at the same time every day, preferably at	bedtime, even there is no sexual intercourse.</li>
<li>Finish all the yellow pills before taking the brown pills.</li>
</ul>
<br />
<h4>Duration</h4> 
<ul>
<li>One plaquette covers 4 weeks.</li>
<li>OK pill can be used as long as a child is not desired.</li>
</ul>
<h4>Side Effects</h4> 
<ul>
<li>May cause nausea, dizziness, weight change, breast tenderness or spotting</li>
</ul>
<h4>Precautions</h4>
<ul>
<li>-Start-up of the pill between the first and the 5th day of the menstrual cycle.</li>
<li>-Do not stop taking the brown pills, even during your period.</li>
<h5>-What to do when some pills are forgotten?</h5>
<li>-1 missed pill: if the woman forgot to take 1 pill yesterday, as soon as she remembers it she has to take 2 pills.
 The day after, she goes back to take 1 pill as before.</li>
<li>-2 missed pills: if the woman forgot to take the pill yesterday and the day before, she has to take 2 pills today and 2 pills tomorrow.
 The day after tomorrow she goes back to take 1 pill a day as before.</li>
<li>-3 missed pills: if the woman forgot to take the pill for 3 days, she has to take 2 pills today, 2 pills tomorrow and 2 pills the day after tomorrow.
 After that, she goes back to take 1 pill a day as before.</li>
 <li>-If the woman missed 2 or more pills and has sexual intercourse,
 a condom has to be used until the woman finishes the plaquette of OK.</li>
</ul>
<p id="md18"></p>
<br /><br /><br />
<center>
<h3>MEBENDAZOLE 100mg and 500mg (Anthelmintic)</h3>
</center>
<h4>(Vermox®)</h4>
<br />
<h4>Indications</h4>
<ul>
<li>Worms</li>
</ul>
<h4>Dosage and duration</h4>
<ul>
<li>Child over 2 years and adult:</li>
<li>500 mg as a single dose</li>
</ul>
<br />
<h4>Precautions</h4>
<ul>
<li>-Do not administer to children under 2 years</li>
<li>-Pregnancy :CONTRA-INDICATED during the first trimester</li>
</ul>
<p id="md19"></p>
<br /><br /><br />
<center>
<h3 >METRONIDAZOLE 250mg</h3>
</center>
<p>Antibiotic: Prescription under medical supervision</p>
<br />
<p>(Elyzol®, Flagyl®, Metrolyl®)</p>
<h4>Indications</h4>
<ul>
<li>-Amoebiasis , trichomonasis (STI), giardiasis (lambliasis)</li>
<li>-Certain anaerobic bacteria (Bacteroides fragillis ,Clostridium perfringens , Gardnerella virginalis).</li>
<li>-Severe diarrhea.</li>
</ul>
<h4>Dosage</h4>
<ul>
<li>-Amoebic dysentery: 
<p>Child: 30 to 50 mg / kg /day in 3 divided doses</p>
<p>Adult: 1500 mg / day in 3 divided doses</p>
</li>
<li>-Giardiasis: 
<p>Child: 15 mg / kg / day in 3 divided doses</p>
<p>Adult: 750 mg / day in 3 divided doses</p>
</li>
<li>Trichomonassis (STI) :  
<p>Adult: 2 g as a single dose</p>
</li>
<li>-Metronidazole may be used in the treatment of infection with anaerobic bacteria, using the same dose as for amoebiasis treatment, for 6 to 10 days, sometimes combined within an appropriate antibiotic.</li>
</ul>
<div style="overflow-x:auto;"> <table border="1">
<thead>
  <tr>
    <th>Weight</th>
    <th>Tablet</th>
    <th>Morning</th>
	<th>Noon</th>
	<th>Evening</th>
	<th>Duration</th>
	<th>Total Treatment</th>
  </tr>
  </thead>
    <tbody id="myTable">
  <tr>
    <td rowspan="3">Adult</td>
	<td>Amoebic dysentery</td>
	<td>2 tab</td>
	<td>2 tab</td>
    <td>2 tab</td>
	<td>7 days</td>
	<td>42 tabs</td>
  </tr>
  <tr>
    <td>Giardiasis</td>
	<td>1 tab</td>
    <td>1 tab</td>
    <td>1 tab</td>
	<td>7 days</td>
	<td>21 tabs</td>
  </tr>
    <tr>
    <td>Trichomoniasis</td>
	<td colspan="3">8 tab</td>
	<td>7 days</td>
	<td>56 tabs</td>
  </tr>
  <tr>
    <td rowspan="3">15-35 kg</td>
	<td>Amoebic dysentery</td>
	<td>1 tab</td>
	<td>1 tab</td>
    <td>1 tab</td>
	<td>7 days</td>
	<td>10.5 tabs</td>
  </tr>
  <tr>
    <td>Giardiasis</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
    <td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
    <td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td>7 days</td>
	<td>21 tabs</td>
  </tr>
    <tr>
    <td>Trichomoniasis</td>
	<td colspan="5">AVOID</td>
  </tr>
    <tr>
    <td rowspan="3">8 -15 kg</td>
	<td>Amoebic dysentery</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
    <td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td>7 days</td>
	<td>10.5 tabs</td>
  </tr>
  <tr>
    <td>Giardiasis</td>
	<td><sup>1</sup>&frasl;<sub>4</sub> tab</td>
    <td><sup>1</sup>&frasl;<sub>4</sub> tab</td>
    <td><sup>1</sup>&frasl;<sub>4</sub> tab</td>
	<td>7 days</td>
	<td>5.25 tabs</td>
  </tr>
  <tr>
    <td>Trichomoniasis</td>
	<td colspan="5">AVOID</td>
  </tr>
    <tr>
    <td>4 -8 kg</td>
	<td>Amoebic dysentery</td>
	<td><sup>1</sup>&frasl;<sub>4</sub> tab</td>
	<td><sup>1</sup>&frasl;<sub>4</sub> tab</td>
    <td><sup>1</sup>&frasl;<sub>4</sub> tab</td>
	<td>7 days</td>
	<td>5.25 tabs</td>
  </tr>
    <tr>
    <td>< 4kg</td>
	<td></td>
	<td colspan="5">DO NOT ADMINISTER</td>
  </tr>	
	</tbody>
</table> </div>
<br />
<h4>Duration:</h4> 
<ul>
<li>-Amoebic dysentery: 7 days.</li>
<li>-Giardiasis: 7 days; repeat the same treatment after one week.</li>
<li>-Trichomonasis (STI): single dose.</li>
</ul>
<h4>Precautions</h4>
<ul>
<li>-Do not drink alcohol during treatment.</li>
<li>-Pregnancy: a teratogenic effect has not been shown.
 Metronidazole treatment is possible in pregnant women and is justified to treat amoebiasis with clinical signs.
 Nevertheless, avoid use during the first trimester of pregnancy if possible.</li>
 <li>-Breast- feeding: avoid (excreted in milk)</li>
</ul>
<h4>Remarks:</h4>
<ul>
<li>-In case of trichomonasis, the partner should also be treated.</li>
<li>-The mere presence of amoeba kysts in the stools is not sufficient reason to administer metronidazole.</li>
<li>-Storage: bellow 30 º</li>
</ul>
<p id="md20"></p>
<br /><br /><br />
<center>
<h3 >MULTIVITAMINE</h3>
</center>
<br />
<h4>Indications</h4>
<ul>
<li>Vitamine supplementation</li>
</ul>
<h4>Dosage</h4>
<div style="overflow-x:auto;"> <table border="1">
<thead>
  <tr>
    <th>Weight</th>
    <th>Once daily</th>
  </tr>
  </thead>
    <tbody id="myTable">
  <tr>
    <td>Adult</td>
	<td>3 tab</td>
  </tr>
  <tr>
    <td>15-35 kg</td>
	<td>2 tab</td>
  </tr>
    <tr>
    <td>8 -15 kg</td>
	<td>1 tab</td>
  </tr>
    <tr>
    <td>4 -8 kg</td>
	<td>1 tab</td>
  </tr>
      <tr>
    <td>< 4 kg</td>
	<td>AVOID</td>
  </tr>	
	</tbody>
</table> </div>
<br />
<h4>Duration:</h4> 
<ul>
<li>Depending on clinical evolution</li>
</ul>
<h4>Remarks:</h4>
<ul>
<li>-Specific deficiency states requires appropriate doses of vitamins</li>
<li>-Storage:</li>
<li>
-8-15 °C</li>
</ul>
<p id="md21"></p>
<br /><br /><br />
<center>
<h3 >NICLOSAMIDE 500mg (Anthelmintic)</h3>
</center>
<p>Prescription under medical supervision</p>
<br />
<p>(Niclocide®, Tredemine® 500 mg, Yomesan®)</p>
<h4>Indications</h4>
<ul>
  <li>Taeniacide (Tapeworms killer): beef tapeworm, pork tapeworm and dwarf tapeworm.</li>
</ul>
<h4>Dosage</h4>
<ul>
<li>Beef tapeworm and Pork tapeworm
<p>•Child: 30 mg / kg as a single dose, on an empty stomach</p>
<p>•Adult: 2 g as a single dose, on an empty stomach</p>
</li>
</ul>
<div style="overflow-x:auto;"> <table border="1">
<thead>
  <tr>
    <th>Weight</th>
    <th>Tablet</th>
    <th>Once a day in the morning</th>
	<th>Duration</th>
	<th>Total Treatment</th>
  </tr>
  </thead>
    <tbody id="myTable">
  <tr>
    <td>Adult</td>
	<td>500 mg</td>
	<td>4 tab</td>
	<td>Single dose</td>
    <td>4 tabs</td>
  </tr>
  <tr>
    <td>15-35 kg</td>
	<td>500 mg</td>
	<td>2 tab</td>
	<td>Single dose</td>
    <td>2 tabs</td>
  </tr>
  <tr>
    <td>8 -15 kg</td>
	<td>500 mg</td>
	<td>1 tab</td>
	<td>Single dose</td>
    <td>1 tabs</td>
  </tr>
  <tr>
    <td>4 -8 kg</td>
    <td>500 mg</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td>Single dose</td>
    <td><sup>1</sup>&frasl;<sub>2</sub> tabs</td>
  </tr>
  <tr>
    <td>< 4 kg</td>
	<td>500 mg</td>
	<td colspan="3">AVOID</td>
  </tr>	
	</tbody>
</table> </div>
<br />
<h4>Duration:</h4> 
<ul>
<li>-Beef tapeworm and Pork tapeworm : single dose .</li>
</ul>
<h4>Precautions</h4>
<ul>
<li>-In case of vomiting, the single dose treatment should be divided in 2 doses taken with an interval of 1 hour.</li>
</ul>
<h4>Remarks:</h4>
<ul>
<li>-The evening before, have a liquid meal. Take the drug in the morning before eating. Chew the tablets before swallowing. Wait 2 hours before eating.</li>
<li>-Niclosamide is a taeniacide; therefore the intact worm is not totally expulsed in the stool but killed and partially digested.</li>
<li>-Storage</li>
</ul>
<p id="md22"></p>
<br /><br /><br />
<center>
<h3 >NYSTATIN 500.000 IU Oral Tablets (Antifungal)</h3>
</center>
<p>Prescription under medical supervision</p>
<br />
<p>(Mycostatine® 500 000 IU, Nystan®)</p>
<h4>Indications</h4>
<ul>
<li>- Intestinal candidiasis.</li>
<li>-Oral candidiasis.</li>
</ul>
<h4>Dosage</h4>
<ul>
<li>-Intestinal candidiasis</li>
<p>•Child: 400 000 IU / day in 4 divided doses.</p>
<p>•Adult: 2 000 000 IU / day in 4 divided doses.</p>
</ul>
<ul>
<li>Oral candidiasis</li>
<p>•Child and adult: 400 000 IU/ day in 4 divided doses. The tablet must be </p>
<p>•sucked or put it in the mouth after being crushed.</p>
</ul>
<div style="overflow-x:auto;"> <table border="1">
<thead>
  <tr>
    <th>Age</th>
    <th>500 000IU tablet</th>
    <th>Morning</th>
	<th>Noon</th>
	<th>Evening</th>
	<th>NIght</th>
  </tr>
  </thead>
    <tbody id="myTable">
  <tr>
    <td rowspan="2">Adult</td>
	<td>Intestinal candidiasis</td>
	<td>1 tab</td>
    <td>1 tab</td>
    <td>1 tab</td>
	<td>1 tab</td>
  </tr>
  <tr>
  	<td>Oral candidiasis</td>
	<td>1/5 tab</td>
    <td>1/5 tab</td>
    <td>1/5 tab</td>
	<td>1/5 tab</td>
  </tr>
   <tr class="line2">
    <td rowspan="2">Child</td>
	<td>Intestinal candidiasis</td>
	<td>1/5 tab</td>
    <td>1/5 tab</td>
    <td>1/5 tab</td>
	<td>1/5 tab</td>
  </tr>
  <tr>
  	<td>Oral candidiasis</td>
	<td>1/5 tab</td>
    <td>1/5 tab</td>
    <td>1/5 tab</td>
	<td>1/5 tab</td>
  </tr> 
	</tbody>
</table> </div>
<br />
<h4>Duration:</h4> 
<ul>
<li>-Intestinal candidiasis: 20 days</li>
<li>-Oral candidiasis: 8 to 10 days</li>
</ul>
<h4>Precautions</h4>
<ul>
<li>-Nystatin is not active against other types of fungi.</li>
<li>-Oral candidiasis may also be treated with the application of gentian violet or mouth washes with a base of lemon juice or sodium bicarbonate.</li>
</ul>
<h4>Remarks:</h4>
<ul>
<li>-Vaginal tablets may be used for the treatment of oral candidiasis, in spite of their disagreeable taste.</li>
<li>-500 000 IU tablets are meant to be swallowed (candidiasis of the digestive tract), but they may be sucked when given for oral candidiasis.</li>
<li>-Storage: below 30ºC</li>
</ul>
<p id="md23"></p>
<br /><br /><br />
<center>
<h3 >ORAL REHYDRATION SALTS = ORS</h3>
</center>
<br />
<p>(Oralit®)</p>
<h4>Indications</h4>
<ul>
<li>Prevention and treatment of dehydration in case of diarrhea, vomiting.</li>
<li>-Oral candidiasis.</li>
</ul>
<h4>Dosage</h4>
<ul>
<li>-Child up to 2 years: 50 to 100 ml after each loose stool.</li>
<li>-2 years or older: 100 to 200 ml after each loose stool.</li>
<li>•Use the child’s age only when you do not know the weight. The approximate amount of ORS required (in ml) can also be calculated by multiplying the child’s weight (In kg) times 75.</li>
<li>•If the child wants more ORS than shown, give more.</li>
<li>•For infants less than 6 months who are not breastfed, also give 100-200 ml clean water during this period.</li>
</ul>
<div style="overflow-x:auto;"> <table border="1">
<thead>
  <tr>
    <th>Age</th>
    <th>Up to 4 months</th>
    <th>4 to 11 months</th>
	<th>1 year</th>
	<th>2 to 5 years</th>
	<th>5 to 15 years</th>
	<th>ADULT</th>
  </tr>
  </thead>
    <tbody id="myTable">
  <tr>
    <td>Weight</td>
	<td>< 6 kg</td>
	<td>6-<10 kg</td>
    <td>10-<12 kg</td>
    <td>12-15 kg</td>
	<td>15-35 kg</td>
	<td>over 35 kg</td>
  </tr>
  <tr class="line2">
    <td>Amount ORS(ml)</td>
	<td>200-400</td>
	<td>400-700</td>
    <td>700-900</td>
    <td>900-1400</td>
	<td>3000</td>
	<td>3000 to 4000</td>
  </tr>
	</tbody>
</table> </div>
<br />
<h4>Duration:</h4> 
<ul>
<li>as long as diarrhea and signs of dehydration persist.</li>
</ul>
<h4>Precautions</h4>
<ul>
<li>-If edema develops, reduce quantities.</li>
<li>-In case of vomiting, wait 10 minutes. Then continue more slowly.</li>
</ul>
<h4>Remarks:</h4>
<ul>
<li>-If no ORS is available, a sugar and salt solution may be prepared: 2 teaspoons of salt = (3 g),
 4 tablespoons of sugar (40g) added to some fruit juice, diluted in one liter of clean, cooled boiled water.</li>
<li>-Sign of improvement: the patient urinates again.</li>
<li>-When a patient improves, give ORS and clean water alternately.</li>
<li>-Do not use the powder if it has turned into a yellow –brownish sticky substance.</li>
<li>-Storage:</li>
</ul>
<p id="md24"></p>
<br /><br /><br />
<center>
<h3 >PARACETAMOL 500mg, tablets</h3>
<h3>PARACETAMOL 120mg/5ml, syrup</h3>
<h3>(Painkiller and antipyretic)</h3>
</center>
<br />
<p>(Doliprane® 500 mg, Panadol®, Tylenol®, Efferalgan® 500 mg, Dafalgan®500mg, Paralyoc® 500 mg, Veganine® 500 mg)</p>
<h4>Indications</h4>
<ul>
<li>-Mild to moderate pain.</li>
<li>-Fever.</li>
</ul>
<h4>Dosage</h4>
<ul>
<li>-Child: 40 to 60 mg/kg/day in 3 to 4 divided doses</li>
<li>-Adult: 2 to 3 g / day in 3 divided doses</li>
<li>Maximum doses: Child: 
<p>60 mg / kg / day</p>
<p>Adult: 4 g / day</p>
</li>
</ul>
<div style="overflow-x:auto;"> <table border="1">
<thead>
  <tr>
    <th>Weight</th>
    <th>Dosage</th>
    <th>Morning</th>
	<th>Noon</th>
	<th>Evening</th>
  </tr>
  </thead>
    <tbody id="myTable">
  <tr>
    <td rowspan="2">Adult</td>
	<td>120mg/5ml</td>
	<td></td>
	<td></td>
	<td></td>
  </tr>
  <tr>
    <td>500 mg</td>
	<td>1 to 2 tab</td>
    <td>1 to 2 tab</td>
    <td>1 to 2 tab</td>
  </tr>
   <tr class="line2">
    <td rowspan="2">15 -35 kg</td>
	<td>120mg/5ml</td>
	<td>2 teaspoonful</td>
	<td>2 teaspoonful</td>
	<td>2 teaspoonful</td>
  </tr>
  <tr class="line2">
    <td>500 mg</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> to 1 tab</td>
    <td><sup>1</sup>&frasl;<sub>2</sub> to 1 tab</td>
    <td><sup>1</sup>&frasl;<sub>2</sub> to 1 tab</td>
  </tr>
   <tr>
    <td rowspan="2">8 -15 kg</td>
	<td>120mg/5ml</td>
	<td>1 to 2 teaspoonful</td>
	<td>1 to 2 teaspoonful</td>
	<td>1 to 2 teaspoonful</td>
  </tr>
  <tr>
    <td>500 mg</td>
	<td><sup>1</sup>&frasl;<sub>4</sub> to <sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td><sup>1</sup>&frasl;<sub>4</sub> to <sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td><sup>1</sup>&frasl;<sub>4</sub> to <sup>1</sup>&frasl;<sub>2</sub> tab</td>
  </tr>
   <tr class="line2">
    <td rowspan="2">4 -8 kg</td>
	<td>120mg/5ml</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> to 1 to 1 teaspoonful</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> to 1 to 1 teaspoonful</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> to 1 to 1 teaspoonful</td>
  </tr>
  <tr class="line2">
    <td>500 mg</td>
	<td></td>
    <td></td>
    <td></td>
  </tr>
     <td rowspan="2">< 4 kg</td>
	<td>120mg/5ml</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> teaspoonful</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> teaspoonful</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> teaspoonful</td>
  </tr>
  <tr>
    <td>500 mg</td>
	<td></td>
	<td></td>
	<td></td>
  </tr>
	
	</tbody>
</table> </div>
<br />
<h4>Duration:</h4> 
<ul>
<li>-According to clinical response, 1 to 3 days</li>
<li>-Do not continue treatment for an extended period without medical advice</li>
</ul>
<h4>Precautions</h4>
<ul>
<li>-Administer with caution in case of hepatic or renal failure, or alcoholism.</li>
<li>-Paracetamol is recommended for patients allergic to acetylsalicylic acid (Aspirin),
 those with stomach problems and for children under 1 year.</li>
</ul>
<h4>Remarks:</h4>
<ul>
<li>-Storage: bellow 30ºC</li>
</ul>
<p id="md25"></p>
<br /><br /><br />
<center>
<h3 >PHENOXYMETHYL PENICILLIN 250mg = PENICILLIN V 250mg</h3>
</center>
<p>Antibiotic = Prescription under medical supervision</p>
<br />
<p>(Cliacil®, Oracilline®, Ospen®)</p>
<h4>Indications</h4>
<ul>
<li>-Tonsillitis</li>
<li>-Pneumopathy</li>
<li>-Dental abscesses</li>
<li>-Extensive impetigo</li>
</ul>
<h4>Dosage</h4>
<ul>
<li>-Child: 50 000 IU to 100 000 IU / kg / day in 3 divided doses.</li>
<li>-Adult: 1.5 to 3 MIU / day in 3 divided doses,
4 doses / day are more effective, but to ensure treatment compliance, 3 doses/ day are recommended.</li>
</ul>
<div style="overflow-x:auto;"> <table border="1">
<thead>
  <tr>
    <th>Weight</th>
    <th>Tablet</th>
    <th>Morning</th>
	<th>Noon</th>
	<th>Evening</th>
	<th>Duration</th>
	<th>Total Treatment</th>
  </tr>
  </thead>
    <tbody id="myTable">
  <tr>
    <td>Adult</td>
	<td>250 mg</td>
	<td>2 tab</td>
	<td>2 tab</td>
	<td>2 tab</td>
	<td rowspan="5">Min 5 Days</td>
	<td>30 tabs</td>
  </tr>
  <tr  class="line2">
    <td>15 -35 kg</td>
	<td>250 mg</td>
	<td>1<sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td>1<sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td>1<sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td>22.5 tabs</td>
  </tr>
   <tr>
    <td>8 -15 kg</td>
	<td>250 mg</td>
	<td>1 tab</td>
	<td>1 tab</td>
	<td>1 tab</td>
	<td>15 tabs</td>
  </tr>
  <tr  class="line2">
    <td>4 -8 kg</td>
	<td>250 mg</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
    <td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
    <td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td>7.5 tabs</td>
  </tr>
   <tr>
    <td>< 4 kg</td>
	<td>250 mg</td>
	<td><sup>1</sup>&frasl;<sub>4</sub> tab</td>
	<td><sup>1</sup>&frasl;<sub>4</sub> tab</td>
	<td><sup>1</sup>&frasl;<sub>4</sub> tab</td>
	<td>3.75 tabs</td>
  </tr>
	</tbody>
</table> </div>
<br />
<h4>Duration:</h4> 
<ul>
<li> 5 to 8 days.</li>
</ul>
<h4>Precautions</h4>
<ul>
<li>-Do not administer if known allergy to penicillin (amoxycilline, ampicillin...)</li>
<li>-Do not combine with other Antibacterial.</li>
</ul>
<h4>Remarks:</h4>
<ul>
<li>-Storage: bellow 30ºC</li>
</ul>
<p id="md26"></p>
<br /><br /><br />
<center>
<h3 >PREDNISOLONE 5mg (Corticosteroid)</h3>
</center>
<p>Prescription under medical supervision</p>
<br />
<p>(Prednesol®, solupred®)</p>
<h4>Indications</h4>
<ul>
<p>Symptomatic treatment of:</p>
<li>•allergic diseases</li>
<li>•inflammatory diseases</li>
<li>•severe asthma</li>
</ul>
<h4>Dosage</h4>
<ul>
<li>-Child:
<p>initial dose: 1 to 2 mg / kg /day
<p>Maintenance dose: 0.1 to 0.5 mg /kg/day
</li>
<li>-Adult:
<p>initial dose: 20 to 80 mg / day</p>
<p>Maintenance dose: 5 to 20 mg / day</p>
</li>
<li>-In case of prolong treatment, do not stop abruptly. Decrease dose by 5 mg each day.</li>
<li>-Administer preferably once daily, in the morning.</li>
</ul>
<div style="overflow-x:auto;"> <table border="1">
<thead>
  <tr>
    <th>Weight</th>
    <th>5 mg tablet</th>
    <th>Morning</th>
  </tr>
  </thead>
    <tbody id="myTable">
  <tr>
    <td rowspan="2">Adult</td>
	<td>Initial dose</td>
	<td>Adjust the dose</td>
  </tr>
  <tr>
    <td>Maintenance dose</td>
	<td>2 tab</td>
  </tr>
   <tr class="line2">
    <td rowspan="2">15 -35 kg</td>
	<td>Initial dose</td>
	<td>Adjust the dose</td>
  </tr>
  <tr class="line2">
    <td>Maintenance dose</td>
	<td>1 tab</td>
  </tr>
   <tr>
    <td rowspan="2">8 -15 kg</td>
	<td>Initial dose</td>
	<td>Adjust the dose</td>
  </tr>
  <tr>
    <td>Maintenance dose</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
  </tr>
   <tr class="line2">
    <td>4 -8 kg</td>
	<td rowspan="2" colspan="2">DO NOT ADMINISTER</td>
  </tr>
  <tr>
    <td>< 4 kg</td>
  </tr>
	</tbody>
</table> </div>
<br />
<h4>Duration:</h4> 
<ul>
<li>according to clinical response.</li>
</ul>
<h4>Side effects:</h4>
<ul>
<li>-May cause: hypokalaemia , osteoporosis in case of prolong treatment ; edema and hypertension due to sodium and water retention</li>
</ul>
<h4>Precautions</h4>
<ul>
<li>-Do not administer if:
<p>•Peptic ulcer.</p>
<p>•Bacterial infections not controlled by antibiotics and / or viral infections.</p>
</li>
<li>-If administration of more than 20 mg daily a salt-free diet and potassium supplement are recommended.</li>
<li>-Pregnancy: avoid during the first trimester.</li>
<li>-Breast-feeding: avoid</li>
</ul>
<h4>Remarks:</h4>
<ul>
<li>-Storage: bellow 30ºC</li>
</ul>
<p id="md27"></p>
<br /><br /><br />
<center>
<h3 >
PROMETHAZINE 25mg

PROMETHAZINE 1mg/ml (Antihistaminic and Sedative)</h3>
</center>
<p>Prescription under medical supervision</p>
<br />
<p>(Atosil®, Fargan®, Phenergan®)</p>
<h4>Indications</h4>
<ul>
<li>-Allergic reactions due to drugs, insect bites, food...</li>
<li>-Contact dermatitis or seasonal allergy.</li>
<li>-Vomiting</li>
<li>-Dry cough of allergic origin</li>
</ul>
<h4>Dosage</h4>
<ul>
<li>-Child over 2 years : 1 mg / kg / day in 1 to 3 divided doses</li>
<li>-Adult: 25 to 50 mg / day in 1 to 3 divided doses</li>
</ul>
<div style="overflow-x:auto;"> <table border="1">
<thead>
  <tr>
    <th>Weight</th>
    <th>Tablet</th>
    <th>Morning</th>
	<th>Noon</th>
	<th>Evening</th>
  </tr>
  </thead>
    <tbody id="myTable">
  <tr>
    <td rowspan="2">Adult</td>
	<td>1mg/ml</td>
	<td></td>
	<td></td>
	<td></td>
  </tr>
  <tr>
    <td>25 mg</td>
	<td>1 tab</td>
	<td></td>
	<td>1 tab</td>
  </tr>
   <tr class="line2">
    <td rowspan="2">15 -35 kg</td>
	<td>1mg/ml</td>
	<td>1 to 2 teaspoonful</td>
	<td></td>
	<td>1 to 2 teaspoonful</td>
  </tr>
  <tr class="line2">
    <td>25 mg</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td></td>
	<td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
  </tr>
   <tr>
    <td rowspan="2">8 -15 kg</td>
	<td>1mg/ml</td>
	<td>1 to 2 teaspoonful</td>
	<td></td>
	<td>1 to 2 teaspoonful</td>
  </tr>
  <tr>
    <td>25 mg</td>
	<td><sup>1</sup>&frasl;<sub>4</sub> tab</td>
	<td></td>
	<td><sup>1</sup>&frasl;<sub>4</sub> tab</td>
  </tr>
   <tr class="line2">
    <td>4 -8 kg</td>
	<td rowspan="2" colspan="4">AVOID</td>
  </tr>
  <tr>
    <td>< 4 kg</td>
  </tr>
	</tbody>
</table> </div>
<br />
<h4>Duration:</h4> 
<ul>
<li>Single dose or 1 to 3 days according to clinical response.</li>
</ul>
<h4>Precautions</h4>
<ul>
<li>-Avoid in children less than 12 years.</li>
<li>-Risk of increased sedation when combined with alcohol or drugs acting on the central nervous system such as diazepam, Phenobarbital, chlorpromazine.</li>
<li>-In case of drowsiness, administer in the evening.</li>
<li>-Do not drink alcohol during treatment.</li>
<li>-Pregnancy: avoid during the first trimester and in perinatal period.</li>
<li>-Breast-feeding: avoid (safety is not established)</li>
</ul>
<h4>Remarks:</h4>
<ul>
<li>-Storage: bellow 30ºC</li>
</ul>
<p id="md28"></p>
<br /><br /><br />
<center>
<h3 >QUININE 300mg (Anti-malaria)</h3>
<p>Quinine should always be used in combination with tetracycline due to a reduction in quinine sensitivity of P. falciparium</p>
</center>
<p>Prescription under medical supervision</p>
<br />
<p>(Quinine LAFRAN® 250 & 500 mg)</p>
<h4>Indications</h4>
<ul>
<li>-Second line treatment of uncomplicated falciparum malaria if treatment with Artesunat + mefloquine has failed.</li>
<li>-Second line treatment of uncomplicated falciparum malaria if artesunate + mefloquine are contra-indicated.</li>
</ul>
<h4>Dosage</h4>
<ul>
<li>Children and Adult: 30 mg/kg/day in 3 divided doses</li>
</ul>
<div style="overflow-x:auto;"> <table border="1">
<thead>
  <tr>
    <th>Weight</th>
	<th>Age</th>
    <th>Tablet</th>
    <th>Morning</th>
	<th>Noon</th>
	<th>Evening</th>
	<th>Duration</th>
	<th>Total Treatment</th>
  </tr>
  </thead>
    <tbody id="myTable">
  <tr>
    <td rowspan="2">< 7kg</td>
    <td rowspan="2"><6 mos</td>
	<td>quinine 300mg</td>
	<td><sup>1</sup>&frasl;<sub>4</sub> tab</td>
	<td><sup>1</sup>&frasl;<sub>4</sub> tab</td>
	<td><sup>1</sup>&frasl;<sub>4</sub> tab</td>
	<td>7 Days</td>
	<td>5 <sup>1</sup>&frasl;<sub>4</sub> tabs</td>
  </tr>
  <tr>
    <td>tetracycline 250mg</td>
	<td colspan="5">DO NOT ADMINISTER</td>
  </tr>
  <tr class="line2">
    <td rowspan="2">7 to 15 kg</td>
    <td rowspan="2">6 mos-2 years</td>
	<td>quinine 300mg</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td><sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td>7 Days</td>
	<td>10 <sup>1</sup>&frasl;<sub>2</sub> tabs</td>
  </tr>
  <tr class="line2">
    <td>tetracycline 250mg</td>
	<td colspan="5">DO NOT ADMINISTER</td>
  </tr>
  <tr>
    <td rowspan="2">16-30 kg</td>
    <td rowspan="2">2-8 yrs</td>
	<td>quinine 300mg</td>
	<td>1 tab</td>
	<td>1 tab</td>
	<td>1 tab</td>
	<td>7 Days</td>
	<td>21 tabs</td>
  </tr>
  <tr>
    <td>tetracycline 250mg</td>
	<td colspan="5">DO NOT ADMINISTER</td>
  </tr>
   <tr class="line2">
    <td rowspan="2">31-45 kg</td>
    <td rowspan="2">9-15 yrs</td>
	<td>quinine 300mg</td>
	<td>1 <sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td>1 <sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td>1 <sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td>7 Days</td>
	<td>31 <sup>1</sup>&frasl;<sub>2</sub> tabs</td>
  </tr>
  <tr class="line2">
    <td>tetracycline 250mg</td>
	<td>1 <sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td>1 <sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td>1 <sup>1</sup>&frasl;<sub>2</sub> tab</td>
	<td>7 Days</td>
	<td>31 <sup>1</sup>&frasl;<sub>2</sub> tabs</td>
  </tr>
  <tr>
   <td rowspan="2">> 45 kg</td>
    <td rowspan="2">> 15 yrs</td>
	<td>quinine 300mg</td>
	<td>2 tabs</td>
	<td>2 tabs</td>
	<td>2 tabs</td>
	<td>7 Days</td>
	<td>42 tabs</td>
  </tr>
  <tr>
   <td>tetracycline 250mg</td>
	<td>2 tabs</td>
	<td>2 tabs</td>
	<td>2 tabs</td>
	<td>7 Days</td>
	<td>42 tabs</td>
  </tr>
	</tbody>
</table> </div>
<br />
<h4>Duration:</h4> 
<ul>
<li>7 days in total in association with tetracycline</li>
</ul>
<h4>Side effects</h4>
<ul>
<li>-May cause: headache, visual, auditory and gastro- intestinal disturbances, rashes.</li>
</ul>
<h4>Precautions</h4>
<ul>
<li>-Do not exceed the therapeutic dose: risk of toxicity.</li>
<li>-Antacids, such as aluminum hydroxide, may decrease absorption of quinine: administer 2 hours apart.</li>
<li>-Do not associate with tetracycline to children less than 8 years.</li>
<li>-Pregnancy: do not associate it with tetracycline.</li>
<li>-Breast-feeding: do not associate it with tetracycline.</li>
</ul>
<h4>Remarks:</h4>
<ul>
<li>-Storage: bellow 30ºC</li>
</ul>
<p id="md29"></p>
<br /><br /><br />
<center>
<h3 >RETINOL 100.000 IU = VITAMIN A 100.000 IU</h3>
<h3 >RETINOL 200.000 IU = VITAMIN A 200.000 IU</h3>
</center>
<p>Prescription under medical supervision</p>
<br />
<h5>(Avidon®, Ro-A-vit®)</h5>
<h4>Indications</h4>
<ul>
<li>-Prevention of vitamin A deficiency.</li>
<li>-Exophthalmia: night blindness, conjunctive dryness, corneal ulceration, irreversible blindness.</li>
<li>-Highly vulnerable children suffering from measles, malnutrition, respiratory infections, diarrhea...</li>
</ul>
<h4>Dosage</h4>
<ul>
<li>-Prevention:
<p>Child under 6 months: 50 000 IU in a single dose.</p>
<p>Child from 6 months to 1 year: 100 000 IU in a single dose.</p>
<p>Child over 1 year and adult: 200 000 IU in a single dose every 6 months.</p>
</li>
<li>-Treatment:
<p>Child from 6 months to 1 year: 1st, 2nd, and 8th day, 100 000 IU once daily</p>
<p>Child over 1 year and adult: 1st, 2nd, 8th day, 200 000 IU once daily.</p>
</li>
<li>-Do not exceed indicated doses.</li>
</ul>
<div style="overflow-x:auto;"> <table border="1">
<thead>
  <tr>
    <th>Weight</th>
    <th>Use</th>
	<th>Capsule</th>
	<th>Morning</th>
  </tr>
  </thead>
    <tbody id="myTable">
  <tr>
      <td rowspan="5">Adult</td>
  </tr>
 <tr>
	<td rowspan="2">Prevention</td>
	<td>100 000 IU</td>
	<td>2 cap</td>
</tr>
<tr>
	<td>200 000 IU</td>
	<td>1 cap</td>
</tr>
 <tr>
	<td rowspan="2">Treatment</td>
	<td>100 000 IU</td>
	<td>2 cap</td>
</tr>
<tr>
	<td>200 000 IU</td>
	<td>1 cap</td>
</tr>
  <tr>
      <td rowspan="5">15 -35 kg</td>
  </tr>
 <tr>
	<td rowspan="2">Prevention</td>
	<td>100 000 IU</td>
	<td>2 cap</td>
</tr>
<tr>
	<td>200 000 IU</td>
	<td>1 cap</td>
</tr>
 <tr>
	<td rowspan="2">Treatment</td>
	<td>100 000 IU</td>
	<td>2 cap</td>
</tr>
<tr>
	<td>200 000 IU</td>
	<td>1 cap</td>
</tr>
  <tr>
      <td rowspan="5">8-15 kg</td>
  </tr>
 <tr>
	<td rowspan="2">Prevention</td>
	<td>100 000 IU</td>
	<td>2 cap</td>
</tr>
<tr>
	<td>200 000 IU</td>
	<td>1 cap</td>
</tr>
 <tr>
	<td rowspan="2">Treatment</td>
	<td>100 000 IU</td>
	<td>2 cap</td>
</tr>
<tr>
	<td>200 000 IU</td>
	<td>1 cap</td>
</tr>	
  <tr>
      <td rowspan="5">6-8 kg</td>
  </tr>
 <tr>
	<td rowspan="2">Prevention</td>
	<td>100 000 IU</td>
	<td>2 cap</td>
</tr>
<tr>
	<td>200 000 IU</td>
	<td>1 cap</td>
</tr>
 <tr>
	<td rowspan="2">Treatment</td>
	<td>100 000 IU</td>
	<td>2 cap</td>
</tr>
<tr>
	<td>200 000 IU</td>
	<td>1 cap</td>
</tr>
  <tr>
      <td rowspan="5"><6 kg</td>
  </tr>
 <tr>
	<td rowspan="2" colspan="3">DO NOT ADMINISTER</td>
</tr>

	</tbody>
</table> </div>
<br />
<h4>Duration:</h4> 
<ul>
<li>-Prevention: single dose, every 6 months.</li>
<li>-Treatment: 1st, 2nd, and 8th day; thereafter as for “prevention” if necessary.</li>
</ul>
<h4>Precautions</h4>
<ul>
<p>Pregnancy:</p>
<li>-Prevention: avoid; give a single dose of 200 000 IU just after delivery.</li>
<li>-Treatment: do not exceed a dose of 100 000 IU / day (risk of foetal abnormalities).</li>
</ul>
<h4>Remarks:</h4>
<ul>
<li>-Palm oil, dark–green, leafy vegetables, orange–red vegetables and fruit, egg 
Yolk, full-cream milk and liver (especially fish liver), are good sources of vitaminA.</li>
<li>-One 200 000 IU capsule contains about 8 drops (1 drop = 25 000 IU).</li>
<li>-Over dosage may cause: gastro-intestinal disturbances, headache, raised intracranial pressure especially in newborns (bulging fontanel).</li>
<li>-Storage: keep in cool place (8C° to 15Cº)</li>
</ul>
<p id="md30"></p>
<br /><br /><br />
<center>
<h3 >TETRACYCLINE 250mg</h3>
</center>
<p>Antibiotic = Prescription under medical supervision</p>
<br />
<p>(Achromycin®, Hostacyclin®, Sustamycin®)</p>
<h4>Indications</h4>
<ul>
<li>-Infection (Brucellosis, Pasteurellose, rikettosiosis).</li>
<li>-Cholera.</li>
<li>-Gonorrhoea</li>
<li>-Syphilis.</li>
<li>-Infection due to Chlamydia trachomatis (if no other effective drug available)</li>
<li>-Atypical pneumopathy.</li>
</ul>
<h4>Dosage</h4>
<ul>
<li>-Child over 8 years : 25 to 50 mg/ kg / day in 3 divided doses</li>
<li>-Adult: 1 to 3 g / day in 3 divided doses</li>
<li>-Chlamydia infections: adult:2 g / day in 3 divided doses</li>
</ul>
<div style="overflow-x:auto;"> <table border="1">
<thead>
  <tr>
    <th>Weight</th>
    <th>Tablet</th>
    <th>Morning</th>
	<th>Noon</th>
	<th>Evening</th>
	<th>Duration</th>
	<th>Total Treatment</th>
  </tr>
  </thead>
    <tbody id="myTable">
  <tr>
    <td>Adult</td>
	<td>250 mg</td>
	<td>2 to 3 tab</td>
	<td>2 to 3 tab</td>
	<td>2 to 3 tab</td>
	<td>7 Days</td>
	<td>42 tabs to 63 tabs</td>
  </tr>
  <tr  class="line2">
    <td>15 -35 kg</td>
	<td>250 mg</td>
	<td>1 tab</td>
	<td>1 tab</td>
	<td>1 tab</td>
	<td>7 Days</td>
	<td>21 tabs</td>
  </tr>
   <tr>
    <td>8 -15 kg</td>
	<td>250 mg</td>
	<td rowspan="3" colspan="5">DO NOT ADMINISTER</td>
  </tr>
  <tr  class="line2">
    <td>4 -8 kg</td>
	<td>250 mg</td>
  </tr>
   <tr>
    <td>< 4 kg</td>
	<td>250 mg</td>
  </tr>
	</tbody>
</table> </div>
<br />
<h4>Duration:</h4> 
<ul>
<li>7 days.</li>
<li>In case of syphilis: 14 days</li>
</ul>
<h4>Side effects</h4>
<ul>
-May cause: gastro- intestinal disturbances (diarrhea, nausea…), skin reactions, and photosensitivity.</li>
</ul>
<h4>Precautions</h4>
<ul>
<li>-Do not administer :
<p>•to children under 8 years ( may damage teeth)</p>
<p>•If known allergy to tetracycline.</p>
</li>
<li>-Administer with caution in case of renal failure.</li>
<li>-Do not combine with penicillin</li>
<li>-Pregnancy: CONTRA-INDICATED</li>
<li>-Breast-feeding: CONTRA-INDICATED</li>
</ul>

<h4>Remarks:</h4>
<ul>
<li>-Do not give simultaneously with iron salts or aluminum hydroxide (decreased intestinal absorption), administer at least 2 hours apart.</li>
<li>-Take between meals.</li>
<li>-Tetracycline has the same indications and doses as Doxycycline.</li>
<li>-Storage: bellow 30ºC</li>
<li>-Never use out of date tetracycline (risk of renal acidosis)</li>
</ul>
<p id="externalmedicines"></p>
<br /><br /><br />
<center>
<h2>EXTERNAL MEDICINES</h2>
</center>
<p id="md31"></p>
<br /><br /><br />
<center>
<h3 >BENZYL BENZOATE 25% (antiparasitic)</h3>
</center>
<br />
<p>(Ascabiol ®)</p>
<h4>Indications</h4>
<ul>
<li>-Scabies</li>
<li>-Pediculosis (lice)</li>
</ul>
<h4>Preparation</h4>
<ul>
<li>
The preparation of dilution is made with drinking water from the water mains or boiled and cooled
water, filtered if necessary.</li>
</ul>
<h4>Use</h4>
<ul>
<p>Treatment of scabies:</p>
<li>1. wash the skin, rinse and dry it;</li>
<li>2.apply the 25 % emulsion over the whole body, except to the face and the mucous membranes;</li>
<li>3.leave the skin for 24 hours (12 hours for children under 2 years);</li>
<li>4.remove by washing thoroughly;</li>
<li>5.repeat the following day if possible.</li>
</ul>
<h4>Warning</h4>
<ul>
<p>In case of super-infection, first clean and apply gentian violet for several days.</p>
<li>-Treatment of pediculosis:

Apply the 25 % emulsion, leave in place for 24 hours (12 hours for children under 2

years), and wash thoroughly. Repeat application after 1 week.</li>
<li>-Examine and treat if necessary household and others in close contact with patients. Clothes and bed linen must be washed with boiling water.</li>
<li>-Itching may persist for several days, which does not imply that the treatment is ineffective.</li>
</ul>
<h4>Side Effects</h4>
<ul><li>-May cause: burning sensation, eczema in case of repeated applications.</li></ul>
<h4>Precautions</h4>
<ul>
<li>-Never swallow: very dangerous (may cause agitation and convulsions).

In case of ingestion, refer to a doctor immediately for gastric lavage: do not induce vomiting.</li>
<li>-Do not apply to mucous membranes (mouth, nose, vagina, and rectum).</li>
<li>-Breast-feeding: do not apply to the nipples.</li>
</ul>
<h4>Remarks:</h4>
<ul>
<li>-Storage: bellow 30ºC</li>
</ul>
<p id="md32"></p>
<br /><br /><br />
<center>
<h3 >CLOTRIMAZOLE vaginal tablet 500 mg (Antifungal)</h3>
</center>
<br />
<p>(Imidil ®)</p>
<h4>Indications</h4>
<ul>
<li>-Fungal infections of vagina.</li>
<li>-Local treatment of vaginal candida and trichomonas infections.</li>
</ul>
<h4>Dosage</h4>
<ul>
<li>Once daily at bedtime.</li>
</ul>
<h4>Duration</h4>
<ul>
<li>1 vaginal tablet 500 mg: 1 day.</li>
<li>(the treatment can be repeated after 2 weeks.</li>
</ul>
<h4>Side Effects</h4>
<ul>
<li>Some patients may complain of burning sensation and itching after application of Clotrimazole vaginal tablet.</li>
<li>-Never swallow: very dangerous (may cause agitation and convulsions).
In case of ingestion, refer to a doctor immediately for gastric lavage: do not induce vomiting.</li>
<li>-Do not apply to mucous membranes (mouth, nose, vagina, and rectum).</li>
<li>-Breast-feeding: do not apply to the nipples.</li>
</ul>
<h4>Remarks:</h4>
<ul>
<li>Clotrimazole 1% cream can be applied 2-3 times per day during 1-2 weeks if clotrimazole vaginal tablets 500mg are not available.</li>
</ul>
<p id="md33"></p>
<br /><br /><br />
<center>
<h3 >GENTIAN VIOLET = GV (antifungal, antiseptic and drying agent)</h3>
</center>
<br />
<p>(Imidil ®)</p>
<h4>Indications</h4>
<ul>
<li>-Fungal infection of:
<p>•The skin and the scalp.</p>
<p>•The oral and the vaginal mucous membranes.</p>
</li>
<li>-Wet skin diseases; eczema, impetigo.</li>
<li>-Burns and superficial wounds.</li>
</ul>
<h4>Dosage</h4>
<ul>
<li>-One application daily.</li>
<li>-The solution can be applied in the mouth without danger.</li>
</ul>
<h4>Dilution:</h4>
<ul>
<p>The preparation of dilution is made with drinking water from the water mains or	boiled

and cooled water, filtered if necessary.</p>
<li>- It is used in a 0.5%=5g/liter (saturated solution):

Dissolve 2 teaspoons in one liter of water. Stir several times and leave to settle. Filter through cotton or pour carefully into another bottle to eliminate possible sediment.</li>
<li>-Wash the bottle carefully with hot water and let it dry before refilling.</li>
</ul>
<h4>Side Effects</h4>
<ul>
<li>May cause permanent pigmentation</li>
</ul>
<h4>PRECAUTIONS</h4>
<ul>
<li>Do not use on the face</li>
</ul>
<h4>Remarks:</h4>
<ul>
<li>Storage conditions:
<p>•Powder: unlimited.</p>
<p>•Solution diluted ready for use: maximum 1 week.</p></li>
</ul>
<p id="md34"></p>
<br /><br /><br />
<center>
<h3 >KETOCONAZOLE 2% Cream (Antifungal)</h3>
</center>
<br />
<p>(Nizoral ®)</p>
<h4>Indications</h4>
<ul>
<li>Fungal disease of the skin which may appear on the hands, feet, genital area, trunk, groin, scalp, face, chest or back.</li>
</ul>
<h4>Usage</h4>
<ul>
<li>- Once or twice a day</li>
<li>-The solution can be applied in the mouth without danger.</li>
</ul>
<h4>Duration:</h4>
<ul>
<li>-2 to 6 weeks, depending on the type and severity of the infection.</li>
<li>-Relief from the symptoms may occur quickly but it is important that you continue to use this product for several days
 after all symptoms have disappeared to prevent them from coming back.</li>
</ul>
<h4>Side Effects</h4>
<ul>
<li>-May cause: occasionally, irritation and reddening of the skin, or a burning sensation may occur during treatment.</li>
<li>-In rare cases, itching and redness following each application may indicate an allergy to the medicine. In this case stop the treatment.</li>
</ul>
<h4>PRECAUTIONS</h4>
<ul>
<li>-Do not put this cream into the eyes.</li>
<li>-Pregnancy and Breast-feeding: should be avoided.</li>
</ul>
<h4>Remarks:</h4>
<ul>
<li>-Keep in the safe place out of the reach of children.</li>
<li>-Store at the temperature bellow 25 ºC</li>
</ul>
<p id="md35"></p>
<br /><br /><br />
<center>
<h3 >MICONAZOLE NITRATE 2% cream (Antifungal)</h3>
</center>
<br />
<p>(Daktarin 2%®)</p>
<h4>Indications</h4>
<ul>
<li>Skin infections due to fungi (mycoses).</li>
</ul>
<h4>Use:</h4>
<ul>
<li>Twice daily, after washing and drying the skin. Gently and regularly massage the cream into the skin until complete penetration</li>
</ul>
<h4>Duration of treatment:</h4>
<ul>
<li>The duration of treatment is 2 to 4 weeks depending on the particular mycosis but may be longer for certain sites. Regular use of the product for the entire duration of treatment is essential for the success of treatment.</li>
</ul>
<h4>Side Effects</h4>
<ul>
<li>-May cause: itching, irritation, burning sensation, redness.</li>
</ul>
<h4>PRECAUTIONS</h4>
<ul>
<li>-Avoid application near the eyes.</li>
<li>-Do not use soap with an acid PH (acidity may cause multiplication of Candidas).</li>
<li>-Wash your hands carefully after you have used this product, except if the treatment is for the hands.</li>
</ul>
<h4>Remarks:</h4>
<ul>
<li>-Wash your hand carefully after applying Miconazole cream for local application and after each contact with infected area.</li>
<li>-Regularly change clothing which comes into contact with the infected skin in order to avoid re–infecting yourself.</li>
<li>-Storage Below 25 ºC.</li>
</ul>
<p id="md36"></p>
<br /><br /><br />
<center>
<h3 >NYSTATIN 100.000 IU Ovules (Antifungal)</h3>
</center>
<br />
<p>Prescription under medical supervision</p>
<br />
<p>(Mycostatin®, Nystan®)</p>
<h4>Indications</h4>
<ul>
<li>`Vaginal candidiasis.</li>
</ul>
<h4>Dosage:</h4>
<ul>
<li>Vaginal candidiasis</li>
<li>Adult: 100 000 to 200 000 IU / day</li>
</ul>
<h4>Duration:</h4>
<ul>
<li>Vaginal candidiasis: 10 to 20 days</li>
</ul>
<h4>PRECAUTIONS</h4>
<ul>
<li>Nystatin is not active against other types of fungi.</li>
</ul>
<h4>Remarks:</h4>
<ul>
<li>-Moisten the tablet before introducing it into the vaginal</li>
<li>-For vaginal candidiasis, do not stop treatment during menstruation.</li>
<li>-Vaginal tablets may be used for the treatment of oral candidiasis, in spite of their disagreeable taste</li>
<li>-Storage: below 30ºC</li>
</ul>
<p id="md37"></p>
<br /><br /><br />
<center>
<h3 >POVIDONE-IODINE 10% = POLYVIDONE-IODINE 10% = PVP-IODINE 10% (Antiseptic and disinfectant)</h3>
</center>
<br />
<p>Prescription under medical supervision</p>
<br />
<p>(Betadine®, Videne®, Iso-Betadine®)</p>
<h4>Indications</h4>
<ul>
<li>`-Antisepsis of:
<p>•wounds and burns</p>
<p>•Skin prior to injections, puncture, surgery.</p>
</li>
<li>-Treatment of skin or mucous membrane infections.</li>
<li>-Antisepsis of hands before surgery.</li>
<li>-Disinfection of medical instruments.</li>
</ul>
<h4>Dosage:</h4>
<ul>
<p>
The preparation of dilution is made with drinking water from the water mains or boiled and cooled

water, filtered if necessary.</p>
<li>-Undiluted (10 % solution of povidone-iodine ) for antisepsis of the skin: twice daily</li>
<li>-Diluted 2. 5 % povidone-iodine solution for antisepsis of wounds and burns every time the dressing is changed and disinfection of instruments (1 part of 10% concentrate solution + 3 parts of water).Adult: 100 000 to 200 000 IU / day</li>
<li>-Diluted o. 5 % povidone-iodine for the mucous membranes (1 part of 10 % concentrate solution + 19 parts of water) twice daily</li>
</ul>
<div style="overflow-x:auto;"> <table border="1">
<thead>
  <tr>
    <th>Dosage</th>
    <th>Preparation</th>
	<th>Use</th>
	<th>Frequency</th>
  </tr>
  </thead>
    <tbody id="myTable">
  <tr>
      <td rowspan="3">10%</td>
  </tr>
 <tr>
	<td rowspan="2">Pure</td>
	<td>Antisepsis of the skin
(umbilical cord, fungal
skin infections and
skin manifestations of
viruses)</td>
	<td  rowspan="3">Twice daily</td>
</tr>
<tr>
	<td>Antisepsis of the hands</td>
</tr>
  <tr>
      <td rowspan="3" class="line2">2.5%</td>
  </tr>
 <tr class="line2">
	<td rowspan="2">1 part of 10% + 3 parts of water</td>
	<td>Antisepsis of the skin</td>
	<td>Before injection or insertion of IV devices</td>
</tr>
 <tr class="line2">
	<td>Antiseptic of wounds and burns</td>
	<td>When dressing renewal</td>
</tr>
  <tr>
      <td>0.5%</td>
	<td>1part of 10% + 19 parts of water</td>
	<td>Fungal and other infections of mucous membranes</td>
	<td>Twice daily</td>
</tr>

	</tbody>
</table> </div>
<br />
<h4>PRECAUTIONS</h4>
<ul>
<li>-Repeated use should be avoided in newborns, in pregnant or lactating women as well as repeated application to very large surfaces or to mucous membranes due to the percutaneous absorption of iodine.</li>
<li>-Never use with mercury compounds (e.g. merbromin®, mercurocrome®, thiomersal®, Merfen®; certain disinfecting soaps…) because of necrosis risk.</li>
</ul>
<h4>Remarks:</h4>
<ul>
<li>-Stop treatment in case of allergic reactions.</li>
<p>-Storage:</p>
<li>•Concentrated solution of povidone-iodine 10%: in airtight and opaque containers.</li>
<li>•Diluted solution of povidone- iodine 2.5%: maximum 1week.</li>
<li>•Diluted solution of povidone- iodine 0.5%: prepare just before use.</li>
<li>•Solution used for disinfection of instruments: renew every day.</li>
</ul>
<p id="md38"></p>
<br /><br /><br />
<center>
<h3 >TETRACYCLINE 1% eye ointment (Antibacterial)</h3>
</center>
<br />
<h4>Indications</h4>
<ul>
<li>-Conjunctivitis</li>
<li>-Trachoma</li>
<li>-Prevention of Chlamydia and gonococcus neonatal conjunctivitis.</li>
</ul>
<h4>Dosage:</h4>
<ul>
<li>-Apply into conjunctive sac, to both eyes.</li>
<li>-Conjunctivitis: 2 applications / day for 1 week.</li>
<li>-Trachoma: 2 applications/ day for 4 to 6 weeks.</li>
<li>-Prevention of Chlamydia and gonococcus neonatal conjunctivitis: 1 single application immediately after birth.</li>
</ul>
<h4>Side Effects</h4>
<ul>
<li>May cause allergic reactions. Stop treatment in case of serious reactions.</li>
</ul>
<h4>Remarks:</h4>
<ul>
<li>-Do not apply dermal ointment to the eyes. Use ophthalmic ointment only.</li>
<li>-Wash the eyes with boiled and cooled water before each application. Use sterile normal saline serum 0.9% in newborns.</li>
<li>-To avoid contamination, do not touch the ointment tip to the eye and close the tube properly after opening.</li>
<li>-Storage: below 30ºC</li>
</ul>
<br />


<?php include "footer.php"; ?>
</div>
</section>
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
	<script type="text/javascript">

  myHilitor.remove();

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
