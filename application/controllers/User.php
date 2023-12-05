<?php

defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class User extends CI_Controller
    {
    public function __construct()
        {
        parent::__construct();
        // proteksi halaman
        $this->check_login->cek_login();
        $this->load->model( 'User_model' );
        // Proteksi hanya admin
        if ($this->session->userdata( 'akses_level' ) != 'Admin') {
            // kalau bukan admin lempar ke login
            // keluarkan user dari aplikasi
            $this->check_login->logout();
            $this->session->set_flashdata( 'warning', 'Anda tidak diperkenankan mengakses Menu User' );
            redirect( base_url( 'login' ), 'refresh' );
            // end proteksi
            }
        // harus sesuai dengan nama model, case sensitive
        }

    // Data User
    public function index()
        {
        $user     = $this->user_model->listing();
        $total    = $this->user_model->total();
        $username = $this->session->userdata( 'username' );

        // Validasi input
        $valid = $this->form_validation;

        // Cek id user
        $valid->set_rules(
            'id_user',
            'Id. User',
            'required|is_unique[js_users.id_user]',
            [ 
                'required'  => '%s harus diisi',
                'is_unique' => '%s sudah ada. Buat Id. User baru'
            ]
        );
        // Cek nama
        $valid->set_rules(
            'nama_user',
            'Nama Lengkap',
            'required',
            [ 'required' => '%s harus diisi' ]
        );
        // Cek Username
        $valid->set_rules(
            'username',
            'Username',
            'required|is_unique[js_users.username]',
            [ 
                'required'  => '%s harus diisi',
                'is_unique' => '%s sudah ada. Buat Username baru',
            ]
        );
        // Cek Password
        $valid->set_rules(
            'password',
            'Password',
            'required|min_length[6]|max_length[32]',
            [ 
                'required'   => '%s harus diisi',
                'min_length' => '%s Minimal 6 karakter',
                'max_length' => '%s Maksimal 32 karakter',
            ]
        );

        // Jika sudah dicek
        if ($valid->run() === false) {
            // End Validasi dan error
            $data = [ 
                'title'   => 'Data User (' . $total->total_user . ')',
                'user'    => $user,
                'content' => 'user/index',
            ];
            $this->load->view( 'layout/wrapper', $data, false );
            // Jika validasi ok simpan ke tabel USERS
            }
        else {
            $inp  = $this->input;
            $data = [ 
                'id_user'     => $inp->post( 'id_user' ),
                'nama_user'   => $inp->post( 'nama_user' ),
                'username'    => $inp->post( 'username' ),
                'password'    => sha1( $inp->post( 'password' ) ),
                'akses_level' => $inp->post( 'akses_level' ),
                'user_status' => $inp->post( 'user_status' ),
                'add_by'      => $username,
            ];
            // Proses model untuk penambahan data
            $this->User_model->tambah( $data );
            // Notifikasi dan redirect
            $this->session->set_flashdata( 'sukses', 'Data telah ditambah' );
            redirect( base_url( 'user' ), 'refresh' );
            }
        }

    // Edit User
    public function edit($id_user)
        {
        // panggil data yang akan diambil
        $user = $this->User_model->detail( $id_user );

        // Validasi input
        $valid = $this->form_validation;

        // Cek nama
        $valid->set_rules(
            'nama_user',
            'Nama Lengkap',
            'required',
            [ 'required' => '%s harus diisi' ]
        );

        // Jika sudah dicek
        if ($valid->run() === FALSE) {
            // End Validasi dan error
            $data = [ 
                'title'   => 'Edit User (' . $user->nama_user . ')',
                'user'    => $user,
                'content' => 'user/edit',
            ];
            $this->load->view( 'layout/wrapper', $data, false );
            // Jika validasi ok masuk database
            }
        else {
            $inp = $this->input;
            // Cek panjang password
            if (strlen( $inp->post( 'password' ) ) >= 6 || strlen( $inp->post( 'password' ) ) <= 32) {
                $data = [ 
                    'id_user'     => $id_user,
                    'nama_user'   => $inp->post( 'nama_user' ),
                    'password'    => sha1( $inp->post( 'password' ) ),
                    'akses_level' => $inp->post( 'akses_level' ),
                    'user_status' => $inp->post( 'user_status' ),
                ];
                }
            else {
                $data = [ 
                    'id_user'     => $id_user,
                    'nama_user'   => $inp->post( 'nama_user' ),
                    'akses_level' => $inp->post( 'akses_level' ),
                    'user_status' => $inp->post( 'user_status' ),
                ];
                }

            // Proses model untuk penambahan data
            $this->User_model->edit( $data );
            // Notifikasi dan redirect
            $this->session->set_flashdata( 'sukses', 'Data telah diedit' );
            redirect( base_url( 'user' ), 'refresh' );
            }
        }

    // Delete data
    public function delete($id_user)
        {
        $data = [ 'id_user' => $id_user ];
        // hapus
        $this->User_model->delete( $data );
        // Notifikasi
        $this->session->set_flashdata( 'sukses', 'Data telah dihapus' );
        redirect( base_url( 'user' ), 'refresh' );
        }
    }