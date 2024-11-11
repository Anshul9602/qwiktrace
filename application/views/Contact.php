<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- ======= Contact Section ======= -->
<section class="page-banner-contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="page-title-wrapper">
					<div class="page-title-inner">
						<h1 class="page-title">Get in touch with Us</h1>
						<p>Drop by and say hello! we are social and would like to meet you and hear your ideas.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="animate-element-contact"><img src="media/animated/001.png" alt="" class="wow pixFadeDown" data-wow-duration="1s"> <img src="media/animated/002.png" alt="" class="wow pixFadeUp" data-wow-duration="2s"> <img src="media/animated/003.png" alt="" class="wow pixFadeLeft" data-wow-delay="0.3s" data-wow-duration="2s"> <img src="media/animated/004.png" alt="man" class="wow pixFadeUp" data-wow-duration="2s">
				</div>
			</div>
		</div>
	</div><svg class="circle" data-parallax='{"y" : 250}' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="950px" height="950px">
		<path fill-rule="evenodd" stroke="rgb(250, 112, 112)" stroke-width="100px" stroke-linecap="butt" stroke-linejoin="miter" opacity="0.051" fill="none" d="M450.000,50.000 C670.914,50.000 850.000,229.086 850.000,450.000 C850.000,670.914 670.914,850.000 450.000,850.000 C229.086,850.000 50.000,670.914 50.000,450.000 C50.000,229.086 229.086,50.000 450.000,50.000 Z" />
	</svg>
	<ul class="animate-ball">
		<li class="ball"></li>
		<li class="ball"></li>
		<li class="ball"></li>
		<li class="ball"></li>
		<li class="ball"></li>
	</ul>
</section>
<section class="contactus">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="contact-infos">
					<div class="contact-info">
						<h3 class="title">Our Location</h3>
						<p class="description">S-1 A/8, 2nd Floor, Arya Square Mall,<br /> Subhash Nagar, Jaipur (Rajasthan)<br /> India-302016</p>
					</div>
				</div>
				<div class="contact-info">
					<h3 class="title">Say Hello</h3>
					<div class="info phone"><i class="ei ei-icon_phone"></i> <span>+91 97812 2212</span>
						<div class="info"><i class="ei ei-icon_mail_alt"></i> <span>support@qwiktrace.com</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="contact-froms">
					<form action="php/mailer.php" class="contact-form" data-pixsaas="contact-froms">
						<div class="row">
							<div class="col-md-6"><input type="text" name="name" placeholder="Name" required>
							</div>
							<div class="col-md-6"><input type="email" name="email" placeholder="Email" required>
							</div>
						</div><input type="text" name="subject" placeholder="Subject">
						<textarea name="content" placeholder="Your Comment" required></textarea>
						<button type="submit" class="pix-btn submit-btn color-two">
							<span class="btn-text">Send Your Massage</span> <i class="fas fa-spinner fa-spin"></i>
						</button>
						<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
						<div class="row">
							<div class="form-result alert">
								<div class="content"></div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="google-maps">
	<div class="google-map">
		<div class="gmap3-area" data-lat="26.935300" data-lng="75.791922" data-mrkr="assets/img/map-marker.png">
		</div>
	</div>
</section>