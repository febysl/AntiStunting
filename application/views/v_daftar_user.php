<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4"> -->
    <h1 class="h3 mb-0 text-gray-800 mb-3">Daftar Data User</h1>
    <a href="<?php echo base_url(); ?>panel/tambah_user" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm mb-3"><i class="fas fa-pen fa-sm text-white-50"></i> Tambah User</a>
    <!-- <a onclick="$('#filename').click();" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm mb-3" style="cursor: pointer;"><i class="fas fa-file fa-sm text-white-50"></i> Import Dataset</a> -->
    <!-- </div> -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Foto</th>
                                    <th>Role</th>
                                    <th>Desa</th>
                                    <th>Nama Posyandu</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($datasets as $d) { ?>
                                    <tr>
                                        <td><?php echo $no;
                                            $no++; ?></td>
                                        <td><?php echo $d['nama']; ?></td>
                                        <td><?php echo $d['username']; ?></td>
                                        <td><?php echo $d['password']; ?></td>
                                        <td><img class="mb-3" src="<?php echo $d['foto']; ?>" style="width: 100px; height: 100px; object-fit: cover;" /></td>
                                        <td>
                                            <?php
                                            if ($d['role'] == 'admin') {
                                                echo 'Admin';
                                            } else if ($d['role'] == 'user') {
                                                echo 'Kepala Puskesmas';
                                            } else {
                                                echo 'Regu Posyandu';
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($d['role'] == 'posyandu') {
                                                echo $d['desa'];
                                            } else {
                                                echo '-';
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            if ($d['role'] == 'posyandu') {
                                                echo $d['posyandu'];
                                            } else {
                                                echo '-';
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <a class="btn btn-sm btn-info" href="<?php echo base_url(); ?>panel/tambah_user?id=<?php echo $d['id']; ?>"><i class="fa fa-pen"></i></a>
                                            <a class="btn btn-sm btn-danger" href="<?php echo base_url(); ?>panel/delete_user?id=<?php echo $d['id']; ?>"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                    <form id="fileUploadForm" method="POST" enctype="multipart/form-data" action="<?php echo base_url(); ?>panel/import">
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