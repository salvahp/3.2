<?php 
	$thisPage="Kontakt";
	$title ="Campus Bindslevs Plads - Kontakt";
	include "inc/header.php";?>
<!-- banner -->
	<div class="banner-1">
	</div>
<!-- //banner -->
<!-- contact-section -->
<div class="contact-section">
	 <div class="container">
			<div class="contact-form">
					<div class="col-md-6 contact-grid animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<form>
						<p class="your-para">Your name:</p>
						<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<p class="your-para">Your mail:</p>
						<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<p class="your-para">Your message:</p>
						<textarea cols="77" rows="6" onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"></textarea>
						<div class="send">
							<input type="submit" value="Send">
						</div>
					</form>
				</div>
				<div class="col-md-6 contact-in animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<p class="sed-para"> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolor.</p>
					<p class="para1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.  </p>
					<div class="more-address"> 
						<div class="address-more">
							<p>My company name,</p>
							<p>Lorem ipsum dolor,</p>
							<p>Jasmin Dr 40 Fe 72. </p>
						</div>
						<div class="address-left">
							<p>Tel:1115550001</p>
							<p>Fax:190-4509-494</p>
							<p><a href="mailto:info@example.com">mail@example.com</a></p>
						</div>
						<div class="clearfix"> </div>
				      </div>
				</div>
				<div class="clearfix"> </div>
			   </div>
	   </div>
	   <div class="map animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2221.4747911918284!2d9.545676315966904!3d56.16618498066594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTbCsDA5JzU4LjMiTiA5wrAzMic1Mi4zIkU!5e0!3m2!1sda!2sdk!4v1462975319201" width="100%" height="" frameborder="0" style="border:0" allowfullscreen></iframe>
	   </div>
    </div>
<!-- contact-section -->
<?php include "inc/footer.php";?>