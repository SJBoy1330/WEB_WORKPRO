    <main class="h-100">
        <div id="display_content">
            <div id="reload_content">
                <!-- main page content -->
                <div class="main-container container top-20 mt-2">
                      <input type="hidden" id="id_perusahaan" value="<?= $id_perusahaan;?>">
                    <input type="hidden" id="id_karyawan" value="<?= $id_karyawan;?>">
                    <input type="hidden" id="server" value="<?= $server;?>">
                    <?php if($result->tipe == 2) : ?>
                    <div class="card my-3 d-flex justify-content-center align-items-center">
                        <h5 class="my-3"><?= $result->bulan;?></h5>
                    </div>
                   
                    <?php endif;?>
                    
                    <?php if($result && $result->tipe == 2) : ?>
                        <div class="circle-date d-flex justify-content-center align-items-center">
                            <img src="<?= base_url('assets/web_view/icons/kalender-putih.png')?>" style="width: 1.5rem;">
                            <input id="select_date" value="<?= $tanggal;?>" onchange="date_load(this)" type="month" class="input-date">
                        </div>
                    <?php endif;?>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <?php if($result->result) : ?>
                                <?php foreach($result->result AS $row) : ?>
                                    <a class="card mb-3" <?= ($result->tipe == 2 && strtotime($row->tanggal) < strtotime(date('Y-m-d'))) ? 'style="background-color : #C1C1C1"' : '' ?>>
                                        <?php if($result->tipe == 2) : ?>
                                            <div class="badge-keterangan" <?= (strtotime($row->tanggal) < strtotime(date('Y-m-d'))) ? 'style="background-color : #B5B5B5"' : '' ?>>
                                                <span class="fw-normal text-white"><?= tampil_text($row->shift,10);?></span>
                                            </div>
                                        <?php endif;?>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded-circle d-flex justify-content-center align-items-center" <?= ($result->tipe == 2 && strtotime($row->tanggal) < strtotime(date('Y-m-d'))) ? 'style="background-color : #B5B5B5"' : 'style="background-color: #FEF1CF;"' ?>>
                                                        <?php if($result->tipe == 1) : ?>
                                                             <img src="<?= base_url('assets/web_view/icons/hari.png')?>" style="width: 1.4rem;">
                                                         <?php else : ?>
                                                            <span class="text-white position-absolute size-12 pt-2"><?= date('d',strtotime($row->tanggal)); ?></span>
                                                            <?php if (strtotime($row->tanggal) >= strtotime(date('Y-m-d'))): ?>
                                                                 <img src="<?= base_url('assets/web_view/icons/kalender.png')?>" style="width: 1.4rem;">
                                                            <?php else : ?>
                                                                 <img src="<?= base_url('assets/web_view/icons/kalendar_disabled.png')?>" style="width: 1.4rem;">
                                                            <?php endif ?>
                                                             
                                                         <?php endif;?>
                                                    </div>
                                                </div>
                                                <div class="col align-self-center ps-0">
                                                    <span class="fw-normal <?= ($result->tipe == 2 && strtotime($row->tanggal) < strtotime(date('Y-m-d'))) ? 'text-white' : 'text-secondary' ?> size-12 mt-0">Keterangan Hari</span>
                                                    <h6 class="card-title <?= ($result->tipe == 2 && strtotime($row->tanggal) < strtotime(date('Y-m-d'))) ? 'text-white' : 'text-dark' ?> mb-0 pb-0">
                                                        <?php 
                                                            if ($result->tipe == 1) {
                                                               echo day_from_number($row->hari);
                                                            }else{
                                                                echo day_from_number(date('N',strtotime($row->tanggal)));
                                                            }
                                                        ?>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top: 0.8rem !important;">
                                                <div class="col-auto">
                                                    <div class="avatar avatar-50 rounded-circle d-flex justify-content-center align-items-center" <?= ($result->tipe == 2 && strtotime($row->tanggal) < strtotime(date('Y-m-d'))) ? 'style="background-color : #B5B5B5"' : 'style="background-color: #FEF1CF;"' ?>>
                                                        <?php if ($result->tipe == 2 && strtotime($row->tanggal) < strtotime(date('Y-m-d'))): ?>
                                                             <img src="<?= base_url('assets/web_view/icons/waktu_disabled.png')?>" style="width: 1.4rem;">
                                                        <?php else: ?>
                                                             <img src="<?= base_url('assets/web_view/icons/waktu.png')?>" style="width: 1.4rem;">
                                                        <?php endif ?>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-4 align-self-center px-0">
                                                    <span class="fw-normal <?= ($result->tipe == 2 && strtotime($row->tanggal) < strtotime(date('Y-m-d'))) ? 'text-white' : 'text-secondary' ?> size-12 mt-0">Jam Masuk</span>
                                                    <h6 class="card-title <?= ($result->tipe == 2 && strtotime($row->tanggal) < strtotime(date('Y-m-d'))) ? 'text-white' : 'text-dark' ?> mb-0 pb-0"><?= date('H:i',strtotime($row->jam_masuk)); ?></h6>
                                                </div>
                                                <div class="col-1 align-items-center position-relative" style="right: 20px; top: 8px;">
                                                	<div class="line" style="height: 40px; width: 2px; background-color: #d3d3d3; border-radius: 10px;"></div>
                                                </div>
                                                <div class="col-4 align-self-center px-0">
                                                    <span class="fw-normal <?= ($result->tipe == 2 && strtotime($row->tanggal) < strtotime(date('Y-m-d'))) ? 'text-white' : 'text-secondary' ?> size-12 mt-0">Jam Pulang</span>
                                                    <h6 class="card-title <?= ($result->tipe == 2 && strtotime($row->tanggal) < strtotime(date('Y-m-d'))) ? 'text-white' : 'text-dark' ?> mb-0 pb-0"><?= date('H:i',strtotime($row->jam_pulang)); ?></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                <?php endforeach;?>
                            <?php else :?>
                                <div class="container workpro d-flex justify-content-center align-items-center flex-column px-3">
                                    <img src="<?= data_url(FALSE,'img_default/'.base64url_encode('vector').'/'.base64url_encode('vector_pengumuman_kosong.gif')); ?>" width="275">
                                    <span class="mt-3 text-center" style="color: #FFB600; font-size: 22px; font-weight: 700;">JADWAL KOSONG</span>
                                    <span class="text-center mt-1" style="color: #9F9F9F; font-size: 13px;">Jadwal tidak tersedia, silahkan hubungi pihak admin jika terjadi kesalahan</span>
                                </div>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
                <!-- main page content ends -->
            </div>
        </div>
        

    </main>
    <!-- Page ends-->
