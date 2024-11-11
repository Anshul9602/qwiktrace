<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Otp extends CI_Controller
{


	public function index()
	{

		$this->load->view('header');
		$this->load->view('otp');
		$this->load->view('footer');
	}

	public function register_user()
	{
		print_r('ssss');
	}
}
