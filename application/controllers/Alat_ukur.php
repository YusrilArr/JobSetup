<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Alat_ukur extends CI_Controller
    {
    public function __construct()
        {
        parent::__construct();
        // proteksi halaman
        $this->check_login->cek_login();
        $this->load->model( 'alat_ukur_model' );
        // harus sesuai dengan nama model, case sensitive
        }

    // Data Pasien
    public function index()
        {
        $tool  = $this->alat_ukur_model->listing();
        $total = $this->alat_ukur_model->total();

        // Validasi input
        $valid = $this->form_validation;

        // Cek Kode Pasien
        $valid->set_rules(
            'id_tool',
            'Kode Alat Ukur',
            'required|is_unique[js_tool.id_tool]',
            [ 
                'required'  => '%s harus diisi',
                'is_unique' => '%s Sudah ada. Buat kode mesin baru',
            ]
        );

        // Jika sudah dicek dan error
        if ($valid->run() === false)
            {
            // End Validasi dan error
            $data = [ 
                'title'   => 'Data Alat Ukur (' . $total->total_alat_ukur . ')',
                'tool'    => $tool,
                'content' => 'alat_ukur/index',
            ];
            $this->load->view( 'layout/wrapper', $data, false );
            // Jika validasi ok simpan ke tabel USERS
            }
        else
            {
            $inp  = $this->input;
            $data = [ 
                // ambil id_user dari My_login.php
                // 'id_mesin'   => $this->session->userdata( 'id_mesin' ),
                'id_tool'   => $inp->post( 'id_tool' ),
                'tipe_tool' => $inp->post( 'tipe_tool' ),
                ];
            // Proses model untuk penambahan data
            $this->alat_ukur_model->tambah( $data );
            // Notifikasi dan redirect
            $this->session->set_flashdata( 'sukses', 'Data telah ditambah' );
            redirect( base_url( 'alat_ukur' ), 'refresh' );
            }
        }

    // Tambah Data Pasien
    public function tambah()
        {
        // Validasi input
        $valid = $this->form_validation;

        // Cek Kode Pasien
        $valid->set_rules(
            'id_tool',
            'Kode Alat Ukur',
            'required|is_unique[js_machines.id_tool]',
            [ 
                'required'  => '%s harus diisi',
                'is_unique' => '%s Sudah ada. Buat kode mesin baru',
            ]
        );

        // Jika sudah dicek dan error
        if ($valid->run() === false)
            {
            // End Validasi dan error
            $data = [ 
                'title'   => 'Tambah Alat Ukur',
                'content' => 'alat_ukur/tambah_baru',
            ];
            $this->load->view( 'layout/wrapper', $data, false );
            // Jika validasi ok simpan ke tabel USERS
            }
        else
            {
            $inp  = $this->input;
            $data = [ 
                // ambil id_user dari My_login.php
                // 'id_mesin'   => $this->session->userdata( 'id_mesin' ),
                'id_tool'          => $inp->post( 'id_tool' ),
                'tipe_tool'        => $inp->post( 'tipe_tool' ),
                'fungsi'           => $inp->post( 'fungsi' ),
                'stiker_kalibrasi' => $inp->post( 'stiker_kalibrasi' ),
                'expired_date'     => $inp->post( 'expired_date' ),
            ];
            // Proses model untuk penambahan data
            $this->alat_ukur_model->tambah( $data );
            // Notifikasi dan redirect
            $this->session->set_flashdata( 'sukses', 'Data telah ditambah' );
            redirect( base_url( 'alat_ukur' ), 'refresh' );
            }
        }

    // Edit Pasien
    public function edit($id_tool)
        {
        // panggil data yang akan diambil
        $tool = $this->alat_ukur_model->detail( $id_tool );
        // Validasi input
        $valid = $this->form_validation;

        // Cek nama
        $valid->set_rules(
            'tipe_tool',
            'Nama Tool',
            'required',
            [ 'required' => '%s harus diisi' ]
        );

        // Jika sudah dicek
        if ($valid->run() === false)
            {
            // End Validasi dan error
            $data = [ 
                'title'   => 'Edit Data Tool (' . $tool->nama_tool . ')',
                'mesin'   => $tool,
                'content' => 'mesin/edit',
            ];
            $this->load->view( 'layout/wrapper', $data, false );
            // Jika validasi ok masuk database
            }
        else
            {
            $inp  = $this->input;
            $data = [ 
                // 'id_pasien'     => $id_pasien,
                // 'id_mesin'   => $this->session->userdata( 'id_mesin' ),
                'id_mesin'   => $inp->post( 'id_mesin' ),
                'nama_mesin' => $inp->post( 'nama_mesin' ),
                ];

            // Proses model untuk penambahan data
            $this->alat_ukur_model->edit( $data );
            // Notifikasi dan redirect
            $this->session->set_flashdata( 'sukses', 'Data telah diedit' );
            redirect( base_url( 'mesin' ), 'refresh' );
            }
        }

    // Detail pasien
    public function detail($id_tool)
        {
        $mesin = $this->alat_ukur_model->detail( $id_tool );
        $data  = [ 
            'title'   => $mesin->nama_mesin,
            'mesin'   => $mesin,
            'content' => 'mesin/detail',
        ];
        $this->load->view( 'layout/wrapper', $data, false );
        }

    public function cetak($id_mesin)
        {
        $mesin = $this->alat_ukur_model->detail( $id_mesin );
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
        $this->alat_ukur_model->delete( $data );
        // Notifikasi
        $this->session->set_flashdata( 'sukses', 'Data telah dihapus' );
        redirect( base_url( 'mesin' ), 'refresh' );
        }
    }