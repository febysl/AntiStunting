<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-12 col-md-12 mb-4">
            <div class="card shadow h-100 py-2 bg-primary">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300" style="color: #fff !important;"></i>
                        </div>
                        <div class="col ml-4">
                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="color: #fff !important;"><?php echo $data_balita; ?></div>
                            <div class="text-s font-weight-bold text-primary text-uppercase mb-1" style="color: #fff !important;">
                                Jumlah Data Anak</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="col-xl-4 col-md-4 mb-4">
            <div class="card shadow h-100 py-2 bg-primary">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-file fa-2x text-gray-300" style="color: #fff !important;"></i>
                        </div>
                        <div class="col ml-4">
                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="color: #fff !important;"><?php echo $data_latih; ?></div>
                            <div class="text-s font-weight-bold text-primary text-uppercase mb-1" style="color: #fff !important;">
                                Jumlah Data Latih</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-md-4 mb-4">
            <div class="card shadow h-100 py-2 bg-primary">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <i class="fas fa-pen fa-2x text-gray-300" style="color: #fff !important;"></i>
                        </div>
                        <div class="col ml-4">
                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="color: #fff !important;"><?php echo $data_uji; ?></div>
                            <div class="text-s font-weight-bold text-primary text-uppercase mb-1" style="color: #fff !important;">
                                Jumlah Data Uji</div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

    <!-- Content Row -->

    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik Data Stunting</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myPieChart3"></canvas>
                    </div>
                    <center class="mt-3">
                        <font class="text-danger" style="font-weight: bold;">Stunting: <?php echo $stunting; ?> Anak</font>&nbsp;&nbsp;<font class="text-success" style="font-weight: bold;">Tidak Stunting: <?php echo (int) $tidak_stunting; ?> Anak</font>
                        </font>
                    </center>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik Data Anak</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myPieChart4"></canvas>
                    </div>
                    <center class="mt-3">
                        <font class="text-success" style="font-weight: bold;">Laki-Laki: <?php echo $l_data_anak; ?> Anak</font>&nbsp;&nbsp;<font class="text-info" style="font-weight: bold;">Perempuan: <?php echo (int) $p_data_anak; ?> Anak</font>
                        </font>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->