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
                <small class="text-gray-500 fs-7 fw-bold my-1">Data Harian</small>
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
                            <span class="text-muted mt-1 fw-bold fs-7">
                                <?php if ($this->web_akses == 'all' || $this->managemen->presensi == true) : ?>
                                    Rekap presensi hari ini
                                <?php else : ?>
                                    Rekap presensi anda bulan ini
                                <?php endif; ?>
                            </span>
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
                                    <span class="text-muted fw-bolder fs-6">Tepat</span>
                                </div>
                                <div class="symbol symbol-30px d-flex align-items-center mb-3">
                                    <div class="symbol-label fs-2 fw-bold me-3" style="background-color: #FFC83E;"></div>
                                    <span class="text-muted fw-bolder fs-6">Izin</span>
                                </div>

                            </div>
                            <div class="col-6">
                                <div class="symbol symbol-30px d-flex align-items-center mb-3">
                                    <div class="symbol-label fs-2 fw-bold me-3" style="background-color: #FFD56E;"></div>
                                    <span class="text-muted fw-bolder fs-6">Alpha</span>
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
                <?php
                if ($this->managemen) {
                    foreach ($this->managemen as $field => $val) {
                        $arr[] = $val;
                    }
                }
                ?>
                <?php if ($this->web_akses == 'all' || in_array(true, $arr)) : ?>
                    <!-- JIKA MEMILIKI AKSES ADMIN -->
                    <!--begin::List Widget 4-->
                    <div class="card h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header border-0 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bolder text-dark d-flex">
                                    Persetujuan&nbsp;<div id="manipulasi_tab">Presensi</div></span>
                                <span class="text-muted mt-1 fw-bold fs-7">Karyawan menunggu persetujuan</span>
                            </h3>
                            <div>
                                <h3 class="d-flex text-end flex-column">
                                    <span class="fw-bolder text-muted mb-0 fs-7">Tanggal</span>
                                    <span class="text-dark mt-1 fw-bold fs-5"><?= day_from_number(date('N')) . ', ' . date('d') . ' ' . month_from_number(date('m')) . ' ' . date('Y') ?></span>
                                </h3>
                            </div>
                        </div>
                        <!--end::Header-->
                        <div class="btn-group w-100 tab mt-5 px-10 tab-presensi">
                            <?php if ($this->web_akses == 'all' || $this->managemen->presensi == true) : ?>
                                <!--begin::Radio-->
                                <a onclick="openCity(event, 'content-presensi','#manipulasi_tab','Presensi','pagination-presensi')" class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-primary tab tablinks" id="defaultOpen" data-kt-button="true">
                                    <!--begin::Input-->
                                    <input class="btn-check" type="radio">
                                    <!--end::Input-->
                                    Presensi
                                </a>
                                <!--end::Radio-->
                            <?php endif; ?>
                            <?php if ($this->web_akses == 'all' || $this->managemen->tukar_shift == true) : ?>
                                <!--begin::Radio-->
                                <a class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-primary tab tablinks" onclick="openCity(event, 'tukar-shift','#manipulasi_tab','Tukar Shift','pagination_tukar_shift')" <?php if ($this->managemen->presensi == false) : ?> id="defaultOpen" <?php endif; ?> data-kt-button="true">
                                    <!--begin::Input-->
                                    <input class="btn-check" type="radio">
                                    <!--end::Input-->
                                    Tukar Shift
                                </a>
                                <!--end::Radio-->
                            <?php endif; ?>
                            <?php if ($this->web_akses == 'all' || $this->managemen->reimburse == true) : ?>
                                <!-- begin::radio -->
                                <a class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-primary tab tablinks" onclick="openCity(event, 'reimbursement','#manipulasi_tab','Reimburse','pagination_rembes')" <?php if ($this->managemen->tukar_shift == false) : ?> id="defaultOpen" <?php endif; ?> data-kt-button="true">
                                    <!--begin::Input-->
                                    <input class="btn-check" type="radio">
                                    <!--end::Input-->
                                    Reimburse
                                </a>
                                <!--end::Radio-->
                            <?php endif; ?>
                            <?php if ($this->web_akses == 'all' || $this->managemen->lembur == true) : ?>
                                <!-- begin::radio -->
                                <a class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-primary tab tablinks" onclick="openCity(event, 'lembur','#manipulasi_tab','Lembur','pagination_lembur')" data-kt-button="true" <?php if ($this->managemen->reimburse == false) {
                                                                                                                                                                                                                                                                            echo  'id="defaultOpen"';
                                                                                                                                                                                                                                                                        } ?>>
                                    <!--begin::Input-->
                                    <input class="btn-check" type="radio">
                                    <!--end::Input-->
                                    Lembur
                                </a>
                                <!--end::Radio-->
                            <?php endif; ?>
                            <?php if ($this->web_akses == 'all' || $this->managemen->izin == true) : ?>
                                <!-- begin::radio -->
                                <a class="btn btn-outline-secondary text-muted text-hover-white text-active-white btn-outline btn-active-primary tab tablinks" onclick="openCity(event, 'izin-kerja','#manipulasi_tab','Izin','pagination_izin')" <?php if ($this->managemen->lembur == false) : ?> id="defaultOpen" <?php endif; ?> data-kt-button="true">
                                    <!--begin::Input-->
                                    <input class="btn-check" type="radio">
                                    <!--end::Input-->
                                    Izin Kerja
                                </a>
                                <!--end::Radio-->
                            <?php endif; ?>
                        </div>
                        <!--begin::Body-->
                        <div class="card-body" style="overflow-y: scroll; height: 375px;">
                            <?php if ($this->web_akses == 'all' || $this->managemen->presensi == true) : ?>
                                <div id="content-presensi" class="tabcontent mb-7 pt-0">
                                    <div id="reload-presensi">
                                        <div class="card-header border-0 pb-3 px-0">
                                            <div class="d-flex align-items-center position-relative my-1 pe-2">
                                                <span class="svg-icon svg-icon-1 position-absolute ms-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                                                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
                                                    </svg>
                                                </span>
                                                <input type="text" onkeyup="search(this,'tr.presensi.target_search','#no_data_presensi')" id="cari_presensi" class="form-control form-control-solid form-control-sm w-200px ps-14" placeholder="Pencarian">
                                            </div>
                                            <div class="card-toolbar">
                                                <div id="tab_penjelasan">
                                                    <span class="text-muted fw-normal fs-6 me-5"><i class="fa-duotone fa-location-dot text-success fs-3 me-2"></i> Presensi Masuk</span>
                                                    <span class="text-muted fw-normal fs-6 me-3"><i class="fa-duotone fa-location-dot text-danger fs-3 me-2"></i> Presensi Pulang</span>
                                                </div>
                                                <div id="tab_persetujuan" class="d-none">
                                                    <div class="col-12">
                                                        <a type="button" onclick="approval_all('.presensi.child_checkbox',1,1,'Anda yakin akan menyetujui pengajuan presensi di bawah ?</br> Sertakan alasan anda',1,'content-presensi','reload-presensi')" class="btn btn-sm btn-light-success me-2">
                                                            <span class="svg-icon svg-icon-2 me-0">
                                                                <i class="fa-duotone fa-check" style="font-size: 18px;"></i>
                                                            </span>
                                                            Terima</a>
                                                        <a type="button" onclick="approval_all('.presensi.child_checkbox',1,2,'Anda yakin akan menolak pengajuan presensi di bawah ?</br> Sertakan alasan anda',0,'content-presensi','reload-presensi')" class="btn btn-sm btn-light-danger me-2">
                                                            <span class="svg-icon svg-icon-2 me-0">
                                                                <i class="fa-duotone fa-trash" style="font-size: 18px;"></i>
                                                            </span>
                                                            Tolak</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table onload="pagination('parent_1','.presensi.target_search','parent-pagination-presensi',5)" class="table align-middle gs-0 gy-4">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="fw-bolder text-muted bg-light">
                                                        <th class="ps-4 w-25px rounded-start">
                                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" name="maincheckbox_presensi" onchange="checked_action(this,'tab_persetujuan','tab_penjelasan','presensi.child_checkbox')" id="presensi_main_checkbox" type="checkbox" value="1" <?php if (!$result->persetujuan->presensi) : ?> disabled <?php endif; ?> />
                                                            </div>
                                                        </th>
                                                        <th class="w-50px">No</th>
                                                        <th class="min-w-125px text-center">Nama</th>
                                                        <!-- <th class="min-w-125px text-center">Tipe Kerja</th> -->
                                                        <th class="min-w-125px text-center">Scan</th>
                                                        <th class="min-w-125px text-center">Terlambat / Pulang Cepat</th>
                                                        <th class="pe-4 min-w-125px text-end rounded-end">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody id="parent_1">
                                                    <?php if ($result->persetujuan->presensi) : ?>
                                                        <?php $no = 1;
                                                        foreach ($result->persetujuan->presensi as $row) : $num = $no++; ?>
                                                            <tr class="presensi target_search" id="row_1_<?= $row->status ?>_<?= $row->id_presensi ?>">
                                                                <td>
                                                                    <div class="form-check form-check-sm form-check-custom form-check-solid" style="margin-left: 13px;">
                                                                        <input class="form-check-input presensi child_checkbox" type="checkbox" onchange="child_action(this,'presensi_main_checkbox','tab_persetujuan','tab_penjelasan','presensi.child_checkbox')" value="<?= $row->status; ?>|<?= $row->id_presensi; ?>" />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <span class="text-dark fw-bolder fs-6 number_1" id="num_presensi_<?= $row->status; ?>_<?= $row->id_presensi; ?>"><?= $num; ?></span>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="text-dark fw-bolder d-block fs-6"><?= $row->karyawan; ?></span>
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="text-dark fw-bolder d-block fs-6">
                                                                        <?php if ($row->status == 1) : ?>
                                                                            <i class="fa-duotone fa-location-dot text-success fs-3 me-2"></i>
                                                                        <?php else : ?>
                                                                            <i class="fa-duotone fa-location-dot text-danger fs-3 me-2"></i>
                                                                        <?php endif; ?>
                                                                        <?= $row->scan; ?>
                                                                    </span>
                                                                </td>
                                                                <td class="text-center">
                                                                    <?php if ($row->status == 1) : ?>
                                                                        <span class="text-danger fw-bolder d-block fs-6"><?= ($row->terlambat) ? $row->terlambat . ' menit' : ' - '; ?></span>
                                                                    <?php else : ?>
                                                                        <span class="text-success fw-bolder d-block fs-6"><?= ($row->pulang_cepat) ? $row->pulang_cepat . ' menit' : '  - '; ?></span>
                                                                    <?php endif; ?>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a role="button" onclick="approval(1,1,<?= $row->id_presensi ?>,'Anda yakin akan menyetujui presensi atas nama <?= $row->karyawan; ?> ?</br> Sertakan alasan anda',<?= $row->status; ?>,'content-presensi','reload-presensi')" class="btn btn-icon bg-light-success btn-active-color-primary btn-sm me-1">
                                                                        <i class="fa-duotone fa-check fs-5 text-success"></i>
                                                                    </a>
                                                                    <a role="button" onclick="approval(1,2,<?= $row->id_presensi ?>,'Anda yakin akan menolak presensi atas nama <?= $row->karyawan; ?> ?</br> Sertakan alasan anda',<?= $row->status; ?>,'content-presensi','reload-presensi')" class="btn btn-icon bg-light-danger btn-active-color-primary btn-sm">
                                                                        <i class="fa-duotone fa-xmark fs-5 text-danger"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                    <tr id="no_data_presensi" class="<?php if ($result->persetujuan->presensi) {
                                                                                            echo 'hiding';
                                                                                        } else {
                                                                                            echo 'showing';
                                                                                        } ?>">
                                                        <td colspan="6">
                                                            <center>Tidak ada data presensi</center>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                                <!--end::Table body-->
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            <?php endif; ?>
                            <?php if ($this->web_akses == 'all' || $this->managemen->tukar_shift == true) : ?>
                                <div id="tukar-shift" class="tabcontent mb-7">
                                    <div id="reload-tukar_shift">
                                        <div class="card-header border-0 pb-3 px-0">
                                            <div class="d-flex align-items-center position-relative my-1 pe-2">
                                                <span class="svg-icon svg-icon-1 position-absolute ms-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                                                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
                                                    </svg>
                                                </span>
                                                <input type="text" onkeyup="search(this,'tr.tukar_shift.target_search','#no_data_tukar_shift')" id="cari_tukar_shift" class="form-control form-control-solid form-control-sm w-200px ps-14" placeholder="Pencarian">
                                            </div>
                                            <div class="card-toolbar">
                                                <div id="display_hide_tukar_shift" class="d-none">
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
                                            <table onload="pagination('parent_4','.tukar_shift.target_search','parent-pagination-tukar_shift',5)" class="table align-middle gs-0 gy-4" id="kt_table_tukar_shift">
                                                <!--begin::Table head-->
                                                <thead>
                                                    <tr class="fw-bolder text-muted bg-light">
                                                        <th class="ps-4 w-25px rounded-start">
                                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" name="maincheckbox_tukar_shift" onchange="checked_action(this,'display_hide_tukar_shift',null,'tukar_shift.child_checkbox')" id="tukar_shift_main_checkbox" type="checkbox" value="1" <?php if (!$result->persetujuan->tukar_shift) : ?> disabled <?php endif; ?> />
                                                            </div>
                                                        </th>
                                                        <th class="w-50px">No</th>
                                                        <th class="min-w-125px text-center">Tanggal</th>
                                                        <th class="min-w-125px text-center">Pemohon</th>
                                                        <th class="min-w-125px text-center">Pengganti</th>
                                                        <th class="pe-4 min-w-150px text-end rounded-end">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <!--end::Table head-->
                                                <!--begin::Table body-->
                                                <tbody id="parent_4">
                                                    <?php if ($result->persetujuan->tukar_shift) : ?>
                                                        <?php $no = 1;
                                                        foreach ($result->persetujuan->tukar_shift as $row) : $num = $no++; ?>
                                                            <tr class="tukar_shift target_search" id="row_4_<?= $row->id_tukar_shift ?>">
                                                                <td>
                                                                    <div class="form-check form-check-sm form-check-custom form-check-solid" style="margin-left: 13px;">
                                                                        <input class="form-check-input tukar_shift child_checkbox" onchange="child_action(this,'tukar_shift_main_checkbox','display_hide_tukar_shift',null,'tukar_shift.child_checkbox')" type="checkbox" value="<?= $row->id_tukar_shift; ?>" />
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <span class="text-dark fw-bolder fs-6 number_4" id="num_tukar_shift_<?= $row->id_tukar_shift; ?>"><?= $num; ?></span>
                                                                    </div>
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="text-dark fw-bolder d-block fs-6"><?= date('d', strtotime($row->tanggal)) . ' ' . month_from_number(date('m', strtotime($row->tanggal))); ?></span>
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="text-dark fw-bolder d-block fs-6"><?= $row->asal_karyawan; ?></span>
                                                                </td>
                                                                <td class="text-center">
                                                                    <span class="text-dark fw-bolder d-block fs-6"><?= $row->pengganti_karyawan; ?></span>
                                                                </td>
                                                                <td class="text-end">
                                                                    <a role="button" onclick="approval(4,2,<?= $row->id_tukar_shift ?>,'Anda yakin akan menyetujui tukar shift atas nama <?= $row->asal_karyawan; ?> ?</br> Sertakan alasan anda',null,'tukar-shift','reload-tukar_shift')" class="btn btn-icon bg-light-success btn-active-color-primary btn-sm me-1">
                                                                        <i class="fa-duotone fa-check fs-5 text-success"></i>
                                                                    </a>
                                                                    <a role="button" onclick="approval(4,3,<?= $row->id_tukar_shift ?>,'Anda yakin akan menolak tukar shift atas nama <?= $row->asal_karyawan; ?> ?</br> Sertakan alasan anda',null,'tukar-shift','reload-tukar_shift')" class="btn btn-icon bg-light-danger btn-active-color-primary btn-sm">
                                                                        <i class="fa-duotone fa-trash fs-5 text-danger"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>

                                                    <?php endif; ?>
                                                    <tr id="no_data_tukar_shift" class="<?php if ($result->persetujuan->tukar_shift) {
                                                                                            echo 'hiding';
                                                                                        } else {
                                                                                            echo 'showing';
                                                                                        } ?>">
                                                        <td colspan=" 6">
                                                            <center>Tidak ada pengajuan tukar shift</center>
                                                        </td>
                                                    </tr>
                                                </tbody>

                                                <!--end::Table body-->
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            <?php endif; ?>
                            <?php if ($this->web_akses == 'all' || $this->managemen->reimburse == true) : ?>
                                <div id="reimbursement" class="tabcontent mb-7">
                                    <div class="card-header border-0 pb-3 px-0">
                                        <div class="d-flex align-items-center position-relative my-1 pe-2">
                                            <span class="svg-icon svg-icon-1 position-absolute ms-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
                                                </svg>
                                            </span>
                                            <input type="text" onkeyup="search(this,'tr.rembes.target_search','#no_data_rembes')" id="cari_rembes" class="form-control form-control-solid form-control-sm w-200px ps-14" placeholder="Pencarian">
                                        </div>
                                        <div class="card-toolbar">
                                            <div id="delete_reimbursement" class="d-none">
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
                                        <table onload="pagination('parent_3','.rembes.target_search','parent-pagination-rembes',5)" class="table align-middle gs-0 gy-4" id="kt_table_reimbursement">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fw-bolder text-muted bg-light">
                                                    <th class="ps-4 w-25px rounded-start">
                                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" name="maincheckbox_reimbursement" type="checkbox" onchange="checked_action(this,'delete_reimbursement',null,'rembes.child_checkbox')" id="rembes_main_checkbox" value="1" <?php if (!$result->persetujuan->rembes) : ?> disabled <?php endif; ?> />
                                                        </div>
                                                    </th>
                                                    <th class="w-50px">No</th>
                                                    <th class="min-w-125px text-center">Tanggal</th>
                                                    <th class="min-w-125px text-center">Nama</th>
                                                    <th class="min-w-125px text-center">Kategori</th>
                                                    <th class="min-w-125px text-center">Detail</th>
                                                    <th class="pe-4 min-w-150px text-end rounded-end">Aksi</th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody id="parent_3">
                                                <?php if ($result->persetujuan->rembes) : ?>
                                                    <?php $no = 1;
                                                    foreach ($result->persetujuan->rembes as $row) : $num = $no++; ?>
                                                        <tr class="rembes target_search">
                                                            <td>
                                                                <div class="form-check form-check-sm form-check-custom form-check-solid" style="margin-left: 13px;">
                                                                    <input class="form-check-input rembes child_checkbox" type="checkbox" onchange="child_action(this,'rembes_main_checkbox','delete_reimbursement',null,'rembes.child_checkbox')" value="<?= $row->id_rembes; ?>" />
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <span class="text-dark fw-bolder fs-6"><?= $num; ?></span>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <span class="text-dark fw-bolder d-block fs-6"><?= date('d', strtotime($row->tanggal)) . ' ' . month_from_number(date('m', strtotime($row->tanggal))); ?></span>
                                                            </td>
                                                            <td class="text-center">
                                                                <span class="text-dark fw-bolder d-block fs-6"><?= $row->karyawan; ?></span>
                                                            </td>
                                                            <td class="text-center">
                                                                <span class="text-dark fw-bolder d-block fs-6"><?= $row->kategori; ?></span>
                                                            </td>
                                                            <td class="text-center">
                                                                <a class="btn btn-icon btn-sm btn-light" data-bs-toggle="modal" href="#modalDetailReimbursement" role="button"><i class="fa-duotone fa-file fs-5"></i></a>
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
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                                <tr id="no_data_rembes" class="<?php if ($result->persetujuan->rembes) {
                                                                                    echo 'hiding';
                                                                                } else {
                                                                                    echo 'showing';
                                                                                } ?>">
                                                    <td colspan="7">
                                                        <center>Pengajuan rembes tidak ditemukan</center>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ($this->web_akses == 'all' || $this->managemen->lembur == true) : ?>
                                <div id="lembur" class="tabcontent mb-7">
                                    <div class="card-header border-0 pb-3 px-0">
                                        <div class="d-flex align-items-center position-relative my-1 pe-2">
                                            <span class="svg-icon svg-icon-1 position-absolute ms-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
                                                </svg>
                                            </span>
                                            <input type="text" onkeyup="search(this,'tr.lembur.target_search','#no_data_lembur')" id="cari_lembur" class="form-control form-control-solid form-control-sm w-200px ps-14" placeholder="Pencarian">
                                        </div>
                                        <div class="card-toolbar">
                                            <div id="delete_lembur" class="d-none">
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
                                        <table onload="pagination('parent_2','.lembur.target_search','parent-pagination-lembur',5)" class="table align-middle gs-0 gy-4" id="kt_table_lembur">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fw-bolder text-muted bg-light">
                                                    <th class="ps-4 w-25px rounded-start">
                                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" name="maincheckbox_lembur" type="checkbox" onchange="checked_action(this,'delete_lembur',null,'lembur.child_checkbox')" id="lembur_main_checkbox" value="1" <?php if (!$result->persetujuan->lembur) : ?> disabled <?php endif; ?> />
                                                        </div>
                                                    </th>
                                                    <th class="w-50px">No</th>
                                                    <th class="min-w-150px text-center">Tanggal</th>
                                                    <th class="min-w-125px text-center">Nama</th>
                                                    <th class="min-w-125px text-center">Detail</th>
                                                    <th class="pe-4 min-w-150px text-end rounded-end">Aksi</th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody id="parent_2">
                                                <?php if ($result->persetujuan->lembur) : ?>
                                                    <?php $no = 1;
                                                    foreach ($result->persetujuan->lembur as $row) : $num = $no++; ?>
                                                        <tr class="lembur target_search">
                                                            <td>
                                                                <div class="form-check form-check-sm form-check-custom form-check-solid" style="margin-left: 13px;">
                                                                    <input class="form-check-input lembur child_checkbox" type="checkbox" onchange="child_action(this,'lembur_main_checkbox','delete_lembur',null,'lembur.child_checkbox')" value="<?= $row->id_lembur; ?>" />
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <span class="text-dark fw-bolder fs-6"><?= $num; ?></span>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <span class="text-dark fw-bolder d-block fs-6"><?= date('d', strtotime($row->tanggal)) . ' ' . month_from_number(date('m', strtotime($row->tanggal))); ?></span>
                                                            </td>
                                                            <td class="text-center">
                                                                <span class="text-dark fw-bolder d-block fs-6"><?= $row->karyawan; ?></span>
                                                            </td>
                                                            <td class="text-center">
                                                                <a class="btn btn-icon btn-sm btn-light" data-bs-toggle="modal" href="#modalDetailLembur" role="button"><i class="fa-duotone fa-file fs-5"></i></a>
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
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                                <tr id="no_data_lembur" class="<?php if ($result->persetujuan->lembur) {
                                                                                    echo 'hiding';
                                                                                } else {
                                                                                    echo 'showing';
                                                                                } ?>">
                                                    <td colspan="6">
                                                        <center>Pengajuan lembur tidak di temukan</center>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ($this->web_akses == 'all' || $this->managemen->izin == true) : ?>
                                <div id="izin-kerja" class="tabcontent mb-7">
                                    <div class="card-header border-0 pb-3 px-0">
                                        <div class="d-flex align-items-center position-relative my-1 pe-2">
                                            <span class="svg-icon svg-icon-1 position-absolute ms-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
                                                </svg>
                                            </span>
                                            <input type="text" onkeyup="search(this,'tr.izin.target_search','#no_data_izin')" class="form-control form-control-solid form-control-sm w-200px ps-14" placeholder="Pencarian">
                                        </div>
                                        <div class="card-toolbar">
                                            <div id="delete_izin_kerja" class="d-none">
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
                                        <table onload="pagination('parent_5','.izin.target_search','parent-pagination-izin',5)" class="table align-middle gs-0 gy-4" id="kt_table_izin_kerja">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fw-bolder text-muted bg-light">
                                                    <th class="ps-4 w-25px rounded-start">
                                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" name="maincheckbox_izin_kerja" type="checkbox" value="1" onchange="checked_action(this,'delete_izin_kerja',null,'izin_kerja.child_checkbox')" id="izin_kerja_main_checkbox" <?php if (!$result->persetujuan->izin) : ?> disabled <?php endif; ?> />
                                                        </div>
                                                    </th>
                                                    <th class="w-50px">No</th>
                                                    <th class="min-w-150px text-center">Tanggal</th>
                                                    <th class="min-w-125px text-center">Nama</th>
                                                    <th class="min-w-125px text-center">Kategori</th>
                                                    <th class="min-w-125px text-center">Dokumen</th>
                                                    <th class="pe-4 min-w-150px text-end rounded-end">Aksi</th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody id="parent_5">
                                                <?php if ($result->persetujuan->izin) : ?>
                                                    <?php $no = 1;
                                                    foreach ($result->persetujuan->izin as $row) : $num = $no++; ?>
                                                        <tr class="izin target_search">
                                                            <td>
                                                                <div class="form-check form-check-sm form-check-custom form-check-solid" style="margin-left: 13px;">
                                                                    <input class="form-check-input izin_kerja child_checkbox" type="checkbox" onchange="child_action(this,'izin_kerja_main_checkbox','delete_izin_kerja',null,'izin_kerja.child_checkbox')" value="<?= $row->id_izin; ?>" />
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex justify-content-start flex-column">
                                                                    <span class="text-dark fw-bolder fs-6"><?= $num; ?></span>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <span class="text-dark fw-bolder d-block fs-6"><?= date('d', strtotime($row->tanggal)) . ' ' . month_from_number(date('m', strtotime($row->tanggal))); ?></span>
                                                            </td>
                                                            <td class="text-center">
                                                                <span class="text-dark fw-bolder d-block fs-6"><?= $row->karyawan; ?></span>
                                                            </td>
                                                            <td class="text-center">
                                                                <span class="text-dark fw-bolder d-block fs-6"><?= $row->kategori; ?></span>
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
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                                <tr id="no_data_izin" class="<?php if ($result->persetujuan->izin) {
                                                                                    echo 'hiding';
                                                                                } else {
                                                                                    echo 'showing';
                                                                                } ?>">
                                                    <td colspan="7">
                                                        <center>Pengajuan izin tidak ditemukan</center>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <!--end::Body-->
                        <div class="card-footer py-5 d-flex justify-content-end align-items-center" id="display-pagination">
                            <?php if ($this->web_akses == 'all' || $this->managemen->presensi == true) : ?>
                                <nav class="pgn muncul" id="pagination-presensi" aria-label="...">
                                    <ul class="pagination" id="parent-pagination-presensi">
                                    </ul>
                                </nav>
                            <?php endif; ?>
                            <?php if ($this->web_akses == 'all' || $this->managemen->tukar_shift == true) : ?>
                                <nav id="pagination_tukar_shift" aria-label="..." class="pgn d-none">
                                    <ul class="pagination" id="parent-pagination-tukar_shift">
                                    </ul>
                                </nav>
                            <?php endif; ?>
                            <?php if ($this->web_akses == 'all' || $this->managemen->lembur == true) : ?>
                                <nav id="pagination_lembur" aria-label="..." class="pgn d-none">
                                    <ul class="pagination" id="parent-pagination-lembur">
                                    </ul>
                                </nav>
                            <?php endif; ?>
                            <?php if ($this->web_akses == 'all' || $this->managemen->izin == true) : ?>
                                <nav id="pagination_izin" aria-label="..." class="pgn d-none">
                                    <ul class="pagination" id="parent-pagination-izin">
                                    </ul>
                                </nav>
                            <?php endif; ?>
                            <?php if ($this->web_akses == 'all' || $this->managemen->rembes == true) : ?>
                                <nav id="pagination_rembes" aria-label="..." class="pgn d-none">
                                    <ul class="pagination" id="parent-pagination-rembes">
                                    </ul>
                                </nav>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!--end::List Widget 4-->
                <?php endif; ?>

            </div>
            <!--end::Col-->
        </div>
        <div class="row g-8 g-lg-10 mb-5">
            <div class="col-xl-7 mb-xl-5">
                <div class="card card-xl-stretch bgi-no-repeat mb-xl-8" style="background-position: right top; background-size: 30% auto; background-image: url(<?= base_url(); ?>assets/media/svg/shapes/abstract-2.svg">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title fw-bolder text-dark">Pengumuman</h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-0 d-flex pengumuman">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center bg-light-warning rounded p-5" style="width: 275px;">
                                            <!--begin::Icon-->
                                            <span class="svg-icon svg-icon-warning me-5">
                                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <i class="fa-duotone fa-megaphone text-warning fs-2"></i>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <div class="flex-grow-1 me-2">
                                                <a class="fw-bolder text-gray-800 text-hover-primary fs-6" data-bs-toggle="modal" href="#modalDetailNews" role="button">Pengumuman 1</a>
                                                <span class="text-muted fw-bold d-block">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Item-->
                                    </td>
                                    <td>
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center bg-light-success rounded p-5" style="width: 275px;">
                                            <!--begin::Icon-->
                                            <span class="svg-icon svg-icon-success me-5">
                                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <i class="fa-duotone fa-megaphone text-success fs-2"></i>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <div class="flex-grow-1 me-2">
                                                <a class="fw-bolder text-gray-800 text-hover-primary fs-6" data-bs-toggle="modal" href="#modalDetailNews" role="button">Pengumuman 2</a>
                                                <span class="text-muted fw-bold d-block">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Item-->
                                    </td>
                                    <td>
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center bg-light-danger rounded p-5" style="width: 275px;">
                                            <!--begin::Icon-->
                                            <span class="svg-icon svg-icon-danger me-5">
                                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <i class="fa-duotone fa-megaphone text-danger fs-2"></i>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <div class="flex-grow-1 me-2">
                                                <a class="fw-bolder text-gray-800 text-hover-primary fs-6" data-bs-toggle="modal" href="#modalDetailNews" role="button">Pengumuman 3</a>
                                                <span class="text-muted fw-bold d-block">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Item-->
                                    </td>
                                    <td>
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center bg-light-info rounded p-5" style="width: 275px;">
                                            <!--begin::Icon-->
                                            <span class="svg-icon svg-icon-info me-5">
                                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <i class="fa-duotone fa-megaphone text-info fs-2"></i>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <div class="flex-grow-1 me-2">
                                                <a class="fw-bolder text-gray-800 text-hover-primary fs-6" data-bs-toggle="modal" href="#modalDetailNews" role="button">Pengumumam 4</a>
                                                <span class="text-muted fw-bold d-block">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Item-->
                                    </td>
                                    <td>
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center bg-light-dark rounded p-5" style="width: 275px;">
                                            <!--begin::Icon-->
                                            <span class="svg-icon svg-icon-info me-5">
                                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                                <span class="svg-icon svg-icon-1">
                                                    <i class="fa-duotone fa-megaphone text-dark fs-2"></i>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                            <!--end::Icon-->
                                            <!--begin::Title-->
                                            <div class="flex-grow-1 me-2">
                                                <a class="fw-bolder text-gray-800 text-hover-primary fs-6" data-bs-toggle="modal" href="#modalDetailNews" role="button">Pengumuman 5</a>
                                                <span class="text-muted fw-bold d-block">Lorem ipsum dolor sit amet consectetur adipisicing elit.</span>
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Item-->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--end::Body-->
                </div>
            </div>
            <div class="col-xl-5 mb-xl-5">
                <div class="card card-xl-stretch bgi-no-repeat mb-xl-8" style="background-position: right top; background-size: 30% auto; background-image: url(<?= base_url(); ?>assets/media/svg/shapes/abstract-4.svg">
                    <!--begin::Header-->
                    <div class="card-header border-0">
                        <h3 class="card-title fw-bolder text-dark">Reimburse</h3>
                        <div>
                            <h3 class="d-flex text-end flex-column pt-5">
                                <span class="text-primary mt-1 fw-bold fs-5">Saka Dana Asmara</span>
                            </h3>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body d-flex align-items-center">
                        <img src="<?= base_url(); ?>assets/media/svg/avatars/029-boy-11.svg" class="align-self-end h-100px position-relative" style="top: -12px;">
                        <div class="d-flex flex-column flex-grow-1 me-2 mb-10">
                            <span class="fw-bold text-dark fs-4 mb-0 text-hover-primary">Total Reimbursement Bulan Ini</span>
                            <span class="fw-bolder text-primary fs-1">Rp. 120.000,00</span>
                        </div>
                    </div>
                    <!--end::Body-->
                </div>
            </div>
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
                        <?php if ($karyawan) : ?>
                            <?php foreach ($karyawan as $row) : ?>
                                <div class="d-flex align-items-sm-center mb-7">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-5">
                                        <img src="<?= decode_link($row->foto); ?>" class="align-self-center" alt="Foto karyawan" load="lazy">
                                    </div>
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-row-fluid flex-wrap" style="width: 100px;">
                                        <div class="flex-grow-1 me-2">
                                            <a class="text-gray-800 text-hover-primary fs-6 fw-bolder"><?= $row->nama; ?></a>
                                            <span class="text-muted fw-bold d-block fs-7"><?= $row->role; ?></span>
                                        </div>
                                        <a role="button" onclick="modal_broadcast(<?= $row->id_karyawan; ?>)" class="btn btn-sm btn-icon btn-light w-40px h-40px" data-bs-toggle="modal" href="#modalTambah" role="button">
                                            <span class="svg-icon svg-icon-2">
                                                <i class="fa-duotone fa-plus fs-3"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <!--end::Section-->
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
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
                    <div class="card-body pt-5">
                        <div class="row d-flex">
                            <div class="col-xl-7 pe-xl-7">
                                <div id="kt_docs_fullcalendar_background_events"></div>
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
                                                <h5 class="mb-0">Hari libur nasional</h5>
                                                <span class="text-muted mt-0 mb-0 fw-bold fs-7">01 November 2022</span>
                                            </div>
                                        </div>
                                        <div class="d-flex">
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
                                                <h5 class="mb-0">Hari libur nasional</h5>
                                                <span class="text-muted mt-0 mb-0 fw-bold fs-7">02 November 2022</span>
                                            </div>
                                        </div>
                                        <div class="d-flex">
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
                                                <h5 class="mb-0">Hari libur nasional</h5>
                                                <span class="text-muted mt-0 mb-0 fw-bold fs-7">02 November 2022</span>
                                            </div>
                                        </div>
                                        <div class="d-flex">
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
        <form method="post" action="<?= base_url('func_informasi/tambah_notifikasi') ?>" id="tambah_notifikasi" class=" modal-content">
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
                    <input type="hidden" name="id_karyawan" id="id_karyawan">
                    <div class="col-12 pe-3" id="req_judul">
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
                        <div class="mb-10" id="req_keterangan">
                            <!--begin::Label-->
                            <label class="form-label fw-bold">Keterangan</label>

                            <textarea name="keterangan" class="form-control form-control-solid" id="" cols="10" rows="10" placeholder="Masukkan keterangan"></textarea>
                        </div>
                        <!--end::Input-->
                    </div>
                </div>
                <button type="button" onclick="submit_form(this,'#tambah_notifikasi',0,'big')" id="tambah_notif" class="btn btn-lg btn-primary" style="width: 100%">Continue
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

