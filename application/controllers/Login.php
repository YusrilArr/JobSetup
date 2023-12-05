<?php

defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Login extends CI_Controller
    {
    //  Load model
    public function __construct()
        {
        parent::__construct();
        $this->load->model( 'user_model' );
        }

    // load login
    public function index()
        {
        // validasi, tambahan 01/03/2023

        // validasi input login
        $username = $this->input->post( 'username' );
        $password = $this->input->post( 'password' );
        // Cek input
        $this->form_validation->set_rules( 'username', 'Username', 'required', array( 'required' => '%s harus diisi' ) );
        $this->form_validation->set_rules( 'password', 'Password', 'required', array( 'required' => '%s harus diisi' ) );
        // proses ke check login
        if ($this->form_validation->run())
            {
            $this->check_login->login( $username, $password );
            }
        // end validasi

        $data = array( 'title' => 'Login Administrator' );
        $this->load->view( 'login/index', $data, FALSE );
        }

    // fungsi logout
    public function logout()
        {
        // panggil fungsi logout dari library check_login
        $this->check_login->logout();
        }
    }