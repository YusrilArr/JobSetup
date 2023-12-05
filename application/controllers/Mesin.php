<?php

defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Mesin extends CI_Controller
    {
    public function __construct()
        {
        parent::__construct();
        // proteksi halaman
        $this->check_login->cek_login();
        $this->load->model( 'mesin_model' );
        // harus sesuai dengan nama model, case sensitive
        }

    // Data Pasien
    public function index()
        {
        $mesin = $this->mesin_model->listing();
        $total = $this->mesin_model->total();

        // Validasi input
        $valid = $this->form_validation;


        $valid->set_rules(
            'id_mesin',
            'Kode mesin',
            'required|is_unique[js_machines.id_mesin]',
            [ 
                'required'  => '%s harus diisi',
                'is_unique' => '%s Sudah ada. Buat kode mesin baru',
            ]
        );

        // Jika sudah dicek dan error
        if ($valid->run() === false) {
            // End Validasi dan error
            $data = [ 
                'title'   => 'Data Mesin (' . $total->total_mesin . ')',
                'mesin'   => $mesin,
                'content' => 'mesin/index',
            ];
            $this->load->view( 'layout/wrapper', $data, false );
            // Jika validasi ok simpan ke tabel USERS
            }
        else {
            $inp  = $this->input;
            $data = [ 
                // ambil id_user dari My_login.php
                // 'id_mesin'   => $this->session->userdata( 'id_mesin' ),
                'id_mesin'   => $inp->post( 'id_mesin' ),
                'nama_mesin' => $inp->post( 'nama_mesin' ),
            ];
            // Proses model untuk penambahan data
            $this->mesin_model->tambah( $data );
            // Notifikasi dan redirect
            $this->session->set_flashdata( 'sukses', 'Data telah ditambah' );
            redirect( base_url( 'mesin' ), 'refresh' );
            }
        }

    // Tambah Data Mesin
    public function tambah()
        {
        // Validasi input
        $valid = $this->form_validation;

        $valid->set_rules(
            'id_mesin',
            'Kode mesin',
            'required|is_unique[js_machines.id_mesin]',
            [ 
                'required'  => '%s harus diisi',
                'is_unique' => '%s Sudah ada. Buat kode pasien baru',
            ]
        );

        // Jika sudah dicek dan error
        if ($valid->run() === false) {
            // End Validasi dan error
            $data = [ 
                'title'   => 'Tambah Mesin',
                'content' => 'mesin/tambah_baru',
            ];
            $this->load->view( 'layout/wrapper', $data, false );
            // Jika validasi ok simpan ke tabel USERS
            }
        else {
            $inp  = $this->input;
            $data = [ 
                // ambil id_user dari My_login.php
                // 'id_mesin'   => $this->session->userdata( 'id_mesin' ),
                'id_mesin'   => $inp->post( 'id_mesin' ),
                'nama_mesin' => $inp->post( 'nama_mesin' ),
                // 'tanggal_create' => $inp->post( date( 'Y-m-d' ) ),
            ];
            // Proses model untuk penambahan data
            $this->mesin_model->tambah( $data );
            // Notifikasi dan redirect
            $this->session->set_flashdata( 'sukses', 'Data telah ditambah' );
            redirect( base_url( 'mesin' ), 'refresh' );
            }
        }

    // Edit Mesin
    public function edit($id_mesin)
        {
        // panggil data yang akan diambil
        $mesin = $this->mesin_model->detail( $id_mesin );
        // Validasi input
        $valid = $this->form_validation;


        // Cek nama
        $valid->set_rules(
            'nama_mesin',
            'Nama Mesin',
            'required',
            [ 'required' => '%s harus diisi' ]
        );

        // Jika sudah dicek
        if ($valid->run() === false) {
            // End Validasi dan error
            $data = [ 
                'title'   => 'Edit Data Mesin (' . $mesin->nama_mesin . ')',
                'mesin'   => $mesin,
                'content' => 'mesin/edit',
            ];
            $this->load->view( 'layout/wrapper', $data, false );
            // Jika validasi ok masuk database
            }
        else {
            $inp  = $this->input;
            $data = [ 
                'id_mesin'   => $id_mesin,
                'nama_mesin' => $inp->post( 'nama_mesin' ),
            ];

            // Proses model untuk penambahan data
            $this->mesin_model->edit( $data );
            // Notifikasi dan redirect
            $this->session->set_flashdata( 'sukses', 'Data telah diedit' );
            redirect( base_url( 'mesin' ), 'refresh' );
            }
        }

    // Detail pasien
    public function detail($id_mesin)
        {
        $mesin = $this->mesin_model->detail( $id_mesin );
        $data  = [ 
            'title'   => $mesin->nama_mesin,
            'mesin'   => $mesin,
            'content' => 'mesin/detail',
        ];
        $this->load->view( 'layout/wrapper', $data, false );
        }

    public function cetak($id_mesin)
        {
        $mesin = $this->mesin_model->detail( $id_mesin );
        $data  = [ 
            'title' => $mesin->nama_mesin,
            'mesin' => $mesin,
            // 'content' => 'pasien/detail',
        ];
        $this->load->view( 'mesin/cetak', $data, false );
        }

    // Delete data
    public function delete($id_mesin)
        {
        $data = [ 'id_mesin' => $id_mesin ];
        // hapus
        $this->mesin_model->delete( $data );
        // Notifikasi
        $this->session->set_flashdata( 'sukses', 'Data telah dihapus' );
        redirect( base_url( 'mesin' ), 'refresh' );
        }
    }