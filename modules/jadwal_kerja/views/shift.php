<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Tables Widget 12-->
        <div class="card mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <div class="d-flex align-items-center position-relative my-1 pe-2">
                    <span class="svg-icon svg-icon-1 position-absolute ms-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
                        </svg>
                    </span>
                    <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid form-control-sm w-250px ps-14" placeholder="Pencarian">
                </div>
                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-light btn-active-primary me-2" data-bs-toggle="modal" data-bs-target="#modalJadwalShift">
                        <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                            <i class="fa-duotone fa-calendar-circle-user fs-3"></i>
                        </span>
                        Jadwal Shift</a>
                    </button>
                    <button type="button" class="btn btn-sm btn-light btn-active-primary me-2" data-bs-toggle="modal" data-bs-target="#modalTambah">
                        <span class="svg-icon svg-icon-2 me-0">
                            <i class="fa-duotone fa-plus fs-3"></i>
                        </span>
                        Tambah
                    </button>
                    <button type="button" class="btn btn-sm btn-light-danger" id="deleteall" style="display: none;">
                        <span class="svg-icon svg-icon-2 me-0">
                            <i class="fa-duotone fa-trash" style="font-size: 18px;"></i>
                        </span>
                        Hapus</button>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table align-middle gs-0 gy-4" id="kt_table_shift">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th class="ps-4 w-25px rounded-start">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" name="maincheckbox" data-kt-check="true" data-kt-check-target="#kt_table_shift .form-check-input" value="1">
                                    </div>
                                </th>
                                <th class="w-50px">No</th>
                                <th class="w-100px">Nama</th>
                                <th class="w-175px">Toleransi Terlambat</th>
                                <th class="min-w-150px text-center">Toleransi Pulang Awal</th>
                                <th class="min-w-125px text-center">Jam Masuk</th>
                                <th class="min-w-100px text-center">Jam Pulang</th>
                                <th class="min-w-100px text-center">Jam Kerja</th>
                                <th class="pe-4 min-w-150px text-end rounded-end">Aksi</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid" style="margin-left: 13px;">
                                        <input class="form-check-input deletebox" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-start flex-column">
                                        <span class="text-dark fw-bolder fs-6">1</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-dark fw-bolder d-block fs-6">Shift Kerja</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-dark fw-bolder d-block fs-6">0</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-dark fw-bolder d-block fs-6">0</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-dark fw-bolder d-block fs-6">09:00</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-dark fw-bolder d-block fs-6">16:00</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-dark fw-bolder d-block fs-6">50 Jam 30 Menit</span>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                        <i class="fa-duotone fa-pen fs-5"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                        <i class="fa-duotone fa-trash fs-5"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--begin::Body-->
            <div class="card-footer py-5 d-flex justify-content-end align-items-center">
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">«</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">»</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!--end::Tables Widget 12-->
    </div>
    <!--end::Post-->
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Tambah Data Shift</h2>
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
                <div class="fv-row mb-5">
                    <!--begin::Label-->
                    <label class="fs-6 fw-bold mb-2" for="nama">
                        <span class="required">Nama</span>
                    </label>
                    <!--end::Label-->
                    <div class="position-relative d-flex align-items-center">
                        <!--begin::Icon-->
                        <span class="svg-icon svg-icon-2 position-absolute mx-4">
                            <i class="fa-duotone fa-input-numeric fs-5"></i>
                        </span>
                        <!--end::Icon-->
                        <input type="number" name="nama" class="form-control form-control-solid ps-12" value="" placeholder="Masukkan nama" autocomplete="off">
                    </div>
                    <div class="text-danger mx-4 fw-bold" data-field="nama"></div>
                </div>
                <div class="fv-row d-flex mb-5">
                    <div class="col-6 pe-3">
                        <!--begin::Label-->
                        <label class="form-label fw-bold">Toleransi Terlambat</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <div class="position-relative d-flex align-items-center">
                            <!--begin::Icon-->
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <i class="fa-duotone fa-timer fs-5"></i>
                            </span>
                            <!--end::Icon-->
                            <input type="number" name="" class="form-control form-control-solid ps-12" value="0" placeholder="Masukkan toleransi terlambat" autocomplete="off">
                        </div>
                        <div class="text-danger mx-4 fw-bold" data-field=""></div>
                    </div>
                    <div class="col-6 ps-3">
                        <!--begin::Label-->
                        <label class="form-label fw-bold">Toleransi Pulang awal</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <div class="position-relative d-flex align-items-center">
                            <!--begin::Icon-->
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <i class="fa-duotone fa-timer fs-5"></i>
                            </span>
                            <!--end::Icon-->
                            <input type="number" name="" class="form-control form-control-solid ps-12" value="0" placeholder="Masukan toleransi pulang awal" autocomplete="off">
                        </div>
                        <div class="text-danger mx-4 fw-bold" data-field=""></div>
                    </div>
                </div>

                <div class="fv-row d-flex mb-5">
                    <div class="col-6 pe-3">
                        <!--begin::Label-->
                        <label class="form-label fw-bold">Jam Masuk</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <div class="position-relative d-flex align-items-center">
                            <!--begin::Icon-->
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <i class="fa-duotone fa-timer fs-5"></i>
                            </span>
                            <!--end::Icon-->
                            <input type="number" id="kt_datepicker_1" name="" class="form-control form-control-solid ps-12" value="0" placeholder="Masukkan jam masuk" autocomplete="off">
                        </div>
                        <div class="text-danger mx-4 fw-bold" data-field=""></div>
                    </div>
                    <div class="col-6 ps-3">
                        <!--begin::Label-->
                        <label class="form-label fw-bold">jam pulang</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <div class="position-relative d-flex align-items-center">
                            <!--begin::Icon-->
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <i class="fa-duotone fa-timer fs-5"></i>
                            </span>
                            <!--end::Icon-->
                            <input type="number" id="kt_datepicker_2" name="" class="form-control form-control-solid ps-12" value="0" placeholder="Masukan jam pulang" autocomplete="off">
                        </div>
                        <div class="text-danger mx-4 fw-bold" data-field=""></div>
                    </div>
                </div>

                <div class="fv-row mb-5">
                    <!--begin::Label-->
                    <label class="fs-6 fw-bold mb-2" for="ganti-hari">
                        <span class="required">Ganti Hari</span>
                    </label>
                    <!--end::Label-->
                    <div class="position-relative d-flex align-items-center">
                        <label class="form-check form-check-custom form-check-solid me-10">
                            <input class="form-check-input h-20px w-20px" type="checkbox" name="ganti-hari">
                        </label>
                    </div>
                    <div class="text-danger mx-4 fw-bold" data-field="ganti-hari"></div>
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

