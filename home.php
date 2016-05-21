<?php 
	$thisPage="Home";
	$title ="Campus Bindslevs Plads - Forside";
	include "inc/header.php";?>

<!-- banner -->
	<div class="banner">
		<div class="container">
			<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
							<div class="banner-info animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
								<div class="banner-info-left">
									<h1>Vidste du at... </h1>
									<h2>Bygningen bliver omkring 1500 m2, hvilket svarer til 600 skriveborde. </h2>	
								</div>
							</div>
						</li>
						<li>
							<div class="banner-info animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
								<div class="banner-info-left">
									<h1>Vidste du at... </h1>
									<h2>Der i den nye parkeringskælder vil være plads til 174 biler. </h2>
									
								</div>
							</div>
						</li>
						<li>
							<div class="banner-info animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
								<div class="banner-info-left">
									<h1>Vidste du at...</h1>
									<h2>“Markedsplads” betyder “et sted hvor der foregår handel eller udveksling” - På Bindslevs Plads vil det være udveksling af viden og idéer.</h2>
                              </div>
                         
							</div>
						</li>
                        
                        <li>
							<div class="banner-info animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
								<div class="banner-info-left">
									<h1>Vidste du at...</h1>
									<h2>Logoet er en præcis kopi af formen på pladsen fra Google Maps. </h2>
                              </div>
                         
							</div>
						</li>
						</ul>
					</div>
				</section>
			
							<!-- FlexSlider -->
									  <script defer="" src="js/jquery.flexslider.js"></script>
									  <script type="text/javascript">
										$(function(){
										 
										});
										$(window).load(function(){
										  $('.flexslider').flexslider({
											animation: "slide",
											start: function(slider){
											  $('body').removeClass('loading');
											}
										  });
										});
									  </script>
								<!-- FlexSlider -->
		</div>
	</div>
<!-- //banner -->
<!-- crop -->
	<div class="crop">
		
			<div class="col-md-4 crop-left1 animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms"><!-- billede til venstre-->
			</div>
			<div class="col-md-4 crop-left animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
				<iframe src="https://www.youtube.com/embed/ZZ5LpwO-An4" width="" height="" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe><!-- Video -->
			</div>
			<div class="col-md-4 crop-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms"> <!-- info til højre  -->
				<h3>Kom til </h3>
				<h3>BORGERMØDE</h3s>
				<h4>1. februar 2017</h4>
				<h4>Kl. 19.00</h4>
				<h5>På Silkeborg Bibliotek</h5>
				
			</div>
			<div class="clearfix"></div>
		
	</div>
<!-- //crop -->
<!--start-team-->
		<div class="team">
	      <div class="container">
	      	<div class="services-top animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
	      		<h3>Projekter</h3>
	      		</div>
				<ul class="ch-grid">
					<li>
						<div class="ch-item animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">				
							<div class="ch-info">
								<div class="ch-info-front ch-img-1"></div>
								<div class="ch-info-back">
										<h3>Rethink Læring</h3>
									<p> <a href="http://campusbindslevsplads.dk/index.php/rethink-laering/">Læs mere</a></p>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
							<div class="ch-info">
								<div class="ch-info-front ch-img-2"></div>
								<div class="ch-info-back">
										<h3>FabLab</h3>
									<p><a href="http://campusbindslevsplads.dk/index.php/fablab-silkeborg/">Læs mere</a></p>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="ch-item animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
							<div class="ch-info">
								<div class="ch-info-front ch-img-3"></div>
								<div class="ch-info-back">
										<h3>Projekt Ny Læring</h3>
									<p><a href="http://campusbindslevsplads.dk/index.php/projekt-ny-laering/">Læs mere</a></p>
								</div>
							</div>
						</div>
					</li>
					 <li>
						<div class="ch-item animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
							<div class="ch-info">
								<div class="ch-info-front ch-img-4"></div>
								<div class="ch-info-back">
										<h3>Forskning</h3>
									<p><a href="http://campusbindslevsplads.dk/index.php/forskning/">Læs mere</a></p>
								</div>
							</div>
						</div>
					</li>
				</ul>
				
		  </div>
       </div>
<!--start-yachts-->

<?php include "inc/footer.php";?>