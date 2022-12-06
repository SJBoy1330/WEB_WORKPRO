<!--begin::Tab panel-->
<div class="tab-pane  <?= (set_active_tab($this->uri->segment(1), 'jadwal', $this->uri->segment(2), array('pola', 'shift', 'tukar_shift', 'hari_libur', 'lembur'))) ?> <?= (set_active_tab($this->uri->segment(1), 'karyawan', $this->uri->segment(2), array('daftar', 'divisi'))) ?> <?= (set_active_tab($this->uri->segment(1), 'perusahaan', $this->uri->segment(2), array('profil', 'cabang'))) ?>" id="master">
    <!--begin::Menu wrapper-->
    <div class="header-menu flex-column align-items-stretch flex-lg-row">
        <!--begin::Menu-->
        <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold align-items-stretch flex-grow-1" id="#kt_header_menu" data-kt-menu="true">
            <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
                <span class="menu-link py-3">
                    <span class="menu-title">Perusahaan</span>
                    <span class="menu-arrow"></span>
                </span>
                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                    <div class="menu-item">
                        <a class="menu-link py-3" href="<?= base_url('perusahaan/profil') ?>">
                            <span class="menu-icon">
                                <i class="fa-duotone fa-building fs-2"></i>
                            </span>
                            <span class="menu-title">Profil Perusahaan</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a class="menu-link py-3" href="<?= base_url('perusahaan/cabang') ?>">
                            <span class="menu-icon">
                                <i class="fa-duotone fa-map-location-dot fs-2"></i>
                            </span>
                            <span class="menu-title">Cabang</span>
                        </a>
                    </div>
                </div>
            </div>
            <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
                <span class="menu-link py-3">
                    <span class="menu-title">Karyawan</span>
                    <span class="menu-arrow"></span>
                </span>
                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                    <div class="menu-item menu-lg-down-accordion">
                        <a class="menu-link py-3" href="<?= base_url('karyawan/daftar') ?>">
                            <span class="menu-icon">
                                <i class="fa-duotone fa-user-tie fs-3"></i>
                            </span>
                            <span class="menu-title">Daftar Karyawan</span>
                        </a>
                    </div>
                    <div class="menu-item menu-lg-down-accordion">
                        <a class="menu-link py-3" href="<?= base_url('karyawan/divisi') ?>">
                            <span class="menu-icon">
                                <i class="fa-duotone fa-group-arrows-rotate fs-3"></i>
                            </span>
                            <span class="menu-title">Divisi</span>
                        </a>
                    </div>
                </div>
            </div>
            <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
                <span class="menu-link py-3">
                    <span class="menu-title">Jadwal</span>
                    <span class="menu-arrow"></span>
                </span>
                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                    <div class="menu-item menu-lg-down-accordion">
                        <a class="menu-link py-3" href="<?= base_url('jadwal/pola') ?>">
                            <span class="menu-icon">
                                <i class="fa-duotone fa-draw-polygon fs-3"></i>
                            </span>
                            <span class="menu-title">Pola Kerja</span>
                        </a>
                    </div>
                    <div class="menu-item menu-lg-down-accordion">
                        <a class="menu-link py-3" href="<?= base_url('jadwal/shift') ?>">
                            <span class="menu-icon">
                                <i class="fa-duotone fa-calendar-circle-user fs-3"></i>
                            </span>
                            <span class="menu-title">Shift</span>
                        </a>
                    </div>

                    <div class="menu-item menu-lg-down-accordion">
                        <a class="menu-link py-3" href="<?= base_url('jadwal/tukar_shift') ?>">
                            <span class="menu-icon">
                                <i class="fa-duotone fa-people-arrows fs-3"></i>
                            </span>
                            <span class="menu-title">Tukar Shift</span>
                        </a>
                    </div>
                    <div class="menu-item menu-lg-down-accordion">
                        <a class="menu-link py-3" href="<?= base_url('jadwal/hari_libur') ?>">
                            <span class="menu-icon">
                                <i class="fa-duotone fa-calendar-day fs-3"></i>
                            </span>
                            <span class="menu-title">Hari Libur</span>
                        </a>
                    </div>
                    <div class="menu-item menu-lg-down-accordion">
                        <a class="menu-link py-3" href="<?= base_url('jadwal/lembur') ?>">
                            <span class="menu-icon">
                                <i class="fa-duotone fa-timer fs-3"></i>
                            </span>
                            <span class="menu-title">Lembur</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Menu wrapper-->
