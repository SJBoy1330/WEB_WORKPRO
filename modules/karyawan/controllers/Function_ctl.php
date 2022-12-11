<?php defined('BASEPATH') or exit('No direct script access allowed');

class Function_ctl extends MY_Frontend
{
    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
    }

    public function tambah_karyawan()
    {
        // LOAD BODY INFORMASI UMUM
        $arrVar['nik']              = 'NIK';
        $arrVar['nama']             = 'Nama karyawan';
        $arrVar['email']            = 'Email';
        $arrVar['gender']           = 'Gender';
        $arrVar['kewarganegaraan']  = 'kewarganegaraan';

        // LOAD BODY KTP
        $arrVar2['id_ktp_desa'] = 'Ktp desa';
        $arrVar2['ktp_provinsi'] = 'Ktp provinsi';
        $arrVar2['ktp_kota'] = 'Ktp kota';
        $arrVar2['ktp_kecamatan'] = 'Ktp kecamatan';
        $arrVar2['ktp_alamat'] = 'Alamat KTP';

        // LOAD INFO KARYAWAN
        $arrVar3['id_divisi'] = 'Divisi';
        $arrVar3['telp']             = 'Telp';
        $arrVar3['id_role'] = 'Role';
        $arrVar3['jabatan'] = 'Jabatan';
        $arrVar3['id_cabang'] = 'Cabang';
        $arrVar3['tipe_jadwal_kerja'] = 'Tipe kerja';
        $arrVar3['password'] = 'Kata sandi';
        $arrVar3['re_password'] = 'Pengulangan kata sandi';
        $arrVar3['mulai_bekerja'] = 'Tanggal mulai bekerja';

        // LOAD INFO PERSONAL
        $arrVar4['domisili_alamat'] = 'Alamat Domisili';

        // INFORMASI UMUM
        foreach ($arrVar as $var => $value) {
            $$var = $this->input->post($var);
            if (!$$var) {
                $data['required'][] = ['req_' . $var, $value . ' tidak boleh kosong !'];
                $parent_1[] = false;
                $arrAccess[] = false;
            } else {
                if (!in_array($var, ['provinsi', 'kota', 'kecamatan'])) {
                    $post[$var] = $$var;
                }
                $parent_1[] = true;
                $arrAccess[] = true;
            }
        }
        // BODY ktp
        foreach ($arrVar2 as $var2 => $value2) {
            $$var2 = $this->input->post($var2);
            if (!$$var2) {
                $data['required'][] = ['req_' . $var2, $value2 . ' tidak boleh kosong !'];
                $arrAccess[] = false;
                $parent_2[] = false;
            } else {
                if (!in_array(
                    $var2,
                    ['provinsi', 'kota', 'kecamatan']
                )) {
                    $post[$var2] = $$var2;
                }
                $parent_2[] = true;
                $arrAccess[] = true;
            }
        }

        // BODY info
        foreach ($arrVar3 as $var3 => $value3) {
            $$var3 = $this->input->post($var3);
            if (!$$var3) {
                $data['required'][] = ['req_' . $var3, $value3 . ' tidak boleh kosong !'];
                $parent_3[] = false;
                $arrAccess[] = false;
            } else {
                if (!in_array(
                    $var3,
                    ['provinsi', 'kota', 'kecamatan']
                )) {
                    $post[$var3] = $$var3;
                }
                $parent_3[] = true;
                $arrAccess[] = true;
            }
        }

        $id_pola_kerja = $this->input->post('id_pola_kerja');
        if ($tipe_jadwal_kerja == 1 && !$id_pola_kerja) {
            $data['required'][] = ['req_id_pola_kerja', 'Pola kerja tidak boleh kosong !'];
            $parent_3[] = false;
            $arrAccess[] = false;
        } else {
            $post['id_pola_kerja'] = $id_pola_kerja;
        }

        // BODY PRIBADI
        foreach ($arrVar4 as $var4 => $value4) {
            $$var4 = $this->input->post($var4);
            if (!$$var4) {
                $data['required'][] = ['req_' . $var4, $value4 . ' tidak boleh kosong !'];
                $parent_4[] = false;
                $arrAccess[] = false;
            } else {
                if (!in_array(
                    $var4,
                    ['provinsi', 'kota', 'kecamatan']
                )) {
                    $post[$var4] = $$var4;
                }
                $parent_4[] = true;
                $arrAccess[] = true;
            }
        }

        $arr_w['ktp_kode_pos'] = 'KTP Kode pos';
        $arr_w['id_domisili_desa'] = 'ID Domisili Desa';
        $arr_w['domisili_alamat'] = 'ID Domisili Desa';
        $arr_w['domisili_kode_pos'] = 'ID Domisili Desa';
        $arr_w['gelar_depan'] = 'Gelar depan';
        $arr_w['gelar_belakang'] = 'Gelar belakang';
        $arr_w['tempat_lahir'] = 'Tempat lahir';
        $arr_w['tanggal_lahir'] = 'Tanggal lahir';
        $arr_w['status_nikah'] = 'Status menikah';
        $arr_w['agama'] = 'Agama';
        $arr_w['golongan_darah'] = 'Golongan darah';
        foreach ($arr_w as $v => $value) {
            $$v = $this->input->post($v);

            if (isset($$v) && $$v != '') {
                $post[$v] = $$v;
            }
        }
        if (!in_array(false, $arrAccess)) {
            $insert = curl_post('karyawan/tambah', $post, [], ['api_key: ' . $this->api_key, 'server: ' . $this->server, 'id_perusahaan: ' . $this->id_perusahaan]);
            if ($insert->status == 200) {
                $data['status'] = true;
                $data['alert']['title'] = 'PEMBERITAHUAN';
                $data['load'][0]['parent'] = '#parent_display';
                $data['load'][0]['reload'] = base_url('karyawan/daftar/ #reload_display');
                $data['reload'] = true;
            } else {
                $data['status'] = false;
                $data['alert']['title'] = 'PERINGATAN';
            }
            $data['alert']['message'] = $insert->message;
            echo json_encode($data);
            exit;
        } else {
            $data['status'] = false;
            if (in_array(false, $parent_1)) {
                $data['karyawan'][] = '.parent_1';
            }
            if (in_array(false, $parent_2)) {
                $data['karyawan'][] = '.parent_2';
            }
            if (in_array(false, $parent_3)) {
                $data['karyawan'][] = '.parent_3';
            }
            if (in_array(false, $parent_4)) {
                $data['karyawan'][] = '.parent_4';
            }
            echo json_encode($data);
            exit;
        }
    }

    public function edit_karyawan()
    {
        // LOAD BODY INFORMASI UMUM
        $arrVar['nik']              = 'NIK';
        $arrVar['nama']             = 'Nama karyawan';
        $arrVar['email']            = 'Email';
        $arrVar['gender']           = 'Gender';
        $arrVar['kewarganegaraan']  = 'kewarganegaraan';

        // LOAD BODY KTP
        $arrVar2['id_ktp_desa'] = 'Ktp desa';
        $arrVar2['ktp_provinsi'] = 'Ktp provinsi';
        $arrVar2['ktp_kota'] = 'Ktp kota';
        $arrVar2['ktp_kecamatan'] = 'Ktp kecamatan';
        $arrVar2['ktp_alamat'] = 'Alamat KTP';

        // LOAD INFO KARYAWAN
        $arrVar3['id_divisi'] = 'Divisi';
        $arrVar3['telp']             = 'Telp';
        $arrVar3['id_role'] = 'Role';
        $arrVar3['jabatan'] = 'Jabatan';
        $arrVar3['id_cabang'] = 'Cabang';
        $arrVar3['tipe_jadwal_kerja'] = 'Tipe kerja';
        $arrVar3['password'] = 'Kata sandi';
        $arrVar3['re_password'] = 'Pengulangan kata sandi';
        $arrVar3['mulai_bekerja'] = 'Tanggal mulai bekerja';

        // LOAD INFO PERSONAL
        $arrVar4['domisili_alamat'] = 'Alamat Domisili';

        // INFORMASI UMUM
        foreach ($arrVar as $var => $value) {
            $$var = $this->input->post($var);
            if (!$$var) {
                $data['required'][] = ['req_' . $var, $value . ' tidak boleh kosong !'];
                $parent_1[] = false;
                $arrAccess[] = false;
            } else {
                if (!in_array($var, ['provinsi', 'kota', 'kecamatan'])) {
                    $post[$var] = $$var;
                }
                $parent_1[] = true;
                $arrAccess[] = true;
            }
        }
        // BODY ktp
        foreach ($arrVar2 as $var2 => $value2) {
            $$var2 = $this->input->post($var2);
            if (!$$var2) {
                $data['required'][] = ['req_' . $var2, $value2 . ' tidak boleh kosong !'];
                $arrAccess[] = false;
                $parent_2[] = false;
            } else {
                if (!in_array(
                    $var2,
                    ['provinsi', 'kota', 'kecamatan']
                )) {
                    $post[$var2] = $$var2;
                }
                $parent_2[] = true;
                $arrAccess[] = true;
            }
        }

        // BODY info
        foreach ($arrVar3 as $var3 => $value3) {
            $$var3 = $this->input->post($var3);
            if (!$$var3) {
                $data['required'][] = ['req_' . $var3, $value3 . ' tidak boleh kosong !'];
                $parent_3[] = false;
                $arrAccess[] = false;
            } else {
                if (!in_array(
                    $var3,
                    ['provinsi', 'kota', 'kecamatan']
                )) {
                    $post[$var3] = $$var3;
                }
                $parent_3[] = true;
                $arrAccess[] = true;
            }
        }

        $id_pola_kerja = $this->input->post('id_pola_kerja');
        if ($tipe_jadwal_kerja == 1 && !$id_pola_kerja) {
            $data['required'][] = ['req_id_pola_kerja', 'Pola kerja tidak boleh kosong !'];
            $parent_3[] = false;
            $arrAccess[] = false;
        } else {
            $post['id_pola_kerja'] = $id_pola_kerja;
        }

        // BODY PRIBADI
        foreach ($arrVar4 as $var4 => $value4) {
            $$var4 = $this->input->post($var4);
            if (!$$var4) {
                $data['required'][] = ['req_' . $var4, $value4 . ' tidak boleh kosong !'];
                $parent_4[] = false;
                $arrAccess[] = false;
            } else {
                if (!in_array(
                    $var4,
                    ['provinsi', 'kota', 'kecamatan']
                )) {
                    $post[$var4] = $$var4;
                }
                $parent_4[] = true;
                $arrAccess[] = true;
            }
        }

        $arr_w['ktp_kode_pos'] = 'KTP Kode pos';
        $arr_w['id_domisili_desa'] = 'ID Domisili Desa';
        $arr_w['domisili_alamat'] = 'ID Domisili Desa';
        $arr_w['domisili_kode_pos'] = 'ID Domisili Desa';
        $arr_w['gelar_depan'] = 'Gelar depan';
        $arr_w['gelar_belakang'] = 'Gelar belakang';
        $arr_w['tempat_lahir'] = 'Tempat lahir';
        $arr_w['tanggal_lahir'] = 'Tanggal lahir';
        $arr_w['status_nikah'] = 'Status menikah';
        $arr_w['agama'] = 'Agama';
        $arr_w['golongan_darah'] = 'Golongan darah';
        foreach ($arr_w as $v => $value) {
            $$v = $this->input->post($v);

            if (isset($$v) && $$v != '') {
                $post[$v] = $$v;
            }
        }
        if (!in_array(false, $arrAccess)) {
            $insert = curl_post('karyawan/tambah', $post, [], ['api_key: ' . $this->api_key, 'server: ' . $this->server, 'id_perusahaan: ' . $this->id_perusahaan]);
            if ($insert->status == 200) {
                $data['status'] = true;
                $data['alert']['title'] = 'PEMBERITAHUAN';
                $data['load'][0]['parent'] = '#parent_display';
                $data['load'][0]['reload'] = base_url('karyawan/daftar/ #reload_display');
                $data['reload'] = true;
            } else {
                $data['status'] = false;
                $data['alert']['title'] = 'PERINGATAN';
            }
            $data['alert']['message'] = $insert->message;
            echo json_encode($data);
            exit;
        } else {
            $data['status'] = false;
            if (in_array(false, $parent_1)) {
                $data['karyawan'][] = '.parent_1';
            }
            if (in_array(false, $parent_2)) {
                $data['karyawan'][] = '.parent_2';
            }
            if (in_array(false, $parent_3)) {
                $data['karyawan'][] = '.parent_3';
            }
            if (in_array(false, $parent_4)) {
                $data['karyawan'][] = '.parent_4';
            }
            echo json_encode($data);
            exit;
        }
    }
}
