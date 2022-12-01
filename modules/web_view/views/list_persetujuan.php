    <main class="h-100">
        <div id="display_content">
            <div id="reload_content">
                <!-- main page content -->
                <div class="main-container container top-20 mt-2">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                        <?php if($result->data) : ?>
                            <?php foreach ($result->data as $row): ?>
                                <?php
                                    $data = '';
                                     $display = '';
                                     $judul = '';
                                     $bg = '';
                                    if ($tipe == 1) {
                                        if ($row->status == 1) {
                                            $bg = 'avatar-presensi';
                                        }else{
                                            $bg = 'avatar-presensi-checkout';
                                        }
                                      
                                        $judul = $row->karyawan;
                                        $display =  nice_time($row->tanggal);
                                        if ($row->alasan) {
                                                $alasan = 'dengan alasan <b><i>"'.$row->alasan.'"</i></b>';
                                            }else{
                                                $alasan = '';
                                            }
                                        if ($row->status == 1) {
                                            $text = 'Karyawan berada di luar jangkauan dan mengajukan presensi masuk pada jam '.date('H:i',strtotime($row->scan)).' '.$alasan;
                                        }else{
                                             $text = 'Karyawan berada di luar jangkauan dan mengajukan presensi pulang pada jam '.date('H:i',strtotime($row->scan)).' '.$alasan;
                                        }
                                        $data = 'data-id="'.$row->id_presensi.'" data-cc="'.$row->status.'" data-foto="'.$row->foto.'" data-nama="'.$row->karyawan.'" data-keterangan="'.$text.'"';
                                    }elseif($tipe == 2){
                                        $bg = 'avatar-lembur';
                                        $sts = ($row->file_bukti) ? 1 : 0;
                                        $judul = $row->karyawan;
                                        $data = 'data-id="'.$row->id_lembur.'" data-foto="'.$row->foto.'" data-nama="'.$row->karyawan.'" data-keterangan="'.$row->alasan.'" data-cek_bukti="'.$sts.'" data-tanggal="'.day_from_number(date('N',strtotime($row->tanggal))).', '.date('d',strtotime($row->tanggal)).' '.month_from_number(date('m',strtotime($row->tanggal))).' '.date('Y',strtotime($row->tanggal)).'"';
                                        $html = '';
                                        if ($row->file_bukti) {
                                            $html .= '<div class="d-none" id="bukti-'.$row->id_lembur.'">';
                                            $html .= '<div class="col-12 d-flex justify-content-between align-items-center flex-wrap">';
                                            foreach ($row->file_bukti as $key) {
                                                
                                                    $html .= '<a data-image="'.$key.'" onclick="display_gambar(this)" data-bs-toggle="modal" href="#modal_display_gambar" role="button">
                                    <div  class="avatar avatar-90 bg-opac-50 p-1 shadow-sm rounded-3 anak-wali mb-3" style="background-image: url('.$key.'); background-position: center; background-size: cover;"></div>
                                </a>';
                                            }
                                            $html .= '</div>';
                                            $html .= "</div>";
                                        }

                                        echo $html;
                                        $display =  nice_time($row->tanggal);
                                    }elseif($tipe == 3){
                                         $bg = 'avatar-reimburse';
                                           $sts = ($row->file_bukti) ? 1 : 0;
                                        $judul = $row->karyawan;
                                         $data = 'data-id="'.$row->id_rembes.'" data-foto="'.$row->foto.'" data-nama="'.$row->karyawan.'" data-keterangan="'.$row->alasan.'" data-cek_bukti="'.$sts.'" data-tanggal="'.day_from_number(date('N',strtotime($row->tanggal))).', '.date('d',strtotime($row->tanggal)).' '.month_from_number(date('m',strtotime($row->tanggal))).' '.date('Y',strtotime($row->tanggal)).'" data-jumlah="'.$row->jumlah.'" data-kategori="'.$row->kategori.'"';
                                          $display =  nice_time($row->tanggal);
                                          $html = '';
                                        if ($row->file_bukti) {
                                            $html .= '<div class="d-none" id="bukti-'.$row->id_rembes.'">';
                                            $html .= '<div class="col-12 d-flex justify-content-between align-items-center flex-wrap">';
                                            foreach ($row->file_bukti as $key) {
                                                
                                                   $html .= '<a data-image="'.$key.'" onclick="display_gambar(this)" data-bs-toggle="modal" href="#modal_display_gambar" role="button">
                                    <div  class="avatar avatar-90 bg-opac-50 p-1 shadow-sm rounded-3 anak-wali mb-3" style="background-image: url('.$key.'); background-position: center; background-size: cover;"></div>
                                </a>';
                                            }
                                            $html .= '</div>';
                                            $html .= "</div>";
                                        }
                                         echo $html;
                                    }elseif($tipe == 4){
                                         $bg = 'avatar-tukar-shift';
                                        $judul = $row->asal_karyawan;
                                        $tgl = date('d',strtotime($row->tanggal)).' '.month_from_number(date('m',strtotime($row->tanggal))).' '.date('Y',strtotime($row->tanggal));
                                          $display =  nice_time($row->tanggal);
                                           $data = 'data-id="'.$row->id_tukar_shift.'" data-asal_foto="'.$row->asal_foto.'" data-pengganti_foto="'.$row->pengganti_foto.'" data-asal_karyawan="'.tampil_text($row->asal_karyawan,20).'" data-pengganti_karyawan="'.tampil_text($row->pengganti_karyawan,20).'" data-keterangan="'.$row->alasan.'" data-tanggal="'.$tgl.'"';
                                    }elseif($tipe == 5){
                                         $bg = 'avatar-izin-kerja';
                                          $sts = ($row->file_bukti) ? 1 : 0;
                                        $judul = $row->karyawan; 
                                          $data = 'data-id="'.$row->id_izin.'" data-foto="'.$row->foto.'" data-nama="'.$row->karyawan.'" data-keterangan="'.$row->alasan.'" data-cek_bukti="'.$sts.'" data-tanggal_mulai="'.date('d',strtotime($row->tanggal_izin_mulai)).' '.date('m',strtotime($row->tanggal_izin_mulai)).' '.date('Y',strtotime($row->tanggal_izin_mulai)).'" data-tanggal_selesai="'.date('d',strtotime($row->tanggal_izin_selesai)).' '.date('m',strtotime($row->tanggal_izin_selesai)).' '.date('Y',strtotime($row->tanggal_izin_selesai)).'" data-kategori="'.$row->kategori.'"';
                                        $html = '';
                                        if ($row->file_bukti) {
                                            $html .= '<div class="d-none" id="bukti-'.$row->id_izin.'">';
                                            $html .= '<div class="col-12 d-flex justify-content-between align-items-center flex-wrap">';
                                            foreach ($row->file_bukti as $key) {
                                                
                                                    $html .= '<a data-image="'.$key.'" onclick="display_gambar(this)" data-bs-toggle="modal" href="#modal_display_gambar" role="button">
                                    <div  class="avatar avatar-90 bg-opac-50 p-1 shadow-sm rounded-3 anak-wali mb-3" style="background-image: url('.$key.'); background-position: center; background-size: cover;"></div>
                                </a>';
                                            }
                                            $html .= '</div>';
                                            $html .= "</div>";
                                        }

                                        echo $html;
                                         $display =  nice_time($row->tanggal);
                                         
                                    }else{
                                         $bg = '';
                                        $judul = '';
                                        $data = '';
                                    }
                                ?>
                                <a onclick="detail_persetujuan(this,<?= $tipe;?>)" class="card mb-3" <?= $data;?> data-bs-toggle="modal" href="#modalDetail" role="button">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-50 rounded-circle <?= $bg;?> d-flex justify-content-center align-items-center">
                                                    <?php if($tipe == 1) : ?>
                                                        <?php if($row->status == 1) : ?>
                                                            <img src="<?= base_url('assets/web_view/icons/presensi.png')?>" style="width: 1.2rem;">
                                                        <?php else : ?>
                                                            <img src="<?= base_url('assets/web_view/icons/presensi_checkout.png')?>" style="width: 1.2rem;">
                                                        <?php endif;?>
                                                    <?php elseif($tipe == 2) : ?>
                                                          <img src="<?= base_url('assets/web_view/icons/lembur.png')?>" style="width: 1.5rem;">
                                                    <?php elseif($tipe == 3) : ?>
                                                        <img src="<?= base_url('assets/web_view/icons/reimburse.png')?>" style="width: 1.4rem;">
                                                    <?php elseif($tipe == 4) : ?>
                                                          <img src="<?= base_url('assets/web_view/icons/tukar_shift.png')?>" style="width: 1.3rem;">
                                                    <?php elseif($tipe == 5) : ?>
                                                          <img src="<?= base_url('assets/web_view/icons/izin_kerja.png')?>" style="width: 1.3rem;">
                                                    <?php endif;?>
                                                </div>
                                            </div>
                                            <div class="col align-self-center ps-0">
                                                <h6 class="card-title text-dark mb-0 pb-0"><?= tampil_text($judul,20);?></h6>
                                                <span class="fw-normal text-secondary size-12 mt-0"><?= $display;?></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php endforeach ?>
                            
                        <?php else : ?>
                             <div class="container workpro d-flex justify-content-center align-items-center flex-column px-3">
                                <img src="<?= data_url(FALSE,'img_default/'.base64url_encode('vector').'/'.base64url_encode('vector_pengumuman_kosong.gif')); ?>" width="275">
                                <span class="mt-3 text-center" style="color: #FFB600; font-size: 22px; font-weight: 700;">PERSETUJUAN KOSONG</span>
                                <span class="text-center mt-1" style="color: #9F9F9F; font-size: 13px;">Persetujuan tidak tersedia, silahkan hubungi pihak admin jika terjadi kesalahan</span>
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

    <!-- Modal -->
    <div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="height : auto;min-height: 110vh;">
          <div class="modal-header border-0">
            <button type="button" id="btn_close" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <?php if($tipe != 4) : ?>
                <div class="row d-flex justify-content-center align-items-center mb-3">
                    <div class="col-auto text-center">
                        <div id="foto_user" class="avatar avatar-90 bg-opac-50 p-1 shadow-sm rounded-circle anak-wali" style="background-image: url('<?= base_url()?>assets/web_view/images/default_avatar.png'); background-position: center; background-size: cover;"></div>
                        <h6 id="nama_user" class="mt-2">Karyawan 1</h6>
                    </div>
                </div>
            <?php endif; ?>

            <?php if($tipe == 4) : ?>
                <div class="row mb-3 d-flex justify-content-center align-items-center">
                    <div class="col-5 text-center">
                        <div id="asal_foto" class="avatar avatar-90 bg-opac-50 p-1 shadow-sm rounded-circle anak-wali" style="background-image: url('<?= base_url()?>assets/web_view/images/default_avatar.png'); background-position: center; background-size: cover;"></div>
                        <h6 class="mt-2" id="asal_nama">Karyawan 1</h6>
                    </div>
                    <div class="col-2 text-center">
                        <i class="fa-regular fa-arrows-repeat" style="font-size: 1.8rem; color: #FFB600;"></i>
                    </div>
                    <div class="col-5 text-center">
                        <div id="pengganti_foto" class="avatar avatar-90 bg-opac-50 p-1 shadow-sm rounded-circle anak-wali" style="background-image: url('<?= base_url()?>assets/web_view/images/default_avatar.png'); background-position: center; background-size: cover;"></div>
                        <h6 class="mt-2" id="pengganti_nama">Karyawan 2</h6>
                    </div>
                </div>
            <?php endif;?>

            <div class="row">
                <?php if(in_array($tipe,[3,5])) : ?>
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Kategori</label>
                      <div class="content d-flex align-items-center" style="background-color: #FFF8E5; min-height: 40px; width: 100%; border-radius: 8px;">
                          <span class="text-dark fw-normal mx-3 my-2" id="kategori"></span>
                      </div>
                    </div>
                <?php endif;?>
                 <?php if(in_array($tipe,[2,3,4])) : ?>
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                      <div class="content d-flex align-items-center" style="background-color: #FFF8E5; min-height: 40px; width: 100%; border-radius: 8px;">
                          <span class="text-dark fw-normal mx-3 my-2" id="tanggal"></span>
                      </div>
                    </div>
                <?php endif;?>

                <?php if(in_array($tipe,[5])) : ?>
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
                      <div style="display : flex;justify-content: space-between;align-items: center;">
                            <div class="content d-flex align-items-center" style="background-color: #FFF8E5; min-height: 40px; width: 47%; border-radius: 8px;">
                                <span class="text-dark fw-normal mx-3 my-2" id="tanggal_mulai"></span>
                            </div>
                            -
                            <div class="content d-flex align-items-center" style="background-color: #FFF8E5; min-height: 40px; width: 47%; border-radius: 8px;">
                                <span class="text-dark fw-normal mx-3 my-2" id="tanggal_selesai"></span>
                            </div>
                      </div>
                      
                    </div>
                <?php endif;?>

                <?php if(in_array($tipe,[3])) : ?>
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Jumlah</label>
                      <div class="content d-flex align-items-center" style="background-color: #FFF8E5; min-height: 40px; width: 100%; border-radius: 8px;">
                          <span class="text-dark fw-normal mx-3 my-2" id="jumlah"></span>
                      </div>
                    </div>
                <?php endif;?>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
                  <div class="content d-flex" style="background-color: #FFF8E5; min-height: 100px; width: 100%; border-radius: 8px;">
                      <span class="text-dark fw-normal mx-3 my-2" id="keterangan"></span>
                  </div>
                </div>
                <?php if(in_array($tipe,[1,2,3,4,5])) : ?>
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Alasan admin</label>
                      <div class="content d-flex align-items-center" style="background-color: #FFF8E5; min-height: 40px; width: 100%; border-radius: 8px;">
                          <textarea class="text-dark fw-normal mx-3 my-2 border-0 bg-none input" id="alasan_admin" style="width:100%;"></textarea> 
                      </div>
                    </div>
                <?php endif;?>
                <?php if(!in_array($tipe,[1,4])) : ?>
                    <div class="mb-3" id="display_bukti">
                      <label for="exampleFormControlInput1" class="form-label">Bukti Pendukung</label>
                      <div class="row mt-3" id="dom_html">
                            <div class="col-12 d-flex justify-content-between align-items-center flex-wrap">

                                <a data-bs-toggle="modal" href="#modal_display_gambar" role="button">
                                    <div  class="avatar avatar-90 bg-opac-50 p-1 shadow-sm rounded-3 anak-wali mb-3" style="background-image: url('<?= base_url()?>assets/web_view/images/default_avatar.png'); background-position: center; background-size: cover;"></div>
                                </a>

                                <a data-bs-toggle="modal" href="#modal_display_gambar" role="button">
                                    <div  class="avatar avatar-90 bg-opac-50 p-1 shadow-sm rounded-3 anak-wali mb-3" style="background-image: url('<?= base_url()?>assets/web_view/images/default_avatar.png'); background-position: center; background-size: cover;"></div>
                                </a>

                                <a data-bs-toggle="modal" href="#modal_display_gambar" role="button">
                                    <div  class="avatar avatar-90 bg-opac-50 p-1 shadow-sm rounded-3 anak-wali mb-3" style="background-image: url('<?= base_url()?>assets/web_view/images/default_avatar.png'); background-position: center; background-size: cover;"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif;?>
            </div>
            <input type="hidden" id="id_per">
            <input type="hidden" id="cc">
             <input type="hidden" id="id_perusahaan" value="<?= $id_perusahaan;?>">
            <input type="hidden" id="id_user" value="<?= $id_user;?>">
            <div class="d-flex justify-content-center align-items-center mt-5">
                <div class="row" style="width: 100vw;">
                    <div class="col-6">
                        <button type="button" id="btn_tolak" class="btn btn-tolak" onclick="approve(<?= $tipe;?>,0)" style="width: 100%; height: 50px;">Tolak</button>
                    </div>
                    <div class="col-6">
                        <button type="button" id="btn_setuju" class="btn btn-setuju" onclick="approve(<?= $tipe;?>,1)" style="width: 100%; height: 50px;">Setuju</button>
                    </div>
                </div>
              </div>
          </div>
          
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal_display_gambar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="height:110vh;margin-top: -10px;">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
          <div class="modal-body d-flex justify-content-center align-items-center">
              <img id="display_gambar_besar" width="200" src="<?= base_url('assets/web_view/images/default_avatar.png')?>">
          </div>
        </div>
      </div>
    </div>
