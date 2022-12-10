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
		$mydata['title'] = 'Persetujuan';

		// LOAD JS
		// $this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/perusahaan/lokasi_perusahaan.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function approval($multi = false)
	{
		if ($multi == false) {
			$id_persetujuan = $this->input->post('id_persetujuan');
		} else {
			$id_persetujuan = json_encode($this->input->post('id_persetujuan'));
		}

		$alasan = $this->input->post('alasan');
		$tipe = $this->input->post('tipe');
		$persetujuan = $this->input->post('persetujuan');
		if ($tipe == 1) {
			$status = $this->input->post('status');
		} else {
			$status = '';
		}

		$result = curl_post('persetujuan/approve/', ['tipe' => $tipe, 'id_persetujuan' => $id_persetujuan, 'persetujuan' => $persetujuan, 'status' => $status, 'alasan' => $alasan, 'id_admin' => $this->id_karyawan], NULL, ['api_key: ' . $this->api_key, 'server: ' . $this->server, 'id_perusahaan: ' . $this->id_perusahaan, 'fcm_key: ' . $this->fcm_key]);

		if ($result->status == 200) {
			$arr['status'] = true;
			$arr['icon'] = 'success';
			$arr['title'] = 'PEMBERITAHUAN';
		} else {
			$arr['status'] = false;
			$arr['icon'] = 'warning';
			$arr['title'] = 'PERINGATAN';
		}
		$arr['message'] = $result->message;
		echo json_encode($arr);
	}
}
