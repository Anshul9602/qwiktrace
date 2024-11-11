<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Come extends CI_Controller
{


	public function index()
	{

		$this->load->view('header');
		$this->load->view('welcome');
		$this->load->view('footer');
	}
}
