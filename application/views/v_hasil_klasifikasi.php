<div class="container-fluid">
    <div class="align-items-center justify-content-between">
        <h1 class="h3 mb-3 text-gray-800">Hasil Klasifikasi</h1>
   </div>

    <div class="row mt-3 mb-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5>Persentase Grafik Stunting</h5>
                    <div class="chart-area">
                        <canvas id="myBarChart1"></canvas>
                    </div>
                    <center class="mt-3">
                        <font class="text-success" style="font-weight: bold;">Tidak Stunting: <?php echo $stunting_perc > 0 ? 100 - (int) $stunting_perc : 0; ?>%</font>&nbsp;&nbsp;<font class="text-danger" style="font-weight: bold;">Stunting: <?php echo (int) $stunting_perc; ?>%</font>
                    </center>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="mb-1 text-success" style="font-weight: bold;">Tidak Stunting <?php echo $tidak_stunting; ?> data</h5>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $tidak_stunting_perc; ?>%" aria-valuenow="<?php echo $tidak_stunting_perc; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <h5 class="mb-1 text-danger" style="font-weight: bold;">Stunting <?php echo $stunting; ?> data</h5>
                    <div class="progress mb-3">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo 100 - $tidak_stunting_perc; ?>%" aria-valuenow="<?php echo 100 - $tidak_stunting_perc; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>

                    <hr />

                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatable2" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <!-- <th>No KK</th>
                                    <th>NIK</th> -->
                                    <th>Nama Anak</th>
                                    <th>Umur</th>
                                    <th>TB</th>
                                    <th>BB</th>
                                    <th>Status Stunting</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($datasets as $d) { ?>
                                    <tr>
                                        <td><?php echo $no;
                                            $no++; ?></td>
                                        <!-- <td><?php echo $d['no_kk']; ?></td>
                                        <td><?php echo $d['nik']; ?></td> -->
                                        <td><?php echo $d['nama_balita']; ?></td>
                                        <td><?php echo $d['umur']; ?></td>
                                        <td><?php echo $d['tinggi_badan']; ?> cm</td>
                                        <td><?php echo $d['berat_badan']; ?> kg</td>
                                        <td>
                                            <?php if ($d['label'] == 0) { ?>
                                                <a href="#" class="btn btn-success btn-sm">Tidak</a>
                                            <?php } elseif ($d['label'] == 1) { ?>
                                                <a href="#" class="btn btn-danger btn-sm">Iya</a>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <a href="#" id="exportData" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm w-100"><i class="fas fa-download fa-sm text-white-50"></i> Unduh Hasil Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>