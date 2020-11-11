<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Pelanggan
                </div>

                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert"><?= validation_errors() ?></div>
                    <?php endif ?>
                    <form action="" method="post">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="idpelanggan"> idPelanggan </label>
                            <input type="text" class="form-control" id="idpelanggan" name="idpelanggan">
                        </div>

                        <div class="form-group">
                            <label for="namapelanggan"> Nama Pelanggan</label>
                            <input type="text" class="form-control" id="namapelanggan" name="namapelanggan">
                        </div>

                        <div class="form-group">
                            <label for="idbarang"> IDBarang </label>
                            <input type="text" class="form-control" id="idbarang" name="idbarang">
                        </div>

                        <div class="form-group">
                            <label for="namabarang"> NamaBarang </label>
                            <input type="text" class="form-control" id="namabarang" name="namabarang">
                        </div>

                        <div class="form-group">
                            <label for="jumlah"> Jumlah </label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah">
                        </div>
                        <div class="form-group">
                            <label for="harga"> Harga </label>
                            <input type="text" class="form-control" id="harga" name="harga">
                        </div>

                        <div class="form-group">
                            <label for="alamat"> Alamat </label>
                            <input type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                        

                        <button type="submit" name="submit" class="btn btn-primary float-right"> Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>