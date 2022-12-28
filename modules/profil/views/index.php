<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Tables Widget 12-->
        <div class="card mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <div class="d-flex align-items-center position-relative my-1 pe-2">
                </div>
                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#modalEdit">
                        <span class="svg-icon svg-icon-2 me-0">
                            <i class="fa-duotone fa-pencil fs-4"></i>
                        </span>
                        Edit Profil
                    </button>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <div class="btn-group w-100 tab mb-7 flex-wrap">
                    <!--begin::Radio-->
                    <a class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-primary tab tablinks" onclick="openCity(event, 'info-umum')" id="defaultOpen" data-kt-button="true">
                        <!--begin::Input-->
                        <!--end::Input-->
                        Informasi Umum
                    </a>
                    <!--end::Radio-->
                    <!--begin::Radio-->
                    <a class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-primary tab tablinks" onclick="openCity(event, 'alamat-ktp')" data-kt-button="true">
                        <!--begin::Input-->
                        <!--end::Input-->
                        Alamat KTP
                    </a>
                    <!--end::Radio-->
                    <!--begin::Radio-->
                    <a class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-primary tab tablinks" onclick="openCity(event, 'info-karyawan')" data-kt-button="true">
                        <!--begin::Input-->
                        <!--end::Input-->
                        Info Kekaryawaan
                    </a>
                    <!--end::Radio-->
                    <!--begin::Radio-->
                    <a class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-primary tab tablinks" onclick="openCity(event, 'alamat-domisili')" data-kt-button="true">
                        <!--begin::Input-->
                        <!--end::Input-->
                        Alamat Domisili
                    </a>
                    <!--end::Radio-->
                </div>

                <div id="info-umum" class="tabcontent mb-7">
                    <div class="fv-row mb-5">
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
                            <input type="number" name="nik" class="form-control form-control-solid ps-12" value="1234" placeholder="Masukkan nik" autocomplete="off" readonly>
                        </div>
                        <div class="text-danger mx-4 fw-bold" data-field="nik"></div>
                    </div>
                    <div class="fv-row mb-5">
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
                            <input type="text" name="email" class="form-control form-control-solid ps-12" value="alphatechin@gmail.com" placeholder="Masukkan email anda" autocomplete="off" readonly>
                        </div>
                        <div class=" text-danger mx-4 fw-bold" data-field="email"></div>
                    </div>
                    <div class="fv-row mb-5">
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
                            <input type="text" name="nama" class="form-control form-control-solid ps-12" value="Alphatech Indonesiana" placeholder="Masukkan nama" autocomplete="off" readonly>
                        </div>
                        <div class=" text-danger mx-4 fw-bold" data-field="nama"></div>
                    </div>
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold mb-2">
                            <span class="required">Gelar</span>
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
                                    <input type="text" class="form-control form-control-solid ps-12" value="Ir" placeholder="Masukkan gelar depan" autocomplete="off" readonly>
                                </div>
                            </div>
                            <div class="col-6 ps-3">
                                <div class="position-relative d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                        <i class="fa-duotone fa-graduation-cap fs-5"></i>
                                    </span>
                                    <!--end::Icon-->
                                    <input type="text" class="form-control form-control-solid ps-12" value="S. H. M" placeholder="Masukkan gelar belakang" autocomplete="off" readonly>
                                </div>
                            </div>
                        </div>
                        <div class=" text-danger mx-4 fw-bold"></div>
                    </div>
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold mb-2">
                            <span class="required">Tempat, Tanggal lahir</span>
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
                                    <input type="text" class="form-control form-control-solid ps-12" value="Sidoarjo, 19 September 2021" placeholder="Masukkan tempat" autocomplete="off" readonly>
                                </div>
                            </div>
                            <div class="col-6 ps-3">
                                <div class="position-relative d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                        <i class="fa-duotone fa-calendar-days fs-5"></i>
                                    </span>
                                    <!--end::Icon-->
                                    <input type="date" class="form-control form-control-solid ps-12" value="2022-11-7" placeholder="Masukkan tanggal" readonly />
                                </div>
                            </div>
                        </div>
                        <div class=" text-danger mx-4 fw-bold"></div>
                    </div>
                    <div class="fv-row d-flex mb-5">
                        <div class="col-6 pe-3">
                            <!--begin::Label-->
                            <label class="form-label fw-bold">Jenis Kelamin</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <div>
                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih jenis kelamin">
                                    <option></option>
                                    <option value="1" selected>Laki - laki</option>
                                    <option value="2">Perempuan</option>
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
                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih status pernikahan">
                                    <option></option>
                                    <option value="1" selected>Belum menikah</option>
                                    <option value="2">Menikah</option>
                                    <option value="3">Duda</option>
                                    <option value="4">Janda</option>
                                </select>
                            </div>
                            <!--end::Input-->
                        </div>
                    </div>
                    <div class="fv-row d-flex mb-5">
                        <div class="col-6 pe-3">
                            <!--begin::Label-->
                            <label class="form-label fw-bold">Kewarganegaraan</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <div>
                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih jenis kewarganegaraan">
                                    <option></option>
                                    <option value="1" selected>WNI</option>
                                    <option value="2">WNA</option>
                                </select>
                            </div>
                            <!--end::Input-->
                        </div>
                        <div class="col-6 ps-3">
                            <!--begin::Label-->
                            <label class="form-label fw-bold">Jenis Identitas</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <div>
                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih jenis identitas">
                                    <option></option>
                                    <option value="1" selected>KTP</option>
                                    <option value="2">Paspor</option>
                                </select>
                            </div>
                            <!--end::Input-->
                        </div>
                    </div>
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold mb-2" for="no-identitas">
                            <span class="required">No Identitas</span>
                        </label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <!--begin::Icon-->
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <i class="fa-duotone fa-h1 fs-5"></i>
                            </span>
                            <!--end::Icon-->
                            <input type="number" name="no-identitas" class="form-control form-control-solid ps-12" value="123456789" placeholder="Masukkan no identitas" autocomplete="off" readonly>
                        </div>
                        <div class=" text-danger mx-4 fw-bold" data-field="no-identitas"></div>
                    </div>
                </div>

                <div id="alamat-ktp" class="tabcontent mb-7">
                    <div class="fv-row d-flex mb-5">
                        <div class="col-6 pe-3">
                            <!--begin::Label-->
                            <label class="form-label fw-bold">Provinsi</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <div>
                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih provinsi">
                                    <option></option>
                                    <option value="1" selected>Jawa Timur</option>
                                    <option value="2">Jawa Tengah</option>
                                    <option value="3">Jawa Barat</option>
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
                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih kota">
                                    <option></option>
                                    <option value="1" selected>Malang</option>
                                    <option value="2">Surabaya</option>
                                    <option value="3">Jogja</option>
                                    <option value="4">Magelang</option>
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
                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih kecamatan">
                                    <option></option>
                                    <option value="1">Tanjungrejo</option>
                                    <option value="2">Sukun</option>
                                    <option value="3" selected>Kasin</option>
                                    <option value="4">Bareng</option>
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
                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih desa">
                                    <option></option>
                                    <option value="1" selected>Buring</option>
                                    <option value="2">Wonokoyo</option>
                                </select>
                            </div>
                            <!--end::Input-->
                        </div>
                    </div>
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold mb-2" for="kode-pos">
                            <span class="required">Kode Pos</span>
                        </label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <!--begin::Icon-->
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <i class="fa-duotone fa-mailbox fs-5"></i>
                            </span>
                            <!--end::Icon-->
                            <input type="text" name="kode-pos" class="form-control form-control-solid ps-12" value="65136" placeholder="Masukkan kode pos" autocomplete="off" readonly>
                        </div>
                        <div class=" text-danger mx-4 fw-bold" data-field="kode-pos"></div>
                    </div>
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold mb-2" for="alamat">
                            <span class="required">Alamat</span>
                        </label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <!--begin::Input-->
                            <textarea class="form-control form-control-solid" name="alamat" placeholder="Masukkan alamat" rows="5" aria-placeholder="" readonly>GPX8+R65, Mangersari, Magersari, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61212</textarea>
                            <!--end::Input-->
                        </div>
                        <div class="text-danger mx-4 fw-bold" data-field="alamat"></div>
                    </div>
                </div>

                <div id="info-karyawan" class="tabcontent mb-7">
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="form-label fw-bold">Divisi</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <div>
                            <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih provinsi">
                                <option></option>
                                <option value="1" selected>Bussiness</option>
                                <option value="2">Programmer</option>
                                <option value="3">Operation</option>
                            </select>
                        </div>
                    </div>
                    <div class="fv-row mb-5">
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
                            <input type="text" name="jabatan" class="form-control form-control-solid ps-12" value="Superadmin" placeholder="Masukkan jabatan anda" autocomplete="off" readonly>
                        </div>
                        <div class=" text-danger mx-4 fw-bold" data-field="jabatan"></div>
                    </div>
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold mb-2">
                            <span class="required">Mulai Bekerja</span>
                        </label>
                        <!--end::Label-->
                        <div class="d-flex">
                            <div class="col-6 pe-3">
                                <div class="position-relative d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                        <i class="fa-duotone fa-calendar-days fs-5"></i>
                                    </span>
                                    <!--end::Icon-->
                                    <input type="date" class="form-control form-control-solid ps-12" value="2022/07/11" placeholder="Masukkan tanggal" autocomplete="off" readonly>
                                </div>
                            </div>
                            <div class="col-6 ps-3">
                                <div class="position-relative d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                        <i class="fa-duotone fa-calendar-days fs-5"></i>
                                    </span>
                                    <!--end::Icon-->
                                    <input type="date" class="form-control form-control-solid ps-12" value="2023/07/11" placeholder="Masukkan tanggal" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class=" text-danger mx-4 fw-bold"></div>
                    </div>
                    <div class="fv-row mb-5">
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
                            <input type="text" name="no-telp" class="form-control form-control-solid ps-12" value="08123456789" placeholder="Masukkan no telepon anda" autocomplete="off" readonly>
                        </div>
                        <div class=" text-danger mx-4 fw-bold" data-field="no-telp"></div>
                    </div>
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold mb-2" for="kontak-darurat">
                            <span class="required">Kontak Darurat</span>
                        </label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <!--begin::Icon-->
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <i class="fa-duotone fa-mobile fs-5"></i>
                            </span>
                            <!--end::Icon-->
                            <input type="text" name="kontak-darurat" class="form-control form-control-solid ps-12" value="08123456789" placeholder="Masukkan kontak darurat" autocomplete="off" readonly>
                        </div>
                        <div class=" text-danger mx-4 fw-bold" data-field="kontak-darurat"></div>
                    </div>
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold mb-2" for="tipe-jadwal">
                            <span class="required">Tipe Jadwal</span>
                        </label>
                        <div class="d-flex flex-stack">
                            <!--begin::Checkboxes-->
                            <div class="d-flex align-items-center">
                                <div class="me-4">
                                    <input class="form-check-input h-20px w-20px me-1" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Flat
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input h-20px w-20px me-1" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Shift
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="text-danger mx-4 fw-bold" data-field="tipe-jadwal"></div>
                    </div>
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="form-label fw-bold">Jadwal Flat</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <div>
                            <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih provinsi">
                                <option></option>
                                <option value="1" selected>Flat A</option>
                                <option value="2">Flat B</option>
                                <option value="3">Flat C</option>
                            </select>
                        </div>
                    </div>
                    <div class="fv-row mb-5">
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
                            <input class="form-control form-control-lg form-control-solid ps-12" value="12345" type="password" name="password" autocomplete="off" placeholder="Masukkan kata sandi" readonly>
                            <!--end::Input-->
                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2">
                                <i class="bi bi-eye-slash fs-2"></i>
                                <i class="bi bi-eye fs-2 d-none"></i>
                            </span>
                        </div>
                        <div class="text-danger mx-4 fw-bold" data-field="password"></div>
                    </div>
                    <div class="fv-row mb-5">
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
                            <input class="form-control form-control-lg form-control-solid ps-12" value="12345" type="password" name="password2" autocomplete="off" placeholder="Masukkan kata sandi" readonly>
                            <!--end::Input-->
                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2">
                                <i class="bi bi-eye-slash fs-2"></i>
                                <i class="bi bi-eye fs-2 d-none"></i>
                            </span>
                        </div>
                        <div class="text-danger mx-4 fw-bold" data-field="password2"></div>
                    </div>
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="form-label fs-6 fw-bold">
                            <span class="required">Tanda Tangan</span>
                        </label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/svg/avatars/blank.svg)"></div>
                                <!--end::Preview existing avatar-->
                                <!--begin::Label-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="Change avatar">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                    <input type="hidden" name="avatar_remove">
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->
                                <!--begin::Cancel-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="" data-bs-original-title="Cancel avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Remove-->
                            </div>
                        </div>
                        <div class="text-danger mx-4 fw-bold" data-field="image"></div>
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
                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih provinsi">
                                    <option></option>
                                    <option value="1" selected>Jawa Timur</option>
                                    <option value="2">Jawa Tengah</option>
                                    <option value="3">Jawa Barat</option>
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
                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih kota">
                                    <option></option>
                                    <option value="1" selected>Malang</option>
                                    <option value="2">Surabaya</option>
                                    <option value="3">Jogja</option>
                                    <option value="4">Magelang</option>
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
                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih kecamatan">
                                    <option></option>
                                    <option value="1" selected>Tanjungrejo</option>
                                    <option value="2">Sukun</option>
                                    <option value="3">Kasin</option>
                                    <option value="4">Bareng</option>
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
                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih desa">
                                    <option></option>
                                    <option value="1" selected>Buring</option>
                                    <option value="2">Wonokoyo</option>
                                </select>
                            </div>
                            <!--end::Input-->
                        </div>
                    </div>
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold mb-2" for="kode-pos">
                            <span class="required">Kode Pos</span>
                        </label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <!--begin::Icon-->
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <i class="fa-duotone fa-mailbox fs-5"></i>
                            </span>
                            <!--end::Icon-->
                            <input type="text" name="kode-pos" class="form-control form-control-solid ps-12" value="65136" placeholder="Masukkan kode pos" autocomplete="off" readonly>
                        </div>
                        <div class=" text-danger mx-4 fw-bold" data-field="kode-pos"></div>
                    </div>
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold mb-2" for="alamat">
                            <span class="required">Alamat</span>
                        </label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <!--begin::Input-->
                            <textarea class="form-control form-control-solid" name="alamat" placeholder="Masukkan alamat" rows="5" aria-placeholder="" readonly>GPX8+R65, Mangersari, Magersari, Kec. Sidoarjo, Kabupaten Sidoarjo, Jawa Timur 61212</textarea>
                            <!--end::Input-->
                        </div>
                        <div class="text-danger mx-4 fw-bold" data-field="alamat"></div>
                    </div>
                    <div class="fv-row mb-5">
                        <button class="btn btn-lg btn-danger"><i class="fa-duotone fa-arrows-rotate fs-5 me-2"></i>Singkron dengan KTP</button>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Tables Widget 12-->
    </div>
    <!--end::Post-->
