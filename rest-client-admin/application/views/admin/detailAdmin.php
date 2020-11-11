<div class="main-content-inner">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title" align="center">Data Admin</h4>
                        <div class="card-body">
                            <?php foreach ($user as $u) :?>
                                <h5 class="card-title"><?=($u['nama']);?></h5>
                                <p class="card-text">
                                    <img src="<?= base_url('upload/'.$u['image'])?>" style="height: 150px; width: 150px;">
                                </p>
                                <p class="card-text">
                                    <label for=""><b>Jenis Kelamin :</b></label>
                                    <?=($u['jenis_kelamin']); ?>
                                </p>
                                <p class="card-text">
                                    <label for=""><b>Email :</b></label>
                                    <?=($u['email']); ?>
                                </p>
                                <p class="card-text">
                                    <label for=""><b>Telepon :</b></label>
                                    <?=($u['telepon']); ?>
                                </p>
                                <p class="card-text">
                                    <label for=""><b>Username :</b></label>
                                    <?=($u['username']); ?>
                                </p>
                                <p class="card-text">
                                    <label for=""><b>Password :</b></label>
                                    <?=($u['password']); ?>
                                </p>
                            <?php endforeach; ?>
                            <a href="<?= base_url();?>admin/dataAdmin" class="btn btn-primary">Kembali</a>
                        </div>
                </div>
            </div>
        </div>      
    </div>
</div>