<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signin extends CI_Controller
{


	public function index()
	{

		$this->load->view('header');
		$this->load->view('Signin');
		$this->load->view('footer');
	}
}
