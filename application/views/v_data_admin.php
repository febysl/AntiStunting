<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-gray-800">Profil</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="" class="col-form-label">Nama Lengkap</label>
                                <input name="nama" type="text" class="form-control" id="" value="<?php echo $_SESSION['nama']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="" class="col-form-label">Username</label>
                                <input name="username" type="text" class="form-control" id="" value="<?php echo $_SESSION['username']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="" class="col-form-label">Password</label>
                                <input name="password" type="password" class="form-control" id="" value="<?php echo $_SESSION['password']; ?>">
                            </div>
                        </div>
                        <?php if ($_SESSION['role'] == 'posyandu') { ?>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="" class="col-form-label">Nama Desa</label>
                                    <select required name="desa" class="form-control">
                                        <?php foreach ($desa as $d) { ?>
                                            <option <?php if ($d['nama'] == $_SESSION['desa']) {
                                                        echo "selected='selected'";
                                                    }; ?> value="<?php echo $d['nama']; ?>"><?php echo $d['nama']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <label for="" class="col-form-label">Nama Posyandu</label>
                                    <input name="posyandu" type="text" class="form-control" id="" value="<?php echo $_SESSION['posyandu']; ?>">
                                </div>
                            </div>
                        <?php } ?>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <label for="" class="col-form-label">Foto</label><br />
                                <img class="mb-3" src="<?php echo $_SESSION['foto']; ?>" style="width: 200px; height: 200px; object-fit: cover;" /><br />
                                <!-- <input type="text" class="form-control" id="" placeholder="Tidak perlu diisi"> -->
                                <input type="file" name="foto" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button class="btn btn-md btn-success w-100">Simpan</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>