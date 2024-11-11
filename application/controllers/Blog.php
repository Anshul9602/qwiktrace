<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{


	public function index()
	{
		$this->load->view('header');
		$this->load->view('Blogs');
		$this->load->view('footer');
	}
}
