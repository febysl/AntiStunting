<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-gray-800">Tambah/Perbarui Grafik</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $id; ?>" />
                        <input type="hidden" name="total" value="0" />
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="" class="col-form-label">Tahun</label>
                                <input required type="number" name="tahun" class="form-control" id="" placeholder="Masukkan Tahun" value="<?php echo $fetch['tahun']; ?>">
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
                                <input required type="number" name="total_persentase" class="form-control" id="" placeholder="Masukkan Total Persentase (%)" value="<?php echo $fetch['total_persentase']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button class="btn btn-md btn-success w-100 mb-2">Simpan</button>
                                <a href="<?php echo base_url(); ?>panel/daftar_grafik" class="btn btn-md btn-danger w-100">Batal</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>