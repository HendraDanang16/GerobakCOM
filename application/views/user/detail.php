<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card-header">
                    Detail Data Buku
        </div>
            <div class="card-body">
                <center><h5 class="card-title"> 
                    <?= $buku['judul']; ?>
                </h5></center>
                <p class="card-text">
                    <label for=""><b> Pengarang : </b></label>
                    <?= $buku['pengarang']; ?>
                </p>

                <p class="card-text">
                    <label for=""><b> Penerbit : </b></label>
                    <?= $buku['penerbit']; ?>
                </p>
                <p class="card-text">
                    <label for=""><b> Tahun Terbit : </b></label>
                    <?= $buku['tahun_terbit']; ?>
                </p>
                <p class="card-text">
                    <label for=""><b> Isi Buku : </b></label>
                    <?= $buku['isi']; ?>
                </p>

                <a href="<?= base_url(); ?>user" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>