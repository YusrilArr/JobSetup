<?php

defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Suhu_tubuh extends CI_Controller
    {
    public function __construct()
        {
        parent::__construct();
        $this->load->model( 'user_model' );
        $this->load->model( 'pasien_model' );
        $this->load->model( 'suhu_tubuh_model' );
        }

    // Halaman Utama
    public function index()
        {
        $suhu_tubuh = $this->suhu_tubuh_model->listing();
        $total      = $this->suhu_tubuh_model->total();

        // array
        $data = [ 
            'title'      => 'Data Suhu Tubuh (' . $total->total . ')',
            'suhu_tubuh' => $suhu_tubuh,
            'content'    => 'suhu_tubuh/index',
        ];
        $this->load->view( 'layout/wrapper', $data, false );
        }

    // Riwayat data suhu tubuh
    public function pasien($id_pasien)
        {
        $pasien     = $this->pasien_model->detail( $id_pasien );
        $suhu_tubuh = $this->suhu_tubuh_model->pasien( $id_pasien );

        // array
        $data = [ 
            'title'      => 'Riwayat Suhu Tubuh : ' . $pasien->nama_pasien,
            'suhu_tubuh' => $suhu_tubuh,
            'pasien'     => $pasien,
            'content'    => 'suhu_tubuh/riwayat',
        ];
        $this->load->view( 'layout/wrapper', $data, false );
        }

    // Riwayat
    public function riwayat($id_pasien)
        {
        $pasien     = $this->pasien_model->detail( $id_pasien );
        $suhu_tubuh = $this->suhu_tubuh_model->pasien( $id_pasien );

        // array
        $data = [ 
            'title'      => 'Riwayat Suhu Tubuh : ' . $pasien->nama_pasien,
            'suhu_tubuh' => $suhu_tubuh,
            'pasien'     => $pasien
        ];
        $this->load->view( 'suhu_tubuh/cetak_riwayat', $data, false );
        }

    // Export to Word
    public function export($id_pasien)
        {
        $pasien     = $this->pasien_model->detail( $id_pasien );
        $suhu_tubuh = $this->suhu_tubuh_model->pasien( $id_pasien );

        // array
        $data = [ 
            'title'      => 'Riwayat Suhu Tubuh : ' . $pasien->nama_pasien,
            'suhu_tubuh' => $suhu_tubuh,
            'pasien'     => $pasien
        ];
        $this->load->view( 'suhu_tubuh/word', $data, false );
        }


    // detail
    public function detail($id_suhu_tubuh)
        {
        $suhu_tubuh = $this->suhu_tubuh_model->detail( $id_suhu_tubuh );
        $id_pasien  = $suhu_tubuh->id_pasien;
        $pasien     = $this->pasien_model->detail( $id_pasien );
        // array
        $data = [ 
            'title'      => 'Riwayat Data Suhu Tubuh : ' . $pasien->nama_pasien,
            'suhu_tubuh' => $suhu_tubuh,
            'pasien'     => $pasien,
            'content'    => 'suhu_tubuh/detail',
        ];
        $this->load->view( 'layout/wrapper', $data, false );
        }
    // cetak data
    public function cetak($id_suhu_tubuh)
        {
        $suhu_tubuh = $this->suhu_tubuh_model->detail( $id_suhu_tubuh );
        $id_pasien  = $suhu_tubuh->id_pasien;
        $pasien     = $this->pasien_model->detail( $id_pasien );
        // array
        $data = [ 
            'title'      => 'Riwayat Data Suhu Tubuh : ' . $pasien->nama_pasien,
            'suhu_tubuh' => $suhu_tubuh,
            'pasien'     => $pasien
        ];
        $this->load->view( 'suhu_tubuh/cetak', $data, false );
        }

    public function tambah($id_pasien = '')
        {
        // ambil data pasien
        $pasien = $this->pasien_model->listing();
        // validasi
        $this->form_validation->set_rules(
            'id_pasien',
            'Pasien',
            'required',
            array( 'required' => '%s harus dipilih' )
        );

        if ($this->form_validation->run() === FALSE)
            {
            // array
            $data = array(
                'title'   => 'Tambah Data Suhu Tubuh',
                'pasien'  => $pasien,
                'content' => 'suhu_tubuh/tambah',
            );
            $this->load->view( 'layout/wrapper', $data, false );
            }
        else
            {
            $inp  = $this->input;
            $data = [ 
                // ambil id_user dari My_login.php
                'id_user'            => $this->session->userdata( 'id_user' ),
                'id_pasien'          => $inp->post( 'id_pasien' ),
                'tanggal_pengukuran' => date( 'Y-m-d', strtotime( $inp->post( 'tanggal_pengukuran' ) ) ),
                'jam_pengukuran'     => $inp->post( 'jam_pengukuran' ),
                'suhu_tubuh'         => $inp->post( 'suhu_tubuh' ),
                'metode_pengukuran'  => $inp->post( 'metode_pengukuran' ),
                'keterangan'         => $inp->post( 'keterangan' ),
                'tanggal_post'       => date( 'Y-m-d H:i:s' )
            ];
            // Proses model untuk penambahan data
            $this->suhu_tubuh_model->tambah( $data );
            // Notifikasi dan redirect
            $this->session->set_flashdata( 'sukses', 'Data telah ditambah' );
            redirect( base_url( 'suhu_tubuh' ), 'refresh' );
            }
        // end validasi
        }

    // Edit data  
    public function edit($id_suhu_tubuh)
        {
        $suhu_tubuh = $this->suhu_tubuh_model->detail( $id_suhu_tubuh );
        // ambil data pasien
        $pasien = $this->pasien_model->listing();
        // validasi
        $this->form_validation->set_rules(
            'id_pasien',
            'Pasien',
            'required',
            array( 'required' => '%s harus dipilih' )
        );

        if ($this->form_validation->run() === FALSE)
            {
            // array
            $data = array(
                'title'      => 'Edit Data Suhu Tubuh',
                'pasien'     => $pasien,
                'suhu_tubuh' => $suhu_tubuh,
                'content'    => 'suhu_tubuh/edit',
            );
            $this->load->view( 'layout/wrapper', $data, false );
            }
        else
            {
            $inp  = $this->input;
            $data = [ 
                // ambil id_user dari My_login.php
                'id_suhu_tubuh'      => $id_suhu_tubuh,
                'id_user'            => $this->session->userdata( 'id_user' ),
                'id_pasien'          => $inp->post( 'id_pasien' ),
                'tanggal_pengukuran' => date( 'Y-m-d', strtotime( $inp->post( 'tanggal_pengukuran' ) ) ),
                'jam_pengukuran'     => $inp->post( 'jam_pengukuran' ),
                'suhu_tubuh'         => $inp->post( 'suhu_tubuh' ),
                'metode_pengukuran'  => $inp->post( 'metode_pengukuran' ),
                'keterangan'         => $inp->post( 'keterangan' )
            ];
            // Proses model untuk penambahan data
            $this->suhu_tubuh_model->edit( $data );
            // Notifikasi dan redirect
            $this->session->set_flashdata( 'sukses', 'Data telah ditambah' );
            redirect( base_url( 'suhu_tubuh' ), 'refresh' );
            }
        // end validasi
        }

    // Delete data
    public function delete($id_suhu_tubuh)
        {
        $data = array( 'id_suhu_tubuh' => $id_suhu_tubuh );
        // hapus
        $this->suhu_tubuh_model->delete( $data );
        // Notifikasi
        $this->session->set_flashdata( 'sukses', 'Data telah dihapus' );
        redirect( base_url( 'suhu_tubuh' ), 'refresh' );
        }
    }