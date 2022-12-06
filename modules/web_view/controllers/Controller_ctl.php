<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Webview
{
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
	}


	public function pengumuman($id_perusahaan = NULL, $id_karyawan = NULL, $id_pengumuman = NULL)
	{
		$api_key = '';
		$server = $this->input->get('server');
		if (!in_array($_SERVER['HTTP_HOST'], ['localhost']) || $server == '') {
			if ($id_pengumuman != NULL && $id_perusahaan != NULL && $id_karyawan != NULL) {
				$api_key = get_redis('api_key_' . base64url_decode($id_perusahaan) . '_' . $id_karyawan);
				$server = (!$server) ? get_redis('server_' . base64url_decode($id_perusahaan) . '_' . $id_karyawan) : $server;
				$result = curl_get('pengumuman/single/', ['id_pengumuman' => $id_pengumuman], ['api_key: ' . $api_key, 'server: ' . $server]);
				$mydata['result'] = (isset($result->data)) ? $result->data : '';;
			} else {
				$mydata['result'] = '';
			}
		} else {
			$result = curl_get('pengumuman/single/', ['id_pengumuman' => $id_pengumuman], ['server: ' . $server, 'akses: ' . true]);
			$mydata['result'] = $result->data;
		}





		$mydata['api_key'] = $api_key;
		$mydata['server'] = $server;
		$this->data['content'] = $this->load->view('pengumuman', $mydata, TRUE);
		$this->display();
	}
	public function notifikasi($id_perusahaan = NULL, $id_karyawan = NULL, $id_notifikasi = NULL)
	{
		$api_key = '';
		$server = $this->input->get('server');
		if (!in_array($_SERVER['HTTP_HOST'], ['localhost']) || $server == '') {
			if ($id_notifikasi != NULL && $id_perusahaan != NULL && $id_karyawan != NULL) {
				$api_key = get_redis('api_key_' . base64url_decode($id_perusahaan) . '_' . $id_karyawan);
				$server = (!$server) ? get_redis('server_' . base64url_decode($id_perusahaan) . '_' . $id_karyawan) : $server;
				$result = curl_get('notifikasi/', ['id_notifikasi' => $id_notifikasi, 'id_karyawan' => $id_karyawan], ['api_key: ' . $api_key, 'server: ' . $server]);
				// var_dump($result);die;
				$mydata['result'] = (isset($result->data)) ? $result->data : '';;
			} else {
				$mydata['result'] = '';
			}
		} else {
			$result = curl_get('notifikasi/', ['id_notifikasi' => $id_notifikasi, 'id_karyawan' => $id_karyawan], ['server: ' . $server, 'akses: ' . true]);
			$mydata['result'] = $result->data;
		}
		$mydata['api_key'] = $api_key;
		$mydata['server'] = $server;
		$this->data['content'] = $this->load->view('notifikasi', $mydata, TRUE);
		$this->display();
	}


	public function tentang_aplikasi()
	{
		$mydata = '';
		$this->data['content'] = $this->load->view('tentang_aplikasi', $mydata, TRUE);
		$this->display();
	}

	public function persetujuan($id_perusahaan = NULL, $id_karyawan = NULL)
	{
		$api_key = '';
		$server = '';
		$akses = '';
		if ($id_perusahaan != NULL && $id_karyawan != NULL) {
			$api_key = get_redis('api_key_' . base64url_decode($id_perusahaan) . '_' . $id_karyawan);
			$server = get_redis('server_' . base64url_decode($id_perusahaan) . '_' . $id_karyawan);
			$akses = get_redis('akses_admin_' . base64url_decode($id_perusahaan) . '_' . $id_karyawan);
			$result = curl_get('persetujuan/count/', array('tanggal' => date('Y-m-d')), ['api_key: ' . $api_key, 'server: ' . $server]);
			$mydata['result'] = (isset($result->data)) ? $result->data : '';

			// var_dump($result);die;
			// var_dump($api_key);die;
			$mydata['akses'] = json_decode($akses);
		} else {
			$mydata['akses'] = '';
			$mydata['result'] = '';
		}

		$mydata['api_key'] = $api_key;
		$mydata['server'] = $server;
		$mydata['id_perusahaan'] = $id_perusahaan;
		$mydata['id_karyawan'] = $id_karyawan;

		// var_dump($mydata);die;

		$this->data['content'] = $this->load->view('main_persetujuan', $mydata, TRUE);
		$this->display();
	}

	public function list_persetujuan($id_perusahaan = NULL, $id_karyawan = NULL, $id_persetujuan = NULL)
	{
		if ($id_persetujuan == 1) {
			$mydata['tipe'] = 1;
		} elseif ($id_persetujuan == 2) {
			$mydata['tipe'] = 2;
		} elseif ($id_persetujuan == 3) {
			$mydata['tipe'] = 3;
		} elseif ($id_persetujuan == 4) {
			$mydata['tipe'] = 4;
		} elseif ($id_persetujuan == 5) {
			$mydata['tipe'] = 5;
		}
		$api_key = '';
		$server = '';
		if ($id_perusahaan != NULL && $id_karyawan != NULL) {
			$api_key = get_redis('api_key_' . base64url_decode($id_perusahaan) . '_' . $id_karyawan);
			$server = get_redis('server_' . base64url_decode($id_perusahaan) . '_' . $id_karyawan);
			$result = curl_get('persetujuan/', ['tipe' => $id_persetujuan, 'select_all' => false], ['api_key: ' . $api_key, 'server: ' . $server, 'id_perusahaan: ' . $id_perusahaan]);
			$mydata['result'] = $result;
		} else {
			$mydata['result'] = '';
		}
		$mydata['id_perusahaan'] = $id_perusahaan;
		$mydata['id_user'] = $id_karyawan;
		$this->data['content'] = $this->load->view('list_persetujuan', $mydata, TRUE);
		$this->display();
	}

	public function ketentuan_layanan()
	{
		$mydata = '';
		$this->data['content'] = $this->load->view('ketentuan_layanan', $mydata, TRUE);
		$this->display();
	}

	public function kebijakan_privacy()
	{
		$mydata = '';
		$this->data['content'] = $this->load->view('kebijakan_privacy', $mydata, TRUE);
		$this->display();
	}


	public function hubungi_kami()
	{
		$mydata = '';
		$this->data['content'] = $this->load->view('hubungi_kami', $mydata, TRUE);
		$this->display();
	}


	public function jadwal($id_perusahaan = NULL, $id_karyawan = NULL)
	{
		$api_key = '';
		$server = $this->input->get('server');
		$tanggal = $this->input->get('tanggal');
		if (!$tanggal) {
			$tanggal = date('Y-m');
		}
		$akses = '';
		if ($id_perusahaan != NULL && $id_karyawan != NULL) {
			$api_key = get_redis('api_key_' . base64url_decode($id_perusahaan) . '_' . $id_karyawan);
			$server = (!$server) ? get_redis('server_' . base64url_decode($id_perusahaan) . '_' . $id_karyawan) : $server;
			$result = curl_get('jadwal', ['id_karyawan' => $id_karyawan, 'tanggal' => $tanggal], ['api_key: ' . $api_key, 'server: ' . $server, 'akses: ' . true]);
			$mydata['result'] = (isset($result->data)) ? $result->data : '';
		} else {
			$mydata['result'] = '';
		}


		$mydata['api_key'] = $api_key;
		$mydata['server'] = $server;
		$mydata['id_perusahaan'] = $id_perusahaan;
		$mydata['id_karyawan'] = $id_karyawan;
		$mydata['tanggal'] = $tanggal;
		$this->data['content'] = $this->load->view('jadwal', $mydata, TRUE);
		$this->display();
	}


	public function bikin_kuki()
	{
		$_COOKIE['api_key'] = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VySUQiOiIxIiwiZW1haWwiOiJqamVqZTEzMDNAZ21haWwuY29tIiwidGltZSI6MTY2NTk4Mjg5MiwiQVBJX1RJTUUiOjE2NjU5ODI4OTJ9.-uCywaStMpbrjYFTJ3_DSNeLl1THGaDoaXU_5rtfurg';
		$_COOKIE['server'] = 'd29ya3Byb19tYXN0ZXI';


		setcookie('api_key', 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VySUQiOiIxIiwiZW1haWwiOiJqamVqZTEzMDNAZ21haWwuY29tIiwidGltZSI6MTY2NTk4Mjg5MiwiQVBJX1RJTUUiOjE2NjU5ODI4OTJ9.-uCywaStMpbrjYFTJ3_DSNeLl1THGaDoaXU_5rtfurg', time() + (60 * 60 * 24 * 5), '/');
		setcookie('server', 'd29ya3Byb19tYXN0ZXI', time() + (60 * 60 * 24 * 15), '/');
	}


	public function approval()
	{
		$id_persetujuan = $this->input->post('id_persetujuan');
		$alasan = $this->input->post('alasan');
		$id_perusahaan = $this->input->post('id_perusahaan');
		$tipe = $this->input->post('tipe');
		$persetujuan = $this->input->post('persetujuan');
		$id_user = $this->input->post('id_user');
		if ($tipe == 1) {
			$status = $this->input->post('status');
		} else {
			$status = '';
		}

		$fcm_key = get_redis('fcm_key_' . base64url_decode($id_perusahaan) . '_' . $id_user);
		$api_key = get_redis('api_key_' . base64url_decode($id_perusahaan) . '_' . $id_user);
		$server = get_redis('server_' . base64url_decode($id_perusahaan) . '_' . $id_user);


		$result = curl_post('persetujuan/approve/', ['tipe' => $tipe, 'id_persetujuan' => $id_persetujuan, 'persetujuan' => $persetujuan, 'status' => $status, 'alasan' => $alasan, 'id_admin' => $id_user], NULL, ['api_key: ' . $api_key, 'server: ' . $server, 'id_perusahaan: ' . $id_perusahaan, 'fcm_key: ' . $fcm_key]);

		if ($result->status == 200) {
			echo json_encode(true);
		} else {
			echo json_encode(false);
		}
	}


	public function password()
	{
		$id_perusahaan = $this->input->post('id_perusahaan');
		$id_karyawan = $this->input->post('id_karyawan');
		$password = $this->input->post('password');


		$result = curl_post('auth/password/', ['id_karyawan' => $id_karyawan, 'password' => $password], NULL, ['id_perusahaan: ' . $id_perusahaan]);
		sleep(1.5);
		if ($result->status == 200) {
			echo json_encode(true);
		} else {
			echo json_encode(false);
		}
	}

	public function bantuan($id_perusahaan = NULL, $id_karyawan = NULL, $id_bantuan = NULL)
	{
		if ($id_bantuan != NULL && $id_perusahaan != NULL && $id_karyawan != NULL) {
			$result = curl_get('bantuan/', ['id_bantuan' => $id_bantuan, 'kategori' => 'apk']);
			$mydata['result'] = (isset($result->data)) ? $result->data : '';;
		} else {
			$mydata['result'] = '';
		}

		$this->data['content'] = $this->load->view('detail_bantuan', $mydata, TRUE);
		$this->display();
	}
}
