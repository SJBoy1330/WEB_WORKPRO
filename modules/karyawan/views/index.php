<div id="parent_display" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="reload_display">
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
                    <input type="text" onkeyup="search(this,'.target_search','#change')" class="form-control form-control-solid form-control-sm w-250px ps-14" placeholder="Pencarian">
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
                            <!--end::Svg Icon-->Filter
                        </a>
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
                            <div class="px-7 py-5" style="overflow-y: scroll; max-height: 225px;">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Role</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select id="role" class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih tipe user" data-dropdown-parent="#kt_menu_61bc33c4ee0dc" data-allow-clear="true">
                                            <option value="all">Semua</option>
                                            <?php if ($atribut->role) : ?>
                                                <?php foreach ($atribut->role as $row) : ?>
                                                    <option value="<?= $row->id_role ?>"><?= $row->nama; ?></option>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
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
                                        <select id="divisi" class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih tipe user" data-dropdown-parent="#kt_menu_61bc33c4ee0dc" data-allow-clear="true">
                                            <option value="all">Semua</option>
                                            <?php if ($atribut->divisi) : ?>
                                                <?php foreach ($atribut->divisi as $row) : ?>
                                                    <option value="<?= $row->id_divisi ?>"><?= $row->nama; ?></option>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Status</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select id="status" class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Pilih tipe user" data-dropdown-parent="#kt_menu_61bc33c4ee0dc" data-allow-clear="true">
                                            <option value="all">Semua</option>
                                            <option value="Y">Aktif</option>
                                            <option value="N">Tidak Aktif</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                            </div>
                            <!--end::Form-->
                            <div class="px-7 py-5">
                                <!--end::Input group-->
                                <div class="d-flex justify-content-end">
                                    <button type="submit" onclick="filter('change')" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Tampilkan</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Menu-->
                    </div>
                    <button onclick="get_modal('tambah')" type="button" class="btn btn-sm btn-light btn-active-primary me-2" data-bs-toggle="modal" data-bs-target="#modalTambah">
                        <span class="svg-icon svg-icon-2 me-0">
                            <i class="fa-duotone fa-plus fs-3"></i>
                        </span>
                        Tambah
                    </button>
                    <button type="button" class="btn btn-sm btn-light-danger d-none" id="display_hide">
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
                    <table onload="pagination('parent_karyawan','.target_search','parent-pagination',5)" class="table align-middle gs-0 gy-4" id="kt_table_karyawan">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th class="ps-4 w-25px rounded-start">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" name="main_checkbox" onchange="checked_action(this,'display_hide',null,'child_checkbox')" id="main_checkbox" type="checkbox" value="1" />
                                    </div>
                                </th>
                                <th class="w-50px">No</th>
                                <th class="w-500px">Nama</th>
                                <th class="min-w-125px">Role</th>
                                <th class="min-w-125px">Divisi</th>
                                <th class="pe-4 min-w-150px text-end rounded-end">Aksi</th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody id="parent_karyawan">
                            <?php if ($result) : ?>
                                <?php $no = 1;
                                foreach ($result as $row) : $num = $no++; ?>
                                    <tr class="target_search showing" data-status="<?= $row->aktif; ?>" data-divisi="<?= $row->id_divisi; ?>" data-role="<?= $row->id_role; ?>">
                                        <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid" style="margin-left: 13px;">
                                                <input class="form-check-input child_checkbox" onchange="child_action(this,'main_checkbox','display_hide',null,'child_checkbox')" type="checkbox" value="1" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-start flex-column">
                                                <span class="text-dark fw-bolder fs-6"><?= $num; ?></span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-45px me-5">
                                                    <img alt="Pic" src="<?= $row->foto; ?>">
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Name-->
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6"><?= $row->nama; ?></a>
                                                    <a href="#" class="text-muted text-hover-primary fw-bold text-muted d-block fs-7">
                                                        <span class="text-dark">Email</span>: <?= $row->email; ?></a>
                                                </div>
                                                <!--end::Name-->
                                            </div>
                                        </td>
                                        <td>
                                            <span class="text-dark fw-bolder d-block fs-6"><?= $row->role; ?></span>
                                        </td>
                                        <td>
                                            <span class="text-dark fw-bolder d-block fs-6"><?= $row->divisi; ?></span>
                                        </td>
                                        <td class="text-end">
                                            <button type="button" onclick="get_modal('edit',<?= $row->id_karyawan; ?>)" data-bs-toggle="modal" data-bs-target="#modalTambah" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                                <i class="fa-duotone fa-pencil fs-5"></i>
                                            </button>
                                            <button type="button" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                                <i class="fa-duotone fa-trash fs-5"></i>
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            <tr id="change" class="<?php if (!$result) :  ?> showing <?php else : ?> hiding <?php endif; ?>">
                                <td colspan="6">
                                    <center>Tidak terdapat data karyawan</center>
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
                    <ul class="pagination" id="parent-pagination">
                    </ul>
                </nav>
            </div>
        </div>
        <!--end::Tables Widget 12-->
    </div>
    <!--end::Post-->
</div>

<!-- Modal Tambah -->
<div class=" modal fade" id="modalTambah" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <!--begin::Modal content-->
        <div class="modal-content" id="display_modal">

        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>