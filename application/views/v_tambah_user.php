<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-gray-800">Tambah/Perbarui User</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="" class="col-form-label">Nama Lengkap</label>
                                <input required type="text" name="nama" class="form-control" id="" placeholder="Masukkan Nama Lengkap" value="<?php echo $fetch['nama']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="" class="col-form-label">Username</label>
                                <input required type="text" name="username" class="form-control" id="" placeholder="Masukkan Username" value="<?php echo $fetch['username']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="" class="col-form-label">Password</label>
                                <input required type="password" name="password" class="form-control" id="" placeholder="Masukkan Password" value="<?php echo $fetch['password']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="" class="col-form-label">Foto</label><br />
                                <?php if ($fetch['foto']) { ?>
                                    <img class="mb-3" src="<?php echo $fetch['foto']; ?>" style="width: 200px; height: 200px; object-fit: cover;" /><br />
                                <?php } ?>
                                <!-- <input type="text" class="form-control" id="" placeholder="Tidak perlu diisi"> -->
                                <input type="file" name="foto" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button class="btn btn-md btn-success w-100 mb-2">Simpan</button>
                                <a href="<?php echo base_url(); ?>panel/daftar_user" class="btn btn-md btn-danger w-100">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->