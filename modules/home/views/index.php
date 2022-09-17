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
            <!--end::Description--></h1>
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
        <!--begin::Row-->
        <div class="row g-5 g-lg-10">
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
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::List Widget 4-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-xl-4 mb-xl-10">
                <!--begin::List Widget 4-->
                <div class="card h-xl-100">
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
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Superadmin</a>
                                    <span class="text-muted fw-bold d-block fs-7">HRD</span>
                                </div>
                                <a href="#" class="btn btn-sm btn-icon btn-light w-40px h-40px">
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
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Eka Dharmawan Rasiawan</a>
                                    <span class="text-muted fw-bold d-block fs-7">CEO</span>
                                </div>
                                <a href="#" class="btn btn-sm btn-icon btn-light w-40px h-40px">
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
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Rinaldi Usman</a>
                                    <span class="text-muted fw-bold d-block fs-7">CTO</span>
                                </div>
                                <a href="#" class="btn btn-sm btn-icon btn-light w-40px h-40px">
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
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Reza Prasetio</a>
                                    <span class="text-muted fw-bold d-block fs-7">VP Operation</span>
                                </div>
                                <a href="#" class="btn btn-sm btn-icon btn-light w-40px h-40px">
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
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Santo Romadhoni</a>
                                    <span class="text-muted fw-bold d-block fs-7">Senior Developer</span>
                                </div>
                                <a href="#" class="btn btn-sm btn-icon btn-light w-40px h-40px">
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
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Sidatata Al Jennar</a>
                                    <span class="text-muted fw-bold d-block fs-7">Senior Developer</span>
                                </div>
                                <a href="#" class="btn btn-sm btn-icon btn-light w-40px h-40px">
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
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Sidatata Al Jennar</a>
                                    <span class="text-muted fw-bold d-block fs-7">Senior Developer</span>
                                </div>
                                <a href="#" class="btn btn-sm btn-icon btn-light w-40px h-40px">
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
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Saka Dana Asmara</a>
                                    <span class="text-muted fw-bold d-block fs-7">UI Designer</span>
                                </div>
                                <a href="#" class="btn btn-sm btn-icon btn-light w-40px h-40px">
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
            <!--begin::Col-->
            <div class="col-xl-4 mb-xl-10">
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
                    <!--begin::Body-->
                    <div class="card-body pt-5" style="overflow-y: scroll; height: 175px;">

                    </div>
                    <!--end::Body-->
                </div>
                <!--end::List Widget 4-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Post-->
</div>
<!--end::Container-->

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Language', 'Speakers (in millions)'],
        ['Hadir',  5.85],
        ['Izin',  1.66],
        ['Alpha', 1.316],
        ['Pulang Awal', 2.791],
        ['Terlambat', 2.500]
    ]);

    var options = {
        legend: 'none',
        pieSliceText: 'label',
        pieStartAngle: 100,
        'width' :398,
        'height' :398,
        colors: ['#e0440e', '#e6693e', '#ec8f6e', '#f3b49f', '#f6c7b6']
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
    }
</script>