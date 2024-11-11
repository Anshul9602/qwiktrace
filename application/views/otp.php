<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<style>
	.passcode-wrapper {
		display: flex;
		justify-content: space-between;
		width: auto;
		margin: 0 auto;
	}

	.passcode-wrapper input {
		margin-right: 10px;
		text-align: center;
		font-size: 24px;
	}

	.passcode-wrapper input:last-child {
		margin-right: 0;
	}

	.passcode-wrapper input::-webkit-inner-spin-button,
	.passcode-wrapper input::-webkit-outer-spin-button {
		-webkit-appearance: none;
		appearance: none;
		margin: 0;
	}

	.passcode-wrapper input:focus,
	.passcode-wrapper input.focus {
		border-color: green;
		outline: none;
		box-shadow: none;
	}
</style>
<section class="signin signup">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="signin-from-wrapper">
					<div class="signin-from-inner">
						<h2 class="title">Please verify your mobile number</h2>
						<p>We have sent a 4-Digit OTP on <font class="otp_number">+91 9694 998693</font>
						</p>

						<section class="container-fluid">
							<div class="row">
								<div class="col-md-8">
									<div style="margin-left: -15px;" class="form-group">
										<label for="password" class="text-white">Enter 4 Digit Password</label>
										<div class="passcode-wrapper">
											<input id="codeBox1" type="password" class="codebox" maxlength="1" onkeyup="onKeyUpEvent(1, event)" onfocus="onFocusEvent(1)">
											<input id="codeBox2" type="password" class="codebox" maxlength="1" onkeyup="onKeyUpEvent(2, event)" onfocus="onFocusEvent(2)">
											<input id="codeBox3" type="password" class="codebox" maxlength="1" onkeyup="onKeyUpEvent(3, event)" onfocus="onFocusEvent(3)">
											<input id="codeBox4" type="password" class="codebox" maxlength="1" onkeyup="onKeyUpEvent(4, event)" onfocus="onFocusEvent(4)">
										</div>
									</div>

								</div>
							</div>
						</section>

						<a href="come">
						<button class="pix-btn verify-otp">Verify</button>
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

			<div class="image-one"><img src="media/animated/Mobile-cuate.png" alt="" class="wow pixFadeLeft"></div>
		</div>
	</div>
</section>

<script>
	$(document).ready(function() {
		if (localStorage.getItem('signup_data') == "" || localStorage.getItem('otp') == "") {
		//	window.location = "signup";
		} else {
			let data = localStorage.getItem('signup_data');
			$('.otp_number').text(data.phone);

			$(".verify-otp").click(function() {
				let otp = '';
              window.location = "come";
				$(".codebox").each(function() {
					otp = otp + $(this).val();
				})
				
				if ($.trim(otp) == $.trim(localStorage.getItem('otp'))) {
					let data = JSON.parse(localStorage.getItem('signup_data'));
					window.location = "come";
					/*$.ajax({
						type: "POST",
						url: "signup/register_user",
						data: {
							'data': data
						},
						success: function(result) {
							localStorage.setItem('otp',"");
							localStorage.setItem('signup_data', "");
							window.location = "otp";
						}
					});*/
				} else {
					alert('incorrect otp');
				}
			})
		}
	})

	function getCodeBoxElement(index) {
		return document.getElementById('codeBox' + index);
	}

	function onKeyUpEvent(index, event) {
		const eventCode = event.which || event.keyCode;
		if (getCodeBoxElement(index).value.length === 1) {
			if (index !== 4) {
				getCodeBoxElement(index + 1).focus();
			} else {
				getCodeBoxElement(index).blur();
				// Submit code
				console.log('submit code ');
			}
		}
		if (eventCode === 8 && index !== 1) {
			getCodeBoxElement(index - 1).focus();
		}
	}

	function onFocusEvent(index) {
		for (item = 1; item < index; item++) {
			const currentElement = getCodeBoxElement(item);
			if (!currentElement.value) {
				currentElement.focus();
				break;
			}
		}
	}
</script>
