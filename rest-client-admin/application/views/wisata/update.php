<div class="main-content">
    <div class="main-content-inner">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title" align="center">Edit Data Wisata</h4>
                        <div class="card">
                            <div class="card-body">
                                <?php if (validation_errors()): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?php echo validation_errors(); ?>
                                    </div>
                                <?php endif; ?>
                                <form action="<?php base_url('wisata/update')?>" method="post" enctype="multipart/form-data">
                                    <?php foreach ($wisata as $w) :?>
                                        <input type="hidden" name="id_wisata" value="<?=($w['id_wisata']);?>">
                                        <div class="form-group">
                                            <label for="nama_wisata">Nama Tempat Wisata</label>
                                            <input type="text" class="form-control" id="nama_wisata" name="nama_wisata" value="<?=($w['nama_wisata']);?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="deskripsi">Deskripsi</label>
                                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?=($w['deskripsi']);?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="lokasi">Lokasi</label>
                                            <input type="date" class="form-control" id="lokasi" name="lokasi" value="<?=($w['lokasi']);?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="harga">Harga</label>
                                            <input type="date" class="form-control" id="harga" name="harga" value="<?=($w['harga']);?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="jambukat">Jam Buka</label>
                                            <input type="text" class="form-control" id="jam_buka" name="jam_buka" value="<?=($w['jam_buka']);?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="jam_tutup">Jam Tutup</label>
                                            <input type="text" class="form-control" id="jam_tutup" name="jam_tutup" value="<?=($w['jam_tutup']);?>">
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