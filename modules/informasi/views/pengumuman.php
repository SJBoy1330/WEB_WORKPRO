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
                <div class="me-2">
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
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Status</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih status" data-dropdown-parent="#kt_menu_61bc33c4ee0dc" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Aktif</option>
                                            <option value="2">Tidak Aktif</option>
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
                    <table class="table align-middle gs-0 gy-4" id="kt_table_pengumuman">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th class="ps-4 w-25px rounded-start">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" name="maincheckbox" data-kt-check="true" data-kt-check-target="#kt_table_pengumuman .form-check-input" value="1">
                                    </div>
                                </th>
                                <th class="w-50px">No</th>
                                <th class="w-175px">Tanggal</th>
                                <th class="min-w-125px">Judul</th>
                                <th class="min-w-150px text-center">Dibuat Oleh</th>
                                <th class="min-w-125px text-center">Status</th>
                                <th class="min-w-100px text-center">Dokumen</th>
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
                                    <span class="text-dark fw-bolder d-block fs-6">2020-08-30</span>
                                </td>
                                <td>
                                    <span class="text-dark fw-bolder d-block fs-6">Judul 1</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-dark fw-bolder d-block fs-6">Superadmin</span>
                                </td>
                                <td class="text-center">
                                    <a href="" class="btn btn-sm btn-light-success">Aktif</a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-icon btn-light"><i class="fa-duotone fa-file fs-3"></i></a>
                                </td>
                                <td class="text-end">
                                    <a class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-toggle="modal" href="#modalTambah" role="button">
                                        <i class="fa-duotone fa-pencil fs-5"></i>
                                    </a>
                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                        <i class="fa-duotone fa-trash fs-5"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid" style="margin-left: 13px;">
                                        <input class="form-check-input deletebox" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-start flex-column">
                                        <span class="text-dark fw-bolder fs-6">2</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-dark fw-bolder d-block fs-6">2020-08-30</span>
                                </td>
                                <td>
                                    <span class="text-dark fw-bolder d-block fs-6">Judul 2</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-dark fw-bolder d-block fs-6">Superadmin 2</span>
                                </td>
                                <td class="text-center">
                                    <a href="" class="btn btn-sm btn-light-danger">Tidak Aktif</a>
                                </td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-sm btn-icon btn-light"><i class="fa-duotone fa-file fs-3"></i></a>
                                </td>
                                <td class="text-end">
                                    <a class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" data-bs-toggle="modal" href="#modalTambah" role="button">
                                        <i class="fa-duotone fa-pencil fs-5"></i>
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
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">??</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">??</a>
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
    <div class="modal-dialog modal-dialog-centered mw-750px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Tambah Pengumuman</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                        </svg>
                    </span>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body pb-lg-10 px-lg-10">
                <form class="form" action="#" method="post">
                    <div class="row">
                        <div class="col-2">
                            <div class="fv-row mb-5">
                                <div class="container me-3">
                                    <div class="sub-container d-flex justify-content-center align-items-center mb-5">
                                        <button class="btn btn-light btn-hover-scale" style="width: 60px; height: 60px;">
                                            <i class="fa-duotone fa-text d-flex justify-content-center align-items-center fs-1 pe-0"></i>
                                        </button> 
                                    </div> 
                                    <div class="sub-container d-flex justify-content-center align-items-center mb-5">
                                        <button class="btn btn-light btn-hover-scale" style="width: 60px; height: 60px;">
                                            <i class="fa-duotone fa-images d-flex justify-content-center align-items-center fs-1 pe-0"></i>
                                        </button> 
                                    </div> 
                                    <div class="sub-container d-flex justify-content-center align-items-center">
                                        <button class="btn btn-light btn-hover-scale" style="width: 60px; height: 60px;">
                                            <i class="fa-duotone fa-link d-flex justify-content-center align-items-center fs-1 pe-0"></i>
                                        </button> 
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="fv-row mb-5">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold mb-2" for="judul">
                                    <span class="required">Judul</span>
                                </label>
                                <!--end::Label-->
                                <div class="position-relative d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                        <i class="fa-duotone fa-h1 fs-5"></i>
                                    </span>
                                    <!--end::Icon-->
                                    <input type="text" name="judul" class="form-control form-control-solid ps-12" value="" placeholder="Masukkan judul" autocomplete="off">
                                </div>
                            </div>
                            <div class="fv-row mb-5">
                                <textarea name="kt_docs_ckeditor_classic" id="kt_docs_ckeditor_classic"></textarea>
                            </div>
                            <div class="fv-row mb-5">
                                <!--begin::Dropzone-->
                                <div class="dropzone" id="kt_dropzonejs_example_1">
                                    <!--begin::Message-->
                                    <div class="dz-message needsclick">
                                        <!--begin::Icon-->
                                        <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                        <!--end::Icon-->

                                        <!--begin::Info-->
                                        <div class="ms-4">
                                            <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                            <span class="fs-7 fw-bold text-gray-400">Upload up to 10 files</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                </div>
                                <!--end::Dropzone-->
                            </div>
                            <div class="fv-row mb-5">
                                <!--begin::Label-->
                                <label class="fs-6 fw-bold mb-2" for="link">
                                    <span class="required">Link</span>
                                </label>
                                <!--end::Label-->
                                <div class="position-relative d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                        <i class="fa-duotone fa-link fs-5"></i>
                                    </span>
                                    <!--end::Icon-->
                                    <input type="text" name="link" class="form-control form-control-solid ps-12" value="" placeholder="Masukkan link" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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