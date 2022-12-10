<?php defined('BASEPATH') or exit('No direct script access allowed');

class Function_ctl extends MY_Frontend
{
    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
    }


    public function tambah_notifikasi()
    {
        $arrVar['id_karyawan'] = 'ID Karyawan';
        $arrVar['judul'] = 'Judul';
        $arrVar['keterangan'] = 'Keterangan';
        foreach ($arrVar as $var => $value) {
            $$var = $this->input->post($var);
            if (!$$var) {
                $data['required'][] = ['req_' . $var, $value . ' tidak boleh kosong !'];
                $arrAccess[] = false;
            } else {
                $post[$var] = $$var;
                $arrAccess[] = true;
            }
        }

        $post['tanggal'] = date('Y-m-d H:i:s');
        $post['pin'] = 'N';
        $post['aktif'] = 'Y';
        $post['modul'] = 7;



        if (!in_array(false, $arrAccess)) {
            $result = curl_post('notifikasi/tambah/', $post, NULL, ['api_key: ' . $this->api_key, 'server: ' . $this->server, 'id_perusahaan: ' . $this->id_perusahaan, 'fcm_key : ']);
            if (!$result->error) {
                $data['status'] = true;
                $data['alert']['title'] = 'PEMBERITAHUAN';
                $data['alert']['message'] = $result->message;
                echo json_encode($data);
                exit;
            } else {
                $data['status'] = false;
                $data['alert']['title'] = 'PERINGATAN';
                $data['alert']['message'] = $result->message;
                echo json_encode($data);
                exit;
            }
        } else {
            $data['status'] = false;
            echo json_encode($data);
            exit;
        }
    }
}
