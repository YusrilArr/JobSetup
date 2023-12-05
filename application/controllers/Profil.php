<?php
defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Profil extends CI_Controller
    {

    public function __construct()
        {
        parent::__construct();
        $this->load->model( 'user_model' );
        }

    // update profile
    public function index()
        {
        // panggil data yang akan diambil
        $id_user = $this->session->userdata( 'id_user' );
        $user    = $this->user_model->detail( $id_user );

        // Validasi input
        $valid = $this->form_validation;

        // Cek nama
        $valid->set_rules(
            'nama_user',
            'Nama Lengkap',
            'required',
            array( 'required' => '%s harus diisi' )
        );
        // Cek Email
        $valid->set_rules(
            'email',
            'Email',
            'required|valid_email',
            array(
                'required'    => '%s harus diisi',
                'valid_email' => '%s tidak valid. Masukkan Email yang benar'
            )
        );

        // Jika sudah dicek
        if ($valid->run() === FALSE) {
            // End Validasi dan error
            $data = array(
                'title'   => 'Info Pengguna (' . $user->nama_user . ')',
                'user'    => $user,
                'content' => 'profil/index'
            );
            $this->load->view( 'layout/wrapper', $data, FALSE );
            // Jika validasi ok masuk database
            }
        else {
            $inp = $this->input;
            // Cek panjang password
            if (strlen( $inp->post( 'password' ) ) >= 6 || strlen( $inp->post( 'password' ) ) <= 32) {
                $data = array(
                    'id_user'     => $id_user,
                    'nama_user'   => $inp->post( 'nama_user' ),
                    'email'       => $inp->post( 'email' ),
                    'password'    => sha1( $inp->post( 'password' ) ),
                    'akses_level' => $inp->post( 'akses_level' ),
                );
                }
            else {
                $data = array(
                    'id_user'     => $id_user,
                    'nama_user'   => $inp->post( 'nama_user' ),
                    'email'       => $inp->post( 'email' ),
                    'akses_level' => $inp->post( 'akses_level' ),
                );
                }

            // Proses model untuk penambahan data
            $this->user_model->edit( $data );
            // Notifikasi dan redirect
            $this->session->set_flashdata( 'sukses', 'Data telah diedit' );
            redirect( base_url( 'profil' ), 'refresh' );
            }
        }
    }