<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card-header">
                    Detail Data Pesanan
        </div>
            <div class="card-body">
                <center><h5 class="card-title"> 
                    <?= $pesanan['idpelanggan']; ?>
                </h5></center>
                <p class="card-text">
                    <label for=""><b> Nama Pelanggan : </b></label>
                    <?= $pesanan['namapelanggan']; ?>
                </p>

                <p class="card-text">
                    <label for=""><b> ID Barang : </b></label>
                    <?= $pesanan['idbarang']; ?>
                </p>

                <p class="card-text">
                    <label for=""><b> Nama Barang : </b></label>
                    <?= $pesanan['namabarang']; ?>
                </p>

                <p class="card-text">
                    <label for=""><b> Jumlah : </b></label>
                    <?= $pesanan['jumlah']; ?>
                </p>
               
                <p class="card-text">
                    <label for=""><b> Harga : </b></label>
                    <?= $pesanan['harga']; ?>
                </p> 
                <p class="card-text">
                    <label for=""><b> Alamat : </b></label>
                    <?= $pesanan['alamat']; ?>
                </p>

                <a href="<?= base_url(); ?>pesanan" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>