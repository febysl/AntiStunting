<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800 mb-3">Hasil Akurasi</h1>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Akurasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($datasets as $d) { ?>
                                    <tr>
                                        <td><?php echo $no;
                                            $no++; ?></td>
                                        <td><?php echo $d['description']; ?></td>
                                        <td><?php echo round($d['acc'] * 100, 2); ?>%</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3 mb-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5>Grafik Akurasi</h5>
                    <div class="chart-area">
                        <canvas id="myPieChart2"></canvas>
                    </div>
                    <center class="mt-3">
                        <font class="text-success" style="font-weight: bold;">Sesuai: <?php echo (int) $hasil_acc; ?>%</font>&nbsp;&nbsp;<font class="text-danger" style="font-weight: bold;">Tidak Sesuai: <?php echo 100 - (int) $hasil_acc; ?>%</font>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>