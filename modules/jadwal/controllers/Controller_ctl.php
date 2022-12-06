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
		redirect('jadwal/pola');
	}

	public function pola()
	{
		// LOAD TITLE
		$mydata['title'] = 'Pola Kerja';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/jadwal_kerja/pola_kerja.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function shift()
	{
		// LOAD TITLE
		$mydata['title'] = 'Shift Kerja';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/jadwal_kerja/shift.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/jadwal_kerja/shift.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('shift', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function hari_libur()
	{
		// LOAD TITLE
		$mydata['title'] = 'Hari Libur';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/jadwal_kerja/hari_libur.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('hari_libur', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function tukar_shift()
	{
		// LOAD TITLE
		$mydata['title'] = 'Tukar Shift';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/jadwal_kerja/tukar_shift.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/jadwal_kerja/tukar_shift.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('tukar_shift', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function lembur()
	{
		// LOAD TITLE
		$mydata['title'] = 'Lembur';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/jadwal_kerja/lembur.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('lembur', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function izin_kerja()
	{
		// LOAD TITLE
		$mydata['title'] = 'Izin Kerja';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/jadwal_kerja/izin_kerja.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('izin_kerja', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}
}
