<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MainController extends CI_Controller
{
	public function index()
	{
		$this->load->view('template/template_header');
		$this->load->view('dashboard');
		$this->load->view('template/template_footer');
	}
}
