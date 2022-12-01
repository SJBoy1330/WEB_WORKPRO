<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>finwallapp V2.0 - Mobile HTML template</title>

    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="manifest" href="manifest.json" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="<?= base_url()?>assets/web_view/img/favicon180.png" sizes="180x180">
    <link rel="icon" href="<?= base_url()?>assets/web_view/img/favicon32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="<?= base_url()?>assets/web_view/img/favicon16.png" sizes="16x16" type="image/png">

    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- swiper carousel css -->
    <link rel="stylesheet" href="<?= base_url()?>assets/web_view/vendor/swiperjs-6.6.2/swiper-bundle.min.css">

    <!-- style css for this template -->
    <link href="<?= base_url()?>assets/web_view/css/style.css" rel="stylesheet" id="style">

    <!-- Font Awesome-->
    <script src="https://kit.fontawesome.com/ec75c6c12e.js" crossorigin="anonymous"></script>

</head>

<body class="body-scroll" data-page="index" style="background-image: url(../HTML/<?= base_url()?>assets/web_view/images/bg-3.png); background-repeat: no-repeat; background-size: cover; background-position: center; background-color: #F5F9F8;">

    <!-- loader section -->
    <div class="container-fluid loader-wrap">
        <div class="row h-100">
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto text-center align-self-center">
                <div class="logo-wallet">
                    <div class="wallet-bottom">
                    </div>
                    <div class="wallet-cards"></div>
                    <div class="wallet-top">
                    </div>
                </div>
                <p class="mt-4"><span class="text-secondary">Track finance with Wallet app</span><br><strong>Please
                        wait...</strong></p>
            </div>
        </div>
    </div>
    <!-- loader section ends -->

    <!-- Begin page -->
    <main class="h-100">

        <!-- Header -->
        <header class="header detail position-fixed">
            <div class="row">
                <div class="col-auto d-flex align-items-center">
                    <a href="index-SD.html" class="btn btn-44">
                        <img src="<?= base_url()?>assets/web_view/icons/kembali.svg" width="24" alt="">
                    </a>
                    <span class="detail">Detail Pengumuman</span>
                </div>
            </div>
        </header>
        <!-- Header ends -->

        <!-- main page content -->
        <div class="main-container container mt-3">
            <div class="row mb-2">
                <div class="col-12">
                    <a href="list_presensi.html" class="card grid-1">
                        <div class="card-body">
                            <h5 class="card-title text-white mb-0">Presensi</h5>
                            <span class="card-subtitle mb-2 text-white fw-light" style="font-size: 15px;">10 Pengajuan</span>
                            <img src="<?= base_url()?>assets/web_view/ilustrasi/persetujuan.png" class="position-absolute" width="150" style="bottom: 5px; right: 20px;">
                            <img src="<?= base_url()?>assets/web_view/images/background-image-persetujuan.png" class="position-absolute" width="125" style="bottom: 0px; left: 0px; border-radius: 0 0 0 10px;">
                        </div>
                    </a>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-6 pe-1">
                    <a href="list_lembur.html" class="card grid-2">
                        <div class="card-body">
                            <h6 class="card-title text-white mb-0">Lembur</h6>
                            <span class="card-subtitle mb-2 text-white fw-light" style="font-size: 12px;">12 Pengajuan</span>
                            <img src="<?= base_url()?>assets/web_view/ilustrasi/lembur.png" class="position-absolute" width="95" style="bottom: 5px; right: 10px; z-index: 1;">
                            <img src="<?= base_url()?>assets/web_view/images/background-image-lembur-2.png" class="position-absolute" width="60" style="top: 0px; right: 0px; border-radius: 0 10px 0 0px;">
                            <img src="<?= base_url()?>assets/web_view/images/background-image-lembur.png" class="position-absolute" width="70" style="bottom: 0px; left: 0px; border-radius: 0 0 0 10px;">
                        </div>
                    </a>
                </div>
                <div class="col-6 ps-1">
                    <a href="list_reimburse.html" class="card grid-3">
                        <div class="card-body">
                            <h6 class="card-title text-white mb-0">Reimburse</h6>
                            <span class="card-subtitle mb-2 text-white fw-light" style="font-size: 12px;">10 Pengajuan</span>
                            <img src="<?= base_url()?>assets/web_view/ilustrasi/reimburse.png" class="position-absolute" width="95" style="bottom: 5px; right: 10px; z-index: 1;">
                            <img src="<?= base_url()?>assets/web_view/images/background-image-reimburse-2.png" class="position-absolute" width="60" style="top: 0px; right: 0px; border-radius: 0 10px 0 0px;">
                            <img src="<?= base_url()?>assets/web_view/images/background-image-reimburse.png" class="position-absolute" width="70" style="bottom: 0px; left: 0px; border-radius: 0 0 0 10px;">
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-6 pe-1">
                    <a href="list_tukar_shift.html" class="card grid-4">
                        <div class="card-body">
                            <h6 class="card-title text-white mb-0">Tukar Shift</h6>
                            <span class="card-subtitle mb-2 text-white fw-light" style="font-size: 12px;">10 Pengajuan</span>
                            <img src="<?= base_url()?>assets/web_view/ilustrasi/tukar_shift.png" class="position-absolute" width="95" style="bottom: 5px; right: 10px; z-index: 1;">
                            <img src="<?= base_url()?>assets/web_view/images/background-image-tukar-shift-2.png" class="position-absolute" width="60" style="top: 0px; right: 0px; border-radius: 0 10px 0 0px;">
                            <img src="<?= base_url()?>assets/web_view/images/background-image-tukar-shift.png" class="position-absolute" width="70" style="bottom: 0px; left: 0px; border-radius: 0 0 0 10px;">
                        </div>
                    </a>
                </div>
                <div class="col-6 ps-1">
                    <a href="list_izin_kerja.html" class="card grid-5">
                        <div class="card-body">
                            <h6 class="card-title text-white mb-0">Izin Kerja</h6>
                            <span class="card-subtitle mb-2 text-white fw-light" style="font-size: 12px;">12 Pengajuan</span>
                            <img src="<?= base_url()?>assets/web_view/ilustrasi/izin_kerja.png" class="position-absolute" width="95" style="bottom: 5px; right: 10px; z-index: 1;">
                            <img src="<?= base_url()?>assets/web_view/images/background-image-izin-kerja-2.png" class="position-absolute" width="60" style="top: 0px; right: 0px; border-radius: 0 10px 0 0px;">
                            <img src="<?= base_url()?>assets/web_view/images/background-image-izin-kerja.png" class="position-absolute" width="70" style="bottom: 0px; left: 0px; border-radius: 0 0 0 10px;">
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- main page content ends -->


    </main>
    <!-- Page ends-->


    <!-- Required jquery and libraries -->
    <script src="<?= base_url()?>assets/web_view/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url()?>assets/web_view/js/popper.min.js"></script>
    <script src="<?= base_url()?>assets/web_view/vendor/bootstrap-5/js/bootstrap.bundle.min.js"></script>

    <!-- Customized jquery file  -->
    <script src="<?= base_url()?>assets/web_view/js/main.js"></script>
    <script src="<?= base_url()?>assets/web_view/js/color-scheme.js"></script>

    <!-- PWA app service registration and works -->
    <script src="<?= base_url()?>assets/web_view/js/pwa-services.js"></script>

    <!-- Chart js script -->
    <script src="<?= base_url()?>assets/web_view/vendor/chart-js-3.3.1/chart.min.js"></script>

    <!-- Progress circle js script -->
    <script src="<?= base_url()?>assets/web_view/vendor/progressbar-js/progressbar.min.js"></script>

    <!-- swiper js script -->
    <script src="<?= base_url()?>assets/web_view/vendor/swiperjs-6.6.2/swiper-bundle.min.js"></script>

    <!-- page level custom script -->
    <script src="<?= base_url()?>assets/web_view/js/app.js"></script>

    <!-- Script JS pagination Jadwal -->
    <script src="<?= base_url()?>assets/web_view/js/pagination-carousel.js"></script>


</body>

</html>