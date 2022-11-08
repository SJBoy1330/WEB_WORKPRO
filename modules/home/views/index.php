<!--begin::Toolbar-->
<div class="toolbar mb-n1 pt-3 mb-lg-n3 pt-lg-6" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap gap-2">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column align-items-start me-3 gap-2">
            <!--begin::Title-->
            <h1 class="d-flex text-dark fw-bolder m-0 fs-3">Dashboard
                <!--begin::Separator-->
                <span class="h-20px border-gray-400 border-start mx-3"></span>
                <!--end::Separator-->
                <!--begin::Description-->
                <small class="text-gray-500 fs-7 fw-bold my-1"></small>
                <!--end::Description-->
            </h1>
            <!--end::Title-->
        </div>
        <!--end::Page title-->
    </div>
    <!--end::Container-->
</div>
<!--end::Toolbar-->
<!--begin::Container-->
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <div class="row g-5 g-lg-10 mb-5" id="pantauan" data-kt-scroll-offset="{default: 100, lg: 200}">
            <!--begin::Col-->
            <div class="col-xl-4 mb-xl-10">
                <!--begin::List Widget 4-->
                <div class="card h-xl-100">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder text-dark">Presensi</span>
                            <span class="text-muted mt-1 fw-bold fs-7">Rekap presensi hari ini</span>
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-5">
                        <!--begin::Item-->
                        <div class="d-flex justify-content-center align-items-sm-center">
                            <div id="piechart"></div>
                        </div>
                        <!--end::Item-->
                        <div class="row">
                            <div class="col-6">
                                <div class="symbol symbol-30px d-flex align-items-center mb-3">
                                    <div class="symbol-label fs-2 fw-bold me-3" style="background-color: #FFB600;"></div>
                                    <span class="text-muted fw-bolder fs-6">Hadir</span>
                                </div>
                                <div class="symbol symbol-30px d-flex align-items-center mb-3">
                                    <div class="symbol-label fs-2 fw-bold me-3" style="background-color: #FFC83E;"></div>
                                    <span class="text-muted fw-bolder fs-6">Izin</span>
                                </div>
                                <div class="symbol symbol-30px d-flex align-items-center mb-3">
                                    <div class="symbol-label fs-2 fw-bold me-3" style="background-color: #FFD56E;"></div>
                                    <span class="text-muted fw-bolder fs-6">Alpha</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="symbol symbol-30px d-flex align-items-center mb-3">
                                    <div class="symbol-label fs-2 fw-bold me-3" style="background-color: #FFE196;"></div>
                                    <span class="text-muted fw-bolder fs-6">Pulang Awal</span>
                                </div>
                                <div class="symbol symbol-30px d-flex align-items-center mb-3">
                                    <div class="symbol-label fs-2 fw-bold me-3" style="background-color: #FDE8B4;"></div>
                                    <span class="text-muted fw-bolder fs-6">Terlambat</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::List Widget 4-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-8 mb-xl-10">
                <!--begin::List Widget 4-->
                <div class="card h-xl-100">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder text-dark">Persetujuan Presensi</span>
                            <span class="text-muted mt-1 fw-bold fs-7">Karyawan menunggu persetujuan presensi</span>
                        </h3>
                    </div>
                    <!--end::Header-->
                    <div class="btn-group w-100 tab mt-5 px-10 tab-presensi">
                        <!--begin::Radio-->
                        <label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-primary tab tablinks active" data-kt-button="true">
                            <!--begin::Input-->
                            <input class="btn-check" id="defaultOpen" type="radio" onclick="openCity(event, 'content-presensi')">
                            <!--end::Input-->
                            Presensi
                        </label>
                        <!--end::Radio-->
                        <!--begin::Radio-->
                        <label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-primary tab tablinks" data-kt-button="true">
                            <!--begin::Input-->
                            <input class="btn-check" type="radio" onclick="openCity(event, 'tukar-shift')">
                            <!--end::Input-->
                            Tukar Shift
                        </label>
                        <label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-primary tab tablinks" data-kt-button="true">
                            <!--begin::Input-->
                            <input class="btn-check" type="radio" onclick="openCity(event, 'reimbursement')">
                            <!--end::Input-->
                            Reimbursement
                        </label>
                        <!--end::Radio-->
                        <label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-primary tab tablinks" data-kt-button="true">
                            <!--begin::Input-->
                            <input class="btn-check" type="radio" onclick="openCity(event, 'lembur')">
                            <!--end::Input-->
                            Lembur
                        </label>
                        <!--end::Radio-->
                        <label class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-primary tab tablinks" data-kt-button="true">
                            <!--begin::Input-->
                            <input class="btn-check" type="radio" onclick="openCity(event, 'izin-kerja')">
                            <!--end::Input-->
                            Izin Kerja
                        </label>
                        <!--end::Radio-->
                    </div>
                    <!--begin::Body-->
                    <div class="card-body" style="overflow-y: scroll; height: 375px;">
                        <!--end::Wrapper-->
                        <div id="content-presensi" class="tabcontent mb-7 pt-0">
                            <div class="card-header border-0 pb-3 px-0">
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
                                    <div id="tab_penjelasan">
                                        <span class="text-muted fw-normal fs-6 me-5"><i class="fa-duotone fa-location-dot text-success fs-3 me-2"></i> Dalam Jangkauan</span>
                                        <span class="text-muted fw-normal fs-6 me-3"><i class="fa-duotone fa-location-dot text-warning fs-3 me-2"></i> Diluar Jangkauan</span>
                                        <button type="button" class="btn btn-icon btn-sm btn-light-success btn-active-primary">
                                            <span class="svg-icon svg-icon-2 me-0">
                                                <i class="fa-duotone fa-file-excel fs-3"></i>
                                            </span>
                                        </button>
                                    </div>
                                    <div id="tab_persetujuan" class="d-none">
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
                                <table class="table align-middle gs-0 gy-4" id="kt_table_content_presensi">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fw-bolder text-muted bg-light">
                                            <th class="ps-4 w-25px rounded-start">
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" name="maincheckbox" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_content_presensi .form-check-input" value="1" />
                                                </div>
                                            </th>
                                            <th class="w-50px">No</th>
                                            <th class="min-w-125px text-center">Nama</th>
                                            <th class="min-w-125px text-center">Tipe Kerja</th>
                                            <th class="min-w-125px text-center">Masuk</th>
                                            <th class="min-w-125px text-center">Pulang</th>
                                            <th class="min-w-125px text-center">Terlambat</th>
                                            <th class="min-w-125px text-center">Pulang Cepat</th>
                                            <th class="pe-4 min-w-125px text-end rounded-end">Aksi</th>
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
                                                <span class="text-dark fw-bolder d-block fs-6">Superadmin</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-dark fw-bolder d-block fs-6">Flat</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-dark fw-bolder d-block fs-6">
                                                    <i class="fa-duotone fa-location-dot text-success fs-3 me-2"></i>09:30
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-dark fw-bolder d-block fs-6">
                                                    <i class="fa-duotone fa-location-dot text-danger fs-3 me-2"></i>16:30
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-danger fw-bolder d-block fs-6">20 menit</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-success fw-bolder d-block fs-6">10 menit</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-icon bg-light-success btn-active-color-primary btn-sm me-1">
                                                    <i class="fa-duotone fa-check fs-5 text-success"></i>
                                                </a>
                                                <a href="#" class="btn btn-icon bg-light-danger btn-active-color-primary btn-sm">
                                                    <i class="fa-duotone fa-trash fs-5 text-danger"></i>
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
                                                <span class="text-dark fw-bolder d-block fs-6">Superadmin 2</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-dark fw-bolder d-block fs-6">Shift</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-dark fw-bolder d-block fs-6">
                                                    <i class="fa-duotone fa-location-dot text-success fs-3 me-2"></i>09:30
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-dark fw-bolder d-block fs-6">
                                                    <i class="fa-duotone fa-location-dot text-danger fs-3 me-2"></i>15:50
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-danger fw-bolder d-block fs-6">30 menit</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-success fw-bolder d-block fs-6">10 menit</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-icon bg-light-success btn-active-color-primary btn-sm me-1">
                                                    <i class="fa-duotone fa-check fs-5 text-success"></i>
                                                </a>
                                                <a href="#" class="btn btn-icon bg-light-danger btn-active-color-primary btn-sm">
                                                    <i class="fa-duotone fa-trash fs-5 text-danger"></i>
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
                                                <span class="text-dark fw-bolder d-block fs-6">Superadmin 2</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-dark fw-bolder d-block fs-6">Shift</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-dark fw-bolder d-block fs-6">
                                                    <i class="fa-duotone fa-location-dot text-success fs-3 me-2"></i>09:30
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-dark fw-bolder d-block fs-6">
                                                    <i class="fa-duotone fa-location-dot text-danger fs-3 me-2"></i>15:50
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-danger fw-bolder d-block fs-6">30 menit</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-success fw-bolder d-block fs-6">10 menit</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-icon bg-light-success btn-active-color-primary btn-sm me-1">
                                                    <i class="fa-duotone fa-check fs-5 text-success"></i>
                                                </a>
                                                <a href="#" class="btn btn-icon bg-light-danger btn-active-color-primary btn-sm">
                                                    <i class="fa-duotone fa-trash fs-5 text-danger"></i>
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
                                                <span class="text-dark fw-bolder d-block fs-6">Superadmin 2</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-dark fw-bolder d-block fs-6">Shift</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-dark fw-bolder d-block fs-6">
                                                    <i class="fa-duotone fa-location-dot text-success fs-3 me-2"></i>09:30
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-dark fw-bolder d-block fs-6">
                                                    <i class="fa-duotone fa-location-dot text-danger fs-3 me-2"></i>15:50
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-danger fw-bolder d-block fs-6">30 menit</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-success fw-bolder d-block fs-6">10 menit</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-icon bg-light-success btn-active-color-primary btn-sm me-1">
                                                    <i class="fa-duotone fa-check fs-5 text-success"></i>
                                                </a>
                                                <a href="#" class="btn btn-icon bg-light-danger btn-active-color-primary btn-sm">
                                                    <i class="fa-duotone fa-trash fs-5 text-danger"></i>
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
                                                <span class="text-dark fw-bolder d-block fs-6">Superadmin 2</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-dark fw-bolder d-block fs-6">Shift</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-dark fw-bolder d-block fs-6">
                                                    <i class="fa-duotone fa-location-dot text-success fs-3 me-2"></i>09:30
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-dark fw-bolder d-block fs-6">
                                                    <i class="fa-duotone fa-location-dot text-danger fs-3 me-2"></i>15:50
                                                </span>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-danger fw-bolder d-block fs-6">30 menit</span>
                                            </td>
                                            <td class="text-center">
                                                <span class="text-success fw-bolder d-block fs-6">10 menit</span>
                                            </td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-icon bg-light-success btn-active-color-primary btn-sm me-1">
                                                    <i class="fa-duotone fa-check fs-5 text-success"></i>
                                                </a>
                                                <a href="#" class="btn btn-icon bg-light-danger btn-active-color-primary btn-sm">
                                                    <i class="fa-duotone fa-trash fs-5 text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                        </div>

                        <div id="tukar-shift" class="tabcontent mb-7">
                            <div class="card-header border-0 pb-3 px-0">
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
                                    <div id="delete_tukar_shift" style="display: none;">
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
                                <table class="table align-middle gs-0 gy-4" id="kt_table_tukar_shift">
                                    <!--begin::Table head-->
                                    <thead>
                                        <tr class="fw-bolder text-muted bg-light">
                                            <th class="ps-4 w-25px rounded-start">
                                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" name="maincheckbox_tukar_shift" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_tukar_shift .form-check-input" value="1" />
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
                                                    <input class="form-check-input deletebox_tukar_shift" type="checkbox" value="1" />
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
                                                <a href="#" class="btn btn-icon bg-light-success btn-active-color-primary btn-sm me-1">
                                                    <i class="fa-duotone fa-check fs-5 text-success"></i>
                                                </a>
                                                <a href="#" class="btn btn-icon bg-light-danger btn-active-color-primary btn-sm">
                                                    <i class="fa-duotone fa-trash fs-5 text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid" style="margin-left: 13px;">
                                                    <input class="form-check-input deletebox_tukar_shift" type="checkbox" value="1" />
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
                                                <a href="#" class="btn btn-icon bg-light-success btn-active-color-primary btn-sm me-1">
                                                    <i class="fa-duotone fa-check fs-5 text-success"></i>
                                                </a>
                                                <a href="#" class="btn btn-icon bg-light-danger btn-active-color-primary btn-sm">
                                                    <i class="fa-duotone fa-trash fs-5 text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid" style="margin-left: 13px;">
                                                    <input class="form-check-input deletebox_tukar_shift" type="checkbox" value="1" />
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
                                                <a href="#" class="btn btn-icon bg-light-success btn-active-color-primary btn-sm me-1">
                                                    <i class="fa-duotone fa-check fs-5 text-success"></i>
                                                </a>
                                                <a href="#" class="btn btn-icon bg-light-danger btn-active-color-primary btn-sm">
                                                    <i class="fa-duotone fa-trash fs-5 text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid" style="margin-left: 13px;">
                                                    <input class="form-check-input deletebox_tukar_shift" type="checkbox" value="1" />
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
                                                <a href="#" class="btn btn-icon bg-light-success btn-active-color-primary btn-sm me-1">
                                                    <i class="fa-duotone fa-check fs-5 text-success"></i>
                                                </a>
                                                <a href="#" class="btn btn-icon bg-light-danger btn-active-color-primary btn-sm">
                                                    <i class="fa-duotone fa-trash fs-5 text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-sm form-check-custom form-check-solid" style="margin-left: 13px;">
                                                    <input class="form-check-input deletebox_tukar_shift" type="checkbox" value="1" />
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
                                                <a href="#" class="btn btn-icon bg-light-success btn-active-color-primary btn-sm me-1">
                                                    <i class="fa-duotone fa-check fs-5 text-success"></i>
                                                </a>
                                                <a href="#" class="btn btn-icon bg-light-danger btn-active-color-primary btn-sm">
                                                    <i class="fa-duotone fa-trash fs-5 text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                        </div>

                        <div id="reimbursement" class="tabcontent mb-7">
                            <div class="card-header border-0 pb-3 px-0">
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
                                                <input class="form-check-input" name="maincheckbox_reimbursement" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_reimbursement .form-check-input" value="1" />
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
                                                <span class="text-dark fw-bolder d-block fs-6">5 Nov 2022</span>
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
                                                <a href="#" class="btn btn-icon bg-light-success btn-active-color-primary btn-sm me-1">
                                                    <i class="fa-duotone fa-check fs-5 text-success"></i>
                                                </a>
                                                <a href="#" class="btn btn-icon bg-light-danger btn-active-color-primary btn-sm">
                                                    <i class="fa-duotone fa-trash fs-5 text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
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
                                                <span class="text-dark fw-bolder d-block fs-6">5 Nov 2022</span>
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
                                                <a href="#" class="btn btn-icon bg-light-success btn-active-color-primary btn-sm me-1">
                                                    <i class="fa-duotone fa-check fs-5 text-success"></i>
                                                </a>
                                                <a href="#" class="btn btn-icon bg-light-danger btn-active-color-primary btn-sm">
                                                    <i class="fa-duotone fa-trash fs-5 text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
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
                                                <span class="text-dark fw-bolder d-block fs-6">5 Nov 2022</span>
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
                                                <a href="#" class="btn btn-icon bg-light-success btn-active-color-primary btn-sm me-1">
                                                    <i class="fa-duotone fa-check fs-5 text-success"></i>
                                                </a>
                                                <a href="#" class="btn btn-icon bg-light-danger btn-active-color-primary btn-sm">
                                                    <i class="fa-duotone fa-trash fs-5 text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
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
                                                <span class="text-dark fw-bolder d-block fs-6">5 Nov 2022</span>
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
                                                <a href="#" class="btn btn-icon bg-light-success btn-active-color-primary btn-sm me-1">
                                                    <i class="fa-duotone fa-check fs-5 text-success"></i>
                                                </a>
                                                <a href="#" class="btn btn-icon bg-light-danger btn-active-color-primary btn-sm">
                                                    <i class="fa-duotone fa-trash fs-5 text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
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
                                                <span class="text-dark fw-bolder d-block fs-6">5 Nov 2022</span>
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
                                                <a href="#" class="btn btn-icon bg-light-success btn-active-color-primary btn-sm me-1">
                                                    <i class="fa-duotone fa-check fs-5 text-success"></i>
                                                </a>
                                                <a href="#" class="btn btn-icon bg-light-danger btn-active-color-primary btn-sm">
                                                    <i class="fa-duotone fa-trash fs-5 text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                        </div>

                        <div id="lembur" class="tabcontent mb-7">
                            <div class="card-header border-0 pb-3 px-0">
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
                                                <input class="form-check-input" name="maincheckbox_lembur" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_lembur .form-check-input" value="1" />
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
                                                <span class="text-dark fw-bolder d-block fs-6">5 Nov 2022</span>
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
                                                <a href="#" class="btn btn-icon bg-light-success btn-active-color-primary btn-sm me-1">
                                                    <i class="fa-duotone fa-check fs-5 text-success"></i>
                                                </a>
                                                <a href="#" class="btn btn-icon bg-light-danger btn-active-color-primary btn-sm">
                                                    <i class="fa-duotone fa-trash fs-5 text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
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
                                                <span class="text-dark fw-bolder d-block fs-6">5 Nov 2022</span>
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
                                                <a href="#" class="btn btn-icon bg-light-success btn-active-color-primary btn-sm me-1">
                                                    <i class="fa-duotone fa-check fs-5 text-success"></i>
                                                </a>
                                                <a href="#" class="btn btn-icon bg-light-danger btn-active-color-primary btn-sm">
                                                    <i class="fa-duotone fa-trash fs-5 text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
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
                                                <span class="text-dark fw-bolder d-block fs-6">5 Nov 2022</span>
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
                                                <a href="#" class="btn btn-icon bg-light-success btn-active-color-primary btn-sm me-1">
                                                    <i class="fa-duotone fa-check fs-5 text-success"></i>
                                                </a>
                                                <a href="#" class="btn btn-icon bg-light-danger btn-active-color-primary btn-sm">
                                                    <i class="fa-duotone fa-trash fs-5 text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
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
                                                <span class="text-dark fw-bolder d-block fs-6">5 Nov 2022</span>
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
                                                <a href="#" class="btn btn-icon bg-light-success btn-active-color-primary btn-sm me-1">
                                                    <i class="fa-duotone fa-check fs-5 text-success"></i>
                                                </a>
                                                <a href="#" class="btn btn-icon bg-light-danger btn-active-color-primary btn-sm">
                                                    <i class="fa-duotone fa-trash fs-5 text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
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
                                                <span class="text-dark fw-bolder d-block fs-6">5 Nov 2022</span>
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
                                                <a href="#" class="btn btn-icon bg-light-success btn-active-color-primary btn-sm me-1">
                                                    <i class="fa-duotone fa-check fs-5 text-success"></i>
                                                </a>
                                                <a href="#" class="btn btn-icon bg-light-danger btn-active-color-primary btn-sm">
                                                    <i class="fa-duotone fa-trash fs-5 text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                        </div>

                        <div id="izin-kerja" class="tabcontent mb-7">
                            <div class="card-header border-0 pb-3 px-0">
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
                                                <input class="form-check-input" name="maincheckbox_izin_kerja" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_izin_kerja .form-check-input" value="1" />
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
                                                <span class="text-dark fw-bolder d-block fs-6">5 Nov 2022</span>
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
                                                <a href="#" class="btn btn-icon bg-light-success btn-active-color-primary btn-sm me-1">
                                                    <i class="fa-duotone fa-check fs-5 text-success"></i>
                                                </a>
                                                <a href="#" class="btn btn-icon bg-light-danger btn-active-color-primary btn-sm">
                                                    <i class="fa-duotone fa-trash fs-5 text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
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
                                                <span class="text-dark fw-bolder d-block fs-6">5 Nov 2022</span>
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
                                                <a href="#" class="btn btn-icon bg-light-success btn-active-color-primary btn-sm me-1">
                                                    <i class="fa-duotone fa-check fs-5 text-success"></i>
                                                </a>
                                                <a href="#" class="btn btn-icon bg-light-danger btn-active-color-primary btn-sm">
                                                    <i class="fa-duotone fa-trash fs-5 text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
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
                                                <span class="text-dark fw-bolder d-block fs-6">5 Nov 2022</span>
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
                                                <a href="#" class="btn btn-icon bg-light-success btn-active-color-primary btn-sm me-1">
                                                    <i class="fa-duotone fa-check fs-5 text-success"></i>
                                                </a>
                                                <a href="#" class="btn btn-icon bg-light-danger btn-active-color-primary btn-sm">
                                                    <i class="fa-duotone fa-trash fs-5 text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
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
                                                <span class="text-dark fw-bolder d-block fs-6">5 Nov 2022</span>
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
                                                <a href="#" class="btn btn-icon bg-light-success btn-active-color-primary btn-sm me-1">
                                                    <i class="fa-duotone fa-check fs-5 text-success"></i>
                                                </a>
                                                <a href="#" class="btn btn-icon bg-light-danger btn-active-color-primary btn-sm">
                                                    <i class="fa-duotone fa-trash fs-5 text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
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
                                                <span class="text-dark fw-bolder d-block fs-6">5 Nov 2022</span>
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
                                                <a href="#" class="btn btn-icon bg-light-success btn-active-color-primary btn-sm me-1">
                                                    <i class="fa-duotone fa-check fs-5 text-success"></i>
                                                </a>
                                                <a href="#" class="btn btn-icon bg-light-danger btn-active-color-primary btn-sm">
                                                    <i class="fa-duotone fa-trash fs-5 text-danger"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--end::Body-->
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
                <!--end::List Widget 4-->
            </div>
            <!--end::Col-->
        </div>
        <div class="row g-5 g-lg-10 mb-5" id="karyawan" data-kt-scroll-offset="{default: 100, lg: 150}">
            <!--begin::Col-->
            <div class="col-xl-12 mb-xl-10">
                <!--begin::List Widget 4-->
                <div class="card" style="height: 370px;">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder text-dark">Daftar Karyawan</span>
                            <span class="text-muted mt-1 fw-bold fs-7">Daftar karyawan belum presensi</span>
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-5" style="overflow-y: scroll; height: 175px;">
                        <div class="d-flex align-items-sm-center mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <img src="assets/media/avatars/150-1.jpg" class="align-self-center" alt="">
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap" style="width: 100px;">
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Superadmin</a>
                                    <span class="text-muted fw-bold d-block fs-7">HRD</span>
                                </div>
                                <a class="btn btn-sm btn-icon btn-light w-40px h-40px" data-bs-toggle="modal" href="#modalTambah" role="button">
                                    <span class="svg-icon svg-icon-2">
                                        <i class="fa-duotone fa-plus fs-3"></i>
                                    </span>
                                </a>
                            </div>
                            <!--end::Section-->
                        </div>
                        <div class="d-flex align-items-sm-center mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <img src="assets/media/avatars/150-2.jpg" class="align-self-center" alt="">
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap" style="width: 100px;">
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Eka Dharmawan Rasiawan</a>
                                    <span class="text-muted fw-bold d-block fs-7">CEO</span>
                                </div>
                                <a class="btn btn-sm btn-icon btn-light w-40px h-40px" data-bs-toggle="modal" href="#modalTambah" role="button">
                                    <span class="svg-icon svg-icon-2">
                                        <i class="fa-duotone fa-plus fs-3"></i>
                                    </span>
                                </a>
                            </div>
                            <!--end::Section-->
                        </div>
                        <div class="d-flex align-items-sm-center mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <img src="assets/media/avatars/150-3.jpg" class="align-self-center" alt="">
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap" style="width: 100px;">
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Rinaldi Usman</a>
                                    <span class="text-muted fw-bold d-block fs-7">CTO</span>
                                </div>
                                <a class="btn btn-sm btn-icon btn-light w-40px h-40px" data-bs-toggle="modal" href="#modalTambah" role="button">
                                    <span class="svg-icon svg-icon-2">
                                        <i class="fa-duotone fa-plus fs-3"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-sm-center mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <img src="assets/media/avatars/150-4.jpg" class="align-self-center" alt="">
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap" style="width: 100px;">
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Reza Prasetio</a>
                                    <span class="text-muted fw-bold d-block fs-7">VP Operation</span>
                                </div>
                                <a class="btn btn-sm btn-icon btn-light w-40px h-40px" data-bs-toggle="modal" href="#modalTambah" role="button">
                                    <span class="svg-icon svg-icon-2">
                                        <i class="fa-duotone fa-plus fs-3"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-sm-center mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <img src="assets/media/avatars/150-5.jpg" class="align-self-center" alt="">
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap" style="width: 100px;">
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Santo Romadhoni</a>
                                    <span class="text-muted fw-bold d-block fs-7">Senior Developer</span>
                                </div>
                                <a class="btn btn-sm btn-icon btn-light w-40px h-40px" data-bs-toggle="modal" href="#modalTambah" role="button">
                                    <span class="svg-icon svg-icon-2">
                                        <i class="fa-duotone fa-plus fs-3"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-sm-center mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <img src="assets/media/avatars/150-5.jpg" class="align-self-center" alt="">
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap" style="width: 100px;">
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Sidatata Al Jennar</a>
                                    <span class="text-muted fw-bold d-block fs-7">Senior Developer</span>
                                </div>
                                <a class="btn btn-sm btn-icon btn-light w-40px h-40px" data-bs-toggle="modal" href="#modalTambah" role="button">
                                    <span class="svg-icon svg-icon-2">
                                        <i class="fa-duotone fa-plus fs-3"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-sm-center mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <img src="assets/media/avatars/150-6.jpg" class="align-self-center" alt="">
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap" style="width: 100px;">
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Sidatata Al Jennar</a>
                                    <span class="text-muted fw-bold d-block fs-7">Senior Developer</span>
                                </div>
                                <a class="btn btn-sm btn-icon btn-light w-40px h-40px" data-bs-toggle="modal" href="#modalTambah" role="button">
                                    <span class="svg-icon svg-icon-2">
                                        <i class="fa-duotone fa-plus fs-3"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex align-items-sm-center mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <img src="assets/media/avatars/150-7.jpg" class="align-self-center" alt="">
                            </div>
                            <!--end::Symbol-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap" style="width: 100px;">
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Saka Dana Asmara</a>
                                    <span class="text-muted fw-bold d-block fs-7">UI Designer</span>
                                </div>
                                <a class="btn btn-sm btn-icon btn-light w-40px h-40px" data-bs-toggle="modal" href="#modalTambah" role="button">
                                    <span class="svg-icon svg-icon-2">
                                        <i class="fa-duotone fa-plus fs-3"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::List Widget 4-->
            </div>
            <!--end::Col-->
        </div>
        <div class="row g-5 g-lg-10 mb-5" id="kalender" data-kt-scroll-offset="{default: 100, lg: 150}">
            <div class="col-12">
                <!--begin::List Widget 4-->
                <div class="card">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder text-dark">Hari Libur</span>
                            <span class="text-muted mt-1 fw-bold fs-7">Hari Libur</span>
                        </h3>
                        <div>
                            <a class="btn btn-sm btn-light" data-bs-toggle="modal" href="#modalTambahLibur" role="button"><i class="fa fa-duotone fa-plus me-2"></i>Tambah</a>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body d-flex pt-5">
                        <div class="col-xl-7 pe-xl-7">
                            <div id="kt_docs_fullcalendar_basic"></div>
                        </div>
                        <div class="col-xl-5 ps-xl-7">
                            <h3 class="card-title d-flex align-items-start flex-column flex-wrap mb-3">
                                <span class="card-label fw-bolder text-dark fs-1">Keterangan</span>
                            </h3>
                            <div class="card shadow-sm mb-4">
                                <div class="card-body p-6 d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <i class="fa-duotone fa-memo-circle-info fs-1"></i>
                                        </div>
                                        <div class="ms-2">
                                            <h3 class="mb-0">Hari libur nasional</h3>
                                            <span class="text-muted mt-0 mb-0 fw-bold fs-7">01 November 2022</span>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-icon bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="fa-duotone fa-pen fs-5"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon bg-light btn-active-color-primary btn-sm">
                                            <i class="fa-duotone fa-trash fs-5"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow-sm mb-4">
                                <div class="card-body p-6 d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <i class="fa-duotone fa-memo-circle-info fs-1"></i>
                                        </div>
                                        <div class="ms-2">
                                            <h3 class="mb-0">Hari libur nasional</h3>
                                            <span class="text-muted mt-0 mb-0 fw-bold fs-7">02 November 2022</span>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-icon bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="fa-duotone fa-pen fs-5"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon bg-light btn-active-color-primary btn-sm">
                                            <i class="fa-duotone fa-trash fs-5"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card shadow-sm mb-4">
                                <div class="card-body p-6 d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <div class="me-2">
                                            <i class="fa-duotone fa-memo-circle-info fs-1"></i>
                                        </div>
                                        <div class="ms-2">
                                            <h3 class="mb-0">Hari libur nasional</h3>
                                            <span class="text-muted mt-0 mb-0 fw-bold fs-7">02 November 2022</span>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-icon bg-light btn-active-color-primary btn-sm me-1">
                                            <i class="fa-duotone fa-pen fs-5"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon bg-light btn-active-color-primary btn-sm">
                                            <i class="fa-duotone fa-trash fs-5"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::List Widget 4-->
            </div>
        </div>
    </div>
    <!--end::Post-->
