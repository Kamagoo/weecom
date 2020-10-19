<?php


class User extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->library('Password'); 
        $this->load->model('User_model');
        
    }

    public function register(){
        $data['title'] = "Register";

        $this->load->view('template/header', $data);
        $this->load->view('register', $data);
        $this->load->view('template/footer', $data);
    }

    public function prosesRegister(){
        
        $this->form_validation->set_rules('nama_depan','Nama Depan','required');
        $this->form_validation->set_rules('nama_belakang','Nama Belakang','required');
        $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[karyawan.email]');
        $this->form_validation->set_rules('dob','Tanggal Lahir','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('nomor_telepon','Nomor Telepon','required');
        $this->form_validation->set_rules('nomor_hp','Nomor HP','required');
        $this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required');
        $this->form_validation->set_rules('password','Password','required|min_length[6]');
        $this->form_validation->set_rules('konfirmasi_password','Konfirmasi Password','required|matches[password]');

        if($this->form_validation->run() == false){
            $this->register();
        } else {
            //nanti masuk ke data base
            $dataRegister = ['nama_depan'       => $this->input->post('nama_depan'),
                             'nama_belakang'    => $this->input->post('nama_belakang'),
                             'email'            => $this->input->post('email'),
                             'dob'              => $this->input->post('dob'),
                             'alamat'           => $this->input->post('alamat'),
                             'nomor_telepon'    => $this->input->post('nomor_telepon'),
                             'nomor_hp'         => $this->input->post('nomor_hp'),
                             'jenis_kelamin'    => $this->input->post('jenis_kelamin'),
                             'password'         => $this->password->hash($this->input->post('password')),
                             'id_departemen'    => 1,
                             'id_posisi'        => 1,
                             'dibuat'           => date('y-m-d H:i:s'),
                             'diganti'          => date('y-m-d H:i:s'),
                             'status'           => 'interview'
                    ];

            
            $this->User_model->create($dataRegister);

            $dataPesan = ['pesan' => 'Akun Anda berhasil dibuat'];

            $this->session->set_flashdata($dataPesan);

            redirect('login');

        }
    }

     public function login(){
            $data['title'] = "Login";

        $this->load->view('template/header', $data);
        $this->load->view('login', $data);
        $this->load->view('template/footer', $data);
    }

    public function prosesLogin(){
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('password','Password','required|min_length[6]');

        if($this->form_validation->run() == false){
            $this->login();
        } else {

            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->User_model->login($email);

            $passwordHash = $user->password ?? false;

            if($this->password->verify($password, $passwordHash)){
                
                $dataLogin = ['logged_in' => TRUE,
                                'user_id' => $user->id,
                                'nama_depan' => $user->nama_depan,
                                'nama_belakang' => $user->nama_belakang];
                $this->session->set_userdata($dataLogin);

            }else{
                echo 'Login gagal';
            }
        }


    }

}