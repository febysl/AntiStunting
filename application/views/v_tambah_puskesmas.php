<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-gray-800">Tambah/Perbarui Puskesmas</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="" class="col-form-label">Nama</label>
                                <input required type="text" name="nama" class="form-control" id="" placeholder="Masukkan Nama Puskesmas" value="<?php echo $fetch['nama']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="" class="col-form-label">Alamat</label>
                                <input required type="text" name="alamat" class="form-control" id="" placeholder="Masukkan Alamat" value="<?php echo $fetch['alamat']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="" class="col-form-label">No Telepon</label>
                                <input required type="text" name="no_telepon" class="form-control" id="" placeholder="Masukkan No Telepon" value="<?php echo $fetch['no_telepon']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="" class="col-form-label">Nama Wilayah</label>
                                <input type="text" name="nama_wilayah" class="form-control" id="" placeholder="Masukkan Nama Wilayah" value="<?php echo $fetch['nama_wilayah']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button class="btn btn-md btn-success w-100 mb-2">Simpan</button>
                                <a href="<?php echo base_url(); ?>panel/daftar_puskesmas" class="btn btn-md btn-danger w-100">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>