<!-- <?php var_dump($pesanan); ?> -->

<div class="container">
    <?php if ($this->session->flashdata('flash-data')) : ?>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Data pesanan <strong> Berhasil </strong> <?= $this->session->flashdata('flash-data'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            </div>
        </div>

        <div class="container">
            <div class="row mt-4">
                <div class="col-md-12">
                    <h2>Daftar pesanan</h2>

                    <?php if (empty($pesanan)) : ?>

                        <div class="alert alert-danger" role="alert">
                            Data pesanan Tidak Ditemukan.
                        </div>
                    <?php endif; ?>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <form action=" " method="post">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Masukkan Data" name="keyword" value="<?= set_value("keyword") ?>">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><b> Cari </b></button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <ul class="list-group">
                        <table class="table table-striped table-light">
                            <thead>
                                <tr>
                                    <th scope="col"> IDPelanggan </th>
                                    <th scope="col"> NamaPelanggan </th>
                                    <th scope="col"> IDBarang </th>
                                    <th scope="col"> NamaBarang </th>
                                    <th scope="col"> Jumlah </th>
                                    <th scope="col"> Harga </th>
                                    <th scope="col"> Alamat </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pesanan as $idp) { ?>

                                    <tr>
                                        <td><?php echo $idp['idpelanggan'] ?></td>
                                        <td><?php echo $idp['namapelanggan'] ?></td>
                                        <td><?php echo $idp['idbarang'] ?></td>
                                        <td><?php echo $idp['namabarang'] ?></td>
                                        <td><?php echo $idp['jumlah'] ?></td>
                                        <td><?php echo $idp['harga'] ?></td>
                                        <td><?php echo $idp['alamat'] ?></td>
                                        <td>
                                            <a href="<?= base_url(); ?>pesanan/hapus/<?= $idp['idpelanggan']; ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>

                                            <a href="<?= base_url(); ?>pesanan/edit/<?= $idp['idpelanggan']; ?>" class="badge badge-success float-right">Edit</a>

                                            <a href="<?= base_url(); ?>pesanan/detail/<?= $idp['idpelanggan']; ?>" class="badge badge-primary float-right">Detail</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </ul>
                    <br>
                    <a href="<?= base_url(); ?>pesanan/tambah" class="btn btn-primary">Tambah Data</a>
                </div>
            </div>
        </div>
</div>