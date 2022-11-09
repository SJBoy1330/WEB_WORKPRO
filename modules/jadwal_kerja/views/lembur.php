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
                    <div class="me-2 mb-2">
                        <!--begin::Menu-->
                        <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                        <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->Filter</a>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_61bc33c4ee0dc">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-dark fw-bolder">Opsi Filter</div>
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
                                    <label class="form-label fw-bold">Range Waktu:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih range waktu" data-dropdown-parent="#kt_menu_61bc33c4ee0dc" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Hari ini</option>
                                            <option value="2">Kemarin</option>
                                            <option value="2">7 hari terakhir</option>
                                            <option value="2">30 hari terakhir</option>
                                            <option value="2">Bulan ini</option>
                                            <option value="2">Bulan kemarin</option>
                                            <option value="2">Custom range</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Tampilkan</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Menu-->
                    </div>
                    <button type="button" class="btn btn-sm btn-light btn-active-primary me-2 mb-2" data-bs-toggle="modal" data-bs-target="#modalJadwalShift">
                        <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                            <i class="fa-duotone fa-thumbs-up fs-3"></i>
                        </span>
                        Persetujuan</a>
                    </button>
                    <button type="button" class="btn btn-sm btn-light btn-active-primary me-2 mb-2" data-bs-toggle="modal" data-bs-target="#modalTambah">
                        <span class="svg-icon svg-icon-2 me-0">
                            <i class="fa-duotone fa-plus fs-3"></i>
                        </span>
                        Tambah
                    </button>
                    <button type="button" class="btn btn-sm btn-light-danger mb-2" id="deleteall" style="display: none;">
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
                    <table class="table align-middle gs-0 gy-4" id="kt_table_lembur">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th class="ps-4 w-25px rounded-start">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" name="maincheckbox" data-kt-check="true" data-kt-check-target="#kt_table_kategori .form-check-input" value="1">
                                    </div>
                                </th>
                                <th class="w-50px">No</th>
                                <th class="w-100px">Kode</th>
                                <th class="min-w-150px text-center">Tanggal Lembur</th>
                                <th class="min-w-150px text-center">Nama</th>
                                <th class="min-w-125px text-center">Penyetuju</th>
                                <th class="min-w-125px text-center">Dokumen</th>
                                <th class="pe-4 min-w-1125px text-end rounded-end">Aksi</th>
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
                                <td class="text-center">
                                    <span class="text-dark fw-bolder d-block fs-6">12345</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-dark fw-bolder d-block fs-6">2020-08-30</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-dark fw-bolder d-block fs-6">Superadmin</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-dark fw-bolder d-block fs-6">Superadmin</span>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-icon btn-light"><i class="fa-duotone fa-file fs-3"></i></a>
                                </td>
                                <td class="text-end">
                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                        <i class="fa-duotone fa-eye fs-5"></i>
                                    </a>
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
                <h2>Tambah Data Lembur</h2>
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
            <form class="form" action="#" method="post">
                <div class="modal-body pb-lg-10 px-lg-10">
                    
                    <div class="fv-row d-flex mb-5">
                        <div class="col-6 pe-3">
                            <!--begin::Label-->
                            <label class="fs-6 fw-bold mb-2">
                                <span class="required">Taggal Mulai</span>
                            </label>
                            <!--end::Label-->
                            <div class="position-relative d-flex align-items-center">
                                <!--begin::Icon-->
                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                    <i class="fa-duotone fa-calendar-days fs-5"></i>
                                </span>
                                <!--end::Icon-->
                                <input class="form-control form-control-solid ps-12" placeholder="Masukkan tanggal" id="kt_datepicker_1" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="col-6 ps-3">
                            <!--begin::Label-->
                            <label class="fs-6 fw-bold mb-2">
                                <span class="required">Tanggal Selesai</span>
                            </label>
                            <!--end::Label-->
                            <div class="position-relative d-flex align-items-center">
                                <!--begin::Icon-->
                                <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                    <i class="fa-duotone fa-calendar-days fs-5"></i>
                                </span>
                                <!--end::Icon-->
                                <input class="form-control form-control-solid ps-12" placeholder="Masukkan tanggal" id="kt_datepicker_2" autocomplete="off"/>
                            </div>
                        </div>
                        <div class="text-danger mx-4 fw-bold" data-field="nama"></div>
                    </div>
                    <div class="fv-row mb-5">
                        <div class="col-12 mb-5">
                            <!--begin::Label-->
                            <label class="fs-6 fw-bold mb-2">
                                <span class="required">Karyawan</span>
                            </label>
                            <!--end::Label-->
                            <div class="position-relative d-flex align-items-center">
                                <div style="width:100vw;">
                                    <select class="form-select form-select-solid" data-control="select2" data-placeholder="Pilih karyawan">
                                        <option></option>
                                        <option value="1">Eka Dharma Rasiawan</option>
                                        <option value="2">Rinaldi Usman</option>
                                        <option value="2">Reza Prasetio</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-5">
                            <!--begin::Label-->
                            <label class="fs-6 fw-bold mb-2">
                                <span class="required">Alasan</span>
                            </label>
                            <!--end::Label-->
                            <div class="position-relative d-flex align-items-center">
                                <textarea class="form-control form-control-solid" name="alasan" rows="6" placeholder="Masukkan alasan"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="fv-row mb-5">
                        <!--begin::Input group-->
                        <div class="form-group row">
                            <!--begin::Label-->
                            <label class="col-lg-2 col-form-label text-lg-right">Upload Dokumen:</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-10">
                                <!--begin::Dropzone-->
                                <div class="dropzone dropzone-queue mb-2" id="kt_dropzonejs_example_3">
                                    <!--begin::Controls-->
                                    <div class="dropzone-panel mb-lg-0 mb-2">
                                        <a class="dropzone-select btn btn-sm btn-primary me-2">Lampirkan file</a>
                                        <a class="dropzone-upload btn btn-sm btn-light-primary me-2">Lampirkan semua</a>
                                        <a class="dropzone-remove-all btn btn-sm btn-light-primary">Hapus semua</a>
                                    </div>
                                    <!--end::Controls-->

                                    <!--begin::Items-->
                                    <div class="dropzone-items wm-200px">
                                        <div class="dropzone-item" style="display:none">
                                            <!--begin::File-->
                                            <div class="dropzone-file">
                                                <div class="dropzone-filename" title="some_image_file_name.jpg">
                                                    <span data-dz-name>some_image_file_name.jpg</span>
                                                    <strong>(<span data-dz-size>340kb</span>)</strong>
                                                </div>

                                                <div class="dropzone-error" data-dz-errormessage></div>
                                            </div>
                                            <!--end::File-->

                                            <!--begin::Progress-->
                                            <div class="dropzone-progress">
                                                <div class="progress">
                                                    <div
                                                        class="progress-bar bg-primary"
                                                        role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Progress-->

                                            <!--begin::Toolbar-->
                                            <div class="dropzone-toolbar">
                                                <span class="dropzone-start"><i class="bi bi-play-fill fs-3"></i></span>
                                                <span class="dropzone-cancel" data-dz-remove style="display: none;"><i class="bi bi-x fs-3"></i></span>
                                                <span class="dropzone-delete" data-dz-remove><i class="bi bi-x fs-1"></i></span>
                                            </div>
                                            <!--end::Toolbar-->
                                        </div>
                                    </div>
                                    <!--end::Items-->
                                </div>
                                <!--end::Dropzone-->

                                <!--begin::Hint-->
                                <span class="form-text text-muted">Ukuran file maksimum adalah 1MB dan jumlah file maksimum adalah 5.</span>
                                <!--end::Hint-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
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
            </form>
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
                <h2>Persetujuan</h2>
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
                <!--begin::Wrapper-->
                <div class="d-flex flex-column flex-grow-1">
                    <!--begin::Stats-->
                    <div class="d-flex justify-content-between flex-wrap">
                        <div class="d-flex justify-content-center align-items-center flex-wrap">
                            <!--begin::Stat-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3 card-info">
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                    <span class="svg-icon svg-icon-2 svg-icon-primary me-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <defs>
                                                <style>
                                                    .fa-secondary {
                                                        opacity: .4
                                                    }
                                                </style>
                                            </defs>
                                            <path fill="currentColor" class="fa-primary" d="M224 160V0L384 160H224zM288 368C288 288.5 352.5 224 432 224C511.5 224 576 288.5 576 368C576 447.5 511.5 512 432 512C352.5 512 288 447.5 288 368zM432 464C445.3 464 456 453.3 456 440C456 426.7 445.3 416 432 416C418.7 416 408 426.7 408 440C408 453.3 418.7 464 432 464zM415.1 288V368C415.1 376.8 423.2 384 431.1 384C440.8 384 447.1 376.8 447.1 368V288C447.1 279.2 440.8 272 431.1 272C423.2 272 415.1 279.2 415.1 288z"></path>
                                            <path fill="currentColor" class="fa-secondary" d="M0 64C0 28.65 28.65 0 64 0H224V160H384V198.6C310.1 219.5 256 287.4 256 368C256 427.1 285.1 479.3 329.7 511.3C326.6 511.7 323.3 512 320 512H64C28.65 512 0 483.3 0 448V64z"></path>
                                        </svg>
                                    </span>
                                    <div class="fs-2 fw-bolder counted" id="pending" data-kt-countup="true" data-kt-countup-value="1-">0</div>
                                </div>
                                <!--end::Number-->
                                <!--begin::Label-->
                                <div class="fw-bold fs-6 text-gray-400">Pending</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Stat-->
                            <!--begin::Stat-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3 card-info">
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                    <span class="svg-icon svg-icon-2 svg-icon-success me-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <defs>
                                                <style>
                                                    .fa-secondary {
                                                        opacity: .4
                                                    }
                                                </style>
                                            </defs>
                                            <path fill="currentColor" class="fa-primary" d="M224 160V0L384 160H224zM576 368C576 447.5 511.5 512 432 512C352.5 512 288 447.5 288 368C288 288.5 352.5 224 432 224C511.5 224 576 288.5 576 368zM476.7 324.7L416 385.4L387.3 356.7C381.1 350.4 370.9 350.4 364.7 356.7C358.4 362.9 358.4 373.1 364.7 379.3L404.7 419.3C410.9 425.6 421.1 425.6 427.3 419.3L499.3 347.3C505.6 341.1 505.6 330.9 499.3 324.7C493.1 318.4 482.9 318.4 476.7 324.7H476.7z"></path>
                                            <path fill="currentColor" class="fa-secondary" d="M0 64C0 28.65 28.65 0 64 0H224V160H384V198.6C310.1 219.5 256 287.4 256 368C256 427.1 285.1 479.3 329.7 511.3C326.6 511.7 323.3 512 320 512H64C28.65 512 0 483.3 0 448V64z"></path>
                                        </svg>
                                    </span>
                                    <div class="fs-2 fw-bolder counted" id="setuju" data-kt-countup="true" data-kt-countup-value="2">0</div>
                                </div>
                                <!--end::Number-->
                                <!--begin::Label-->
                                <div class="fw-bold fs-6 text-gray-400">Disetujui</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Stat-->
                            <!--begin::Stat-->
                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3 card-info">
                                <!--begin::Number-->
                                <div class="d-flex align-items-center">
                                    <span class="svg-icon svg-icon-2 svg-icon-danger me-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <defs>
                                                <style>
                                                    .fa-secondary {
                                                        opacity: .4
                                                    }
                                                </style>
                                            </defs>
                                            <path fill="currentColor" class="fa-primary" d="M224 160V0L384 160H224zM288 368C288 288.5 352.5 224 432 224C511.5 224 576 288.5 576 368C576 447.5 511.5 512 432 512C352.5 512 288 447.5 288 368zM491.3 331.3C497.6 325.1 497.6 314.9 491.3 308.7C485.1 302.4 474.9 302.4 468.7 308.7L432 345.4L395.3 308.7C389.1 302.4 378.9 302.4 372.7 308.7C366.4 314.9 366.4 325.1 372.7 331.3L409.4 368L372.7 404.7C366.4 410.9 366.4 421.1 372.7 427.3C378.9 433.6 389.1 433.6 395.3 427.3L432 390.6L468.7 427.3C474.9 433.6 485.1 433.6 491.3 427.3C497.6 421.1 497.6 410.9 491.3 404.7L454.6 368L491.3 331.3z"></path>
                                            <path fill="currentColor" class="fa-secondary" d="M0 64C0 28.65 28.65 0 64 0H224V160H384V198.6C310.1 219.5 256 287.4 256 368C256 427.1 285.1 479.3 329.7 511.3C326.6 511.7 323.3 512 320 512H64C28.65 512 0 483.3 0 448V64z"></path>
                                        </svg>
                                    </span>
                                    <div class="fs-2 fw-bolder counted" id="tolak" data-kt-countup="true" data-kt-countup-value="5">0</div>
                                </div>
                                <!--end::Number-->
                                <!--begin::Label-->
                                <div class="fw-bold fs-6 text-gray-400">Ditolak</div>
                                <!--end::Label-->
                            </div>
                            <!--end::Stat-->
                        </div>
                        <div class="text-end">
                            <!--begin::Menu-->
                            <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder position-relative bottom-0 mb-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                            <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Filter</a>
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px text-start" data-kt-menu="true" id="kt_menu_61bc33c4ee0dc">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-dark fw-bolder">Opsi Filter</div>
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
                                        <label class="form-label fw-bold">Status</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div class="position-relative d-flex align-items-center">
                                            <div style="width:100vw;">
                                                <select class="form-select form-select-solid" data-control="select2" data-placeholder="Pilih status">
                                                    <option></option>
                                                    <option value="1">Disetujui</option>
                                                    <option value="2">Ditolak</option>
                                                    <option value="2">Pendin</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="mb-10">
                                        <label class="form-label fw-bold">Range Waktu:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div class="position-relative d-flex align-items-center">
                                            <select class="form-select form-select-solid" data-control="select2" data-placeholder="Pilih range waktu    ">
                                                <option></option>
                                                <option value="1">Hari ini</option>
                                                <option value="2">Kemarin</option>
                                                <option value="2">7 hari terakhir</option>
                                                <option value="2">30 hari terakhir</option>
                                                <option value="2">Bulan ini</option>
                                                <option value="2">Bulan kemarin</option>
                                                <option value="2">Custom range</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end::Input group-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Tampilkan</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Form-->
                            </div>
                            <!--end::Menu 1-->
                            <!--end::Menu-->
                        </div>
                    </div>
                    <!--end::Stats-->
                </div>
                
                <!--end::Wrapper-->
                <div class="btn-group w-100 tab mb-7 flex-wrap">
                    <!--begin::Radio-->
                    <label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-primary tab tablinks active" data-kt-button="true">
                    <!--begin::Input-->
                    <input class="btn-check" id="defaultOpen" type="radio" onclick="openCity(event, 'content-presensi')">
                    <!--end::Input-->
                    Presensi</label>
                    <!--end::Radio-->
                    <!--begin::Radio-->
                    <label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-primary tab tablinks" data-kt-button="true">
                    <!--begin::Input-->
                    <input class="btn-check" type="radio" onclick="openCity(event, 'tukar-shift')">
                    <!--end::Input-->
                    Tukar Shift</label>
                    <label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-primary tab tablinks" data-kt-button="true">
                    <!--begin::Input-->
                    <input class="btn-check" type="radio" onclick="openCity(event, 'reimbursement')">
                    <!--end::Input-->
                    Reimbursement</label>
                    <!--end::Radio-->
                    <label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-primary tab tablinks" data-kt-button="true">
                    <!--begin::Input-->
                    <input class="btn-check" type="radio" onclick="openCity(event, 'lembur')">
                    <!--end::Input-->
                    Lembur</label>
                    <!--end::Radio-->
                    <label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-primary tab tablinks" data-kt-button="true">
                    <!--begin::Input-->
                    <input class="btn-check" type="radio" onclick="openCity(event, 'izin-kerja')">
                    <!--end::Input-->
                    Izin Kerja</label>
                    <!--end::Radio-->
                </div>

                <div id="content-presensi" class="tabcontent mb-7">
                    <div class="card-header d-flex justify-content-between border-0 pb-3 px-0">
                        <div class="d-flex align-items-center position-relative my-1 pe-2">
                            <span class="svg-icon svg-icon-1 position-absolute ms-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
                                </svg>
                            </span>
                            <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid form-control-sm w-200px ps-14" placeholder="Pencarian">
                        </div>
                        <div class="card-toolbar">
                            <div id="delete_presensi" style="display: none;">
                                <div class="col-12">
                                    <button type="button" class="btn btn-sm btn-light-success me-2">
                                    <span class="svg-icon svg-icon-2 me-0">
                                        <i class="fa-duotone fa-check" style="font-size: 18px;"></i>
                                    </span>
                                    Terima</button>
                                    <button type="button" class="btn btn-sm btn-light-danger me-2">
                                    <span class="svg-icon svg-icon-2 me-0">
                                        <i class="fa-duotone fa-trash" style="font-size: 18px;"></i>
                                    </span>
                                    Tolak</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-middle gs-0 gy-4" id="kt_table_presensi">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fw-bolder text-muted bg-light">
                                    <th class="ps-4 w-25px rounded-start">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" name="maincheckbox_presensi" data-kt-check="true" data-kt-check-target="#kt_table_presensi .form-check-input" value="1">
                                        </div>
                                    </th>
                                    <th class="w-50px">No</th>
                                    <th class="min-w-125px text-center">Tanggal</th>
                                    <th class="min-w-125px text-center">Nama</th>
                                    <th class="min-w-125px text-center">Masuk</th>
                                    <th class="min-w-125px text-center">Pulang</th>
                                    <th class="min-w-250px text-center">Jam Masuk - Pulang</th>
                                    <th class="min-w-125px text-center">Terlambat</th>
                                    <th class="min-w-125px text-center">Pulang Cepat</th>
                                    <th class="min-w-125px text-center">Tipe Kerja</th>
                                    <th class="min-w-125px text-center">Status</th>
                                    <th class="min-w-125px text-center">Dokumen</th>
                                    <th class="pe-4 min-w-175px text-end rounded-end">Aksi</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid" style="margin-left: 13px;">
                                            <input class="form-check-input deletebox_presensi" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start flex-column">
                                            <span class="text-dark fw-bolder fs-6">1</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-dark fw-bolder d-block fs-6">2022-08-30</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-dark fw-bolder d-block fs-6">Superadmin</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-dark fw-bolder d-block fs-6">1</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-dark fw-bolder d-block fs-6">2</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-dark fw-bolder d-block fs-6">2022-08-30 - 2022-09-1</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-dark fw-bolder d-block fs-6">1</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-dark fw-bolder d-block fs-6">2</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-dark fw-bolder d-block fs-6">Superadmin</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-light">Status</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-icon btn-light"><i class="fa-duotone fa-file fs-5"></i></a>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="fa-duotone fa-eye fs-5"></i>
                                        </a>
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
                    </div>
                </div>

                <div id="tukar-shift" class="tabcontent mb-7">
                    <div class="card-header d-flex justify-content-between border-0 pb-3 px-0">
                        <div class="d-flex align-items-center position-relative my-1 pe-2">
                            <span class="svg-icon svg-icon-1 position-absolute ms-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
                                </svg>
                            </span>
                            <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid form-control-sm w-200px ps-14" placeholder="Pencarian">
                        </div>
                        <div class="card-toolbar">
                            <div id="delete_tukar_shift_modal" style="display: none;">
                                <div class="col-12">
                                    <button type="button" class="btn btn-sm btn-light-success me-2">
                                    <span class="svg-icon svg-icon-2 me-0">
                                        <i class="fa-duotone fa-check" style="font-size: 18px;"></i>
                                    </span>
                                    Terima</button>
                                    <button type="button" class="btn btn-sm btn-light-danger me-2">
                                    <span class="svg-icon svg-icon-2 me-0">
                                        <i class="fa-duotone fa-trash" style="font-size: 18px;"></i>
                                    </span>
                                    Tolak</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-middle gs-0 gy-4" id="kt_table_tukar_shift_modal">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fw-bolder text-muted bg-light">
                                    <th class="ps-4 w-25px rounded-start">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" name="maincheckbox_tukar_shift_modal" data-kt-check="true" data-kt-check-target="#kt_table_tukar_shift_modal .form-check-input" value="1">
                                        </div>
                                    </th>
                                    <th class="w-50px">No</th>
                                    <th class="min-w-125px text-center">Kode</th>
                                    <th class="min-w-125px text-center">Pemohon</th>
                                    <th class="min-w-125px text-center">Pengganti</th>
                                    <th class="min-w-125px text-center">Penyetuju</th>
                                    <th class="min-w-125px text-center">Status</th>
                                    <th class="pe-4 min-w-150px text-end rounded-end">Aksi</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid" style="margin-left: 13px;">
                                            <input class="form-check-input deletebox_tukar_shift_modal" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start flex-column">
                                            <span class="text-dark fw-bolder fs-6">1</span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-dark fw-bolder d-block fs-6">12345</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-dark fw-bolder d-block fs-6">Superadmin</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-dark fw-bolder d-block fs-6">Superadmin</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-dark fw-bolder d-block fs-6">Superadmin</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-light-success">Berhasil</a>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="fa-duotone fa-eye fs-5"></i>
                                        </a>
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
                    </div>
                </div>

                <div id="reimbursement" class="tabcontent mb-7">
                    <div class="card-header d-flex justify-content-between border-0 pb-3 px-0">
                        <div class="d-flex align-items-center position-relative my-1 pe-2">
                            <span class="svg-icon svg-icon-1 position-absolute ms-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
                                </svg>
                            </span>
                            <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid form-control-sm w-200px ps-14" placeholder="Pencarian">
                        </div>
                        <div class="card-toolbar">
                            <div id="delete_reimbursement" style="display: none;">
                                <div class="col-12">
                                    <button type="button" class="btn btn-sm btn-light-success me-2">
                                    <span class="svg-icon svg-icon-2 me-0">
                                        <i class="fa-duotone fa-check" style="font-size: 18px;"></i>
                                    </span>
                                    Terima</button>
                                    <button type="button" class="btn btn-sm btn-light-danger me-2">
                                    <span class="svg-icon svg-icon-2 me-0">
                                        <i class="fa-duotone fa-trash" style="font-size: 18px;"></i>
                                    </span>
                                    Tolak</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-middle gs-0 gy-4" id="kt_table_reimbursement">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fw-bolder text-muted bg-light">
                                    <th class="ps-4 w-25px rounded-start">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" name="maincheckbox_reimbursement" data-kt-check="true" data-kt-check-target="#kt_table_reimbursement .form-check-input" value="1">
                                        </div>
                                    </th>
                                    <th class="w-50px">No</th>
                                    <th class="min-w-125px text-center">Kode</th>
                                    <th class="min-w-125px text-center">Tanggal</th>
                                    <th class="min-w-125px text-center">Nama</th>
                                    <th class="min-w-125px text-center">Kategori</th>
                                    <th class="min-w-175px text-center">Jumlah Penyetuju</th>
                                    <th class="min-w-125px text-center">Status</th>
                                    <th class="min-w-125px text-center">Dokumen</th>
                                    <th class="pe-4 min-w-150px text-end rounded-end">Aksi</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid" style="margin-left: 13px;">
                                            <input class="form-check-input deletebox_reimbursement" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start flex-column">
                                            <span class="text-dark fw-bolder fs-6">1</span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-dark fw-bolder d-block fs-6">12345</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-dark fw-bolder d-block fs-6">2022-08-30</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-dark fw-bolder d-block fs-6">Superadmin</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-dark fw-bolder d-block fs-6">Nginep Hotel</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-dark fw-bolder d-block fs-6">1</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-light-warning">Menunggu</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-icon btn-sm btn-light"><i class="fa-duotone fa-file fs-5"></i></a>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="fa-duotone fa-eye fs-5"></i>
                                        </a>
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
                    </div>
                </div>

                <div id="lembur" class="tabcontent mb-7">
                    <div class="card-header d-flex justify-content-between border-0 pb-3 px-0">
                        <div class="d-flex align-items-center position-relative my-1 pe-2">
                            <span class="svg-icon svg-icon-1 position-absolute ms-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
                                </svg>
                            </span>
                            <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid form-control-sm w-200px ps-14" placeholder="Pencarian">
                        </div>
                        <div class="card-toolbar">
                            <div id="delete_lembur" style="display: none;">
                                <div class="col-12">
                                    <button type="button" class="btn btn-sm btn-light-success me-2">
                                    <span class="svg-icon svg-icon-2 me-0">
                                        <i class="fa-duotone fa-check" style="font-size: 18px;"></i>
                                    </span>
                                    Terima</button>
                                    <button type="button" class="btn btn-sm btn-light-danger me-2">
                                    <span class="svg-icon svg-icon-2 me-0">
                                        <i class="fa-duotone fa-trash" style="font-size: 18px;"></i>
                                    </span>
                                    Tolak</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-middle gs-0 gy-4" id="kt_table_lembur">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fw-bolder text-muted bg-light">
                                    <th class="ps-4 w-25px rounded-start">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" name="maincheckbox_lembur" data-kt-check="true" data-kt-check-target="#kt_table_lembur .form-check-input" value="1">
                                        </div>
                                    </th>
                                    <th class="w-50px">No</th>
                                    <th class="min-w-125px text-center">Kode</th>
                                    <th class="min-w-150px text-center">Tanggal Lembur</th>
                                    <th class="min-w-125px text-center">Nama</th>
                                    <th class="min-w-125px text-center">Penyetuju</th>
                                    <th class="min-w-175px text-center">Status</th>
                                    <th class="min-w-125px text-center">Dokumen</th>
                                    <th class="pe-4 min-w-150px text-end rounded-end">Aksi</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid" style="margin-left: 13px;">
                                            <input class="form-check-input deletebox_lembur" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start flex-column">
                                            <span class="text-dark fw-bolder fs-6">1</span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-dark fw-bolder d-block fs-6">12345</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-dark fw-bolder d-block fs-6">2022-08-30</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-dark fw-bolder d-block fs-6">Superadmin</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-dark fw-bolder d-block fs-6">Superadmin</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-light-warning">Berhasil</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-icon btn-sm btn-light"><i class="fa-duotone fa-file fs-5"></i></a>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="fa-duotone fa-eye fs-5"></i>
                                        </a>
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
                    </div>
                </div>
                
                <div id="izin-kerja" class="tabcontent mb-7">
                    <div class="card-header d-flex justify-content-between border-0 pb-3 px-0">
                        <div class="d-flex align-items-center position-relative my-1 pe-2">
                            <span class="svg-icon svg-icon-1 position-absolute ms-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
                                </svg>
                            </span>
                            <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid form-control-sm w-200px ps-14" placeholder="Pencarian">
                        </div>
                        <div class="card-toolbar">
                            <div id="delete_izin_kerja" style="display: none;">
                                <div class="col-12">
                                    <button type="button" class="btn btn-sm btn-light-success me-2">
                                    <span class="svg-icon svg-icon-2 me-0">
                                        <i class="fa-duotone fa-check" style="font-size: 18px;"></i>
                                    </span>
                                    Terima</button>
                                    <button type="button" class="btn btn-sm btn-light-danger me-2">
                                    <span class="svg-icon svg-icon-2 me-0">
                                        <i class="fa-duotone fa-trash" style="font-size: 18px;"></i>
                                    </span>
                                    Tolak</button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-middle gs-0 gy-4" id="kt_table_izin_kerja">
                            <!--begin::Table head-->
                            <thead>
                                <tr class="fw-bolder text-muted bg-light">
                                    <th class="ps-4 w-25px rounded-start">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" name="maincheckbox_izin_kerja" data-kt-check="true" data-kt-check-target="#kt_table_izin_kerja .form-check-input" value="1">
                                        </div>
                                    </th>
                                    <th class="w-50px">No</th>
                                    <th class="min-w-125px text-center">Kode</th>
                                    <th class="min-w-150px text-center">Tanggal Izin</th>
                                    <th class="min-w-125px text-center">Nama</th>
                                    <th class="min-w-125px text-center">Kategori</th>
                                    <th class="min-w-175px text-center">Penyetuju</th>
                                    <th class="min-w-125px text-center">Status</th>
                                    <th class="min-w-125px text-center">Dokumen</th>
                                    <th class="pe-4 min-w-150px text-end rounded-end">Aksi</th>
                                </tr>
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid" style="margin-left: 13px;">
                                            <input class="form-check-input deletebox_izin_kerja" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-start flex-column">
                                            <span class="text-dark fw-bolder fs-6">1</span>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-dark fw-bolder d-block fs-6">12345</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-dark fw-bolder d-block fs-6">2022-08-30</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-dark fw-bolder d-block fs-6">Superadmin</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-dark fw-bolder d-block fs-6">Sakit</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="text-dark fw-bolder d-block fs-6">Superadmin</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-sm btn-light-warning">Berhasil</a>
                                    </td>
                                    <td class="text-center">
                                        <a href="#" class="btn btn-icon btn-sm btn-light"><i class="fa-duotone fa-file fs-5"></i></a>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="fa-duotone fa-eye fs-5"></i>
                                        </a>
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
                    </div>
                </div>

            </div>
            <!--end::Modal body-->
            <div class="modal-footer py-5 d-flex justify-content-end align-items-center">
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
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>