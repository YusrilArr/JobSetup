<?php

defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Check_login
    {
    // Set variabel global
    // var $CI = NULL;
    protected $CI;

    public function __construct()
        {
        $this->CI = &get_instance();
        $this->CI->load->model( 'user_model' );
        }

    // Fungsi login
    // public function loginv2( $username, $password )
    //     {
    //     $query = $this->CI->db->get_where( 'users', [ 'username' => $username, 'password' => $password ] );
    //     if ( $query->num_rows() == 1 ) {
    //         $row   = $this->CI->db->query( 'SELECT id_user FROM users where username = "' . $username . '"' );
    //         $admin = $row->row();
    //         $id    = $admin->id_user;
    //         $this->CI->session->set_userdata( 'username', $username );
    //         // $this->CI->session->set_userdata('id_login', uniqid(rand()));
    //         $this->CI->session->set_userdata( 'id', $id );
    //         redirect( base_url( 'dasboard' ) );
    //         }
    //     else {
    //         $this->CI->session->set_flashdata( 'warning', 'Oops... Username/password salah' );
    //         redirect( base_url( 'login' ) );
    //         }
    //     return false;
    //     }

    public function login($username, $password)
        {
        // Check username dan password ke model
        $check = $this->CI->user_model->login( $username, $password );

        // jika ada data user, maka create session login
        if ($check)
            {
            $id_user     = $check->id_user;
            $nama        = $check->nama_user;
            $akses_level = $check->akses_level;
            $status      = $check->user_status;
            $plant       = $check->user_plant;

            // create session untuk login
            $this->CI->session->set_userdata( 'id_user', $id_user );
            $this->CI->session->set_userdata( 'nama', $nama );
            $this->CI->session->set_userdata( 'username', $username );
            $this->CI->session->set_userdata( 'akses_level', $akses_level );
            $this->CI->session->set_userdata( 'status', $status );
            $this->CI->session->set_userdata( 'plant', $plant );
            // redirect kehalaman admin yang diproteksi
            $this->CI->session->set_flashdata( 'sukses', 'Anda berhasil login' );
            redirect( base_url( 'dashboard' ), 'refresh' );
            }
        else
            {
            // jika user - password salah, kembali ke login lagi
            $this->CI->session->set_flashdata( 'warning', 'Username atau Password tidak benar' );
            redirect( base_url( 'login' ), 'refresh' );
            }
        }

    // Proteksi halaman
    public function cek_login()
        {
        // Memeriksa apakah session sudah ada atau belum, jika belum arahkan ke login
        if ($this->CI->session->userdata( 'username' ) == '')
            {
            $this->CI->session->set_flashdata( 'warning', 'Anda belum login!' );
            redirect( base_url( 'login' ), 'refresh' );
            }
        }

    // Fungsi logout
    public function logout()
        {
        // membuang semua session yang telah di set
        $this->CI->session->unset_userdata( 'id_user' );
        $this->CI->session->unset_userdata( 'username' );
        $this->CI->session->unset_userdata( 'nama' );
        $this->CI->session->unset_userdata( 'akses_level' );
        $this->CI->session->unset_userdata( 'status' );
        $this->CI->session->unset_userdata( 'plant' );
        // setelah dibuang diarahkan ke login
        $this->CI->session->set_flashdata( 'sukses', 'Anda berhasil logout' );
        redirect( base_url( 'login' ) );
        }
    }