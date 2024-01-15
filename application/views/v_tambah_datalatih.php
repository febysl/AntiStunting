<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Anggota > <strong>Daftar Anggota</strong></h1>
        <a href="<?php echo base_url(); ?>panel/tambah_anggota" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Anggota</a>
    </div> -->

    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-gray-800">Tambah/Perbarui Data Latih</h4>
                </div>
                <div class="card-body">
                    <!-- <form method="post" action="">
                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                        <div class="form-group">
                            <label for="" class="col-form-label">Data Balita</label>
                            <select required class="form-control" name="id_balita">
                                <option value="">Pilih Data Balita</option>
                                <?php foreach ($balita as $b) { ?>
                                    <option <?php if ($fetch['id_balita'] == $b['id']) {
                                                echo "selected='selected'";
                                            } ?> value="<?php echo $b['id']; ?>"><?php echo $b['nik'] ? 'NIK: ' . $b['nik'] . ' - ' : ''; ?> <?php echo $b['nama_balita']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Umur</label>
                            <input required type="number" class="form-control" name="umur" value="<?php echo $fetch['umur']; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Berat Badan (KG)</label>
                            <input required type="text" class="form-control" name="berat_badan" value="<?php echo $fetch['berat_badan']; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Tinggi Badan (CM)</label>
                            <input required type="text" class="form-control" name="tinggi_badan" value="<?php echo $fetch['tinggi_badan']; ?>" />
                        </div>
                        <input type="hidden" class="form-control" name="lingkar_lengan" value="<?php echo $fetch['lingkar_lengan'] ? $fetch['lingkar_lengan'] : 0; ?>" />
                        <input type="hidden" class="form-control" name="lingkar_kepala" value="<?php echo $fetch['lingkar_kepala'] ? $fetch['lingkar_kepala'] : 0; ?>" />

                        <div class="form-group">
                            <label for="" class="col-form-label">Label Manual (Stunting)</label>
                            <select class="form-control" name="label">
                                <option <?php if ($fetch['label'] == '1') {
                                            echo "selected='selected'";
                                        } ?> value="1">Iya</option>
                                <option <?php if ($fetch['label'] == '0') {
                                            echo "selected='selected'";
                                        } ?> value="0">Tidak</option>
                            </select>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button class="btn btn-md btn-success w-100 mb-2">Simpan</button>
                                <a href="<?php echo base_url(); ?>panel/daftar_datalatih" class="btn btn-md btn-danger w-100">Batal</a>
                            </div>
                        </div>
                    </form> -->
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
                            <input required type="text" class="form-control" name="nama_balita" value="<?php echo $fetch['nama_balita']; ?>" />
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
                            <input required type="number" class="form-control" name="umur" value="<?php echo $fetch['umur']; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Berat Badan (KG)</label>
                            <input required type="text" class="form-control" name="berat_badan" value="<?php echo $fetch['berat_badan']; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Tinggi Badan (CM)</label>
                            <input required type="text" class="form-control" name="tinggi_badan" value="<?php echo $fetch['tinggi_badan']; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="<?php echo $fetch['alamat']; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Nama Wilayah</label>
                            <input type="text" class="form-control" name="nama_wilayah" value="<?php echo $fetch['nama_wilayah']; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Nama Wali</label>
                            <input required type="text" class="form-control" name="nama_orangtua" value="<?php echo $fetch['nama_orangtua']; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Nomor Wali</label>
                            <input required type="number" class="form-control" name="nomor_orangtua" value="<?php echo $fetch['nomor_orangtua']; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="" class="col-form-label">Nama Posyandu</label>
                            <input required type="text" class="form-control" name="nama_posyandu" value="<?php echo $fetch['nama_posyandu']; ?>" />
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
<!-- /.container-fluid -->