<!-- Modal Persetujuan Reimbursement -->
<div class="modal fade" id="modalDetailReimbursement" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Detail Reimbursement</h2>
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
                    <div class="col-12 d-flex flex-wrap">
                        <img src="<?= base_url('assets/media/books/1.png') ?>" class="rounded mx-auto d-block img-detail-reimbursement mb-3">
                        <img src="<?= base_url('assets/media/books/2.png') ?>" class="rounded mx-auto d-block img-detail-reimbursement mb-3">
                        <img src="<?= base_url('assets/media/books/3.png') ?>" class="rounded mx-auto d-block img-detail-reimbursement mb-3">
                        <img src="<?= base_url('assets/media/books/4.png') ?>" class="rounded mx-auto d-block img-detail-reimbursement mb-3">
                        <img src="<?= base_url('assets/media/books/5.png') ?>" class="rounded mx-auto d-block img-detail-reimbursement mb-3">
                        <img src="<?= base_url('assets/media/books/6.png') ?>" class="rounded mx-auto d-block img-detail-reimbursement mb-3">
                    </div>
                </div>
                <div class="fv-row mb-5">
                    <div class="col-12">
                        <div class="position-relative d-flex align-items-center">
                            <textarea class="form-control form-control-solid" rows="5" readonly>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, a, dignissimos doloribus reiciendis ipsam culpa provident sunt aliquid expedita, esse vero ipsa itaque incidunt suscipit illo perferendis tempore sint sapiente.
                            </textarea>
                        </div>
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

