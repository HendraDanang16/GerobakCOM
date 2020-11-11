<div class="container-fluid mt-3">
   
    <div class="row mt-3">
        <div class="col d-flex justify-content-center">
            <div class="card registration">
                <div class="card-body">
                    <form action="<?php echo site_url(); ?>login/reg_process" class="needs-validation" method="POST">
                        <div class="form-group">
                            <label for="id">id:</label>
                            <input type="text" class="form-control" id="id" placeholder="Masukkan id" name="id" required>
                        </div>
                        <div class="form-group">
                            <label for="namapelanggan">namapelanggan :</label>
                            <input type="text" class="form-control" id="namapelanggan" placeholder="Masukkan namapelanggan" name="namapelanggan" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="username">Username :</label>
                            <input type="text" class="form-control" id="username" placeholder="Masukkan username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password :</label>
                            <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password" required>
                        </div>
                        
                        <div class="form-group">
                            <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal">
                                Registrasi
                            </button>
                            <!-- The Modal -->
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <p>Apa anda yakin ingin registrasi ?</p>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success">Registrasi</button>
                                            <button type="button" class="btn btn-dark" data-dismiss="modal">Batal</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>