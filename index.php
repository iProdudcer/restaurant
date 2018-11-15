<!DOCTYPE html>
<html lang="en">
  <head>
  <?php 
session_start();
include_once("db_connect.php");
?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Bloemen, Boeketten, Flower, Power, FlowerPower">
    <meta name="author" content="Joost Horstik">
    <title>FlowerPower :: Homepagina</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Font inladen vanuit google -->
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css?=1" rel="stylesheet">
  </head>

  <body>
<style>
#container1 {
	width:100%;
	height:230px;
}

#footerLeft {
	height:230px;
	width:25%;
	float:left;
	clear:both;
	background-color:#779131;
}

#footerMiddle {
	height:230px;
	float:left;
	width: 30%;
	background-color:#779131;
}

#footerTextMiddleTitle {
	width: 200px;
	padding-top:25px;
	text-transform:uppercase;
	color:white;
	font-family: 'Open Sans Bold', 'Open Sans Regular', 'Open Sans';
    font-weight: 700;
	float:left;
    font-style: normal;
    font-size: 22px;
}

#footerRight {
	width:45%;
	height:230px;
	float:left;
	background-color:#779131;
}



#footerRight:before {
    content: "";
        width: 235px;
    height: 300px;
    margin-left: -190px;
    background-image: url(/cms/images/medewerker.png);
    margin-top: -70px;
    position: absolute;
    display: inline-block;
}
#footerLeft ul {
	    width: 200px;
	list-style-type:square;
	 padding-left: 25px;
	 color:white;
	     font-family: 'Open Sans';
    font-weight: 400;
	float:left;
    font-style: normal;
    font-size: 14px;
	margin-top:5px;
}
#footerMiddle ul {
	    width: 200px;
	list-style-type:square;
	 padding-left: 25px;
	 color:white;
	     font-family: 'Open Sans';
    font-weight: 400;
	float:left;
    font-style: normal;
    font-size: 14px;
	margin-top:5px;
}

#footerLeft ul li:hover {
	text-decoration:underline;
	cursor:pointer;
}


.footerText {
	color:white;
	margin-left:55px;
	max-width: 250px;
	font-family: 'Open Sans';
    font-weight: 400;
	text-align: justify;
    font-style: normal;
    font-size: 13px;
    color: rgba(255, 255, 255, 0.858823529411765);
}
#footerTextTitle {
	    width: 200px;
	padding-top:25px;
	text-transform:uppercase;
	color:white;
	font-family: 'Open Sans Bold', 'Open Sans Regular', 'Open Sans';
    font-weight: 700;
	float:left;
    font-style: normal;
    font-size: 22px;
}

#footerTextTitleRight {
	margin-right:35%;
	margin-left:50px;
	padding-top:20px;
	text-transform:uppercase;
	color:white;
	    font-family: 'Open Sans Bold', 'Open Sans Regular', 'Open Sans';
    font-weight: 700;
    font-style: normal;
    font-size: 22px;
}
.copyrightItem:hover {
	text-decoration:underline;
	cursor: pointer;
}
.copyrightText {
	font-family: 'Open Sans';
    font-weight: 400;
    font-style: normal;
    font-size: 13px;
    color: rgba(255, 153, 51, 0.858823529411765);
}



#copyright {
	float:left;
    text-align:center;
	padding-bottom:10px;
	padding-top:15px;
	font-family: 'Open Sans Bold', 'Open Sans Regular', 'Open Sans';
    font-weight: 700;
    font-style: normal;
    font-size: 16px;
	width:100%;
    color: rgba(161, 161, 161, 0.858823529411765);
}



/* Media Queries */

