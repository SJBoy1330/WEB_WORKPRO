<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Frontend
{
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
		is_logged_in();
	}


	public function data_karyawan()
	{
		// LOAD TITLE
		$mydata['title'] = 'Data Karyawan';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/laporan/data_karyawan.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('data_karyawan', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

    public function rekap_presensi()
	{
		// LOAD TITLE
		$mydata['title'] = 'Rekap Presensi';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/laporan/rekap_presensi.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('rekap_presensi', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

    public function rekap_reimbursement()
	{
		// LOAD TITLE
		$mydata['title'] = 'Rekap Reimbursement';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/laporan/rekap_reimbursement.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('rekap_reimbursement', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

    public function rekap_kunjungan()
	{
		// LOAD TITLE
		$mydata['title'] = 'Rekap Kunjungan';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/laporan/rekap_kunjungan.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('rekap_kunjungan', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

    public function rekap_prospek()
	{
		// LOAD TITLE
		$mydata['title'] = 'Rekap Prospek';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/laporan/rekap_prospek.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('rekap_prospek', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

    public function rekap_izin_kerja()
	{
		// LOAD TITLE
		$mydata['title'] = 'Rekap Izin Kerja';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/laporan/rekap_izin_kerja.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('rekap_izin_kerja', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

    public function rekap_lembur()
	{
		// LOAD TITLE
		$mydata['title'] = 'Rekap Lembur';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/laporan/rekap_lembur.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('rekap_lembur', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function detail_presensi()
	{
		// LOAD TITLE
		$mydata['title'] = 'Detail Presensi';

		// LOAD JS
		// $this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/perusahaan/lokasi_perusahaan.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('detail_presensi', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}
    
}
