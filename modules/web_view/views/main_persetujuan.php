
    <!-- Begin page -->
    <main class="h-100 mt-4">
        <div id="display_content">
            <div id="reload_content">
                <!-- main page content -->
        <div class="main-container container top-20 mt-2">
            <?php if($akses == '' || $api_key == '' || $server == '') : ?>
                <div class="container workpro d-flex justify-content-center align-items-center flex-column px-3">
                    <img src="<?= data_url(FALSE,'img_default/'.base64url_encode('vector').'/'.base64url_encode('vector_pengumuman_kosong.gif')); ?>" width="275">
                    <span class="mt-3 text-center mb-4" style="color: #FFB600; font-size: 22px; font-weight: 700;">Masukan Kata sandi </span>
                     <div class="mb-3">
                      <div style="display : flex;justify-content: space-between;align-items: center;">
                        <div class="content d-flex align-items-center" style="background-color: #FFF8E5; min-height: 40px; width: 75%; border-radius: 8px;">
                            <input id="password" class="text-dark fw-normal mx-3 my-2 border-0 bg-none input" type="password" style="width:100%;outline: none;border: none;" onkeyup="manipulasi_button(this)">
                            <input id="id_perusahaan" class="text-dark fw-normal mx-3 my-2 border-0 bg-none input" type="hidden" value="<?= $id_perusahaan;?>" style="width:100%;">
                            <input id="id_karyawan" class="text-dark fw-normal mx-3 my-2 border-0 bg-none input" type="hidden" value="<?= $id_karyawan;?>" style="width:100%;">
                        </div>
                        <button onclick="submit_sandi(this)" type="button" id="submit_sandi" class="btn btn-setuju" disabled>Kirim</button>
                      </div>
                      
                    </div>
                    <span class="text-center mt-1" style="color: #9F9F9F; font-size: 13px;">Demi keamanan data, kami akan mengkonfirmasi bahwa ini adalah anda setiap beberapa saat sekali. Sialhkan masukan kata sandi anda</span>
                </div>
                
            <?php else : ?>
                <div class="row mb-2">
                    <div class="col-12">
                        <?php if($akses != '') : ?>
                            <?php if($akses->presensi == true) : ?>
                                <a href="<?= base_url('web_view/list_persetujuan/'.$id_perusahaan.'/'.$id_karyawan.'/'.'1')?>" class="card grid-1">
                                    <div class="card-body">
                                        <h5 class="card-title text-white mb-0">Presensi</h5>
                                        <span class="card-subtitle mb-2 text-white fw-light" style="font-size: 15px;"><?= $result->presensi;?> Pengajuan</span>
                                        <img src="<?= base_url()?>assets/web_view/ilustrasi/persetujuan.png" class="position-absolute" width="150" style="bottom: 5px; right: 20px;">
                                        <img src="<?= base_url()?>assets/web_view/images/background-image-persetujuan.png" class="position-absolute" width="125" style="bottom: 0px; left: 0px; border-radius: 0 0 0 10px;">
                                    </div>
                                </a>
                            <?php else : ?>
                                <a class="card grid-disabled">
                                    <div class="card-body">
                                        <h5 class="card-title text-white mb-0">Presensi</h5>
                                        <span class="card-subtitle mb-2 text-white fw-light" style="font-size: 15px;"><?= $result->presensi;?> Pengajuan</span>
                                        <img src="<?= base_url()?>assets/web_view/ilustrasi/persetujuan_disabled.png" class="position-absolute" width="150" style="bottom: 5px; right: 20px;">
                                        <img src="<?= base_url()?>assets/web_view/images/background-image-disabled.png" class="position-absolute" width="125" style="bottom: 0px; left: 0px; border-radius: 0 0 0 10px;">
                                    </div>
                                </a>
                            <?php endif;?>
                        <?php else : ?>
                            <a class="card grid-disabled">
                                <div class="card-body">
                                    <h5 class="card-title text-white mb-0">Presensi</h5>
                                    <span class="card-subtitle mb-2 text-white fw-light" style="font-size: 15px;"><?= $result->presensi;?> Pengajuan</span>
                                    <img src="<?= base_url()?>assets/web_view/ilustrasi/persetujuan_disabled.png" class="position-absolute" width="150" style="bottom: 5px; right: 20px;">
                                    <img src="<?= base_url()?>assets/web_view/images/background-image-disabled.png" class="position-absolute" width="125" style="bottom: 0px; left: 0px; border-radius: 0 0 0 10px;">
                                </div>
                            </a>
                        <?php endif;?>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-6 pe-1">
                        <?php if($akses != '') : ?>
                            <?php if($akses->lembur == true) : ?>
                                <a href="<?= base_url('web_view/list_persetujuan/'.$id_perusahaan.'/'.$id_karyawan.'/'.'2')?>" class="card grid-2">
                                    <div class="card-body">
                                        <h6 class="card-title text-white mb-0">Lembur</h6>
                                        <span class="card-subtitle mb-2 text-white fw-light" style="font-size: 12px;"><?= $result->lembur;?> Pengajuan</span>
                                        <img src="<?= base_url()?>assets/web_view/ilustrasi/lembur.png" class="position-absolute" width="95" style="bottom: 5px; right: 10px; z-index: 1;">
                                        <img src="<?= base_url()?>assets/web_view/images/background-image-lembur-2.png" class="position-absolute" width="60" style="top: 0px; right: 0px; border-radius: 0 10px 0 0px;">
                                        <img src="<?= base_url()?>assets/web_view/images/background-image-lembur.png" class="position-absolute" width="70" style="bottom: 0px; left: 0px; border-radius: 0 0 0 10px;">
                                    </div>
                                </a>
                            <?php else : ?>
                                <a class="card grid-disabled">
                                    <div class="card-body">
                                        <h6 class="card-title text-white mb-0">Lembur</h6>
                                        <span class="card-subtitle mb-2 text-white fw-light" style="font-size: 12px;"><?= $result->lembur;?> Pengajuan</span>
                                        <img src="<?= base_url()?>assets/web_view/ilustrasi/lembur_disabled.png" class="position-absolute" width="95" style="bottom: 5px; right: 10px; z-index: 1;">
                                        <img src="<?= base_url()?>assets/web_view/images/background-image-disabled-2.png" class="position-absolute" width="60" style="top: 0px; right: 0px; border-radius: 0 10px 0 0px;">
                                        <img src="<?= base_url()?>assets/web_view/images/background-image-disabled.png" class="position-absolute" width="70" style="bottom: 0px; left: 0px; border-radius: 0 0 0 10px;">
                                    </div>
                                </a>
                            <?php endif;?>
                        <?php else: ?>
                            <a class="card grid-disabled">
                                <div class="card-body">
                                    <h6 class="card-title text-white mb-0">Lembur</h6>
                                    <span class="card-subtitle mb-2 text-white fw-light" style="font-size: 12px;"><?= $result->lembur;?> Pengajuan</span>
                                    <img src="<?= base_url()?>assets/web_view/ilustrasi/lembur_disabled.png" class="position-absolute" width="95" style="bottom: 5px; right: 10px; z-index: 1;">
                                    <img src="<?= base_url()?>assets/web_view/images/background-image-disabled-2.png" class="position-absolute" width="60" style="top: 0px; right: 0px; border-radius: 0 10px 0 0px;">
                                    <img src="<?= base_url()?>assets/web_view/images/background-image-disabled.png" class="position-absolute" width="70" style="bottom: 0px; left: 0px; border-radius: 0 0 0 10px;">
                                </div>
                            </a>
                        <?php endif;?>
                    </div>
                    <div class="col-6 ps-1">
                        <?php if($akses != '') : ?>
                            <?php if($akses->reimburse == true) : ?>
                                <a href="<?= base_url('web_view/list_persetujuan/'.$id_perusahaan.'/'.$id_karyawan.'/'.'3')?>" class="card grid-3">
                                    <div class="card-body">
                                        <h6 class="card-title text-white mb-0">Reimburse</h6>
                                        <span class="card-subtitle mb-2 text-white fw-light" style="font-size: 12px;"><?= $result->rembes;?> Pengajuan</span>
                                        <img src="<?= base_url()?>assets/web_view/ilustrasi/reimburse.png" class="position-absolute" width="95" style="bottom: 5px; right: 10px; z-index: 1;">
                                        <img src="<?= base_url()?>assets/web_view/images/background-image-reimburse-2.png" class="position-absolute" width="60" style="top: 0px; right: 0px; border-radius: 0 10px 0 0px;">
                                        <img src="<?= base_url()?>assets/web_view/images/background-image-reimburse.png" class="position-absolute" width="70" style="bottom: 0px; left: 0px; border-radius: 0 0 0 10px;">
                                    </div>
                                </a>
                            <?php else : ?>
                                <a class="card grid-disabled">
                                    <div class="card-body">
                                        <h6 class="card-title text-white mb-0">Reimburse</h6>
                                        <span class="card-subtitle mb-2 text-white fw-light" style="font-size: 12px;"><?= $result->rembes;?> Pengajuan</span>
                                        <img src="<?= base_url()?>assets/web_view/ilustrasi/reimburse_disabled.png" class="position-absolute" width="95" style="bottom: 5px; right: 10px; z-index: 1;">
                                        <img src="<?= base_url()?>assets/web_view/images/background-image-disabled-2.png" class="position-absolute" width="60" style="top: 0px; right: 0px; border-radius: 0 10px 0 0px;">
                                        <img src="<?= base_url()?>assets/web_view/images/background-image-disabled.png" class="position-absolute" width="70" style="bottom: 0px; left: 0px; border-radius: 0 0 0 10px;">
                                    </div>
                                </a>
                            <?php endif;?>
                        <?php else :?>
                            <a class="card grid-disabled">
                                <div class="card-body">
                                    <h6 class="card-title text-white mb-0">Reimburse</h6>
                                    <span class="card-subtitle mb-2 text-white fw-light" style="font-size: 12px;"><?= $result->rembes;?> Pengajuan</span>
                                    <img src="<?= base_url()?>assets/web_view/ilustrasi/reimburse_disabled.png" class="position-absolute" width="95" style="bottom: 5px; right: 10px; z-index: 1;">
                                    <img src="<?= base_url()?>assets/web_view/images/background-image-disabled-2.png" class="position-absolute" width="60" style="top: 0px; right: 0px; border-radius: 0 10px 0 0px;">
                                    <img src="<?= base_url()?>assets/web_view/images/background-image-disabled.png" class="position-absolute" width="70" style="bottom: 0px; left: 0px; border-radius: 0 0 0 10px;">
                                </div>
                            </a>
                        <?php endif;?>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-6 pe-1">
                        <?php if($akses != '') : ?>
                            <?php if($akses->tukar_shift == true) : ?>
                                <a href="<?= base_url('web_view/list_persetujuan/'.$id_perusahaan.'/'.$id_karyawan.'/'.'4')?>" class="card grid-4">
                                    <div class="card-body">
                                        <h6 class="card-title text-white mb-0">Tukar Shift</h6>
                                        <span class="card-subtitle mb-2 text-white fw-light" style="font-size: 12px;"><?= $result->tukar_shift;?> Pengajuan</span>
                                        <img src="<?= base_url()?>assets/web_view/ilustrasi/tukar_shift.png" class="position-absolute" width="95" style="bottom: 5px; right: 10px; z-index: 1;">
                                        <img src="<?= base_url()?>assets/web_view/images/background-image-tukar-shift-2.png" class="position-absolute" width="60" style="top: 0px; right: 0px; border-radius: 0 10px 0 0px;">
                                        <img src="<?= base_url()?>assets/web_view/images/background-image-tukar-shift.png" class="position-absolute" width="70" style="bottom: 0px; left: 0px; border-radius: 0 0 0 10px;">
                                    </div>
                                </a>
                            <?php else : ?>
                                 <a class="card grid-disabled">
                                    <div class="card-body">
                                        <h6 class="card-title text-white mb-0">Tukar Shift</h6>
                                        <span class="card-subtitle mb-2 text-white fw-light" style="font-size: 12px;"><?= $result->tukar_shift;?> Pengajuan</span>
                                        <img src="<?= base_url()?>assets/web_view/ilustrasi/tukar_shift_disabled.png" class="position-absolute" width="95" style="bottom: 5px; right: 10px; z-index: 1;">
                                        <img src="<?= base_url()?>assets/web_view/images/background-image-disabled-2.png" class="position-absolute" width="60" style="top: 0px; right: 0px; border-radius: 0 10px 0 0px;">
                                        <img src="<?= base_url()?>assets/web_view/images/background-image-disabled.png" class="position-absolute" width="70" style="bottom: 0px; left: 0px; border-radius: 0 0 0 10px;">
                                    </div>
                                </a>
                            <?php endif;?>
                        <?php else : ?>
                             <a class="card grid-disabled">
                                <div class="card-body">
                                    <h6 class="card-title text-white mb-0">Tukar Shift</h6>
                                    <span class="card-subtitle mb-2 text-white fw-light" style="font-size: 12px;"><?= $result->tukar_shift;?> Pengajuan</span>
                                    <img src="<?= base_url()?>assets/web_view/ilustrasi/tukar_shift_disabled.png" class="position-absolute" width="95" style="bottom: 5px; right: 10px; z-index: 1;">
                                    <img src="<?= base_url()?>assets/web_view/images/background-image-disabled-2.png" class="position-absolute" width="60" style="top: 0px; right: 0px; border-radius: 0 10px 0 0px;">
                                    <img src="<?= base_url()?>assets/web_view/images/background-image-disabled.png" class="position-absolute" width="70" style="bottom: 0px; left: 0px; border-radius: 0 0 0 10px;">
                                </div>
                            </a>
                        <?php endif;?>
                    </div>
                    <div class="col-6 ps-1">
                        <?php if($akses != '') : ?>
                            <?php if($akses->izin == true) : ?>
                                <a href="<?= base_url('web_view/list_persetujuan/'.$id_perusahaan.'/'.$id_karyawan.'/'.'5')?>" class="card grid-5">
                                    <div class="card-body">
                                        <h6 class="card-title text-white mb-0">Izin Kerja</h6>
                                        <span class="card-subtitle mb-2 text-white fw-light" style="font-size: 12px;"><?= $result->izin;?> Pengajuan</span>
                                        <img src="<?= base_url()?>assets/web_view/ilustrasi/izin_kerja.png" class="position-absolute" width="95" style="bottom: 5px; right: 10px; z-index: 1;">
                                        <img src="<?= base_url()?>assets/web_view/images/background-image-izin-kerja-2.png" class="position-absolute" width="60" style="top: 0px; right: 0px; border-radius: 0 10px 0 0px;">
                                        <img src="<?= base_url()?>assets/web_view/images/background-image-izin-kerja.png" class="position-absolute" width="70" style="bottom: 0px; left: 0px; border-radius: 0 0 0 10px;">
                                    </div>
                                </a>
                            <?php else: ?>
                                <a class="card grid-disabled">
                                    <div class="card-body">
                                        <h6 class="card-title text-white mb-0">Izin Kerja</h6>
                                        <span class="card-subtitle mb-2 text-white fw-light" style="font-size: 12px;"><?= $result->izin;?> Pengajuan</span>
                                        <img src="<?= base_url()?>assets/web_view/ilustrasi/izin_kerja_disabled.png" class="position-absolute" width="95" style="bottom: 5px; right: 10px; z-index: 1;">
                                        <img src="<?= base_url()?>assets/web_view/images/background-image-disabled-2.png" class="position-absolute" width="60" style="top: 0px; right: 0px; border-radius: 0 10px 0 0px;">
                                        <img src="<?= base_url()?>assets/web_view/images/background-image-disabled.png" class="position-absolute" width="70" style="bottom: 0px; left: 0px; border-radius: 0 0 0 10px;">
                                    </div>
                                </a>
                            <?php endif;?>
                        <?php else: ?>
                            <a class="card grid-disabled">
                                <div class="card-body">
                                    <h6 class="card-title text-white mb-0">Izin Kerja</h6>
                                    <span class="card-subtitle mb-2 text-white fw-light" style="font-size: 12px;"><?= $result->izin;?> Pengajuan</span>
                                    <img src="<?= base_url()?>assets/web_view/ilustrasi/izin_kerja_disabled.png" class="position-absolute" width="95" style="bottom: 5px; right: 10px; z-index: 1;">
                                    <img src="<?= base_url()?>assets/web_view/images/background-image-disabled-2.png" class="position-absolute" width="60" style="top: 0px; right: 0px; border-radius: 0 10px 0 0px;">
                                    <img src="<?= base_url()?>assets/web_view/images/background-image-disabled.png" class="position-absolute" width="70" style="bottom: 0px; left: 0px; border-radius: 0 0 0 10px;">
                                </div>
                            </a>
                        <?php endif;?>
                    </div>
                </div>
            <?php endif;?>
        <!-- main page content ends -->
            </div>
        </div>
        


    </main>
    <!-- Page ends-->
