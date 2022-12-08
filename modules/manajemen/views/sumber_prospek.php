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
                    <table class="table align-middle gs-0 gy-4" id="kt_table_sumber_prospek">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th class="ps-4 w-25px rounded-start">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" name="maincheckbox" data-kt-check="true" data-kt-check-target="#kt_table_sumber_prospek .form-check-input" value="1">
                                    </div>
                                </th>
                                <th class="w-50px">No</th>
                                <th class="w-100px">Nama</th>
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
                                <td class="text-center">
                                    <span class="text-dark fw-bolder d-block fs-6">BBC News</span>
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
                                <td class="text-center">
                                    <span class="text-dark fw-bolder d-block fs-6">Kompas</span>
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
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid" style="margin-left: 13px;">
                                        <input class="form-check-input deletebox" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-start flex-column">
                                        <span class="text-dark fw-bolder fs-6">3</span>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="text-dark fw-bolder d-block fs-6">IDN Times</span>
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
    <div class="modal-dialog modal-dialog-centered mw-500px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Tambah Sumber Prospek</h2>
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
                <form class="form" action="#" method="post">
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold mb-2">
                            <span class="required">Nama</span>
                        </label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <!--begin::Icon-->
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <i class="fa-duotone fa-input-numeric fs-5"></i>
                            </span>
                            <!--end::Icon-->
                            <input type="text" class="form-control form-control-solid ps-12" value="" placeholder="Masukkan nama" autocomplete="off">
                        </div>
                        <div class="text-danger mx-4 fw-bold"></div>
                    </div>
                    <button type="button" class="btn btn-lg btn-primary" style="width: 100%">Simpan
                        <span class="svg-icon svg-icon-3 ms-1 me-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
                                <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
                            </svg>
                        </span>
                    </button>
                </form>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>