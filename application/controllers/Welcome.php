<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{


	public function index()
	{

		$this->load->view('header');
		$this->load->view('Home');
		$this->load->view('footer');
	}
}
