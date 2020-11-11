<div class="main-content">
    <div class="main-content-inner">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title" align="center">Edit Data Admin</h4>
                        <div class="card">
                            <div class="card-body">
                                <?php if (validation_errors()): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo validation_errors(); ?>
                                    </div>
                                <?php endif; ?>
                                <form action="<?php base_url('admin/updateAdmin')?>" method="post" enctype="multipart/form-data">
                                    <?php foreach ($user as $u) :?>
                                        <input type="hidden" name="id_user" value="<?=($u['id_user']);?>">
                                        <div class="form-group">
                                            <label for="nama_">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama" value="<?=($u['nama']);?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="jenis_kelamin">Jenis Kelamin</label>
                                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                                <?php foreach($jenis_kelamin as $jk) : ?>
                                                    <?php if($jk==$jenis_kelamin['jenis_kelamin']) : ?>
                                                        <option value="<?=($jk)?>" selected><?=($jk)?></option>
                                                    <?php else :?>
                                                        <option value="<?=($jk)?>"><?=($jk)?></option>
                                                    <?php endif; ?>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" value="<?=($u['email']);?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="telepon">Telepon</label>
                                            <input type="text" class="form-control" id="telepon" name="telepon" value="<?=($u['telepon']);?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="telepon" class="form-control" id="username" name="username" value="<?=($u['username']);?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" value="<?=($u['password']);?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Ubah Foto</label>
                                            <input type="file" class="form-control" id="image" name="image">
                                        </div>
                                    <?php endforeach; ?>
                                    <button type="submit" name="edit" class="btn btn-primary float-right">Edit</button>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>