<!-- Modal Tambah Jadwal Flat -->
<div class="modal fade" id="modalJadwalShift" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Jadwal Shift</h2>
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
            <div class="modal-body pb-lg-15 px-lg-10">
                <div class="row mb-5">
                    <div class="col-10">
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="shift d-flex justify-content-center align-items-center">
                                            <button class="btn btn-info name mx-2">Shift Kerja</button>
                                            <button class="btn btn-info name mx-2">Saka</button>
                                            <button class="btn btn-info name mx-2">Shift Kerja</button>
                                            <button class="btn btn-info name mx-2">Shift Kerja</button>
                                            <button class="btn btn-info name mx-2">Shift Kerja</button>
                                            <button class="btn btn-info name mx-2">Shift Kerja</button>
                                            <button class="btn btn-info name mx-2">Shift Kerja</button>
                                            <button class="btn btn-info name mx-2">Shift Kerja</button>
                                            <button class="btn btn-info name mx-2">Shift Kerja</button>
                                            <button class="btn btn-info name mx-2">Shift Kerja</button>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <div class="col-2 d-flex justify-content-center align-items-center">
                        <div class="position-relative d-flex align-items-center mb-5">
                            <!--begin::Icon-->
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <i class="fa-duotone fa-calendar-days fs-5"></i>
                            </span>
                            <!--end::Icon-->
                            <input class="form-control form-control-solid ps-12" placeholder="Tanggal" id="kt_datepicker_2"/>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-6">
                        <div class="table-responsive pe-3" style="oveflow-y: scroll; height: 300px;">
                            <div class="card-toolbar d-flex justify-content-end mb-3">
                                <button type="button" class="btn btn-sm btn-light-danger" id="delete_jadwal_shift" style="display: none;">
                                    <span class="svg-icon svg-icon-2 me-0">
                                        <i class="fa-duotone fa-trash" style="font-size: 18px;"></i>
                                    </span>
                                    Hapus</button>
                            </div>
                            <!--begin::Table-->
                            <table class="table align-middle gs-0 gy-4" id="kt_table_jadwal_shift">
                                <!--begin::Table head-->
                                <thead>
                                    <tr class="fw-bolder text-muted bg-light">
                                        <th class="ps-4 w-25px rounded-start">
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" name="maincheckbox_jadwal_shift" data-kt-check="true" data-kt-check-target="#kt_table_jadwal_shift .form-check-input" value="1">
                                            </div>
                                        </th>
                                        <th class="w-50px">No</th>
                                        <th class="w-175px">Nama</th>
                                        <th class="w-100px">Divisi</th>
                                        <th class="pe-4 min-w-100px text-end rounded-end">Aksi</th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid" style="margin-left: 13px;">
                                                <input class="form-check-input deletebox_jadwal_shift" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-start flex-column">
                                                <span class="text-dark fw-bolder fs-6">1</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-dark fw-bolder d-block fs-6">Saka Dana Asmara</span>
                                        </td>
                                        <td>
                                            <span class="text-dark fw-bolder d-block fs-6">Designer</span>
                                        </td>
                                        <td class="text-end pe-2">
                                            <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <i class="fa-duotone fa-trash fs-5"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid" style="margin-left: 13px;">
                                                <input class="form-check-input deletebox_jadwal_shift" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-start flex-column">
                                                <span class="text-dark fw-bolder fs-6">2</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-dark fw-bolder d-block fs-6">Sidatata Al Jennar</span>
                                        </td>
                                        <td>
                                            <span class="text-dark fw-bolder d-block fs-6">Programmer</span>
                                        </td>
                                        <td class="text-end pe-2">
                                            <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <i class="fa-duotone fa-trash fs-5"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid" style="margin-left: 13px;">
                                                <input class="form-check-input deletebox_jadwal_shift" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-start flex-column">
                                                <span class="text-dark fw-bolder fs-6">3</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-dark fw-bolder d-block fs-6">Moh Ramadan</span>
                                        </td>
                                        <td>
                                            <span class="text-dark fw-bolder d-block fs-6">QA</span>
                                        </td>
                                        <td class="text-end pe-2">
                                            <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <i class="fa-duotone fa-trash fs-5"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid" style="margin-left: 13px;">
                                                <input class="form-check-input deletebox_jadwal_shift" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-start flex-column">
                                                <span class="text-dark fw-bolder fs-6">4</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-dark fw-bolder d-block fs-6">Vincentius Harya Wibisana</span>
                                        </td>
                                        <td>
                                            <span class="text-dark fw-bolder d-block fs-6">Android Developer</span>
                                        </td>
                                        <td class="text-end pe-2">
                                            <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <i class="fa-duotone fa-trash fs-5"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid" style="margin-left: 13px;">
                                                <input class="form-check-input deletebox_jadwal_shift" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-start flex-column">
                                                <span class="text-dark fw-bolder fs-6">5</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-dark fw-bolder d-block fs-6">Erwin</span>
                                        </td>
                                        <td>
                                            <span class="text-dark fw-bolder d-block fs-6">QA</span>
                                        </td>
                                        <td class="text-end pe-2">
                                            <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <i class="fa-duotone fa-trash fs-5"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid" style="margin-left: 13px;">
                                                <input class="form-check-input deletebox_jadwal_shift" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-start flex-column">
                                                <span class="text-dark fw-bolder fs-6">6</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-dark fw-bolder d-block fs-6">Aris Naraya</span>
                                        </td>
                                        <td>
                                            <span class="text-dark fw-bolder d-block fs-6">Designer</span>
                                        </td>
                                        <td class="text-end pe-2">
                                            <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <i class="fa-duotone fa-trash fs-5"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <nav class="mt-5">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">«</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">»</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-6">
                        <div class="card shadow-sm">
                            <div class="card-header">
                                <div class="card-title">
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <span class="svg-icon svg-icon-2 position-absolute ms-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <defs>
                                                    <style>
                                                        .fa-secondary {
                                                            opacity: .4
                                                        }
                                                    </style>
                                                </defs>
                                                <path fill="currentColor" class="fa-primary" d="M500.3 443.7l-119.7-119.7c-15.03 22.3-34.26 41.54-56.57 56.57l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7z"></path>
                                                <path fill="currentColor" class="fa-secondary" d="M207.1 0C93.12 0-.0002 93.13-.0002 208S93.12 416 207.1 416s208-93.13 208-208S322.9 0 207.1 0zM207.1 336c-70.58 0-128-57.42-128-128c0-70.58 57.42-128 128-128s128 57.42 128 128C335.1 278.6 278.6 336 207.1 336z"></path>
                                            </svg>
                                        </span>
                                        <input type="text" class="form-control form-control-solid w-350px ps-14" placeholder="Cari">
                                    </div>
                                </div>
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <i class="fa-solid fa-filter"></i>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--begin::Menu 1-->
                                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61bc426e26f58">
                                        <!--begin::Header-->
                                        <div class="px-7 py-5">
                                            <div class="fs-5 text-dark fw-bolder">Filter</div>
                                        </div>
                                        <!--end::Header-->
                                        <!--begin::Menu separator-->
                                        <div class="separator border-gray-200"></div>
                                        <!--end::Menu separator-->
                                        <!--begin::Form-->
                                        <div class="px-7 py-5">
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fw-bold">Grup</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <div>
                                                    <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Semua Grup" data-dropdown-parent="#kt_menu_61bc426e26f58" data-allow-clear="true">
                                                        <option></option>
                                                        <option value="1">Grup A</option>
                                                        <option value="2">Grup B</option>
                                                        <option value="2">Grup C</option>
                                                        <option value="2">Grup D</option>
                                                    </select>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label fw-bold">Divisi</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <div>
                                                    <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Semua Divisi" data-dropdown-parent="#kt_menu_61bc426e26f58" data-allow-clear="true">
                                                        <option></option>
                                                        <option value="1">Bussiness</option>
                                                        <option value="2">Developer</option>
                                                        <option value="2">Operation</option>
                                                        <option value="2">Alpha Media</option>
                                                    </select>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group--> 
                                            <!--begin::Actions-->
                                            <div class="d-flex justify-content-end">
                                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Cari</button>
                                            </div>
                                            <!--end::Actions-->
                                        </div>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Menu 1-->
                                    <!--end::Menu-->
                                </div>
                            </div>
                            <div class="card-body pt-1">
                                <div class="table-responsive" style="oveflow-y: scroll; height: 200px;">
                                    <!--begin::Table-->
                                    <table class="table align-middle gs-0 gy-4">
                                        <!--begin::Table body-->
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex justify-content-start flex-column" style="margin-left: 13px;">
                                                        <span class="text-dark fw-bolder fs-6">1</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-dark fw-bolder d-block fs-6">Saka Dana Asmara</span>
                                                </td>
                                                <td class="text-end pe-2">
                                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                        <i class="fa-duotone fa-plus fs-5"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex justify-content-start flex-column" style="margin-left: 13px;">
                                                        <span class="text-dark fw-bolder fs-6">2</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-dark fw-bolder d-block fs-6">Sidatata Al Jennar</span>
                                                </td>
                                                <td class="text-end pe-2">
                                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                        <i class="fa-duotone fa-plus fs-5"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex justify-content-start flex-column" style="margin-left: 13px;">
                                                        <span class="text-dark fw-bolder fs-6">3</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-dark fw-bolder d-block fs-6">Moh Ramadan</span>
                                                </td>
                                                <td class="text-end pe-2">
                                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                        <i class="fa-duotone fa-plus fs-5"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex justify-content-start flex-column" style="margin-left: 13px;">
                                                        <span class="text-dark fw-bolder fs-6">4</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-dark fw-bolder d-block fs-6">Erwin</span>
                                                </td>
                                                <td class="text-end pe-2">
                                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                        <i class="fa-duotone fa-plus fs-5"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex justify-content-start flex-column" style="margin-left: 13px;">
                                                        <span class="text-dark fw-bolder fs-6">5</span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-dark fw-bolder d-block fs-6">Aris Naraya</span>
                                                </td>
                                                <td class="text-end pe-2">
                                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                        <i class="fa-duotone fa-plus fs-5"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <h3>Rekap Jadwal Shift Karyawan</h3>
                    <div class="col-lg-4 mb-3">
                        <div class="card shadow-sm">
                            <div class="card-body d-flex flex-column" style="padding: 1.2rem 2rem !important;">
                                <h3 class="card-title">Saka Dana Asmara</h3>
                                <span class="badge badge-light-info" style="width: 125px;">2 Karyawan</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="card shadow-sm">
                            <div class="card-body d-flex flex-column" style="padding: 1.2rem 2rem !important;">
                                <h3 class="card-title">Sidatata Al Jennar</h3>
                                <span class="badge badge-light-info" style="width: 125px;">2 Karyawan</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="card shadow-sm">
                            <div class="card-body d-flex flex-column" style="padding: 1.2rem 2rem !important;">
                                <h3 class="card-title">Harya Wibisana Coropun</h3>
                                <span class="badge badge-light-info" style="width: 125px;">2 Karyawan</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="card shadow-sm">
                            <div class="card-body d-flex flex-column" style="padding: 1.2rem 2rem !important;">
                                <h3 class="card-title">Saka Dana Asmara</h3>
                                <span class="badge badge-light-info" style="width: 125px;">2 Karyawan</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="card shadow-sm">
                            <div class="card-body d-flex flex-column" style="padding: 1.2rem 2rem !important;">
                                <h3 class="card-title">Sidatata Al Jennar</h3>
                                <span class="badge badge-light-info" style="width: 125px;">2 Karyawan</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="card shadow-sm">
                            <div class="card-body d-flex flex-column" style="padding: 1.2rem 2rem !important;">
                                <h3 class="card-title">Harya Wibisana Coropun</h3>
                                <span class="badge badge-light-info" style="width: 125px;">2 Karyawan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
