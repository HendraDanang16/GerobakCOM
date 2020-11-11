
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        
            <!-- header area end -->
            <!-- page title area start -->

            <!-- page title area end -->



            <div class="main-content-inner">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Data Wisata</h4>
                    <div class="data-tables">
                        <table id="dataTable" class="text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Wisata</th>
                                    <th>Deskripsi</th>
                                    <th>Lokasi</th>
                                    <th>Harga</th>
                                    <th>Jam Buka</th>
                                    <th>Jam Tutup</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    foreach($wisata as $u) { ?>
                                    <tr>
                                        <td><?=($no++);?></td>
                                        <td><?= $u['nama_wisata']; ?></td>
                                        <td><?=$u['deskripsi'];?></td>
                                        <td><?=$u['lokasi'];?></td>
                                        <td><?=$u['harga'];?></td>
                                        <td><?=$u['jam_buka'];?></td>
                                        <td><?=$u['jam_tutup'];?></td>
                                        <td><a href="" class="btn btn-success">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                            <a href="<?= base_url(); ?>wisata/update/<?= $u['id_wisata']; ?>" class="btn btn-primary">
                                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                            </a>
                                            <!-- <a href="<?=base_url();?>user/hapus/<?=($u->id_user);?>" class="btn btn-danger">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a> -->
                                            </td>
                                    </tr>
                                    <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>