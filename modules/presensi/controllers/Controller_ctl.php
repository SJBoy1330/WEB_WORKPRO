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
		redirect('presensi/data');
	}
	public function data()
	{
		// LOAD TITLE
		$mydata['title'] = 'Presensi';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/presensi/data_presensi.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function izin()
	{
		// LOAD TITLE
		$mydata['title'] = 'Izin Kerja';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/presensi/izin_kerja.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('izin_kerja', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}
}
