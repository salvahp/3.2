<!-- Php som giver de informationer headeren kalder efter -->
<?php 
	$thisPage="Kontakt";
	$title ="Campus Bindslevs Plads - Kontakt";
	$metakeywords ="Kampagneside, kontakt, oplysninger, Campus Bindslevs Plads, Silkeborg, Kultur, Aarhus17, FabLab, Rethink Læring, Projekt Ny Læring, Silkeborg kommune, partnere, samarbejde";
	$metadescription ="Kampagneside, Kontakt Campus Bindslevs Plads og hold dig opdateret på det nye fælles byrum og laboratorium til læring, kreativitet og kultur.";
	include "inc/header.php";?>
<!-- banner -->

<div class="banner-1"> </div>
<!-- //banner --> 
<!-- contact-section -->
<div class="contact-section">
	<h1 class="text-center">Har du en god ide?</h1>
	<div class="container">
		<section class="contact-form"><!-- Vores kontakt form som er gjort funktionel i inc/mail.php -->
			<div class="col-md-6 contact-grid animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
				<form action="inc/mail.php" method="POST">
					<p class="your-para">Navn:</p>
					<input name="name" type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
					<p class="your-para">E-mail:</p>
					<input name="email" type="email" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
					<p class="your-para">Besked til os:</p>
					<textarea name="message" cols="77" rows="6" onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"></textarea>	
					<div class="send">
						<input type="submit" value="Send">
					</div>
				</form>
			</div>
			<div class="col-md-6 contact-in animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
				<p class="sed-para">Send os en besked!</p>
				<p class="para1">Vi er meget åbne for nye idéer til projekter og arbejde, som kan foregå på det nybyggede Campus Bindslevs Plads. Derfor skal du ikke tøve med at skrive til os. Hvad enten det handler om nye projekter, sjove aktiviteter, eller bare noget, du synes, vi bør gøre anderledes. </br>
					<br>
					Skriv til os her på siden, send os en besked på <a class="" href="https://www.facebook.com/campusbindslevsplads/">Facebook</a> eller brug hashtagget <a href="https://www.instagram.com/explore/tags/mitbindslevsplads/">#mitbindslevsplads</a> for at vise os din gode idé.</p>
				<div class="more-address">
					<div class="address-more">
						<p itemprop="name">Campus Bindslevs Plads</p>
						<p itemprop="streetAddress">Bindslevs Plads 14</p>
						<p itemprop="postalCode addressLocality">8600 Silkeborg</p>
					</div>
					<div class="address-left">
						<p><abbr itemprop="telephone" title="Phone">Tlf.: 87 22 19 00</abbr></p>
						<p><a href="http://campusbindslevsplads.dk/" itemprop="url">Campus Bindslevs Plads</a></p>
						<p><a href="mailto:info@example.com" itemprop="email">mail@example.com</a></p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</section>
	</div><!--  Google map implementering -->
	<div class="map animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2221.4747911918284!2d9.545676315966904!3d56.16618498066594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTbCsDA5JzU4LjMiTiA5wrAzMic1Mi4zIkU!5e0!3m2!1sda!2sdk!4v1462975319201" width="100%" height="200px" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</div>
<!-- footer -->
<?php include "inc/footer.php";?>