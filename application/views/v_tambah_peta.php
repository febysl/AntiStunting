<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-gray-800">Tambah/Perbarui Peta</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="" class="col-form-label">Kategori</label>
                                <select name="kategori" class="form-control">
                                    <option <?php if ($fetch['kategori'] == "Biasa") { echo "selected='selected'"; } ?> value="Biasa">Biasa</option>
                                    <option <?php if ($fetch['kategori'] == "Perlu Penanganan") { echo "selected='selected'"; } ?> value="Perlu Penanganan">Perlu Penanganan</option>
                                    <option <?php if ($fetch['kategori'] == "Gawat") { echo "selected='selected'"; } ?> value="Gawat">Gawat</option>
                                </select>
                                <!-- <input required type="text" name="kategori" class="form-control" id="" placeholder="Masukkan Kategori" value="<?php echo $fetch['kategori']; ?>"> -->
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="" class="col-form-label">Nama Wilayah</label>
                                <input required type="text" name="wilayah" class="form-control" id="" placeholder="Masukkan Nama Wilayah" value="<?php echo $fetch['wilayah']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="" class="col-form-label">Total Persentase (%)</label>
                                <input required type="number" name="total" class="form-control" id="" placeholder="Masukkan Total Persentase (%)" value="<?php echo $fetch['total']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="" class="col-form-label">Latitude (Titik Kordinat)</label>
                                <input required type="text" name="lat" class="form-control" id="" placeholder="Masukkan Latitude" value="<?php echo $fetch['lat']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="" class="col-form-label">Longitude (Titik Kordinat)</label>
                                <input required type="text" name="long" class="form-control" id="" placeholder="Masukkan Longitude" value="<?php echo $fetch['long']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button class="btn btn-md btn-success w-100 mb-2">Simpan</button>
                                <a href="<?php echo base_url(); ?>panel/daftar_peta" class="btn btn-md btn-danger w-100">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>