@media only screen and (max-width: 950px ) {
		#footerRight:before {
		display: none !important;
	}

	
	#footerLeft {
		width: 100%;
		height: 160px;
	}
	
	#footerTextTitle {
		width: 100%;
		display: block;
		margin: 0;
		padding-top: 10px;
		padding-left: 5px;
		font-size: 10px;
		font-size: 17px;
	}
	
	div#footerLeft ul {
		margin-left: 20px;
		padding: 0 5px 0 5px;
		height: 120px;
		max-width: 200px;
	}
	
	div#footerLeft li {
		margin: 0;
		font-size: 14px;
	}
	
	footer .height {
		    height: 500px !important;
	}
	
	#footerMiddle {
		float: right;
		width: 100%;
		height: 135px;
		margin-top:20px;
	}
	
	#footerTextMiddleTitle {
		width: 100%;
		display: block;
		margin: 0;
		padding-top: 10px;
		padding-left: 5px;
		font-size: 17px;
	}
	
	#footerMiddle ul {
		margin-left: 20px;
		padding: 0px 5px 0px 5px;
		max-width: 200px;
	}
	
	#footerMiddle li {
		font-size: 14px;
	}
	
	#footerRight {
		width: 100%;
		height: 160px;
	}
	

	
	#footerTextTitleRight {
		width: 100%;
		margin: 0;
		padding-top: 10px;
		padding-left: 5px;
		font-size: 17px;
	}
	
	.footerText {
		font-size: 12px;
		padding-top: 5px;
		margin-left: 8px;
		margin-right: 5px;
		padding-right: 5px;
	}
	
	#copyright {
		font-size: 10px;
	}
	
	.copyrightText {
		
	}
	
	.copyrightItem {
		font-size: 8px;
	}
}
.tp-caption.header-caption {
    background-color:white;
    filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#e0ffffff', endColorstr='#e0ffffff');
	    width: 30%;
		height:60%!important;
    min-width: 300px;
	margin-left: 10% !important;
		border-radius:3px 3px 0px 0px;
		
}

header ul {
  padding: 1.2em 0 0.5em;
}
header span {
  padding: 0 0 0 0.5em;
}
header span, header i {
  color: #2B2D42;
}
header i:nth-of-type(2) {
  cursor: pointer;
}



.span3 {
    width: 23% !important;
    min-width: 220px !important;
}

.row {
  width: 100%;
  justify-content: flex-start;
  display: flex;
  flex-flow: row wrap;
}

.content-title {
	    font-size: 28px;
    color: #000!important;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    text-align: center;
    margin-top: 20px!important;
    position: relative;
}


.carousel-caption h3 {
		text-align:left !important;
     font-size: 36px;
    line-height: 41px;
    font-family: 'Pacifico', cursive;
    color: #fff !important;
}

.carousel-caption {
    top: 20%;
    float: left;
    width: 300px;
    margin-left: 45% !important;
}

.clock {
    max-width: 68em;
    margin-left: auto;
    margin-right: auto;
    padding-left: 5px;
    padding-right: 5px;
    max-width: 35em;
    padding-bottom: 36px;
}

.clock .h2 {
    margin-top: 18px;
    padding-top: 6px;
		text-align:center !important;
    font-size: 20.4px;
    font-weight: 700 !important;
    text-transform: uppercase;
}

.clock .h2, .clock .h3 {
    color: white;
		text-align:center !important;
    text-align: left;
    font-weight: 400;
    padding-left: 42px;
}

.clock .h3 .timer {
    font-size: 21px;
    font-weight: 700;
}

.clock .h3 {
    font-size: 14px;
    margin-top: 2px;
}

.nav-item {
	text-transform:uppercase;
	font-weight:bold;
	color:white !important;
}

.bg-dark {
    background-color: #ffffff00!important;
}

.fixed-top {
    position: absolute !important;
}
.navbar-toggler {
    position: fixed;
    float: right !important;
    right: 5%;
	    background-color: #1b2003;
		margin-top:-35px;
		z-index:100
}

.navbar-collapse.show {
    background-color: #1b2003;
    padding: 10px;
    position: fixed;
    top: 7%;
    width: 103%;
    margin-left: -20px;
}

