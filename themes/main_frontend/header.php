<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <title>WorkPro</title>
    <meta charset="utf-8" />
    <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="WorkPro ~ Platform digital terbaik untuk presensi" />
    <link rel="shortcut icon" href="<?= base_url(); ?>assets/media/logos/logo_workpro.png" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendor Stylesheets(used by this page)-->
    <link href="<?= base_url(); ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="<?= base_url(); ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <style>
        .showing {
            animation: animate 0.4s ease;
        }

        .hiding {
            display: none;
        }
    </style>
    <!-- Link Font Awesome -->
    <script src="https://kit.fontawesome.com/a2309adc07.js" crossorigin="anonymous"></script>
    <?php
    if (isset($css_add) && is_array($css_add)) {
        foreach ($css_add as $css) {
            echo $css;
        }
    } else {
        echo (isset($css_add) && ($css_add != "") ? $css_add : "");
    }
    ?>

</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-extended header-fixed header-tablet-and-mobile-fixed">
    <?php
    $menu = $this->session->userdata('workpro_web_menu')->menu;
    $sub_menu = $this->session->userdata('workpro_web_menu')->sub_menu;
    $detail_sub_menu = $this->session->userdata('workpro_web_menu')->detail_sub_menu;
    ?>
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header">
                    <!--begin::Header top-->
                    <div class="header-top d-flex align-items-stretch flex-grow-1">
                        <!--begin::Container-->
                        <div class="d-flex container-xxl w-100">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack align-items-stretch w-100">
                                <!--begin::Brand-->
                                <div class="d-flex align-items-center align-items-lg-stretch me-5">
                                    <!--begin::Heaeder navs toggle-->
                                    <button class="d-lg-none btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-35px h-35px h-md-40px w-md-40px ms-n2 me-2" id="kt_header_navs_toggle">
                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
                                                <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--end::Heaeder navs toggle-->
                                    <!--begin::Logo-->
                                    <a class="d-flex align-items-center">
                                        <img alt="Logo" src="<?= base_url(); ?>assets/media/logos/logo-white.png" class="h-25px h-lg-30px" />
                                    </a>
                                    <!--end::Logo-->
                                    <div class="align-self-end" id="kt_brand_tabs">
                                        <!--begin::Header tabs-->
                                        <div class="header-tabs overflow-auto mx-4 ms-lg-10 mb-5 mb-lg-0" id="kt_header_tabs" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_header_navs_wrapper', lg: '#kt_brand_tabs'}">
                                            <ul class="nav flex-nowrap">
                                                <?php if ($menu) : ?>
                                                    <?php foreach ($menu as $row) : ?>
                                                        <li class="nav-item">
                                                            <a class="nav-link 
                                                            <?php if ($row->tipe == 3  || $row->tipe == 1) {
                                                                echo set_active($this->uri->segment(1), strtolower($row->link), $this->uri->segment(2), array());
                                                            } else {
                                                                $fil = 'a' . $row->id_menu;
                                                                // $arr_sub = [];
                                                                $last_link = '';
                                                                $last_link2 = '';
                                                                $arr_active2 = [];
                                                                if (isset($sub_menu->$fil)) {
                                                                    foreach ($sub_menu->$fil as $keyval) {
                                                                        if ($keyval->tipe == 2) {
                                                                            if ($last_link != $keyval->link) {
                                                                                $fil3 = 'a' . $keyval->id_sub_menu;
                                                                                $arr_active = [];
                                                                                if (isset($detail_sub_menu->$fil3)) {
                                                                                    foreach ($detail_sub_menu->$fil3 as $kv) {
                                                                                        $ac = my_explode($kv->link, "/", 1);
                                                                                        $arr_active[] = $ac;
                                                                                    }
                                                                                }
                                                                                echo (set_active($this->uri->segment(1), strtolower($keyval->link), $this->uri->segment(2), $arr_active));
                                                                            }
                                                                            $last_link = $keyval->link;
                                                                        } else {
                                                                            if ($last_link2 != $keyval->link) {
                                                                                $arr_active2 = [];
                                                                            }
                                                                            $posisi = strpos($keyval->link, "/");
                                                                            $ac = my_explode($keyval->link, "/", 1);
                                                                            $arr_active2[] = $ac;
                                                                            if ($last_link2 != $keyval->link) {
                                                                                echo (set_active($this->uri->segment(1), strtolower($row->link), $this->uri->segment(2), $arr_active2));
                                                                            }

                                                                            $last_link2 = $keyval->link;
                                                                        }
                                                                    }
                                                                }
                                                            } ?>
                                                            " <?php if ($row->tipe == 1 || $row->tipe == 3) : ?>href="<?= base_url($row->link); ?>" <?php else : ?>data-bs-toggle="tab" href="<?= '#' . $row->link; ?>" <?php endif; ?>><?= $row->nama; ?></a>
                                                        </li>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                        <!--end::Header tabs-->
                                    </div>
                                </div>
                                <!--end::Brand-->
                                <!--begin::Topbar-->
                                <div class="d-flex align-items-center flex-shrink-0">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center ms-1" id="kt_header_user_menu_toggle">
                                        <!--begin::User info-->
                                        <div class="btn btn-flex align-items-center bg-hover-white bg-hover-opacity-10 py-2 px-2 px-md-3" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                            <!--begin::Name-->
                                            <div class="d-none d-md-flex flex-column align-items-end justify-content-center me-2 me-md-4">
                                                <span class="text-white fs-6 fw-bolder lh-1 mb-1"><?= tampil_text($this->session->userdata('workpro_web_nama'), 17) ?></span>
                                                <span class="text-white opacity-75 fs-6 fw-bold lh-1"><?= tampil_text($this->session->userdata('workpro_web_role'), 17) ?></span>
                                            </div>
                                            <!--end::Name-->
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px symbol-md-40px">
                                                <img src="<?= $this->session->userdata('workpro_web_foto') ?>" alt="image" />
                                            </div>
                                            <!--end::Symbol-->
                                        </div>
                                        <!--end::User info-->
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content d-flex align-items-center px-3">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-50px me-5">
                                                        <img alt="Logo" src="<?= $this->session->userdata('workpro_web_foto') ?>" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Username-->
                                                    <div class="d-flex flex-column">
                                                        <div class="fw-bolder d-flex align-items-center fs-5"><?= tampil_text($this->session->userdata('workpro_web_nama'), 17) ?></div>
                                                        <a href="#" class="fw-bold text-muted text-hover-primary fs-7"><?= tampil_text($this->session->userdata('workpro_web_email'), 17) ?></a>
                                                    </div>
                                                    <!--end::Username-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a href="<?= base_url('profil'); ?>" class="menu-link px-5">Profil</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a href="<?= base_url('auth/logout'); ?>" class="menu-link px-5">Keluar</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::User -->
                                    <!--begin::Heaeder menu toggle-->
                                    <!--end::Heaeder menu toggle-->
                                </div>
                                <!--end::Topbar-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Header top-->
                    <!--begin::Header navs-->
                    <div class="header-navs d-flex align-items-stretch flex-stack h-lg-70px w-100 py-5 py-lg-0" id="kt_header_navs" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_navs_toggle" data-kt-swapper="true" data-kt-swapper-mode="append" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header'}">
                        <!--begin::Container-->
                        <div class="d-lg-flex container-xxl w-100">
                            <!--begin::Wrapper-->
                            <div class="d-lg-flex flex-column justify-content-lg-center w-100" id="kt_header_navs_wrapper">
                                <!--begin::Header tab content-->
                                <div class="tab-content" data-kt-scroll="true" data-kt-scroll-activate="{default: true, lg: false}" data-kt-scroll-height="auto" data-kt-scroll-offset="70px">
                                    <?php if ($menu) : ?>
                                        <?php foreach ($menu as $row) : ?>
                                            <!--begin::Tab panel-->
                                            <div class="tab-pane 
                                            <?php if ($row->tipe == 3  || $row->tipe == 1) {
                                                echo set_active_tab($this->uri->segment(1), strtolower($row->link), $this->uri->segment(2), array());
                                            } else {
                                                $fil = 'a' . $row->id_menu;
                                                // $arr_sub = [];
                                                $last_link = '';
                                                $last_link2 = '';
                                                $arr_active2 = [];
                                                if (isset($sub_menu->$fil)) {
                                                    foreach ($sub_menu->$fil as $keyval) {
                                                        if ($keyval->tipe == 2) {
                                                            if ($last_link != $keyval->link) {
                                                                $fil3 = 'a' . $keyval->id_sub_menu;
                                                                $arr_active = [];
                                                                if (isset($detail_sub_menu->$fil3)) {
                                                                    foreach ($detail_sub_menu->$fil3 as $kv) {
                                                                        $ac = my_explode($kv->link, "/", 1);
                                                                        $arr_active[] = $ac;
                                                                    }
                                                                }
                                                                echo (set_active_tab($this->uri->segment(1), strtolower($keyval->link), $this->uri->segment(2), $arr_active));
                                                            }
                                                            $last_link = $keyval->link;
                                                        } else {
                                                            if ($last_link2 != $keyval->link) {
                                                                $arr_active2 = [];
                                                            }
                                                            $ac = my_explode($keyval->link, "/", 1);
                                                            $arr_active2[] = $ac;
                                                            if ($last_link2 != $keyval->link) {
                                                                echo (set_active_tab($this->uri->segment(1), strtolower($row->link), $this->uri->segment(2), $arr_active2));
                                                            }

                                                            $last_link2 = $keyval->link;
                                                        }
                                                    }
                                                }
                                            } ?>
                                            " id="<?= $row->link; ?>">
                                                <!--begin::Menu wrapper-->
                                                <div class="header-menu flex-column align-items-stretch flex-lg-row">
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold align-items-stretch flex-grow-1" id="#kt_header_menu" data-kt-menu="true">
                                                        <?php $field = 'a' . $row->id_menu;
                                                        if (isset($sub_menu->$field)) : ?>
                                                            <?php foreach ($sub_menu->$field as $key) : ?>

                                                                <?php if ($key->tipe == 2) : ?>
                                                                    <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
                                                                        <?php
                                                                        $domain = my_explode($key->link, '/', 0);

                                                                        $fil3 = 'a' . $key->id_sub_menu;
                                                                        $arr_active = [];
                                                                        if (isset($detail_sub_menu->$fil3)) {
                                                                            foreach ($detail_sub_menu->$fil3 as $kv) {
                                                                                $ac = my_explode($kv->link, '/', 1);
                                                                                $arr_active[] = $ac;
                                                                            }
                                                                        }
                                                                        ?>
                                                                        <span class="menu-link py-3 <?= set_active($this->uri->segment(1), strtolower($domain), $this->uri->segment(2), $arr_active); ?>">
                                                                            <span class="menu-title"><?= $key->nama; ?></span>
                                                                            <span class="menu-arrow"></span>
                                                                        </span>
                                                                        <?php $fiel = 'a' . $key->id_sub_menu;
                                                                        if (isset($detail_sub_menu->$fiel)) : ?>
                                                                            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                                                                <?php foreach ($detail_sub_menu->$fiel as $dtl) : ?>
                                                                                    <?php
                                                                                    $link = [];
                                                                                    $link[] = my_explode($dtl->link, '/', 1);
                                                                                    ?>
                                                                                    <div class="menu-item">
                                                                                        <a class="menu-link py-3 <?= set_active($this->uri->segment(1), strtolower($domain), $this->uri->segment(2), $link); ?>" href="<?= base_url($dtl->link) ?>">
                                                                                            <span class="menu-icon">
                                                                                                <?= icon_header($dtl->icon); ?>
                                                                                            </span>
                                                                                            <span class="menu-title"><?= $dtl->nama; ?></span>
                                                                                        </a>
                                                                                    </div>
                                                                                <?php endforeach; ?>
                                                                            </div>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                <?php else : ?>
                                                                    <div class="menu-item menu-lg-down-accordion me-lg-1">
                                                                        <?php
                                                                        $ck = my_explode($key->link, '/');
                                                                        $link = [];
                                                                        if (is_array($ck)) {
                                                                            $dom = $ck[0];
                                                                            $link[] = $ck[1];
                                                                        } else {
                                                                            $dom = $key->link;
                                                                        }
                                                                        ?>
                                                                        <!-- JANCUK GA MARI MARI -->
                                                                        <a class="menu-link py-3 <?= set_active($this->uri->segment(1), strtolower($dom), $this->uri->segment(2), $link); ?>" <?php if ($key->tipe == 1) : ?> href="<?= base_url($key->link) ?>" <?php else : ?>href="<?= $key->link; ?>" data-kt-scroll-toggle="true" data-kt-drawer-dismiss="true" <?php endif ?>>
                                                                            <span class="menu-title"><?= $key->nama; ?></span>
                                                                        </a>
                                                                    </div>
                                                                <?php endif; ?>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </div>
                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::Menu wrapper-->
                                            </div>
                                            <!--end::Tab panel-->
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                                <!--end::Header tab content-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Header navs-->
                </div>
                <!--end::Header-->