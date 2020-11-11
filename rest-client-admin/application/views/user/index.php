<div class="main-content-inner">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Data User</h4>
                    <!-- <div class="row mt-4">
                        <div class="col-md-6">
                            <a href="<?= base_url();?>user/tambah" class="btn btn-primary">Tambah Data</a><br><br>
                        </div>
                    </div> -->
                    <div class="data-tables">
                        <table id="dataTable" class="text-center">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama User</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Email</th>
                                    <th>Telepon</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    foreach($user as $u) { ?>
                                    <tr>
                                        <td><?=($no++);?></td>
                                        <td><?=($u->nama);?></td>
                                        <td><?=($u->jenis_kelamin);?></td>
                                        <td><?=($u->email);?></td>
                                        <td><?=($u->telepon);?></td>
                                        <td><?=($u->username);?></td>
                                        <td><?=($u->password);?></td>
                                        <td><a href="<?=base_url();?>user/detailUser/<?=($u->id_user);?>" class="btn btn-success">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                            <a href="<?=base_url();?>user/deleteUser/<?=($u->id_user);?>" class="btn btn-danger">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </a></td>
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