</style>
    <!-- Navigation -->
    <?php include 'nav.php'; ?>

    <header style="margin-top:-6px;">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('../cms/images/slider56.jpg')"><br>
		  <div class="tp-caption sfb header-caption  start" data-x="left" data-y="bottom" data-voffset="-10" data-hoffset="25" data-start="1550" data-speed="700" style="float:left;z-index: 2; margin-left: 20% !important; margin-top: 6%; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);">
<h2 style="  
    padding: 7px;
    text-align: center;
	border-radius:5px 5px 0px 0px;
    color: black;
	font-weight:300;
	margin-bottom: 0px;
">Trumpets bloem</h2>
<div style="display:block;height:70%;">
<img src="../cms/images/header.jpg" class="imgLoaded" data-alignment="" data-portrait="" width="540" height="394" style="display:block;visibility: visible; height: 80%; margin-left: -0.685279px; margin-top: 0px; position: absolute; width: 100.1%;">
<div style="position:absolute;z-index:2;background-color:#FF304D;border-radius:3px;margin:10px;padding:6px;color:white;font-weight:600;">
NIEUW IN HET ASSORTIMENT
</div>
<div style="position:absolute;z-index:2;background-color:#FF304D;border-radius:3px;margin:10px;margin-top:50px;padding:6px;color:white;font-weight:600;">
BESTEL NU »
</div>
</div>
<div style="    padding: 8px;
    z-index: 1;
	clear:both;
	border-bottom: solid #FF304D 5px;
	width:100%;
	float:left;
	text-align:center;
	font-size:14px;
    background-color: white;
	color:black;
    position: absolute;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
</div>
	
       
            <div class="carousel-caption d-none d-md-block">
              <h3>De grootste <br>selectie van bloemen</h3>
              <p style="text-align:left;margin-top:-8px;">ALS BLOEMEN WINKEL BIEDEN WE DE BESTE EN GROOTSTE SELECTIE VAN BLOEMEN VOOR UW GELEGENHEID.</p>
			  <br><h4 style="text-align:left;color:#FF304D;font-weight:bold;">HULP NODIG?</h4><h4 style="text-align:left;color:#FF304D;margin-top:-10px;font-weight:540;font-size:15px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</h4>
            </div>
			
			
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('../cms/images/slider56.jpg')">
            <div class="tp-caption sfb header-caption  start" data-x="left" data-y="bottom" data-voffset="-10" data-hoffset="25" data-start="1550" data-speed="700" style="float:left;z-index: 2; margin-left: 20% !important; margin-top: 7.5%; visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, -0.0025, 0, 0, 0, 1);">
<h2 style="  
    padding: 7px;
    text-align: center;
	border-radius:5px 5px 0px 0px;
    color: black;
	font-weight:300;
	margin-bottom: 0px;
">Fresh ginger bloem</h2>
<div style="display:block;height:70%;">
<img src="../cms/images/header2.jpg" class="imgLoaded" data-alignment="" data-portrait="" width="540" height="394" style="display:block;visibility: visible; height: 80%; margin-left: -0.685279px; margin-top: 0px; position: absolute; width: 100.1%;">
<div style="position:absolute;z-index:2;background-color:#FF304D;border-radius:3px;margin:10px;padding:6px;color:white;font-weight:600;">
NIEUW IN HET ASSORTIMENT
</div>
<div style="position:absolute;z-index:2;background-color:#FF304D;border-radius:3px;margin:10px;margin-top:50px;padding:6px;color:white;font-weight:600;">
BESTEL NU »
</div>
</div>
<div style="    padding: 8px;
    z-index: 1;
	clear:both;
	border-bottom: solid #FF304D 5px;
	width:100%;
	float:left;
	text-align:center;
	font-size:14px;
    background-color: white;
	color:black;
    position: absolute;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
