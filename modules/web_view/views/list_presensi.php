
    <main class="h-100">
        <!-- main page content -->
        <div class="main-container container top-20 mt-2">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <a class="card mb-3" data-bs-toggle="modal" href="#modalDetail" role="button">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <div class="avatar avatar-50 rounded-circle avatar-presensi d-flex justify-content-center align-items-center">
                                        <img src="<?= base_url('assets/web_view/icons/presensi.png')?>" style="width: 1.2rem;">
                                    </div>
                                </div>
                                <div class="col align-self-center ps-0">
                                    <h6 class="card-title text-dark mb-0 pb-0">Presensi</h6>
                                    <span class="fw-normal text-secondary size-12 mt-0">Lorem ipsum dolor sit amet...</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- main page content ends -->

    </main>
    <!-- Page ends-->

    <!-- Modal -->
    <div class="modal fade" id="modalDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row mt-3 d-flex justify-content-center align-items-center">
                <div class="col-auto">
                    <div class="avatar avatar-90 bg-opac-50 p-1 shadow-sm rounded-circle anak-wali" style="background-image: url('<?= base_url()?>assets/web_view/images/maria-ozawa.png'); background-position: center; background-size: cover;"></div>
                </div>
            </div>
            <div class="row">
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Judul</label>
                  <div class="content d-flex align-items-center" style="background-color: #FFF8E5; min-height: 40px; width: 100%; border-radius: 8px;">
                      <span class="text-dark fw-normal mx-3 my-2">lorem Ipsum</span>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
                  <div class="content d-flex align-items-center" style="background-color: #FFF8E5; min-height: 40px; width: 100%; border-radius: 8px;">
                      <span class="text-dark fw-normal mx-3 my-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</span>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Bukti Pembayaran</label>
                  <div class="row mt-3">
                        <div class="col-12 d-flex justify-content-between align-items-center flex-wrap">
                            <div class="avatar avatar-90 bg-opac-50 p-1 shadow-sm rounded-3 anak-wali mb-3" style="background-image: url('<?= base_url()?>assets/web_view/images/maria-ozawa.png'); background-position: center; background-size: cover;"></div>

                            <div class="avatar avatar-90 bg-opac-50 p-1 shadow-sm rounded-3 anak-wali mb-3" style="background-image: url('<?= base_url()?>assets/web_view/images/maria-ozawa.png'); background-position: center; background-size: cover;"></div>

                            <div class="avatar avatar-90 bg-opac-50 p-1 shadow-sm rounded-3 anak-wali mb-3" style="background-image: url('<?= base_url()?>assets/web_view/images/maria-ozawa.png'); background-position: center; background-size: cover;"></div>

                            <div class="avatar avatar-90 bg-opac-50 p-1 shadow-sm rounded-3 anak-wali mb-3" style="background-image: url('<?= base_url()?>assets/web_view/images/maria-ozawa.png'); background-position: center; background-size: cover;"></div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
          <div class="modal-footer d-flex justify-content-center align-items-center">
            <div class="row" style="width: 100vw;">
                <div class="col-6">
                    <button type="button" class="btn btn-tolak" data-bs-dismiss="modal" style="width: 100%; height: 50px;">Tolak</button>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-setuju" style="width: 100%; height: 50px;">Setuju</button>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
