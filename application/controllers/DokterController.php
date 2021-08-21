<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DokterController extends CI_Controller
{
	public function data_dokter()
	{
		$this->load->view('template/template_header');
		$this->load->view('dokter/data_dokter');
		$this->load->view('template/template_footer');
	}

	public function dokter_spesialis()
	{
		$this->load->view('template/template_header');
		$this->load->view('dokter/dokter_spesialis');
		$this->load->view('template/template_footer');
	}

	public function jadwal_dokter()
	{
		$this->load->view('template/template_header');
		$this->load->view('dokter/jadwal_dokter');
		$this->load->view('template/template_footer');
	}
}
