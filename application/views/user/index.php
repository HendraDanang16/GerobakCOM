<!-- <?php var_dump($buku); ?> -->

<div class="container">
    <?php if ($this->session->flashdata('flash-data')) : ?>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Buku <strong> Berhasil </strong> <?= $this->session->flashdata('flash-data'); ?>
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
                    <h2>Daftar Buku</h2>

                    <?php if (empty($buku)) : ?>
                        <div class="alert alert-danger" role="alert">
                            Data Buku Tidak Ditemukan.
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
                                                <button class="btn btn-success" type="submit"><b> Cari </b></button>
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
                                    <th scope="col"> ID </th>
                                    <th scope="col"> Judul </th>
                                    <th scope="col"> Pengarang </th>
                                    <th scope="col"> Penerbit </th>
                                    <th scope="col"> Tahun Terbit </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($buku as $pj) { ?>
                                    <tr>
                                        <td><?php echo $pj['id'] ?></td>
                                        <td><?php echo $pj['judul'] ?></td>
                                        <td><?php echo $pj['pengarang'] ?></td>
                                        <td><?php echo $pj['penerbit'] ?></td>
                                        <td><?php echo $pj['tahun_terbit'] ?></td>

                                        <td>
                                        <a href="<?=  base_url(); ?>user/hapus/<?= $pj['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('Apakah Anda Ingin Meminjam Buku Ini?');">Pinjam</a>
                                            <a href="<?=  base_url(); ?>user/detail/<?= $pj['id']; ?>" class="badge badge-primary float-right">Detail</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </ul>
                    <br>
                    
                </div>
            </div>
        </div>
</div>