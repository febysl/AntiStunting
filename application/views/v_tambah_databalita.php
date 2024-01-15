<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-gray-800">Tambah/Perbarui Data Anak</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="">
                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                        <!-- <div class="form-group">
                            <label for="" class="col-form-label">No KK</label>
                            <input type="number" class="form-control" name="no_kk" value="<?php echo $fetch['no_kk']; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">NIK</label>
                            <input required type="number" class="form-control" name="nik" value="<?php echo $fetch['nik']; ?>" />
                        </div> -->
                        <div class="form-group">
                            <label for="" class="col-form-label">Nama Anak</label>
                            <input placeholder="Masukkan Nama Anak" required type="text" class="form-control" name="nama_balita" value="<?php echo $fetch['nama_balita']; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin">
                                <option <?php if ($fetch['jenis_kelamin'] == 'L') {
                                            echo "selected='selected'";
                                        } ?> value="L">Laki-Laki</option>
                                <option <?php if ($fetch['jenis_kelamin'] == 'P') {
                                            echo "selected='selected'";
                                        } ?> value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Tanggal Lahir</label>
                            <input required type="date" class="form-control" name="tanggal_lahir" value="<?php echo $fetch['tanggal_lahir']; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Umur</label>
                            <input placeholder="Masukkan Umur" required type="number" class="form-control" name="umur" value="<?php echo $fetch['umur']; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Berat Badan (KG)</label>
                            <input placeholder="Masukkan Berat Badan (KG)" required type="text" class="form-control" name="berat_badan" value="<?php echo $fetch['berat_badan']; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Tinggi Badan (CM)</label>
                            <input placeholder="Masukkan Tinggi Badan (CM)" required type="text" class="form-control" name="tinggi_badan" value="<?php echo $fetch['tinggi_badan']; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Alamat</label>
                            <input placeholder="Masukkan Alamat" type="text" class="form-control" name="alamat" value="<?php echo $fetch['alamat']; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Nama Wilayah</label>
                            <input placeholder="Masukkan Nama Wilayah" type="text" class="form-control" name="nama_wilayah" value="<?php echo $fetch['nama_wilayah']; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Nama Wali</label>
                            <input placeholder="Masukkan Nama Wali" required type="text" class="form-control" name="nama_orangtua" value="<?php echo $fetch['nama_orangtua']; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Nomor Wali</label>
                            <input placeholder="Masukkan Nomor Wali" required type="number" class="form-control" name="nomor_orangtua" value="<?php echo $fetch['nomor_orangtua']; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Nama Posyandu</label>
                            <input placeholder="Masukkan Nama Posyandu" required type="text" class="form-control" name="nama_posyandu" value="<?php echo $fetch['nama_posyandu']; ?>" />
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button class="btn btn-md btn-success w-100 mb-2">Simpan</button>
                                <a href="<?php echo base_url(); ?>panel/daftar_databalita" class="btn btn-md btn-danger w-100">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>