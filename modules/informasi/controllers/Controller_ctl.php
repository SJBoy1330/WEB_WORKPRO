<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Frontend
{
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
		is_logged_in();
	}


	public function index()
	{
		// LOAD TITLE
		$mydata['title'] = 'Pola Kerja';

        // LOAD JS
		// $this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/jadwal_kerja/pola_kerja.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('informasi', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function bantuan()
	{
		// LOAD TITLE
		$mydata['title'] = 'Shift Kerja';

		// LOAD CSS
		// $this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/jadwal_kerja/shift.css') . '">';

        // LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/jadwal_kerja/shift.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('bantuan', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function memo()
	{
		// LOAD TITLE
		$mydata['title'] = 'Hari Libur';

		// LOAD JS
		// $this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/jadwal_kerja/hari_libur.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('memo', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}
}
