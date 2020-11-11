<?= form_open('login/register')?>
<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
                <form class="login100-form validate-form flex-sb flex-w">
                    <span class="login100-form-title p-b-32">
                        Sign Up
                    </span>

                    <span class="txt1 p-b-11">
                        Nama Lengkap
                    </span>
                    <div class="wrap-input100 validate-input m-b-36" data-validate = "Nama is required">
                        <input class="input100" type="text" name="nama" >
                        <span class="focus-input100"></span>
                    </div>

                    <span class="txt1 p-b-11">
                        Jenis Kelamin
                    </span>
                    <div class="wrap-input100 validate-input m-b-36" data-validate = "Jenis Kelamin is required">
                        <input class="input100" type="text" name="jenis_kelamin" placeholder="L/P">
                        <span class="focus-input100"></span>
                    </div>

                    <span class="txt1 p-b-11">
                        Email
                    </span>
                    <div class="wrap-input100 validate-input m-b-36" data-validate = "Email is required">
                        <input class="input100" type="email" name="email" >
                        <span class="focus-input100"></span>
                    </div>

                    <span class="txt1 p-b-11">
                        Telepon
                    </span>
                    <div class="wrap-input100 validate-input m-b-36" data-validate = "Telepon is required">
                        <input class="input100" type="text" name="telepon" >
                        <span class="focus-input100"></span>
                    </div>

                    <span class="txt1 p-b-11">
                        Username
                    </span>
                    <div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
                        <input class="input100" type="text" name="username" >
                        <span class="focus-input100"></span>
                    </div>
                    
                    <span class="txt1 p-b-11">
                        Password
                    </span>
                    <div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
                        <span class="btn-show-pass">
                            <i class="fa fa-eye"></i>
                        </span>
                        <input class="input100" type="password" name="password" >
                        <span class="focus-input100"></span>
                    </div>

                    <center><br><br><div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Register
                        </button>
                    </div></center>

                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    <?= form_close();?>