</div>
	
       
            <div class="carousel-caption d-none d-md-block">
              <h3>De grootste <br>selectie van bloemen</h3>
              <p style="text-align:left;margin-top:-8px;">ALS BLOEMEN WINKEL BIEDEN WE DE BESTE EN GROOTSTE SELECTIE VAN BLOEMEN VOOR UW GELEGENHEID.</p>
			  <br><h4 style="text-align:left;color:#FF304D;font-weight:bold;">HULP NODIG?</h4><h4 style="text-align:left;color:#FF304D;margin-top:-10px;font-weight:540;font-size:15px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</h4>
            </div>
			
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('../cms/images/slider56.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>




    <!-- Page Content -->
	<div style="    background-color: #23221f;    border-top: 5px solid #2c2c2c;
    padding: 3px;">
	<div class="clock"><div class="icon"></div><div class="h2">Vóór 23:59 uur besteld, morgen geleverd!</div><div class="h3">U heeft nog: <span class="timer" data-target="1539165600"><blink>

	<input type="hidden" id="set-time" value="1"/>
	<div style="display:inherit;" id="countdown">
    <div style="display:inherit;" id='tiles' class="color-full"></div>
   
      </div>

	<script>
var today = new Date();

var tomorrow = new Date();
tomorrow.setDate(tomorrow.getDate() + 1);
tomorrow.setHours(0, 0, 0, 0);

var diffMs = tomorrow - today; // milliseconds between now & Christmas
var minutes = Math.floor(diffMs / 1000 / 60);

countdown(minutes);

//alert(diffDays + " days, " + diffHrs + " hours, " + diffMins + " minutes until Christmas 2015 =)");

function countdown(minutes) {
  var target_date = new Date().getTime() + minutes * 60 * 1000; // set the countdown date
  var time_limit = minutes * 60 * 1000;
  //set actual timer
  /*setTimeout(
    function() 
    {
      alert( 'done' );
    }, time_limit );*/

  var days, hours, minutes, seconds; // variables for time units

  var countdown = document.getElementById("tiles"); // get tag element

  getCountdown();

  setInterval(function() {
    getCountdown();
  }, 1000);

  function getCountdown() {
    // find the amount of "seconds" between now and target
    var current_date = new Date().getTime();
    var seconds_left = (target_date - current_date) / 1000;

    if (seconds_left >= 0) {
      console.log(time_limit);
      if (seconds_left * 1000 < time_limit / 2) {
        $("#tiles").removeClass("color-full");
        $("#tiles").addClass("color-half");
      }
      if (seconds_left * 1000 < time_limit / 4) {
        $("#tiles").removeClass("color-half");
        $("#tiles").addClass("color-empty");
      }

      days = pad(parseInt(seconds_left / 86400));
      seconds_left = seconds_left % 86400;

      hours = pad(parseInt(seconds_left / 3600));
      seconds_left = seconds_left % 3600;

      minutes = pad(parseInt(seconds_left / 60));
      seconds = pad(parseInt(seconds_left % 60));

      // format countdown string + set tag value
      countdown.innerHTML =
        "<span>" +
        hours +
        ":</span><span>" +
        minutes +
        ":</span><span>" +
        seconds +
        "</span>";
    }
  }

  function pad(n) {
    return (n < 10 ? "0" : "") + n;
  }
}

</script>
	</blink>
	
	</span> om te profiteren voor <strong>levering van morgen.</strong></div></div>
 </div>
 
    <div class="container">
	   
   <?php include 'uitgelicht.php'; ?>
   
   </div>
 <div style="background-color:#77913154;margin-bottom: -150px;border-bottom: solid #779131 5px;">
	  <h2 style="    padding: 27px;
    margin-bottom: -10px;color:#779131 !important;" class="content-title">Top aanbiedingen bloemen</h2>
	   
	   <?php include 'dom.php'; ?>
	   </div>
	   
	    <div class="container">





      <!-- Portfolio Section -->
	  <br>
  <div class="col-lg-12 mb-6" style="padding-left:0px !important;padding-right:0px !important;text-align:center;border: solid #779131 5px;">
          <div class="card h-100">
            <div class="card-body">
              <p class="card-text"><b><h2>Over FlowerPower</h2></b><br>
Over Flowerpower

Dit is een faketekst. Alles wat hier staat is slechts om een indruk te geven van het grafische effect van tekst op deze plek. Wat u hier leest is een voorbeeldtekst. Deze wordt later vervangen door de uiteindelijke tekst, die nu nog niet bekend is. De faketekst is dus een tekst die eigenlijk nergens over gaat. Het grappige is, dat mensen deze toch vaak lezen. Zelfs als men weet dat het om een faketekst gaat, lezen ze toch door.</p>
            </div>
          </div>
        </div>
     <br>

  

      <!-- Features Section -->
      <div class="row">
        <div class="col-lg-6">
          <h2>Bezoek een van onze winkels</h2>
          <p>FlowerPower heeft <b>4</b> vestigingen op onderstaande locaties: </p>
          <ul>
            <li>Almere</li>
            <li>Arnhem</li>
            <li>Breda</li>
            <li>Utrecht</li>
          </ul>
          <p>Handig om te weten: Er is een nieuwe vestiging geopend op locatie Arnhem. Deze is inmiddels al hierboven bijgevoegd, maar we willen je er op attent maken dat je vanaf 
		  de dag van vandaag ook daar terecht kunt!<br><br><b>Openingstijden (alle filialen)</b><br>Maandag tot vrijdag: 10:00 tot 17:00.<br>Zaterdag: 12:00 tot 18:00.<br>Zondag: Gesloten. </p>
        </div>
        <div class="col-lg-6">
          <img class="img-fluid rounded" style="    border: solid #779131 5px;
    border-style: double;" src="http://www.mostert-bloemen.nl/wp-content/uploads/2016/01/vestiging-hardinxveld-2.jpg" alt="">
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Call to Action Section -->
      <div class="row mb-4">
        <div class="col-md-8">
          <p>Heb je vragen of hulp nodig? Twijfel niet en neem contact op met onze klantenservice. De klant staat bij ons centraal en we helpen je dan ook graag verder!</p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-secondary btn-block" href="#">Contact opnemen ></a>
        </div>
      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
   <!-- Footer -->
   <footer class="height" style="
    background-color: #779131;
">
       <div class="container height" style="
    background-color: #779131 !important;
">
<div id="container1" style="
    background-color: #779131;
">
<div id="footerLeft">
<div id="footerTextTitle">Klantenservice</div>
<ul>
  <li>Bestellen en betalen</li>
  <li>Retourneren en annuleren</li>
  <li>Verzendinformatie</li>
  <li>Onze bloemgarantie</li>
  <li>Algemene voorwaarden</li>
  <li>Contact</li>
</ul>

</div>

<div id="footerMiddle">
<div id="footerTextMiddleTitle">Assortiment</div>
<ul>
  <li>Boeketten</li>
  <li>Top bloemen</li>
  <li>Bloem aanbiedingen</li>
  <li>Uitgelichte bloemen</li>
   
</ul>

</div>

<div id="footerRight">
<div id="footerTextTitleRight">Over FlowerPower</div>
<div class="footerText">
Lorem ipsum dolor da sit amet, consectetuer le adipiscing elit. Aenean commodo pa ligula eget dolor. Aenean massa.
<br><br>
T: 0315 - 63 26 89<br>
E: info@flowerpower.nl
</div>
</div>
</div>
</div>
</footer>
    <footer class="py-5 bg-dark" style="background-color:#516718 !important;">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; FlowerPower Website 2018<br><span style="font-size:14px;">Made by: Joost Horstik ©</span></p>
      </div>
      <!-- /.container -->
    </footer>
</html>
