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
		// LOAD TITLE
		$mydata['title'] = 'WorkPro | Adn';

		// LOAD VIEW
		$this->load->view('index', $mydata);
	}

	public function logout()
	{
		$this->session->unset_userdata('lms_sd_staf_server');
		$this->session->unset_userdata('lms_staf_id_staf');
		$this->session->unset_userdata('lms_staf_role');
		$this->session->unset_userdata('lms_staf_id_sekolah');
		$this->session->unset_userdata('lms_staf_nama');
		$this->session->unset_userdata('lms_staf_wali_kelas');
		$this->session->unset_userdata('lms_staf_foto');
		$this->session->unset_userdata('lms_staf_id_kelas');

		redirect('auth');
	}
}