</div>
<!--end::Tab panel-->
<!--begin::Tab panel-->
<div class="tab-pane <?= (set_active_tab($this->uri->segment(1), 'presensi', $this->uri->segment(2), array('data', 'izin'))) ?>" id="presensi">
    <!--begin::Menu wrapper-->
    <div class="header-menu flex-column align-items-stretch flex-lg-row">
        <!--begin::Menu-->
        <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold align-items-stretch flex-grow-1" id="#kt_header_menu" data-kt-menu="true">
            <div class="menu-item menu-lg-down-accordion me-lg-1">
                <a class="menu-link py-3" href="<?= base_url('presensi/data') ?>">
                    <span class="menu-title">Data Presensi</span>
                </a>
            </div>
            <div class="menu-item menu-lg-down-accordion me-lg-1">
                <a class="menu-link py-3" href="<?= base_url('presensi/izin') ?>">
                    <span class="menu-title">Izin Kerja</span>
                </a>
            </div>
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Menu wrapper-->
</div>
<!--end::Tab panel-->
<!--begin::Tab panel-->
<div class="tab-pane <?= (set_active_tab($this->uri->segment(1), 'manajemen', $this->uri->segment(2), array('prospek', 'kunjungan', 'reimbursement', 'role'))) ?>" id="managemen">
    <!--begin::Menu wrapper-->
    <div class="header-menu flex-column align-items-stretch flex-lg-row">
        <!--begin::Menu-->
        <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold align-items-stretch flex-grow-1" id="#kt_header_menu" data-kt-menu="true">
            <div class="menu-item menu-lg-down-accordion me-lg-1">
                <a class="menu-link py-3" href="<?= base_url('manajemen') ?>">
                    <span class="menu-title">Prospek</span>
                </a>
            </div>
            <div class="menu-item menu-lg-down-accordion me-lg-1">
                <a class="menu-link py-3" href="<?= base_url('manajemen/kunjungan') ?>">
                    <span class="menu-title">Kunjungan</span>
                </a>
            </div>
            <div class="menu-item menu-lg-down-accordion me-lg-1">
                <a class="menu-link py-3" href="<?= base_url('manajemen/reimbursement') ?>">
                    <span class="menu-title">Reimbursement</span>
                </a>
            </div>
            <div class="menu-item menu-lg-down-accordion me-lg-1">
                <a class="menu-link py-3" href="<?= base_url('manajemen/role') ?>">
                    <span class="menu-title">Role</span>
                </a>
            </div>
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Menu wrapper-->
</div>
<!--end::Tab panel-->
<!--begin::Tab panel-->
<div class="tab-pane <?= (set_active_tab($this->uri->segment(1), 'laporan', $this->uri->segment(2), array('data_karyawan', 'rekap_presensi', 'rekap_reimbursement', 'rekap_kunjungan', 'rekap_prospek', 'rekap_izin_kerja', 'rekap_lembur'))) ?>" id="laporan">
    <!--begin::Menu wrapper-->
    <div class="header-menu flex-column align-items-stretch flex-lg-row">
        <!--begin::Menu-->
        <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold align-items-stretch flex-grow-1" id="#kt_header_menu" data-kt-menu="true">
            <div class="menu-item menu-lg-down-accordion me-lg-1">
                <a class="menu-link py-3" href="<?= base_url('laporan/data_karyawan') ?>">
                    <span class="menu-title">Data Karyawan</span>
                </a>
            </div>
            <div class="menu-item menu-lg-down-accordion me-lg-1">
                <a class="menu-link py-3" href="<?= base_url('laporan/rekap_presensi') ?>">
                    <span class="menu-title">Rekap Presensi</span>
                </a>
            </div>
            <div class="menu-item menu-lg-down-accordion me-lg-1">
                <a class="menu-link py-3" href="<?= base_url('laporan/rekap_reimbursement') ?>">
                    <span class="menu-title">Rekap Reimbursement</span>
                </a>
            </div>
            <div class="menu-item menu-lg-down-accordion me-lg-1">
                <a class="menu-link py-3" href="<?= base_url('laporan/rekap_kunjungan') ?>">
                    <span class="menu-title">Rekap Kunjungan</span>
                </a>
            </div>
            <div class="menu-item menu-lg-down-accordion me-lg-1">
                <a class="menu-link py-3" href="<?= base_url('laporan/rekap_prospek') ?>">
                    <span class="menu-title">Rekap Prospek</span>
                </a>
            </div>
            <div class="menu-item menu-lg-down-accordion me-lg-1">
                <a class="menu-link py-3" href="<?= base_url('laporan/rekap_izin_kerja') ?>">
                    <span class="menu-title">Rekap Izin Kerja</span>
                </a>
            </div>
            <div class="menu-item menu-lg-down-accordion me-lg-1">
                <a class="menu-link py-3" href="<?= base_url('laporan/rekap_lembur') ?>">
                    <span class="menu-title">Rekap Lembur</span>
                </a>
            </div>
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Menu wrapper-->
</div>
<!--end::Tab panel-->
<!--begin::Tab panel-->
<div class="tab-pane <?= (set_active_tab($this->uri->segment(1), 'informasi', $this->uri->segment(2), array('bantuan'))) ?>" id="informasi">
    <!--begin::Menu wrapper-->
    <div class="header-menu flex-column align-items-stretch flex-lg-row">
        <!--begin::Menu-->
        <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold align-items-stretch flex-grow-1" id="#kt_header_menu" data-kt-menu="true">
            <div class="menu-item menu-lg-down-accordion me-lg-1">
                <a class="menu-link py-3" href="<?= base_url('informasi') ?>">
                    <span class="menu-title">Pengumuman</span>
                </a>
            </div>
            <!-- <div class="menu-item menu-lg-down-accordion me-lg-1">
                                                    <span class="menu-link py-3">
                                                        <span class="menu-title">Broadcast</span>
                                                    </span>
                                                </div> -->
            <div class="menu-item menu-lg-down-accordion me-lg-1">
                <a class="menu-link py-3" href="<?= base_url('informasi/bantuan') ?>">
                    <span class="menu-title">Bantuan</span>
                </a>
            </div>
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Menu wrapper-->
</div>
<!--end::Tab panel-->