<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2> Sistem Perusahaan Weecom</h2>
            <h3> Pengelolaan Karyawan digital absensi </h3>

            <div class="akses-button">
                <?php
                    $dataAnchor = ['class' => 'btn btn-outline-primary'];
                    echo anchor('user/login','LOGIN',$dataAnchor );
                    echo anchor('user/register','REGISTER', $dataAnchor);

                ?>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card frame-form-weecom">

                <div class="card-header">Daftar Interview</div>

                <div class="card-body">
                    <?php

                        echo form_open(base_url('user/prosesRegister'), ['class' => 'form-weecom']);


                    ?>

                        <div class="form-group row">
                            <label form="nama_depan" class="col-md-3"> Nama Depan </label>
                            <div class="col-9">
                                <?php
                                    
                                    $data = ['name' => 'nama_depan','id' => 'nama_depan','class' => 'form-control','placeholder' => 'Nama Depan'];
                                    echo form_input($data);
                                    echo form_error('nama_depan');

                                ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label form="nama_belakang" class="col-md-3"> Nama Belakang </label>
                            <div class="col-9">
                                <?php
                                    
                                    $data = ['name' => 'nama_belakang','id' => 'nama_belakang','class' => 'form-control','placeholder' => 'Nama Belakang'];
                                    echo form_input($data);
                                    echo form_error('nama_belakang');

                                ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label form="email" class="col-md-3"> Email </label>
                            <div class="col-9">
                                <?php
                                    
                                    $data = ['name' => 'email','id' => 'email','class' => 'form-control','placeholder' => 'Email'];
                                    echo form_input($data);
                                    echo form_error('email');

                                ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label form="dob" class="col-md-3"> Tanggal Lahir </label>
                            <div class="col-9">
                                <?php
                                    
                                    $data = ['name' => 'dob','id' => 'dob','class' => 'form-control','placeholder' => 'Tanggal lahir'];
                                    echo form_input($data);
                                    echo form_error('dob');

                                ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label form="alamat" class="col-md-3"> Alamat </label>
                            <div class="col-9">
                                <?php
                                    
                                    $data = ['name' => 'alamat','id' => 'alamat','class' => 'form-control','placeholder' => 'Alamat'];
                                    echo form_input($data);
                                    echo form_error('alamat');

                                ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label form="nomor_telepon" class="col-md-3"> Nomor Telepon </label>
                            <div class="col-9">
                                <?php
                                    
                                    $data = ['name' => 'nomor_telepon','id' => 'nomor_telepon','class' => 'form-control','placeholder' => 'Masukan Nomor Telepon'];
                                    echo form_input($data);
                                    echo form_error('nomor_telepon');

                                ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label form="nomor_hp" class="col-md-3"> Nomor HP </label>
                            <div class="col-9">
                                <?php
                                    
                                    $data = ['name' => 'nomor_hp','id' => 'nomor_hp','class' => 'form-control','placeholder' => 'Masukan Nomor Hp'];
                                    echo form_input($data);
                                    echo form_error('nomor_hp');

                                ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label form="jenis_kelamin" class="col-md-3"> Jenis Kelamin </label>
                            <div class="col-9">
                                <div class="row">
                                    <div class="col-4">
                                        <label class="radio-inline">
                                            <?php
                                                $data = ['name' => 'jenis_kelamin','id' => 'jenis_kelamin'];
                                                echo form_radio($data, 'wanita');
                                            ?>
                                            Wanita
                                        </label>
                                    </div>
                                
                                    <div class="col-4">
                                        <label class="radio-inline">
                                        <?php
                                            $data = ['name' => 'jenis_kelamin','id' => 'jenis_kelamin'];
                                            echo form_radio($data, 'pria');
                                        ?>
                                        Pria
                                        </label>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label form="password" class="col-md-3"> Password </label>
                            <div class="col-9">
                                <?php
                                    
                                    $data = ['name' => 'password','id' => 'password','class' => 'form-control','placeholder' => 'Password'];
                                    echo form_password($data);
                                    echo form_error('password');

                                ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label form="konfirmasi_password" class="col-md-3"> Konfirmasi Password </label>
                            <div class="col-9">
                                <?php
                                    
                                    $data = ['name' => 'konfirmasi_password','id' => 'konfirmasi_password','class' => 'form-control','placeholder' => 'Konfirmasi password Anda'];
                                    echo form_password($data);
                                    echo form_error('konfirmasi_password');

                                ?>
                            </div>
                        </div>

                        <?php

                            echo form_submit(['name' => 'submit', 'class' => 'btn btn-dark btn-block'], 'Register');

                            echo form_close();

                        ?>
                </div>
            </div>
        </div>

    </div>      
</div>