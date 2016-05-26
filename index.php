<!DOCTYPE html>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<html>
		<head>
		<title>Campus Bindslev Plads</title> <!-- Er anderledes for de andre sider da denne side skal stå for sig selv-->
		<meta name="robots" content="noindex, nofollow"> <!-- gør siden ikke bliver fundet af søgemaskine robotter, så længe de respektere dette-->
		<link rel="icon" href="favicon.png?" type="image/png"> <!-- vores favicon-->

		<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Kampagneside, Campus Bindslevs Plads, Silkeborg, Kultur, Aarhus17, FabLab, Rethink Læring, Projekt Ny Læring, Silkeborg kommune" />
		<meta name="description" content="Kampagneside for Campus Bindslevs Plads, hold dig opdateret på det nye fælles byrum og laboratorium til læring, kreativitet og kultur. " />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //for-mobile-apps -->
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link rel="stylesheet" href="css/newsstyle.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,300,700" rel="stylesheet" type="text/css">
		</head>

		<body id="landingbg">
		<?php include_once("inc/analyticstracking.php") ?><!-- Google analytics-->
		<div id="wrapper" class="wrap fullheight">
			<main>
				<section id="myCounter">
					<h1 id="stort" class="bold makeorange text-center banner-info-left h1">CAMPUS BINDSLEVS PLADS</h1>
					<!-- START COUNTDOWN -->
					<!-- Kalder på funktionen i countdown.js, dog kan man ændre disse parametere i scriptet nedenunder(Det gør det nemmere for begyndere at bruge disse inputs)--> 
					<script src="js/countdown.js" type="text/javascript"></script> 
					<script type="application/javascript">
						
						var myCountdownTest = new Countdown({
																year	: 2017,
																month	: 8, 
																day		: 1,
																width	: 850, 
																height	: 150
															});
						
			
			
					</script> 
					
					<!-- END COUNTDOWN --> 
				</section>
				<!-- Samme counter som ovenover bare tilpasset til mobil, når den ovenover er for stor bliver den display:none ud i css og denne går fra display:none til block -->
				<section id="myCounter-mobile">
					<h1 id="stort" class="bold makeorange text-center banner-info-left h1">CAMPUS BINDSLEVS PLADS</h1>
					<!-- START COUNTDOWN --> 
					<script src="js/countdown.js" type="text/javascript"></script> 
					<script type="application/javascript">
						
						var myCountdownTest = new Countdown({
																year	: 2017,
																month	: 8, 
																day		: 1,
																width	: 550, 
																height	: 90
															});
						
			
			
					</script> 
					
					<!-- END COUNTDOWN --> 
				</section>
				<!-- Link til kampagnesiden -->
				<section id="gotosite" class="center-block btn "> <a class="btn btn-info btn-lg" href="hjem.php" role="button">GÅ TIL SITE</a> </section>
				<!-- Newsletter form -->
				<section id="newsletterform">
					<h5 class="newsletter">Vi tæller ned til det nye Campus Bindslevs Plads. Vil du gerne holdes opdateret?</h5>
					<h4 class="newsletter">Tilmeld dig vores nyhedsbrev her!</h4>
					<form action="inc/send.php" method="post" id="newsletter" name="newsletter"> <!-- starter send.php som gør denne funktion aktiv og sender mailen ind i databasen, der er blevet tilføjet sikkerhed i send.php-->
						<input type="email" name="signup-email" id="signup-email" value="" placeholder="Skriv Email her" />
						<input type="submit" value="Tilmeld" name="signup-button" id="signup-button">
					</form>
					<div id="response"></div>
					
					<!-- newsletter scripts --> 
					<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
					<script src="js/lib.js"></script> 
				</section>
			</main>
			<!-- Newsletter form --> 
			
		</div>
		<!-- Mouseflow-->
		<script type="text/javascript">
var _mfq = _mfq || [];
  (function() {
    var mf = document.createElement("script");
    mf.type = "text/javascript"; mf.async = true;
    mf.src = "//cdn.mouseflow.com/projects/bfc64322-4178-43ea-b1af-6cf738151b9f.js";
    document.getElementsByTagName("head")[0].appendChild(mf);
  })();
</script>
</body>
</html>