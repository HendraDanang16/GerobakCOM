<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Edit Data Guru
                </div>

                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert"><?= validation_errors() ?></div>
                    <?php endif ?>

                    <form action="" method="post">
                        <input type="hidden" name="idpelanggan" value="<?= $pesanan['idpelanggan']; ?>">

                      


                        <div class="form-group">
                            <label for="namapelanggan"> Nama Pelanggan </label>
                            <input type="text" class="form-control" id="namapelanggan" name="namapelanggan" value="<?= $pesanan['namapelanggan']; ?>">
                            <?= form_error('idpelanggan'); ?>
                        </div>

                        <div class="form-group">
                            <label for="idbarang">ID Barang  </label>
                            <input type="text" class="form-control" id="idbarang" name="idbarang" value="<?= $pesanan['idbarang']; ?>">
                            <?= form_error('idbarang'); ?>
                        </div>

                        <div class="form-group">
                            <label for="namabarang">Nama Barang  </label>
                            <input type="text" class="form-control" id="namabarang" name="namabarang" value="<?= $pesanan['namabarang']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="jumlah">Jumlah  </label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= $pesanan['jumlah']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="harga"> Harga </label>
                            <input type="text" class="form-control" id="harga" name="harga" value="<?= $pesanan['harga']; ?>">
                            <?= form_error('idpelanggan'); ?>
                        </div>
                        
                        <div class="form-group">
                            <label for="alamat">Alamat  </label>
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $pesanan['alamat']; ?>">
                        </div>

                        

                        <button type="submit" name="edit" class="btn btn-primary float-right"> Ok </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>