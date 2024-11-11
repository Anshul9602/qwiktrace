<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{


	public function index()
	{

		$this->load->view('dashboard/header_dashboard');
		$this->load->view('dashboard/dashboard');
		$this->load->view('dashboard/footer_dashboard');
	}
}
