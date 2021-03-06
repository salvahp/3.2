<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?></title> <!-- Kalder variablen $title på den aktive side -->
<meta name="keywords" content="<?php echo $metakeywords; ?>" /><!-- Kalder variablen $metakeywords på den aktive side -->
<meta name="description" content="<?php echo $metadescription; ?>" /><!-- Kalder variablen $metadescription på den aktive side -->
<meta name="robots" content="noindex, nofollow">
<link rel="icon" href="favicon.png" type="image/png">

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>

<!-- //js -->
<!-- FlexSlider -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
						$(window).load(function(){
						  $('.flexslider').flexslider({
							animation: "slide",
							start: function(slider){
							  $('body').removeClass('loading');
							}
						  });
						});
					  </script>
<!-- //FlexSlider -->
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,300,700" rel="stylesheet" type="text/css">
</head>
<!-- Schema er til micro datamarkering  -->
<body itemscope itemtype="http://schema.org/Organization">
<!-- Google Analytics  -->
<?php include_once("analyticstracking.php") ?>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-nav">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					

					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="logo animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
							<a class="navbar-brand" href="hjem.php"><img id="bannerlogo" src="images/logo-us.png"></a>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					 <ul class="nav navbar-nav animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
						<li <?php if ($thisPage=="Hjem") echo " class=\"active\""; ?>><a href="hjem.php">Forside</a></li><!-- Der er blevet tilføjet php så hvis den pågældende side er aktiv vises det ved markering i navigationen-->
						<li <?php if ($thisPage=="Galleri") echo " class=\"active\""; ?>><a href="galleri.php">Galleri</a></li>
                        <li <?php if ($thisPage=="Om") echo " class=\"active\""; ?>><a href="om.php">Om</a></li>
						<li <?php if ($thisPage=="Kontakt") echo " class=\"active\""; ?>><a href="kontakt.php">Kontakt</a></li>
					  </ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
<!-- //header -->