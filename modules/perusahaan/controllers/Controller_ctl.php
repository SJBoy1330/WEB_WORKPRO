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
		redirect('perusahaan/profil');
	}
	public function profil()
	{
		// LOAD TITLE
		$mydata['title'] = 'Perusahaan';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/perusahaan/profil_perusahaan.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function cabang()
	{
		// LOAD TITLE
		$mydata['title'] = 'Perusahaan';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/perusahaan/lokasi_presensi.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/perusahaan/lokasi_perusahaan.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('lokasi_presensi', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function user()
	{
		// LOAD TITLE
		$mydata['title'] = 'User';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('user', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}
}
