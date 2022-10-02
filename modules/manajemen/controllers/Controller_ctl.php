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
		$mydata['title'] = 'Role';

		// LOAD JS
		// $this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/perusahaan/lokasi_perusahaan.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

    public function kunjungan()
	{
		// LOAD TITLE
		$mydata['title'] = 'Kunjungan';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/manajemen/kunjungan.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('kunjungan', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

    public function reimbursement()
	{
		// LOAD TITLE
		$mydata['title'] = 'Reimbursement';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/manajemen/reimbursement.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('reimbursement', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function reimbursement_kategori()
	{
		// LOAD TITLE
		$mydata['title'] = 'Kategori Reimbursement';

		// LOAD JS
		// $this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/perusahaan/lokasi_perusahaan.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('reimbursement_kategori', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function role()
	{
		// LOAD TITLE
		$mydata['title'] = 'Role';

		// LOAD JS
		// $this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/perusahaan/lokasi_perusahaan.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('role', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function status_prospek()
	{
		// LOAD TITLE
		$mydata['title'] = 'Role';

		// LOAD JS
		// $this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/perusahaan/lokasi_perusahaan.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('status_prospek', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function sumber_prospek()
	{
		// LOAD TITLE
		$mydata['title'] = 'Role';

		// LOAD JS
		// $this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/perusahaan/lokasi_perusahaan.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('sumber_prospek', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}
}
