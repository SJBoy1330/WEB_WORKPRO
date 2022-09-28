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
                        <button class="btn btn-sm btn-flex btn-primary btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Simpan</button>
                    </div>
                    <button type="button" class="btn btn-sm btn-light-danger me-2 " id="deleteall" style="display: none;">
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
                    <table class="table align-middle gs-0 gy-4" id="kt_table_kategori">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th class="ps-4 w-25px rounded-start">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" name="maincheckbox" data-kt-check="true" data-kt-check-target="#kt_table_kategori .form-check-input" value="1">
                                    </div>
                                </th>
                                <th class="w-50px">No</th>
                                <th class="min-w-125px">Nama Role</th>
                                <th class="min-w-125px text-center">Baca</th>
                                <th class="min-w-125px text-center">Tambah</th>
                                <th class="min-w-125px text-center">Ubah</th>
                                <th class="min-w-125px text-center">Hapus</th>
                                <th class="min-w-125px text-center">Cetak</th>
                                <th class="pe-4 min-w-100px text-center rounded-end">Persetujuan</th>
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
                                    <span class="text-dark fw-bolder d-block fs-6">Superadmin</span>
                                </td>
                                <td class="text-center">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
                                <td class="text-center">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
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
                                    <span class="text-dark fw-bolder d-block fs-6">CEO</span>
                                </td>
                                <td class="text-center">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
                                <td class="text-center">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
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
                                <td>
                                    <span class="text-dark fw-bolder d-block fs-6">CTO</span>
                                </td>
                                <td class="text-center">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
                                <td class="text-center">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
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
                                        <span class="text-dark fw-bolder fs-6">4</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-dark fw-bolder d-block fs-6">Projek Manager</span>
                                </td>
                                <td class="text-center">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
                                <td class="text-center">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
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
                                        <span class="text-dark fw-bolder fs-6">5</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-dark fw-bolder d-block fs-6">Designer</span>
                                </td>
                                <td class="text-center">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
                                <td class="text-center">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
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
                                        <span class="text-dark fw-bolder fs-6">6</span>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-dark fw-bolder d-block fs-6">Programmer</span>
                                </td>
                                <td class="text-center">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
                                <td class="text-center">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="form-check form-check-custom form-check-solid justify-content-center">
                                        <input class="form-check-input me-3" type="checkbox" value="1" />
                                    </div>
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