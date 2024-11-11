<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<style>
	small {
		font-size: 8px;
		position: absolute;
		margin-left: -2.5px;
		margin-top: -4.5px;
	}

	.business-card {
		width: 200px;
		margin: 20px auto;
		text-align: center;
		padding: 30px 0px;
	}
</style>
<section class="signin signup">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="signin-from-wrapper">
					<div class="signin-from-inner">
						<h2 class="title">Welcome to Qwiktrace!</h2>

						<p>Hello Ronak! You have successfully setup your Qwiktrace account.
							Please select your business or get started with our 2 min onboarding <small>TM</small>.</p>
						<div class="card business-card">
							The Odin
							<a href="#">Sign In</a>
						</div>
						<div class="card business-card">
							KSP Hydro
							<a href="#">Sign In</a>
						</div>
						<div class="card business-card">
							SEE Solutions
							<a href="#">Sign In</a>
						</div>

						<br />
						<a href="admin/onboard">
							<button style="margin-top: 0px;" type="submit" class="pix-btn">Add New Business &#8594;</button>
						</a>

					</div>
					<ul class="animate-ball">
						<li class="ball"></li>
						<li class="ball"></li>
						<li class="ball"></li>
						<li class="ball"></li>
						<li class="ball"></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="signin-banner signup-banner">
		<div class="animate-image-inner">

			<div class="image-one">
				<img src="media/animated/41.png" alt="" class="wow pixFadeLeft"></div>
		</div>
	</div>
</section>