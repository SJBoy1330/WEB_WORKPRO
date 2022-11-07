<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Tables Widget 12-->
        <div class="card mb-5 mb-xl-8">
            <div class="card-header">
                <h3 class="card-title"></h3>
                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-light btn-active-primary me-2" data-bs-toggle="modal" data-bs-target="#modalTambah">
                        <span class="svg-icon svg-icon-2 me-0">
                            <i class="fa-duotone fa-rotate fs-3"></i>
                        </span>
                        Sinkronkan Google Kalender
                    </button>
                    <button type="button" class="btn btn-sm btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">
                        <span class="svg-icon svg-icon-2 me-0">
                            <i class="fa-duotone fa-plus fs-3"></i>
                        </span>
                        Tambah
                    </button>
                </div>
            </div>
            <!--begin::Body-->
            <div class="card-body py-3">
                <div class="row">
                    <div class="col-lg-6">
                        <div id="kt_docs_fullcalendar_basic"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-header border-0">
                            <h2 class="mt-3 fw-bolder text-dark">Keterangan</h2>
                            <div class="card-toolbar">
                            </div>
                        </div>
                        <div class="card-body pt-0" id="content_hari_libur"><div class="d-flex align-items-center bg-light-dark bg-hover-light-danger rounded p-5 mb-7">
                                <span class="svg-icon me-5">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <defs>
                                                <style>
                                                    .fa-secondary {
                                                        opacity: .4
                                                    }
                                                </style>
                                            </defs>
                                            <path fill="currentColor" class="fa-primary" d="M96 32C96 14.33 110.3 0 128 0C145.7 0 160 14.33 160 32V64H288V32C288 14.33 302.3 0 320 0C337.7 0 352 14.33 352 32V64H400C426.5 64 448 85.49 448 112V192H0V112C0 85.49 21.49 64 48 64H96V32z"></path>
                                            <path fill="currentColor" class="fa-secondary" d="M448 464C448 490.5 426.5 512 400 512H48C21.49 512 0 490.5 0 464V192H448V464zM80 256C71.16 256 64 263.2 64 272V368C64 376.8 71.16 384 80 384H176C184.8 384 192 376.8 192 368V272C192 263.2 184.8 256 176 256H80z"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="fw-bolder text-gray-800 text-hover-mayoo fs-6">Lorem ipsum</a>
                                    <span class="text-muted fw-bold d-block">02 November 2022</span>
                                </div>
                                <span class="fw-bolder text-secondary py-1">
                                    <div class="d-flex justify-content-center">
                                        <a href="http://45.64.97.26/mayo-manager/hari-libur/edit/89" title="Edit data" class="btn btn-icon text-hover-dark" data-toggle="tooltip" data-placement="bottom">
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <defs>
                                                        <style>
                                                            .fa-secondary {
                                                                opacity: .4
                                                            }
                                                        </style>
                                                    </defs>
                                                    <path fill="currentColor" class="fa-primary" d="M406.1 16.02C424.8-2.736 455.2-2.742 473.9 16.01L495.8 37.88C514.7 56.77 514.5 87.43 495.5 106.1L455.7 145.1L366.4 55.74L406.1 16.02zM432.8 167.5L287.6 309.6C280.7 316.4 272.3 321.5 263.1 324.6L191.6 348.5C182.1 351.4 173.5 349.1 167 342.7C160.6 336.3 158.4 326.8 161.2 318.1L185 246.8C188.1 237.4 193.4 228.8 200.5 221.8L343.7 78.37L432.8 167.5z"></path>
                                                    <path fill="currentColor" class="fa-secondary" d="M256 8C286.1 8 314.1 13.37 341.7 23.19L303.6 61.7C288.3 57.97 272.4 56 256 56C145.5 56 56 145.5 56 256C56 366.5 145.5 456 256 456C269.3 456 280 466.7 280 480C280 493.3 269.3 504 256 504C119 504 8 392.1 8 256C8 119 119 8 256 8H256zM456 256C456 239.1 454.1 224.3 450.5 209.4L489 170.9C498.7 197.4 504 226.1 504 256C504 339.9 435.9 408 352 408C338.9 408 326.2 406.3 314 403.2C301.2 399.9 293.5 386.8 296.8 373.1C300.1 361.1 313.1 353.4 325.1 356.7C334.3 358.9 342.1 360 352 360C409.4 360 456 313.4 456 256L456 256z"></path>
                                                </svg>
                                            </span>
                                        </a>
                                        <a href="#" title="Hapus data" data-hari-libur-id="89" data-hari-libur-nama="Lorem ipsum" class="delete_hari_libur btn btn-icon btn-active-color-danger" data-toggle="tooltip" data-placement="bottom">
                                            <span class="svg-icon svg-icon-2">
                                                <span class="svg-icon svg-icon-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                        <defs>
                                                            <style>
                                                                .fa-secondary {
                                                                    opacity: .4
                                                                }
                                                            </style>
                                                        </defs>
                                                        <path fill="currentColor" class="fa-primary" d="M284.2 0C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2z"></path>
                                                        <path fill="currentColor" class="fa-secondary" d="M32 96H416L394.6 466.8C393.1 492.2 372.1 512 346.7 512H101.3C75.87 512 54.86 492.2 53.39 466.8L32 96z"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
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
                <form class="form" action="#" method="post">
                    <div class="fv-row mb-5">
                        <div class="col-12">
                            <!--begin::Label-->
                            <label class="fs-6 fw-bold mb-2">
                                <span class="required">Keterangan</span>
                            </label>
                            <!--end::Label-->
                            <div class="position-relative d-flex align-items-center">
                                <textarea class="form-control form-control-solid" name="alasan" rows="6" placeholder="Masukkan keterangan"></textarea>
                            </div>
                            <div class="text-danger mx-4 fw-bold"></div>
                        </div>
                    </div>
                    <div class="fv-row mb-5">
                        <!--begin::Label-->
                        <label class="fs-6 fw-bold mb-2">
                            <span class="required">Tanggal</span>
                        </label>
                        <!--end::Label-->
                        <div class="position-relative d-flex align-items-center">
                            <!--begin::Icon-->
                            <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                <i class="fa-duotone fa-calendar-days fs-5"></i>
                            </span>
                            <!--end::Icon-->
                            <input class="form-control form-control-solid ps-12" placeholder="Masukkan tanggal" id="kt_datepicker_2"/>
                        </div>
                        <div class=" text-danger mx-4 fw-bold"></div>
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
