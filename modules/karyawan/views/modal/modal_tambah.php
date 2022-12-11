<!--begin::Modal header-->
<div class="modal-header">
    <!--begin::Modal title-->
    <h2>Tambah Data Karyawan</h2>
    <!--end::Modal title-->
    <!--begin::Close-->
    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
        <span class="svg-icon svg-icon-1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Close-->
</div>
<!--end::Modal header-->
<!--begin::Modal body-->
<form method="post" action="<?= base_url('func_karyawan/tambah_karyawan') ?>" class="modal-body pb-lg-10 px-lg-10" id="form_tambah_karyawan">
    <div class=" btn-group w-100 tab mb-7 flex-wrap">
        <!--begin::Radio-->
        <a onclick="openCity(event, 'info-umum','#manipulasi_tab','Info Umum')" class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-primary tab tablinks parent_1" id="defaultOpen" data-kt-button="true">
            <!--begin::Input-->
            <input class="btn-check" type="radio">
            <!--end::Input-->
            Informasi Umum
        </a>
        <!--end::Radio-->
        <!--begin::Radio-->
        <a onclick="openCity(event, 'alamat-ktp','#manipulasi_tab','Alamat KTP')" class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-primary tab tablinks parent_2" data-kt-button="true">
            <!--begin::Input-->
            <input class="btn-check" type="radio">
            <!--end::Input-->
            Alamat KTP
        </a>
        <!--end::Radio-->
        <!--begin::Radio-->
        <a onclick="openCity(event, 'info-karyawan','#manipulasi_tab','Info Karyawan')" class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-primary tab tablinks parent_3" data-kt-button="true">
            <!--begin::Input-->
            <input class="btn-check" type="radio">
            <!--end::Input-->
            Info Karyawan
        </a>
        <!--end::Radio-->
        <!--begin::Radio-->
        <a onclick="openCity(event, 'alamat-domisili','#manipulasi_tab','Alamat Domisili')" class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-primary tab tablinks parent_4" data-kt-button="true">
            <!--begin::Input-->
            <input class="btn-check" type="radio">
            <!--end::Input-->
            Alamat Domisili
        </a>
        <!--end::Radio-->
    </div>

    <div id="info-umum" class="tabcontent mb-7">
        <div class="fv-row mb-5" id="req_nik">
            <!--begin::Label-->
            <label class="fs-6 fw-bold mb-2" for="nik">
                <span class="required">NIK</span>
            </label>
            <!--end::Label-->
            <div class="position-relative d-flex align-items-center">
                <!--begin::Icon-->
                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                    <i class="fa-duotone fa-input-numeric fs-5"></i>
                </span>
                <!--end::Icon-->
                <input type="number" name="nik" class="form-control form-control-solid ps-12" value="" placeholder="Masukkan nik" autocomplete="off">
            </div>
        </div>
        <div class="fv-row mb-5" id="req_email">
            <!--begin::Label-->
            <label class="fs-6 fw-bold mb-2" for="email">
                <span class="required">email</span>
            </label>
            <!--end::Label-->
            <div class="position-relative d-flex align-items-center">
                <!--begin::Icon-->
                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                    <i class="fa-duotone fa-at fs-5"></i>
                </span>
                <!--end::Icon-->
                <input type="text" name="email" class="form-control form-control-solid ps-12" value="" placeholder="Masukkan email anda" autocomplete="off">
            </div>
        </div>
        <div class="fv-row mb-5" id="req_nama">
            <!--begin::Label-->
            <label class="fs-6 fw-bold mb-2" for="nama">
                <span class="required">Nama</span>
            </label>
            <!--end::Label-->
            <div class="position-relative d-flex align-items-center">
                <!--begin::Icon-->
                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                    <i class="fa-duotone fa-h1 fs-5"></i>
                </span>
                <!--end::Icon-->
                <input type="text" name="nama" class="form-control form-control-solid ps-12" value="" placeholder="Masukkan nama" autocomplete="off">
            </div>
        </div>
        <div class="fv-row mb-5">
            <!--begin::Label-->
            <label class="fs-6 fw-bold mb-2">
                <span>Gelar</span>
            </label>
            <!--end::Label-->
            <div class="d-flex">
                <div class="col-6 pe-3">
                    <div class="position-relative d-flex align-items-center">
                        <!--begin::Icon-->
                        <span class="svg-icon svg-icon-2 position-absolute mx-4">
                            <i class="fa-duotone fa-graduation-cap fs-5"></i>
                        </span>
                        <!--end::Icon-->
                        <input type="text" name="gelar_depan" class="form-control form-control-solid ps-12" value="" placeholder="Masukkan gelar depan" autocomplete="off">
                    </div>
                </div>
                <div class="col-6 ps-3">
                    <div class="position-relative d-flex align-items-center">
                        <!--begin::Icon-->
                        <span class="svg-icon svg-icon-2 position-absolute mx-4">
                            <i class="fa-duotone fa-graduation-cap fs-5"></i>
                        </span>
                        <!--end::Icon-->
                        <input type="text" name="gelar_belakang" class="form-control form-control-solid ps-12" value="" placeholder="Masukkan gelar belakang" autocomplete="off">
                    </div>
                </div>
            </div>
            <div class=" text-danger mx-4 fw-bold"></div>
        </div>
        <div class="fv-row mb-5">
            <!--begin::Label-->
            <label class="fs-6 fw-bold mb-2">
                <span>Tempat, Tanggal lahir</span>
            </label>
            <!--end::Label-->
            <div class="d-flex">
                <div class="col-6 pe-3">
                    <div class="position-relative d-flex align-items-center">
                        <!--begin::Icon-->
                        <span class="svg-icon svg-icon-2 position-absolute mx-4">
                            <i class="fa-duotone fa-location-dot fs-5"></i>
                        </span>
                        <!--end::Icon-->
                        <input type="text" name="tempat_lahir" class="form-control form-control-solid ps-12" value="" placeholder="Masukkan tempat" autocomplete="off">
                    </div>
                </div>
                <div class="col-6 ps-3">
                    <div class="position-relative d-flex align-items-center">
                        <!--begin::Icon-->
                        <span class="svg-icon svg-icon-2 position-absolute mx-4">
                            <i class="fa-duotone fa-calendar-days fs-5"></i>
                        </span>
                        <!--end::Icon-->
                        <input type="date" name="tanggal_lahir" class="form-control form-control-solid ps-12" placeholder="Masukkan tanggal" />
                    </div>
                </div>
            </div>
            <div class=" text-danger mx-4 fw-bold"></div>
        </div>
        <div class="fv-row d-flex mb-5">
            <div class="col-6 pe-3" id="req_gender">
                <!--begin::Label-->
                <label class="form-label fw-bold">
                    <span class="required">Jenis Kelamin</span>
                </label>
                <!--end::Label-->
                <!--begin::Input-->
                <div>
                    <select name="gender" class="form-select form-select-solid select2_load" data-kt-select2="true" data-placeholder="Pilih jenis kelamin">
                        <option></option>
                        <?php if ($result->gender) : ?>
                            <?php foreach ($result->gender as $row) : ?>
                                <option value="<?= $row->id_gender; ?>"><?= $row->gender; ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>
                <!--end::Input-->
            </div>
            <div class="col-6 ps-3">
                <!--begin::Label-->
                <label class="form-label fw-bold">Status Pernikahan</label>
                <!--end::Label-->
                <!--begin::Input-->
                <div>
                    <select name="status_nikah" class="form-select form-select-solid select2_load" data-kt-select2="true" data-placeholder="Pilih status pernikahan">
                        <option></option>
                        <?php if ($result->status_menikah) : ?>
                            <?php foreach ($result->status_menikah as $row) : ?>
                                <option value="<?= $row->id_status; ?>"><?= $row->status_menikah; ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>
                <!--end::Input-->
            </div>
        </div>

        <div class="fv-row d-flex mb-5">
            <div class="col-6 pe-3" id="req_agama">
                <!--begin::Label-->
                <label class="form-label fw-bold">
                    Agama
                </label>
                <!--end::Label-->
                <!--begin::Input-->
                <div>
                    <select name="agama" class="form-select form-select-solid select2_load" data-kt-select2="true" data-placeholder="Pilih agama">
                        <option></option>
                        <?php if ($result->agama) : ?>
                            <?php foreach ($result->agama as $row) : ?>
                                <option value="<?= $row->id_agama; ?>"><?= $row->agama; ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>
                <!--end::Input-->
            </div>
            <div class="col-6 ps-3">
                <!--begin::Label-->
                <label class="form-label fw-bold">Golongan darah</label>
                <!--end::Label-->
                <!--begin::Input-->
                <div>
                    <select name="golongan_darah" class="form-select form-select-solid select2_load" data-kt-select2="true" data-placeholder="Pilih golongan darah">
                        <option></option>
                        <?php if ($result->golongan_darah) : ?>
                            <?php foreach ($result->golongan_darah as $row) : ?>
                                <option value="<?= $row->id_golongan_darah; ?>"><?= $row->golongan_darah; ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>
                <!--end::Input-->
            </div>
        </div>
        <div class="fv-row mb-5" id="req_kewarganegaraan">
            <!--begin::Label-->
            <label class="form-label fw-bold">
                <span class="required">Kewarganegaraan</span>
            </label>
            <!--end::Label-->
            <!--begin::Input-->
            <div>
                <select name="kewarganegaraan" class="form-select form-select-solid select2_load" data-kt-select2="true" data-placeholder="Pilih kewarganegaraan">
                    <option></option>
                    <?php if ($result->kewarganegaraan) : ?>
                        <?php foreach ($result->kewarganegaraan as $row) : ?>
                            <option value="<?= $row->id_asal; ?>"><?= $row->asal; ?></option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>
            </div>
        </div>
    </div>

    <div id="alamat-ktp" class="tabcontent mb-7">
        <div class="fv-row d-flex mb-5">
            <div class="col-6 pe-3" id="req_ktp_provinsi">
                <!--begin::Label-->
                <label class="form-label fw-bold">
                    <span class="required">Provinsi</span>
                </label>
                <!--end::Label-->
                <!--begin::Input-->
                <div>
                    <select name="ktp_provinsi" onchange="get_kota(this, '#id_ktp_kota')" id="ktp_provinsi" class=" form-select form-select-solid select2_load" data-kt-select2="true" data-placeholder="Pilih provinsi">
                        <option></option>
                        <?php if ($provinsi) : ?>
                            <?php foreach ($provinsi as $row) : ?>
                                <option value="<?= $row->id_provinsi; ?>"><?= $row->nama; ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>
                <!--end::Input-->
            </div>
            <div class="col-6 ps-3" id="req_ktp_kota">
                <!--begin::Label-->
                <label class="form-label fw-bold">
                    <span class="required">Kota</span>
                </label>
                <!--end::Label-->
                <!--begin::Input-->
                <div>
                    <select name="ktp_kota" id="id_ktp_kota" onchange="get_kecamatan(this, '#ktp_kecamatan')" class="form-select form-select-solid select2_load" data-kt-select2="true" data-placeholder="Pilih provinsi terlebih dahulu">
                        <option></option>
                    </select>
                </div>
                <!--end::Input-->
            </div>
        </div>
        <div class="fv-row d-flex mb-5">
            <div class="col-6 pe-3" id="req_ktp_kecamatan">
                <!--begin::Label-->
                <label class="form-label fw-bold">
                    <span class="required">Kecamatan</span>
                </label>
                <!--end::Label-->
                <!--begin::Input-->
                <div>
                    <select name="ktp_kecamatan" id="ktp_kecamatan" onchange="get_desa(this, '#ktp_desa')" class="form-select form-select-solid select2_load" data-kt-select2="true" data-placeholder="Pilih kota terlebih dahulu">
                        <option></option>
                    </select>
                </div>
                <!--end::Input-->
            </div>
            <div class="col-6 ps-3" id="req_id_ktp_desa">
                <!--begin::Label-->
                <label class="form-label fw-bold"><span class="required">Desa</span></label>
                <!--end::Label-->
                <!--begin::Input-->
                <div>
                    <select name="id_ktp_desa" id="ktp_desa" class="form-select form-select-solid select2_load" data-kt-select2="true" data-placeholder="Pilih kecamatan terlebih dahulu">
                        <option></option>
                    </select>
                </div>
                <!--end::Input-->
            </div>
        </div>
        <div class="fv-row mb-5">
            <!--begin::Label-->
            <label class="fs-6 fw-bold mb-2" for="kode-pos">
                Kode Pos
            </label>
            <!--end::Label-->
            <div class="position-relative d-flex align-items-center">
                <!--begin::Icon-->
                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                    <i class="fa-duotone fa-mailbox fs-5"></i>
                </span>
                <!--end::Icon-->
                <input type="text" id="ktp_kode_pos" name="ktp_kode_pos" class="form-control form-control-solid ps-12" value="" placeholder="Masukkan kode pos" autocomplete="off">
            </div>
            <div class=" text-danger mx-4 fw-bold" data-field="kode-pos"></div>
        </div>
        <div class="fv-row mb-5" id="req_ktp_alamat">
            <!--begin::Label-->
            <label class="fs-6 fw-bold mb-2" for="alamat">
                <span class="required">Alamat</span>
            </label>
            <!--end::Label-->
            <div class="position-relative d-flex align-items-center">
                <!--begin::Input-->
                <textarea class="form-control form-control-solid" id="ktp_alamat" name="ktp_alamat" placeholder="Masukkan alamat" rows="5" aria-placeholder=""></textarea>
                <!--end::Input-->
            </div>
            <div class="text-danger mx-4 fw-bold" data-field="alamat"></div>
        </div>
    </div>

    <div id="info-karyawan" class="tabcontent mb-7">
        <div class="fv-row mb-5" id="req_id_cabang">
            <!--begin::Label-->
            <label class="form-label fw-bold">
                <span class="required">Cabang</span>
            </label>
            <!--end::Label-->
            <!--begin::Input-->
            <div>
                <select name="id_cabang" class="form-select form-select-solid select2_load" data-kt-select2="true" data-placeholder="Pilih cabang">
                    <option></option>
                    <?php if ($karyawan->cabang) : ?>
                        <?php foreach ($karyawan->cabang as $row) : ?>
                            <option value="<?= $row->id_cabang; ?>"><?= $row->nama; ?></option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>
            </div>
        </div>
        <div class="fv-row mb-5" id="req_id_role">
            <!--begin::Label-->
            <label class="form-label fw-bold">
                <span class="required">Role</span>
            </label>
            <!--end::Label-->
            <!--begin::Input-->
            <div>
                <select name="id_role" class="form-select form-select-solid select2_load" data-kt-select2="true" data-placeholder="Pilih role">
                    <option></option>
                    <?php if ($karyawan->role) : ?>
                        <?php foreach ($karyawan->role as $row) : ?>
                            <option value="<?= $row->id_role; ?>"><?= $row->nama; ?></option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>
            </div>
        </div>
        <div class="fv-row mb-5" id="req_id_divisi">
            <!--begin::Label-->
            <label class="form-label fw-bold">
                <span class="required">Divisi</span>
            </label>
            <!--end::Label-->
            <!--begin::Input-->
            <div>
                <select name="id_divisi" class="form-select form-select-solid select2_load" data-kt-select2="true" data-placeholder="Pilih divisi">
                    <option></option>
                    <?php if ($karyawan->divisi) : ?>
                        <?php foreach ($karyawan->divisi as $row) : ?>
                            <option value="<?= $row->id_divisi; ?>"><?= $row->nama; ?></option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>
            </div>
        </div>
        <div class="fv-row mb-5" id="req_jabatan">
            <!--begin::Label-->
            <label class="fs-6 fw-bold mb-2" for="jabatan">
                <span class="required">Jabatan</span>
            </label>
            <!--end::Label-->
            <div class="position-relative d-flex align-items-center">
                <!--begin::Icon-->
                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                    <i class="fa-duotone fa-user-tie fs-5"></i>
                </span>
                <!--end::Icon-->
                <input type="text" name="jabatan" class="form-control form-control-solid ps-12" value="" placeholder="Masukkan jabatan anda" autocomplete="off">
            </div>
        </div>
        <div class="fv-row mb-5" id="req_mulai_bekerja">
            <!--begin::Label-->
            <label class="fs-6 fw-bold mb-2">
                <span class="required">Mulai Bekerja</span>
            </label>
            <!--end::Label-->
            <div class="position-relative d-flex align-items-center">
                <!--begin::Icon-->
                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                    <i class="fa-duotone fa-calendar-days fs-5"></i>
                </span>
                <!--end::Icon-->
                <input type="date" name="mulai_bekerja" class="form-control form-control-solid ps-12" value="" placeholder="Masukkan tanggal" autocomplete="off">
            </div>
        </div>
        <div class="fv-row mb-5" id="req_telp">
            <!--begin::Label-->
            <label class="fs-6 fw-bold mb-2" for="no-telp">
                <span class="required">No Telepon</span>
            </label>
            <!--end::Label-->
            <div class="position-relative d-flex align-items-center">
                <!--begin::Icon-->
                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                    <i class="fa-duotone fa-mobile fs-5"></i>
                </span>
                <!--end::Icon-->
                <input type="text" name="telp" class="form-control form-control-solid ps-12" value="" placeholder="Masukkan no telepon anda" autocomplete="off">
            </div>
        </div>
        <div class="fv-row mb-5" id="req_tipe_jadwal_kerja">
            <!--begin::Label-->
            <label class="fs-6 fw-bold mb-2" for="tipe-jadwal">
                <span class="required">Tipe Jadwal</span>
            </label>
            <div class="d-flex flex-stack">
                <!--begin::Checkboxes-->
                <div class="d-flex align-items-center">
                    <div class="me-4">
                        <input class="form-check-input h-20px w-20px me-1" type="radio" onchange="jadwal(1)" value="1" name="tipe_jadwal_kerja" id="tipe_jadwal1" checked>
                        <label class="form-check-label" for="tipe_jadwal1">
                            Flat
                        </label>
                    </div>
                    <div>
                        <input class="form-check-input h-20px w-20px me-1" type="radio" onchange="jadwal(2)" value="2" name="tipe_jadwal_kerja" id="tipe_jadwal2">
                        <label class="form-check-label" for="tipe_jadwal2">
                            Shift
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="fv-row mb-5" id="req_id_pola_kerja">
            <!--begin::Label-->
            <label class=" form-label fw-bold">
                <span class="required">Jadwal Flat</span>
            </label>
            <!--end::Label-->
            <!--begin::Input-->
            <div>
                <select name="id_pola_kerja" class=" form-select form-select-solid select2_load" data-kt-select2="true" data-placeholder="Pilih jadwal">
                    <option></option>

                    <?php if ($karyawan->jadwal) : ?>
                        <?php foreach ($karyawan->jadwal as $row) : ?>
                            <option value="<?= $row->id_pola_kerja; ?>"><?= $row->nama; ?></option>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </select>
            </div>
        </div>
        <div class="fv-row mb-5" id="req_password">
            <!--begin::Label-->
            <label class="form-label fs-6 fw-bold">
                <span class="required">Kata Sandi</span>
            </label>
            <!--end::Label-->
            <div class="position-relative d-flex align-items-center">
                <!--begin::Icon-->
                <span data-field-icon="password" class="svg-icon svg-icon-2 position-absolute mx-4">
                    <i class="fa-duotone fa-key fs-5"></i>
                </span>
                <!--end::Icon-->
                <!--begin::Input-->
                <input class="form-control form-control-lg form-control-solid ps-12" type="password" name="password" autocomplete="off" placeholder="Masukkan kata sandi">
                <!--end::Input-->
                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2">
                    <i class="bi bi-eye-slash fs-2"></i>
                    <i class="bi bi-eye fs-2 d-none"></i>
                </span>
            </div>
            <div class="text-danger mx-4 fw-bold" data-field="password"></div>
        </div>
        <div class="fv-row mb-5" id="req_re_password">
            <!--begin::Label-->
            <label class="form-label fs-6 fw-bold">
                <span class="required">Konfirmasi Kata Sandi</span>
            </label>
            <!--end::Label-->
            <div class="position-relative d-flex align-items-center">
                <!--begin::Icon-->
                <span data-field-icon="password" class="svg-icon svg-icon-2 position-absolute mx-4">
                    <i class="fa-duotone fa-key fs-5"></i>
                </span>
                <!--end::Icon-->
                <!--begin::Input-->
                <input class="form-control form-control-lg form-control-solid ps-12" type="password" name="re_password" autocomplete="off" placeholder="Masukkan kata sandi">
                <!--end::Input-->
                <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2">
                    <i class="bi bi-eye-slash fs-2"></i>
                    <i class="bi bi-eye fs-2 d-none"></i>
                </span>
            </div>
            <div class="text-danger mx-4 fw-bold" data-field="password2"></div>
        </div>
    </div>

    <div id="alamat-domisili" class="tabcontent mb-7">
        <div class="fv-row d-flex mb-5">
            <div class="col-6 pe-3">
                <!--begin::Label-->
                <label class="form-label fw-bold">Provinsi</label>
                <!--end::Label-->
                <!--begin::Input-->
                <div>
                    <select name="domisili_provinsi" onchange="get_kota(this, '#domisili_kota')" id="domisili_provinsi" class="form-select form-select-solid select2_load" data-kt-select2="true" data-placeholder="Pilih provinsi">
                        <option></option>
                        <?php if ($provinsi) : ?>
                            <?php foreach ($provinsi as $row) : ?>
                                <option value="<?= $row->id_provinsi; ?>"><?= $row->nama; ?></option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>
                </div>
                <!--end::Input-->
            </div>
            <div class="col-6 ps-3">
                <!--begin::Label-->
                <label class="form-label fw-bold">Kota</label>
                <!--end::Label-->
                <!--begin::Input-->
                <div>
                    <select name="domisili_kota" onchange="get_kecamatan(this, '#domisili_kecamatan')" id="domisili_kota" class=" form-select form-select-solid select2_load" data-kt-select2="true" data-placeholder="Pilih provinsi terlebih dahulu">
                        <option></option>
                    </select>
                </div>
                <!--end::Input-->
            </div>
        </div>
        <div class="fv-row d-flex mb-5">
            <div class="col-6 pe-3">
                <!--begin::Label-->
                <label class="form-label fw-bold">Kecamatan</label>
                <!--end::Label-->
                <!--begin::Input-->
                <div>
                    <select name="domisili_kecamatan" onchange="get_desa(this, '#domisili_desa')" id="domisili_kecamatan" class=" form-select form-select-solid select2_load" data-kt-select2="true" data-placeholder="Pilih kota terlebih dahulu">
                        <option></option>
                    </select>
                </div>
                <!--end::Input-->
            </div>
            <div class="col-6 ps-3">
                <!--begin::Label-->
                <label class="form-label fw-bold">Desa</label>
                <!--end::Label-->
                <!--begin::Input-->
                <div>
                    <select name="id_domisili_desa" id="domisili_desa" class="form-select form-select-solid select2_load" data-kt-select2="true" data-placeholder="Pilih kecamatan terlebih dahulu">
                        <option></option>
                    </select>
                </div>
                <!--end::Input-->
            </div>
        </div>
        <div class="fv-row mb-5">
            <!--begin::Label-->
            <label class="fs-6 fw-bold mb-2" for="kode-pos">
                Kode Pos
            </label>
            <!--end::Label-->
            <div class="position-relative d-flex align-items-center">
                <!--begin::Icon-->
                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                    <i class="fa-duotone fa-mailbox fs-5"></i>
                </span>
                <!--end::Icon-->
                <input type="text" name="domisili_kode_pos" id="domisili_kode_pos" class=" form-control form-control-solid ps-12" value="" placeholder="Masukkan kode pos" autocomplete="off">
            </div>
            <div class=" text-danger mx-4 fw-bold" data-field="kode-pos"></div>
        </div>
        <div class="fv-row mb-5" id="req_domisili_alamat">
            <!--begin::Label-->
            <label class="fs-6 fw-bold mb-2" for="alamat">
                <span class="required">Alamat</span>
            </label>
            <!--end::Label-->
            <div class="position-relative d-flex align-items-center">
                <!--begin::Input-->
                <textarea class="form-control form-control-solid" name="domisili_alamat" id="domisili_alamat" placeholder=" Masukkan alamat" rows="5" aria-placeholder=""></textarea>
                <!--end::Input-->
            </div>
        </div>
        <div class="fv-row mb-5">
            <button type="button" class="btn btn-lg btn-danger" onclick="sinkronisasi()"><i class="fa-duotone fa-arrows-rotate fs-5 me-2"></i>Singkron dengan KTP</button>
        </div>
    </div>
    <button type="button" id="button_submit" onclick="submit_form(this,'#form_tambah_karyawan',0,'big')" class="btn btn-lg btn-primary" style="width: 100%">Tambah
        <span class="svg-icon svg-icon-3 ms-1 me-0">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
                <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
            </svg>
        </span>
    </button>
</form>
<!--end::Modal body-->

<script>
    $('.select2_load').select2({
        dropdownParent: $('#form_tambah_karyawan')
    });
</script>

<script type="text/javascript" src="<?= base_url(); ?>assets/js/page/function.js?v=<?= date('YmdHis'); ?>"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/page/karyawan/karyawan.js?v=<?= date('YmdHis'); ?>"></script>