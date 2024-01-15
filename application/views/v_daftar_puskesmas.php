<div class="container-fluid">
    <h1 class="h3 mb-0 text-gray-800 mb-3">Daftar Data Puskesmas</h1>
    <?php if ($_SESSION['role'] == 'admin') { ?>
        <a href="<?php echo base_url(); ?>panel/tambah_puskesmas" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm mb-3"><i class="fas fa-pen fa-sm text-white-50"></i> Tambah Puskesmas</a>
    <?php } ?>
    <a href="#" id="exportData" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm mb-3"><i class="fas fa-download fa-sm text-white-50"></i> Export Data Puskesmas</a>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatable2" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>No Telepon</th>
                                    <th>Nama Wilayah</th>
                                    <?php if ($_SESSION['role'] == 'admin') { ?>
                                        <th class="exclude-export">Aksi</th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($datasets as $d) { ?>
                                    <tr>
                                        <td><?php echo $no;
                                            $no++; ?></td>
                                        <td><?php echo $d['nama']; ?></td>
                                        <td><?php echo $d['alamat']; ?></td>
                                        <td><?php echo $d['no_telepon']; ?></td>
                                        <td><?php echo $d['nama_wilayah'] ? $d['nama_wilayah'] : '-'; ?></td>
                                        <?php if ($_SESSION['role'] == 'admin') { ?>
                                            <td class="exclude-export">
                                                <a class="btn btn-sm btn-success" href="<?php echo base_url(); ?>panel/tambah_puskesmas?id=<?php echo $d['id']; ?>">Ubah</a>
                                                <a class="btn btn-sm btn-danger" href="<?php echo base_url(); ?>panel/delete_puskesmas?id=<?php echo $d['id']; ?>">Hapus</a>
                                            </td>
                                        <?php } ?>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>