</div>
<!--end::Container-->

<!-- Modal Tambah -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Kirim Notifikasi</h2>
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
                    <div class="col-12 pe-3">
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
                            <input type="text" name="judul" class="form-control form-control-solid ps-12" value="" placeholder="Masukkan judul" aria-placeholder="">
                        </div>
                    </div>

                    <div class="col-12 pe-3">
                        <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fw-bold">Keterangan</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <div>
                                <!-- <select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih karyawan">
                                    <option></option>
                                    <option value="1">Superadmin</option>
                                    <option value="2">Eka Dharma Rasiawan</option>
                                    <option value="2">Reza Prasetio</option>
                                    <option value="2">Rinaldi Usman</option>
                                </select> -->


                                <textarea class="form-control form-control-solid" id="" cols="10" rows="10" placeholder="Masukkan keterangan"></textarea>
                            </div>
                            <!--end::Input-->
                        </div>
                    </div>
                </div>
                <div class="fv-row mb-5">
                    <textarea id="kt_docs_tinymce_plugins" name="kt_docs_tinymce_plugins" class="tox-target">
                        <h1>Quick and Simple TinyMCE 5 Integration</h1>
                        <p>Here goes the&nbsp;<a href="#">Minitial content of the editor</a>. Lorem Ipsum is simply dummy text of the&nbsp;<em>printing and typesetting</em>&nbsp;industry.</p>
                        <blockquote>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</blockquote>
                        <h3 style="text-align: right;">Flexible &amp; Powerful</h3>
                        <p style="text-align: right;"><strong>Lorem Ipsum has been the industry's</strong>&nbsp;standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
                        <ul>
                            <li>List item 1</li>
                            <li>List item 2</li>
                            <li>List item 3</li>
                            <li>List item 4</li>
                        </ul>
                    </textarea>
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

<!-- Modal Tambah Libur -->
<div class="modal fade" id="modalTambahLibur" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Tambah Hari Libur</h2>
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
                <div class="fv-row d-flex mb-5">
                    <div class="col-6 pe-3">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold mb-2" for="judul">
                            <span class="required">Keterangan</span>
                        </label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <!--begin::Icon-->
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <i class="fa-duotone fa-h1 fs-5"></i>
                            </span>
                            <!--end::Icon-->
                            <input type="text" name="judul" class="form-control form-control-solid ps-12" value="" placeholder="Masukkan keterangan" aria-placeholder="">
                        </div>
                    </div>

                    <div class="col-6 ps-3">
                        <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fw-bold">Tanggal</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <div class="position-relative d-flex align-items-center">
                                <input class="form-control form-control-solid" placeholder="Masukkan tanggal" id="kt_datepicker_1" />
                            </div>
                            <!--end::Input-->
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-lg btn-primary" style="width: 100%">Tambah
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