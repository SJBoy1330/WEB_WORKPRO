<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Controller
{
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
	}


	public function index()
	{
		if ($this->session->userdata('workpro_web_id_perusahaan') || $this->session->userdata('workpro_web_id_karyawan')) {
			redirect('dashboard');
		}
		// LOAD TITLE
		$mydata['title'] = 'WorkPro | Adn';

		// LOAD VIEW
		$this->load->view('index', $mydata);
	}

	public function logout()
	{
		$this->session->unset_userdata('workpro_web_api_key');
		$this->session->unset_userdata('workpro_web_server');
		$this->session->unset_userdata('workpro_web_akses');
		$this->session->unset_userdata('workpro_web_id_perusahaan');
		$this->session->unset_userdata('workpro_web_id_karyawan');
		$this->session->unset_userdata('workpro_web_foto');

		redirect('auth');
	}
}