</div>

<div class="modal fade" id="modalEdit" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <!--begin::Modal content-->
        <div class="modal-content">
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
            <div class="modal-body pb-lg-10 px-lg-10">
                <div class="btn-group w-100 tab mb-7 flex-wrap">
                    <!--begin::Radio-->
                    <label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-primary" data-kt-button="true">
                        <!--begin::Input-->
                        <input class="btn-check tablinks" type="radio" onclick="openCity(event, 'info-umum-modal')">
                        <!--end::Input-->
                        Informasi Umum
                    </label>
                    <!--end::Radio-->
                    <!--begin::Radio-->
                    <label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-primary" data-kt-button="true">
                        <!--begin::Input-->
                        <input class="btn-check tablinks" type="radio" onclick="openCity(event, 'alamat-ktp-modal')">
                        <!--end::Input-->
                        Alamat KTP
                    </label>
                    <!--end::Radio-->
                    <!--begin::Radio-->
                    <label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-primary" data-kt-button="true">
                        <!--begin::Input-->
                        <input class="btn-check tablinks" type="radio" onclick="openCity(event, 'info-karyawan-modal')">
                        <!--end::Input-->
                        Info Kekaryawaan
                    </label>
                    <!--end::Radio-->
                    <!--begin::Radio-->
                    <label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-primary" data-kt-button="true">
                        <!--begin::Input-->
                        <input class="btn-check tablinks" type="radio" onclick="openCity(event, 'alamat-domisili-modal')">
                        <!--end::Input-->
                        Alamat Domisili
                    </label>
                    <!--end::Radio-->
                </div>

                <div id="info-umum-modal" class="tabcontent mb-7">
                    <div class="fv-row mb-5">
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
                        <div class="text-danger mx-4 fw-bold" data-field="nik"></div>
                    </div>
                    <div class="fv-row mb-5">
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
                        <div class=" text-danger mx-4 fw-bold" data-field="email"></div>
                    </div>
                    <div class="fv-row mb-5">
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
                        <div class=" text-danger mx-4 fw-bold" data-field="nama"></div>
                    </div>
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold mb-2">
                            <span class="required">Gelar</span>
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
                                    <input type="text" class="form-control form-control-solid ps-12" value="" placeholder="Masukkan gelar depan" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-6 ps-3">
                                <div class="position-relative d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                        <i class="fa-duotone fa-graduation-cap fs-5"></i>
                                    </span>
                                    <!--end::Icon-->
                                    <input type="text" class="form-control form-control-solid ps-12" value="" placeholder="Masukkan gelar belakang" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class=" text-danger mx-4 fw-bold"></div>
                    </div>
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold mb-2">
                            <span class="required">Tempat, Tanggal lahir</span>
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
                                    <input type="text" class="form-control form-control-solid ps-12" value="" placeholder="Masukkan tempat" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-6 ps-3">
                                <div class="position-relative d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                        <i class="fa-duotone fa-calendar-days fs-5"></i>
                                    </span>
                                    <!--end::Icon-->
                                    <input type="date" class="form-control form-control-solid ps-12" placeholder="Masukkan tanggal" />
                                </div>
                            </div>
                        </div>
                        <div class=" text-danger mx-4 fw-bold"></div>
                    </div>
                    <div class="fv-row d-flex mb-5">
                        <div class="col-6 pe-3">
                            <!--begin::Label-->
                            <label class="form-label fw-bold">Jenis Kelamin</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <div>
                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih jenis kelamin">
                                    <option></option>
                                    <option value="1">Laki - laki</option>
                                    <option value="2">Perempuan</option>
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
                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih status pernikahan">
                                    <option></option>
                                    <option value="1">Belum menikah</option>
                                    <option value="2">Menikah</option>
                                    <option value="3">Duda</option>
                                    <option value="4">Janda</option>
                                </select>
                            </div>
                            <!--end::Input-->
                        </div>
                    </div>
                    <div class="fv-row d-flex mb-5">
                        <div class="col-6 pe-3">
                            <!--begin::Label-->
                            <label class="form-label fw-bold">Kewarganegaraan</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <div>
                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih jenis kewarganegaraan">
                                    <option></option>
                                    <option value="1">WNI</option>
                                    <option value="2">WNA</option>
                                </select>
                            </div>
                            <!--end::Input-->
                        </div>
                        <div class="col-6 ps-3">
                            <!--begin::Label-->
                            <label class="form-label fw-bold">Jenis Identitas</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <div>
                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih jenis identitas">
                                    <option></option>
                                    <option value="1">KTP</option>
                                    <option value="2">Paspor</option>
                                </select>
                            </div>
                            <!--end::Input-->
                        </div>
                    </div>
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold mb-2" for="no-identitas">
                            <span class="required">No Identitas</span>
                        </label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <!--begin::Icon-->
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <i class="fa-duotone fa-h1 fs-5"></i>
                            </span>
                            <!--end::Icon-->
                            <input type="number" name="no-identitas" class="form-control form-control-solid ps-12" value="" placeholder="Masukkan no identitas" autocomplete="off">
                        </div>
                        <div class=" text-danger mx-4 fw-bold" data-field="no-identitas"></div>
                    </div>
                </div>

                <div id="alamat-ktp-modal" class="tabcontent mb-7">
                    <div class="fv-row d-flex mb-5">
                        <div class="col-6 pe-3">
                            <!--begin::Label-->
                            <label class="form-label fw-bold">Provinsi</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <div>
                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih provinsi">
                                    <option></option>
                                    <option value="1">Jawa Timur</option>
                                    <option value="2">Jawa Tengah</option>
                                    <option value="3">Jawa Barat</option>
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
                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih kota">
                                    <option></option>
                                    <option value="1">Malang</option>
                                    <option value="2">Surabaya</option>
                                    <option value="3">Jogja</option>
                                    <option value="4">Magelang</option>
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
                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih kecamatan">
                                    <option></option>
                                    <option value="1">Tanjungrejo</option>
                                    <option value="2">Sukun</option>
                                    <option value="3">Kasin</option>
                                    <option value="4">Bareng</option>
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
                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih desa">
                                    <option></option>
                                    <option value="1">Buring</option>
                                    <option value="2">Wonokoyo</option>
                                </select>
                            </div>
                            <!--end::Input-->
                        </div>
                    </div>
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold mb-2" for="kode-pos">
                            <span class="required">Kode Pos</span>
                        </label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <!--begin::Icon-->
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <i class="fa-duotone fa-mailbox fs-5"></i>
                            </span>
                            <!--end::Icon-->
                            <input type="text" name="kode-pos" class="form-control form-control-solid ps-12" value="" placeholder="Masukkan kode pos" autocomplete="off">
                        </div>
                        <div class=" text-danger mx-4 fw-bold" data-field="kode-pos"></div>
                    </div>
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold mb-2" for="alamat">
                            <span class="required">Alamat</span>
                        </label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <!--begin::Input-->
                            <textarea class="form-control form-control-solid" name="alamat" placeholder="Masukkan alamat" rows="5" aria-placeholder=""></textarea>
                            <!--end::Input-->
                        </div>
                        <div class="text-danger mx-4 fw-bold" data-field="alamat"></div>
                    </div>
                </div>

                <div id="info-karyawan-modal" class="tabcontent mb-7">
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="form-label fw-bold">Divisi</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <div>
                            <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih provinsi">
                                <option></option>
                                <option value="1">Bussiness</option>
                                <option value="2">Programmer</option>
                                <option value="3">Operation</option>
                            </select>
                        </div>
                    </div>
                    <div class="fv-row mb-5">
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
                        <div class=" text-danger mx-4 fw-bold" data-field="jabatan"></div>
                    </div>
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold mb-2">
                            <span class="required">Mulai Bekerja</span>
                        </label>
                        <!--end::Label-->
                        <div class="d-flex">
                            <div class="col-6 pe-3">
                                <div class="position-relative d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                        <i class="fa-duotone fa-calendar-days fs-5"></i>
                                    </span>
                                    <!--end::Icon-->
                                    <input type="date" class="form-control form-control-solid ps-12" value="" placeholder="Masukkan tanggal" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-6 ps-3">
                                <div class="position-relative d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                        <i class="fa-duotone fa-calendar-days fs-5"></i>
                                    </span>
                                    <!--end::Icon-->
                                    <input type="date" class="form-control form-control-solid ps-12" value="" placeholder="Masukkan tanggal" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class=" text-danger mx-4 fw-bold"></div>
                    </div>
                    <div class="fv-row mb-5">
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
                            <input type="text" name="no-telp" class="form-control form-control-solid ps-12" value="" placeholder="Masukkan no telepon anda" autocomplete="off">
                        </div>
                        <div class=" text-danger mx-4 fw-bold" data-field="no-telp"></div>
                    </div>
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold mb-2" for="kontak-darurat">
                            <span class="required">Kontak Darurat</span>
                        </label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <!--begin::Icon-->
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <i class="fa-duotone fa-mobile fs-5"></i>
                            </span>
                            <!--end::Icon-->
                            <input type="text" name="kontak-darurat" class="form-control form-control-solid ps-12" value="" placeholder="Masukkan kontak darurat" autocomplete="off">
                        </div>
                        <div class=" text-danger mx-4 fw-bold" data-field="kontak-darurat"></div>
                    </div>
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold mb-2" for="tipe-jadwal">
                            <span class="required">Tipe Jadwal</span>
                        </label>
                        <div class="d-flex flex-stack">
                            <!--begin::Checkboxes-->
                            <div class="d-flex align-items-center">
                                <div class="me-4">
                                    <input class="form-check-input h-20px w-20px me-1" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Flat
                                    </label>
                                </div>
                                <div>
                                    <input class="form-check-input h-20px w-20px me-1" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Shift
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="text-danger mx-4 fw-bold" data-field="tipe-jadwal"></div>
                    </div>
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="form-label fw-bold">Jadwal Flat</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <div>
                            <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih provinsi">
                                <option></option>
                                <option value="1">Flat A</option>
                                <option value="2">Flat B</option>
                                <option value="3">Flat C</option>
                            </select>
                        </div>
                    </div>
                    <div class="fv-row mb-5">
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
                    <div class="fv-row mb-5">
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
                            <input class="form-control form-control-lg form-control-solid ps-12" type="password" name="password2" autocomplete="off" placeholder="Masukkan kata sandi">
                            <!--end::Input-->
                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2">
                                <i class="bi bi-eye-slash fs-2"></i>
                                <i class="bi bi-eye fs-2 d-none"></i>
                            </span>
                        </div>
                        <div class="text-danger mx-4 fw-bold" data-field="password2"></div>
                    </div>
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="form-label fs-6 fw-bold">
                            <span class="required">Tanda Tangan</span>
                        </label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/svg/avatars/blank.svg)"></div>
                                <!--end::Preview existing avatar-->
                                <!--begin::Label-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="Change avatar">
                                    <i class="bi bi-pencil-fill fs-7"></i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                    <input type="hidden" name="avatar_remove">
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->
                                <!--begin::Cancel-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="" data-bs-original-title="Cancel avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove avatar">
                                    <i class="bi bi-x fs-2"></i>
                                </span>
                                <!--end::Remove-->
                            </div>
                        </div>
                        <div class="text-danger mx-4 fw-bold" data-field="image"></div>
                    </div>
                </div>

                <div id="alamat-domisili-modal" class="tabcontent mb-7">
                    <div class="fv-row d-flex mb-5">
                        <div class="col-6 pe-3">
                            <!--begin::Label-->
                            <label class="form-label fw-bold">Provinsi</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <div>
                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih provinsi">
                                    <option></option>
                                    <option value="1">Jawa Timur</option>
                                    <option value="2">Jawa Tengah</option>
                                    <option value="3">Jawa Barat</option>
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
                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih kota">
                                    <option></option>
                                    <option value="1">Malang</option>
                                    <option value="2">Surabaya</option>
                                    <option value="3">Jogja</option>
                                    <option value="4">Magelang</option>
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
                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih kecamatan">
                                    <option></option>
                                    <option value="1">Tanjungrejo</option>
                                    <option value="2">Sukun</option>
                                    <option value="3">Kasin</option>
                                    <option value="4">Bareng</option>
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
                                <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih desa">
                                    <option></option>
                                    <option value="1">Buring</option>
                                    <option value="2">Wonokoyo</option>
                                </select>
                            </div>
                            <!--end::Input-->
                        </div>
                    </div>
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold mb-2" for="kode-pos">
                            <span class="required">Kode Pos</span>
                        </label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <!--begin::Icon-->
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <i class="fa-duotone fa-mailbox fs-5"></i>
                            </span>
                            <!--end::Icon-->
                            <input type="text" name="kode-pos" class="form-control form-control-solid ps-12" value="" placeholder="Masukkan kode pos" autocomplete="off">
                        </div>
                        <div class=" text-danger mx-4 fw-bold" data-field="kode-pos"></div>
                    </div>
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold mb-2" for="alamat">
                            <span class="required">Alamat</span>
                        </label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <!--begin::Input-->
                            <textarea class="form-control form-control-solid" name="alamat" placeholder="Masukkan alamat" rows="5" aria-placeholder=""></textarea>
                            <!--end::Input-->
                        </div>
                        <div class="text-danger mx-4 fw-bold" data-field="alamat"></div>
                    </div>
                    <div class="fv-row mb-5">
                        <button class="btn btn-lg btn-danger"><i class="fa-duotone fa-arrows-rotate fs-5 me-2"></i>Singkron dengan KTP</button>
                    </div>
                </div>
                <button type="button" class="btn btn-lg btn-primary" style="width: 100%">Continue
                    <span class="svg-icon svg-icon-3 ms-1 me-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
                            <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
                        </svg>
                    </span>
                </button>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>