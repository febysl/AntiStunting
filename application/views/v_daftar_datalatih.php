<?php
header('Content-Type: text/html; charset=UTF-8');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4"> -->
    <h1 class="h3 mb-0 text-gray-800 mb-3">Daftar Data Latih</h1>
    <?php if ($_SESSION['role'] == 'admin') { ?>
        <a href="<?php echo base_url(); ?>panel/tambah_datalatih" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm mb-3"><i class="fas fa-pen fa-sm text-white-50"></i> Tambah Data Latih</a>
        <!-- <a href="<?php echo base_url(); ?>assets/template_new.csv" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm mb-3"><i class="fas fa-file fa-sm text-white-50"></i> Download Template</a> -->
    <?php } ?>
    <br />
    <?php if ($_SESSION['role'] == 'admin') { ?>
        <!-- <a onclick="$('#filename').click();" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm mb-3" style="cursor: pointer;"><i class="fas fa-upload fa-sm text-white-50"></i> Import Data Latih</a> -->
    <?php } ?>
    <a href="#" id="exportData" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm mb-3"><i class="fas fa-download fa-sm text-white-50"></i> Export Data Latih</a>
    <!-- </div> -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatable2" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Anak</th>
                                    <th>Umur</th>
                                    <th>TB</th>
                                    <th>BB</th>
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
                                        <td><?php echo $d['nama_balita']; ?></td>
                                        <td><?php echo $d['umur']; ?></td>
                                        <td><?php echo $d['tinggi_badan']; ?> cm</td>
                                        <td><?php echo $d['berat_badan']; ?> kg</td>
                                        <?php if ($_SESSION['role'] == 'admin') { ?>
                                            <td class="exclude-export">
                                                <a class="btn btn-sm btn-success" href="<?php echo base_url(); ?>panel/tambah_datalatih?id=<?php echo $d['id']; ?>">Ubah</a>
                                                <a class="btn btn-sm btn-danger" href="<?php echo base_url(); ?>panel/delete_datalatih?id=<?php echo $d['id']; ?>">Hapus</a>
                                            </td>
                                        <?php } ?>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <form id="fileUploadForm" method="POST" enctype="multipart/form-data" action="<?php echo base_url(); ?>panel/import2">
                        <input style="display: none;" type="file" id="filename" name="file" />
                    </form>
                    <script>
                        // Get a reference to the file input element
                        const fileInput = document.getElementById('filename');

                        // Add an event listener to the file input element
                        fileInput.addEventListener('change', () => {
                            // Check if a file has been selected
                            if (fileInput.files.length > 0) {
                                // Automatically submit the form when a file is selected
                                document.getElementById('fileUploadForm').submit();
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->