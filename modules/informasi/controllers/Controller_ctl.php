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
		redirect('informasi/pengumuman');
	}
	public function pengumuman()
	{
		// LOAD TITLE
		$mydata['title'] = 'Pengumuman';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/informasi/pengumuman.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('pengumuman', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function broadcast()
	{
		// LOAD TITLE
		$mydata['title'] = 'Broadcast';

		// LOAD CSS
		// $this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/jadwal_kerja/shift.css') . '">';

		// LOAD JS
		// $this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/jadwal_kerja/shift.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('broadcast', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function bantuan()
	{
		// LOAD TITLE
		$mydata['title'] = 'Bantuan';

		// LOAD JS
		// $this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/jadwal_kerja/shift.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('bantuan', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}
}
