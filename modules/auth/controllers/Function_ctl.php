<?php defined('BASEPATH') or exit('No direct script access allowed');

class Function_ctl extends MY_Controller
{
    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
    }

    public function index()
    {
        $arrVar['email']    = 'Email';
        $arrVar['kata_sandi'] = 'Kata sandi';
        foreach ($arrVar as $var => $value) {
            $$var = $this->input->post($var);

            if (!$$var) {
                $data['required'][] = ['req_' . $var, $value . ' tidak boleh kosong !'];
                $arrAccess[] = false;
            } else {
                $arrAccess[] = true;
            }
        }

        // var_dump($arrVar);
        // die;

        if (!in_array(false, $arrAccess)) {
            // CURL POST
            $arrPost['email'] = $email;
            $arrPost['password'] = $kata_sandi;
            $arrPost['kategori'] = 'web';
            $response = curl_post('auth/', $arrPost, 0);
            if ($response->status == 200) {
                $arrSession['workpro_web_api_key'] = $response->data->api_key;
                $arrSession['workpro_web_server'] = $response->data->server;
                $arrSession['workpro_web_menu'] = $response->data->akses;
                if ($response->data->role_akses == 'all') {
                    $arrSession['workpro_web_akses'] = 'all';
                } else {
                    $arrSession['workpro_web_akses'] = $response->data->data_akses;
                }

                $arrSession['workpro_web_id_perusahaan'] = $response->data->id_perusahaan;
                $arrSession['workpro_web_id_karyawan'] = $response->data->id_karyawan;
                $arrSession['workpro_web_foto'] = $response->data->foto;
                $arrSession['workpro_web_nama'] = $response->data->nama;
                $arrSession['workpro_web_email'] = $response->data->email;
                $arrSession['workpro_web_role'] = $response->data->role;
                $arrSession['workpro_web_managemen'] = $response->data->managemen;


                $this->session->set_userdata($arrSession);
                $data['status'] = TRUE;
                $data['alert']['title'] = 'PEMBERITAHUAN';
                $data['alert']['message'] = $response->message;
                $data['redirect'] = base_url('dashboard');
                echo json_encode($data);
                exit;
            } else {
                $data['status'] = FALSE;
                $data['alert']['title'] = 'PERINGATAN';
                $data['alert']['message'] = $response->message;
                echo json_encode($data);
                exit;
            }
        } else {
            $data['status'] = FALSE;
            echo json_encode($data);
            exit;
        }
    }
}