<!-- Modal Persetujuan Lembur -->
<div class="modal fade" id="modalDetailLembur" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Detail Lembur</h2>
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
                    <div class="col-12 d-flex flex-wrap">
                        <img src="<?= base_url('assets/media/books/1.png') ?>" class="rounded mx-auto d-block img-detail-reimbursement mb-3">
                        <img src="<?= base_url('assets/media/books/2.png') ?>" class="rounded mx-auto d-block img-detail-reimbursement mb-3">
                        <img src="<?= base_url('assets/media/books/3.png') ?>" class="rounded mx-auto d-block img-detail-reimbursement mb-3">
                        <img src="<?= base_url('assets/media/books/4.png') ?>" class="rounded mx-auto d-block img-detail-reimbursement mb-3">
                        <img src="<?= base_url('assets/media/books/5.png') ?>" class="rounded mx-auto d-block img-detail-reimbursement mb-3">
                        <img src="<?= base_url('assets/media/books/6.png') ?>" class="rounded mx-auto d-block img-detail-reimbursement mb-3">
                    </div>
                </div>
                <div class="fv-row mb-5">
                    <div class="col-12">
                        <div class="position-relative d-flex align-items-center">
                            <textarea class="form-control form-control-solid" rows="5" readonly>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, a, dignissimos doloribus reiciendis ipsam culpa provident sunt aliquid expedita, esse vero ipsa itaque incidunt suscipit illo perferendis tempore sint sapiente.
                            </textarea>
                        </div>
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