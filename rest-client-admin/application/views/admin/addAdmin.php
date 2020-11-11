<div class="main-content">
    <div class="main-content-inner">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title" align="center">Form Menambahkan Data Admin</h4>
                        <div class="card">
                            <div class="card-body">
                                <?php if (validation_errors()): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo validation_errors(); ?>
                                    </div>
                                <?php endif; ?>
                                <form action="<?=base_url('admin/addAdmin')?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                            <?php foreach($jenis_kelamin as $jk) : ?>
                                                <option value="<?=($jk)?>" selected><?=($jk)?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="telepon">Telepon</label>
                                        <input type="text" class="form-control" id="telepon" name="telepon">
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="username">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="text" class="form-control" id="password" name="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Upload Foto</label>
                                        <input type="file" class="form-control" id="image" name="image">
                                    </div>
                                <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>