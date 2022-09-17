<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
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
    <meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
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

    <!-- Link Font Awesome -->
    <script src="https://kit.fontawesome.com/a2309adc07.js" crossorigin="anonymous"></script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-extended header-fixed header-tablet-and-mobile-fixed">
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
                                    <a href="<?= base_url('home');?>" class="d-flex align-items-center">
                                        <img alt="Logo" src="<?= base_url(); ?>assets/media/logos/logo-white.png" class="h-25px h-lg-30px" />
                                    </a>
                                    <!--end::Logo-->
                                    <div class="align-self-end" id="kt_brand_tabs">
                                        <!--begin::Header tabs-->
                                        <div class="header-tabs overflow-auto mx-4 ms-lg-10 mb-5 mb-lg-0" id="kt_header_tabs" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_header_navs_wrapper', lg: '#kt_brand_tabs'}">
                                            <ul class="nav flex-nowrap">
                                                 <li class="nav-item">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#kt_header_navs_tab_0">Dashboard</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#kt_header_navs_tab_1">Master</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#kt_header_navs_tab_2">Master 2</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#kt_header_navs_tab_3">Master 3</a>
                                                </li>
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
                                                <span class="text-white fs-6 fw-bolder lh-1 mb-1">Superadmn</span>
                                                <span class="text-white opacity-75 fs-6 fw-bold lh-1">HRD</span>
                                            </div>
                                            <!--end::Name-->
                                            <!--begin::Symbol-->
                                            <div class="symbol symbol-30px symbol-md-40px">
                                                <img src="<?= base_url(); ?>assets/media/avatars/150-26.jpg" alt="image" />
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
                                                        <img alt="Logo" src="<?= base_url(); ?>assets/media/avatars/150-26.jpg" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Username-->
                                                    <div class="d-flex flex-column">
                                                        <div class="fw-bolder d-flex align-items-center fs-5">Max Smith
                                                            <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span>
                                                        </div>
                                                        <a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
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
                                                <a href="../../demo20/dist/account/overview.html" class="menu-link px-5">My Profile</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a href="../../demo20/dist/apps/projects/list.html" class="menu-link px-5">
                                                    <span class="menu-text">My Projects</span>
                                                    <span class="menu-badge">
                                                        <span class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span>
                                                    </span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                                                <a href="#" class="menu-link px-5">
                                                    <span class="menu-title">My Subscription</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="../../demo20/dist/account/referrals.html" class="menu-link px-5">Referrals</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="../../demo20/dist/account/billing.html" class="menu-link px-5">Billing</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="../../demo20/dist/account/statements.html" class="menu-link px-5">Payments</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="../../demo20/dist/account/statements.html" class="menu-link d-flex flex-stack px-5">Statements
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="View your statements"></i></a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu separator-->
                                                    <div class="separator my-2"></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content px-3">
                                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                                <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                                <span class="form-check-label text-muted fs-7">Notifications</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a href="../../demo20/dist/account/statements.html" class="menu-link px-5">My Statements</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                                                <a href="#" class="menu-link px-5">
                                                    <span class="menu-title position-relative">Language
                                                        <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
                                                            <img class="w-15px h-15px rounded-1 ms-2" src="<?= base_url(); ?>assets/media/flags/united-states.svg" alt="" /></span></span>
                                                </a>
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="../../demo20/dist/account/settings.html" class="menu-link d-flex px-5 active">
                                                            <span class="symbol symbol-20px me-4">
                                                                <img class="rounded-1" src="<?= base_url(); ?>assets/media/flags/united-states.svg" alt="" />
                                                            </span>English</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="../../demo20/dist/account/settings.html" class="menu-link d-flex px-5">
                                                            <span class="symbol symbol-20px me-4">
                                                                <img class="rounded-1" src="<?= base_url(); ?>assets/media/flags/spain.svg" alt="" />
                                                            </span>Spanish</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="../../demo20/dist/account/settings.html" class="menu-link d-flex px-5">
                                                            <span class="symbol symbol-20px me-4">
                                                                <img class="rounded-1" src="<?= base_url(); ?>assets/media/flags/germany.svg" alt="" />
                                                            </span>German</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="../../demo20/dist/account/settings.html" class="menu-link d-flex px-5">
                                                            <span class="symbol symbol-20px me-4">
                                                                <img class="rounded-1" src="<?= base_url(); ?>assets/media/flags/japan.svg" alt="" />
                                                            </span>Japanese</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="../../demo20/dist/account/settings.html" class="menu-link d-flex px-5">
                                                            <span class="symbol symbol-20px me-4">
                                                                <img class="rounded-1" src="<?= base_url(); ?>assets/media/flags/france.svg" alt="" />
                                                            </span>French</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5 my-1">
                                                <a href="../../demo20/dist/account/settings.html" class="menu-link px-5">Account Settings</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a href="../../demo20/dist/authentication/flows/basic/sign-in.html" class="menu-link px-5">Sign Out</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <div class="menu-content px-5">
                                                    <label class="form-check form-switch form-check-custom form-check-solid pulse pulse-success" for="kt_user_menu_dark_mode_toggle">
                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" name="mode" id="kt_user_menu_dark_mode_toggle" data-kt-url="../../demo20/dist/index.html" />
                                                        <span class="pulse-ring ms-n1"></span>
                                                        <span class="form-check-label text-gray-600 fs-7">Dark Mode</span>
                                                    </label>
                                                </div>
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
                                    <div class="tab-pane fade d-none" id="kt_header_navs_tab_0"></div>
                                    <!--begin::Tab panel-->
                                    <div class="tab-pane fade" id="kt_header_navs_tab_1">
                                        <!--begin::Menu wrapper-->
                                        <div class="header-menu flex-column align-items-stretch flex-lg-row">
                                            <!--begin::Menu-->
                                            <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold align-items-stretch flex-grow-1" id="#kt_header_menu" data-kt-menu="true">
                                                <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item here show menu-lg-down-accordion me-lg-1">
                                                    <span class="menu-link py-3">
                                                        <span class="menu-title">Perusahaan</span>
                                                        <span class="menu-arrow"></span>
                                                    </span>
                                                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                                        <div class="menu-item">
                                                            <a class="menu-link py-3" href="<?= base_url('perusahaan')?>">
                                                                <span class="menu-icon">
                                                                    <i class="fa-duotone fa-building fs-2"></i>
                                                                </span>
                                                                <span class="menu-title">Profil Perusahaan</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a class="menu-link py-3" href="<?= base_url('perusahaan/lokasi_presensi')?>">
                                                                <span class="menu-icon">
                                                                    <i class="fa-duotone fa-map-location-dot fs-2"></i>
                                                                </span>
                                                                <span class="menu-title">Lokasi Presensi</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a class="menu-link py-3" href="<?= base_url('perusahaan/user')?>">
                                                                <span class="menu-icon">
                                                                    <i class="fa-duotone fa-user fs-3"></i>
                                                                </span>
                                                                <span class="menu-title">User</span>
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
                                                        <div  class="menu-item menu-lg-down-accordion">
                                                            <span class="menu-link py-3">
                                                                <span class="menu-icon">
                                                                    <i class="fa-duotone fa-user-tie fs-3"></i>
                                                                </span>
                                                                <span class="menu-title">Daftar Karyawan</span>
                                                            </span>
                                                        </div>
                                                        <div class="menu-item menu-lg-down-accordion">
                                                            <span class="menu-link py-3">
                                                                <span class="menu-icon">
                                                                    <i class="fa-duotone fa-users-viewfinder fs-3"></i>
                                                                </span>
                                                                <span class="menu-title">Grup Karyawan</span>
                                                            </span>
                                                        </div>
                                                        <div class="menu-item menu-lg-down-accordion">
                                                            <span class="menu-link py-3">
                                                                <span class="menu-icon">
                                                                    <i class="fa-duotone fa-group-arrows-rotate fs-3"></i>
                                                                </span>
                                                                <span class="menu-title">Divisi</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
                                                    <span class="menu-link py-3">
                                                        <span class="menu-title">Jadwal Kerja</span>
                                                        <span class="menu-arrow"></span>
                                                    </span>
                                                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                                        <div class="menu-item menu-lg-down-accordion">
                                                            <span class="menu-link py-3">
                                                                <span class="menu-icon">
                                                                    <i class="fa-duotone fa-draw-polygon fs-3"></i>
                                                                </span>
                                                                <span class="menu-title">Pola Kerja</span>
                                                            </span>
                                                        </div>
                                                        <div class="menu-item menu-lg-down-accordion">
                                                            <span class="menu-link py-3">
                                                                <span class="menu-icon">
                                                                    <i class="fa-duotone fa-calendar-circle-user fs-3"></i>
                                                                </span>
                                                                <span class="menu-title">Shift</span>
                                                            </span>
                                                        </div>
                                                        <div class="menu-item menu-lg-down-accordion">
                                                            <span class="menu-link py-3">
                                                                <span class="menu-icon">
                                                                    <i class="fa-duotone fa-calendar-day fs-3"></i>
                                                                </span>
                                                                <span class="menu-title">Hari Libur</span>
                                                            </span>
                                                        </div>
                                                        <div class="menu-item menu-lg-down-accordion">
                                                            <span class="menu-link py-3">
                                                                <span class="menu-icon">
                                                                    <i class="fa-duotone fa-people-arrows fs-3"></i>
                                                                </span>
                                                                <span class="menu-title">Tukar Shift</span>
                                                            </span>
                                                        </div>
                                                        <div class="menu-item menu-lg-down-accordion">
                                                            <span class="menu-link py-3">
                                                                <span class="menu-icon">
                                                                    <i class="fa-duotone fa-timer fs-3"></i>
                                                                </span>
                                                                <span class="menu-title">Lembur</span>
                                                            </span>
                                                        </div>
                                                        <div class="menu-item menu-lg-down-accordion">
                                                            <span class="menu-link py-3">
                                                                <span class="menu-icon">
                                                                    <i class="fa-duotone fa-envelope-open-text fs-3"></i>
                                                                </span>
                                                                <span class="menu-title">Izin Kerja</span>
                                                            </span>
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
                                    <div class="tab-pane fade" id="kt_header_navs_tab_2">
                                    <div class="header-menu flex-column align-items-stretch flex-lg-row">
                                            <!--begin::Menu-->
                                            <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold align-items-stretch flex-grow-1" id="#kt_header_menu" data-kt-menu="true">
                                                <div class="menu-item menu-lg-down-accordion me-lg-1">
                                                    <a class="btn btn-sm btn-light-primary fw-bolder" href="#">Presensi</a>
                                                </div>
                                                <div class="menu-item menu-lg-down-accordion me-lg-1">
                                                    <a class="btn btn-sm btn-light-success fw-bolder" href="#">Persetujuan</a>
                                                </div>
                                            </div>
                                            <!--end::Menu-->
                                        </div>
                                    </div>
                                    <!--end::Tab panel-->
                                    <!--begin::Tab panel-->
                                    <div class="tab-pane fade" id="kt_header_navs_tab_3">
                                        <!--begin::Menu wrapper-->
                                        <div class="header-menu flex-column align-items-stretch flex-lg-row">
                                            <!--begin::Menu-->
                                            <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold align-items-stretch flex-grow-1" id="#kt_header_menu" data-kt-menu="true">
                                                <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item here show menu-lg-down-accordion me-lg-1">
                                                    <span class="menu-link py-3">
                                                        <span class="menu-title">Manajemen</span>
                                                        <span class="menu-arrow"></span>
                                                    </span>
                                                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                                        <div class="menu-item">
                                                            <a class="menu-link py-3" href="#">
                                                                <span class="menu-icon">
                                                                    <i class="fa-duotone fa-magnifying-glass-chart fs-2"></i>
                                                                </span>
                                                                <span class="menu-title">Prospek</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a class="menu-link py-3" href="#">
                                                                <span class="menu-icon">
                                                                    <i class="fa-duotone fa-street-view fs-2"></i>
                                                                </span>
                                                                <span class="menu-title">Kunjungan</span>
                                                            </a>
                                                        </div>
                                                        <div class="menu-item">
                                                            <a class="menu-link py-3" href="#">
                                                                <span class="menu-icon">
                                                                    <i class="fa-duotone fa-wallet fs-3"></i>
                                                                </span>
                                                                <span class="menu-title">Reimbursment</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
                                                    <span class="menu-link py-3">
                                                        <span class="menu-title">Laporan</span>
                                                        <span class="menu-arrow"></span>
                                                    </span>
                                                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                                        <div  class="menu-item menu-lg-down-accordion">
                                                            <span class="menu-link py-3">
                                                                <span class="menu-icon">
                                                                    <i class="fa-duotone fa-memo-circle-info fs-3"></i>
                                                                </span>
                                                                <span class="menu-title">Data Karyawan</span>
                                                            </span>
                                                        </div>
                                                        <div  class="menu-item menu-lg-down-accordion">
                                                            <span class="menu-link py-3">
                                                                <span class="menu-icon">
                                                                    <i class="fa-duotone fa-memo-circle-info fs-3"></i>
                                                                </span>
                                                                <span class="menu-title">Rekap Presensi</span>
                                                            </span>
                                                        </div>
                                                        <div  class="menu-item menu-lg-down-accordion">
                                                            <span class="menu-link py-3">
                                                                <span class="menu-icon">
                                                                    <i class="fa-duotone fa-memo-circle-info fs-3"></i>
                                                                </span>
                                                                <span class="menu-title">Rekap Reimbursment</span>
                                                            </span>
                                                        </div>
                                                        <div  class="menu-item menu-lg-down-accordion">
                                                            <span class="menu-link py-3">
                                                                <span class="menu-icon">
                                                                    <i class="fa-duotone fa-memo-circle-info fs-3"></i>
                                                                </span>
                                                                <span class="menu-title">Rekap Kunjungan</span>
                                                            </span>
                                                        </div>
                                                        <div  class="menu-item menu-lg-down-accordion">
                                                            <span class="menu-link py-3">
                                                                <span class="menu-icon">
                                                                    <i class="fa-duotone fa-memo-circle-info fs-3"></i>
                                                                </span>
                                                                <span class="menu-title">Rekap Prospek</span>
                                                            </span>
                                                        </div>
                                                        <div  class="menu-item menu-lg-down-accordion">
                                                            <span class="menu-link py-3">
                                                                <span class="menu-icon">
                                                                    <i class="fa-duotone fa-memo-circle-info fs-3"></i>
                                                                </span>
                                                                <span class="menu-title">Rekap Izin Kerja</span>
                                                            </span>
                                                        </div>
                                                        <div  class="menu-item menu-lg-down-accordion">
                                                            <span class="menu-link py-3">
                                                                <span class="menu-icon">
                                                                    <i class="fa-duotone fa-memo-circle-info fs-3"></i>
                                                                </span>
                                                                <span class="menu-title">Rekap Lembur</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
                                                    <span class="menu-link py-3">
                                                        <span class="menu-title">Informasi</span>
                                                        <span class="menu-arrow"></span>
                                                    </span>
                                                    <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-rounded-0 py-lg-4 w-lg-225px">
                                                        <div class="menu-item menu-lg-down-accordion">
                                                            <span class="menu-link py-3">
                                                                <span class="menu-icon">
                                                                    <i class="fa-duotone fa-circle-info fs-3"></i>
                                                                </span>
                                                                <span class="menu-title">Informasi</span>
                                                            </span>
                                                        </div>
                                                        <div class="menu-item menu-lg-down-accordion">
                                                            <span class="menu-link py-3">
                                                                <span class="menu-icon">
                                                                    <i class="fa-duotone fa-messages-question fs-3"></i>
                                                                </span>
                                                                <span class="menu-title">Bantuan</span>
                                                            </span>
                                                        </div>
                                                        <div class="menu-item menu-lg-down-accordion">
                                                            <span class="menu-link py-3">
                                                                <span class="menu-icon">
                                                                    <i class="fa-duotone fa-memo fs-3"></i>
                                                                </span>
                                                                <span class="menu-title">Memo</span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Menu wrapper-->
                                    </div>
                                    <!--end::Tab panel-->
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