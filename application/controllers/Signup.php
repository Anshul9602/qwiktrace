<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup extends CI_Controller
{


	public function index()
	{

		$this->load->view('header');
		$this->load->view('Signup');
		$this->load->view('footer');
	}

	public function send_otp()
	{
		$mob = $_POST['phone'];
		$digits = 4;
		//$otp =  rand(pow(10, $digits - 1), pow(10, $digits) - 1);
		$otp = 1234;
		file_get_contents("https://loadcrm.com/SmsApi/api/OwnApi/SendSms?key=M6L05BD5AVRSBNPK6NIO6T===&UserName=APPTERRAN&SenderID=LONIAP&MessageText=Please%20use%20OTP-$otp%20to%20login%20into%20your%20LONI%20app&EntityId=1701158088326020607&TemplateId=1407161536637337417&Unicode=false&MobileNo=$mob");
		print_r($otp);
	}
}
