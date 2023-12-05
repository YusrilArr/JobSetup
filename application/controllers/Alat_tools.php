<?php

defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Alat_tools extends CI_Controller
    {
    public function __construct()
        {
        parent::__construct();


        $this->load->model( 'Alat_tools_model' );
        }

    // Halaman Utama
    public function index()
        {
        $alat_tools = $this->Alat_tools_model->listing();
        $total      = $this->Alat_tools_model->total();
        $username   = $this->session->userdata( 'username' );
        // $this->load->model( 'Setup_model' );
        // $this->load->view( 'tambah_baru' );
        $valid = $this->form_validation;

        $valid->set_rules(
            'stiker_kalibrasi',
            'Stiker OK Kalibrasi',
            'required|is_unique[js_tools.stiker_kalibrasi]',
            [ 
                'required' => '%s harus diisi',
            ]
        );
        $valid->set_rules(
            'expired_date',
            'Expired Date',
            'required',
            [ 'required' => '%s Harus Diisi' ]
        );

        $valid->set_rules(
            'id_tool',
            'Nomor Tools',
            'required',
            [ 'required' => '%s harus diisi' ]
        );
        if ($valid->run() === false) {
            $data = [ 
                'title'      => 'Data Alat Ukur (' . $total->total_tools . ')',
                'alat_tools' => $alat_tools,
                'content'    => 'alat_tools/index',
            ];
            $this->load->view( 'layout/wrapper', $data, false );
            }
        else {
            $inp  = $this->input;
            $data = [ 
                'id_tool'          => $inp->post( 'id_tool' ),
                'tipe_tool'        => $inp->post( 'tipe_tool' ),
                'kategori'         => $inp->post( 'kategori' ),
                'stiker_kalibrasi' => $inp->post( 'stiker_kalibrasi' ),
                'expired_date'     => $inp->post( 'expired_date' ),
                'update_by'        => $username,
            ];

            $this->Alat_tools_model->tambah( $data );

            $this->session->set_flashdata( 'sukses', 'Data berhasil ditambah' );
            redirect( base_url( 'alat_tools' ), 'refresh' );
            }
        }



    // detail
    public function detail($id_tool)
        {
        $alat_tools = $this->Alat_tools_model->detail( $id_tool );
        // array
        $data = [ 
            'title'      => 'Detail Tools : ' . $id_tool,
            'alat_tools' => $alat_tools,
            'content'    => 'alat_tools/detail',
        ];
        $this->load->view( 'layout/wrapper', $data, false );
        }


    // Edit data  
    public function edit($id_tool)
        {
        $alat_tools = $this->Alat_tools_model->detail( $id_tool );
        // ambil data pasien
        // $pasien = $this->pasien_model->listing();
        // validasi
        $valid = $this->form_validation;

        $valid->set_rules(
            'id_tool',
            'Stiker OK Kalibrasi',
            'required',
            [ 'required' => '%s harus diisi' ]
        );

        if ($valid->run() === FALSE) {
            // array
            $data = [ 

                'title'      => 'Edit Tools ' . $alat_tools->id_tool . '',
                'alat_tools' => $alat_tools,
                'content'    => 'alat_tools/edit',
            ];

            $this->load->view( 'layout/wrapper', $data, false );
            }
        else {
            $inp  = $this->input;
            $data = [ 
                'id_tool'          => $id_tool,
                'tipe_tool'        => $inp->post( 'tipe_tool' ),
                'kategori'         => $inp->post( 'kategori' ),
                'stiker_kalibrasi' => $inp->post( 'stiker_kalibrasi' ),
                'expired_date'     => $inp->post( 'expired_date' ),
            ];
            // Proses model untuk penambahan data
            $this->Alat_tools_model->edit( $data );
            // Notifikasi dan redirect
            $this->session->set_flashdata( 'sukses', 'Data telah diedit' );
            redirect( base_url( 'alat_tools' ), 'refresh' );
            }
        // end validasi
        }

    // Delete data
    public function delete($id_tool)
        {
        $data = array( 'id_tool' => $id_tool );
        // hapus
        $this->Alat_tools_model->delete( $data );
        // Notifikasi
        $this->session->set_flashdata( 'sukses', 'Data telah dihapus' );
        redirect( base_url( 'alat_tools' ), 'refresh' );
        }

    }