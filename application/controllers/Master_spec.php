<?php

defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Master_spec extends CI_Controller
    {
    public function __construct()
        {
        parent::__construct();
        // proteksi halaman
        $this->check_login->cek_login();
        $this->load->model( 'Master_spec_model' );
        // harus sesuai dengan nama model, case sensitive
        }

    // Data Pasien
    public function index()
        {
        $master_spec = $this->Master_spec_model->listing();
        $total       = $this->Master_spec_model->total();
        $username    = $this->session->userdata( 'username' );

        $akses_level = $this->Master_spec_model->get_access_level( $username );
        $this->session->userdata( 'akses_level', $akses_level );

        // Validasi input
        $valid = $this->form_validation;

        $valid->set_rules(
            'no_spec',
            'Nomor Spesifikasi',
            'required|is_unique[js_spec.no_spec]',
            [ 
                'required'  => '%s Harus diisi',
                'is_unique' => '%s Sudah Ada!',
            ]
        );

        $valid->set_rules(
            'thick_drive_side',
            'Thickness Driver Side',
            'required',
            [ 'required' => '%s Harus Diisi' ]
        );

        if ($valid->run() === false) {
            $data = [ 
                'title'       => 'Data Master Spesifikasi (' . $total->total_spec . ')',
                'master_spec' => $master_spec,
                'content'     => 'master_spec/index',
            ];
            $this->load->view( 'layout/wrapper', $data, false );
            }
        else {
            $inp  = $this->input;
            $data = [ 
                'no_spec'                => $inp->post( 'no_spec' ),
                'thick_drive_side'       => $inp->post( 'thick_drive_side' ),
                'thick_center'           => $inp->post( 'thick_center' ),
                'thick_heather_side'     => $inp->post( 'thick_heather_side' ),
                'width'                  => $inp->post( 'width' ),
                'fabric_before_calender' => $inp->post( 'fabric_before_calender' ),
                'fabric_after_calender'  => $inp->post( 'fabric_after_calender' ),
                'crossing_hs_1_4'        => $inp->post( 'crossing_hs_1_4' ),
                'crossing_ds_1_4'        => $inp->post( 'crossing_ds_1_4' ),
                'gaproll_ds_1_2'         => $inp->post( 'gaproll_ds_1_2' ),
                'gaproll_ds_2_3'         => $inp->post( 'gaproll_ds_2_3' ),
                'gaproll_ds_3_4'         => $inp->post( 'gaproll_ds_3_4' ),
                'gaproll_hs_1_2'         => $inp->post( 'gaproll_hs_1_2' ),
                'gaproll_hs_2_3'         => $inp->post( 'gaproll_hs_2_3' ),
                'gaproll_hs_3_4'         => $inp->post( 'gaproll_hs_3_4' ),
                'created_by'             => $username,
            ];
            $this->Master_spec_model->tambah( $data );

            $this->session->set_flashdata( 'sukses', 'Data Berhasil Ditambah' );
            redirect( base_url( 'master_spec' ), 'refresh' );
            }

        }




    // Edit Pasien
    public function edit($no_spec)
        {
        // panggil data yang akan diambil
        $master_spec = $this->Master_spec_model->detail( $no_spec );
        // Validasi input
        $valid = $this->form_validation;

        // Cek nama
        $valid->set_rules(
            'no_spec',
            'Nomor Spesifikasi',
            'required',
            [ 'required' => '%s harus diisi' ]
        );

        // Jika sudah dicek
        if ($valid->run() === false) {
            // End Validasi dan error
            $data = [ 
                'title'       => 'Edit Data Master Spesifikasi (' . $master_spec->no_spec . ')',
                'master_spec' => $master_spec,
                'content'     => 'master_spec/edit',
            ];
            $this->load->view( 'layout/wrapper', $data, false );
            }
        // Jika validasi ok masuk database
        else {
            $inp  = $this->input;
            $data = [ 
                'no_spec'                => $no_spec,
                'thick_drive_side'       => $inp->post( 'thick_drive_side' ),
                'thick_center'           => $inp->post( 'thick_center' ),
                'thick_heather_side'     => $inp->post( 'thick_heather_side' ),
                'width'                  => $inp->post( 'width' ),
                'fabric_before_calender' => $inp->post( 'fabric_before_calender' ),
                'fabric_after_calender'  => $inp->post( 'fabric_after_calender' ),
                'crossing_hs_1_4'        => $inp->post( 'crossing_hs_1_4' ),
                'crossing_ds_1_4'        => $inp->post( 'crossing_ds_1_4' ),
                'gaproll_ds_1_2'         => $inp->post( 'gaproll_ds_1_2' ),
                'gaproll_ds_2_3'         => $inp->post( 'gaproll_ds_2_3' ),
                'gaproll_ds_3_4'         => $inp->post( 'gaproll_ds_3_4' ),
                'gaproll_hs_1_2'         => $inp->post( 'gaproll_hs_1_2' ),
                'gaproll_hs_2_3'         => $inp->post( 'gaproll_hs_2_3' ),
                'gaproll_hs_3_4'         => $inp->post( 'gaproll_hs_3_4' ),
            ];

            // Proses model untuk penambahan data
            $this->Master_spec_model->edit( $data );
            // Notifikasi dan redirect
            $this->session->set_flashdata( 'sukses', 'Data telah diedit' );
            redirect( base_url( 'master_spec' ), 'refresh' );
            }
        }

    // Detail spec
    public function detail($no_spec)
        {
        $master_spec = $this->Master_spec_model->detail( $no_spec );
        $data        = [ 
            'title'       => $master_spec->no_spec,
            'master_spec' => $master_spec,
            'content'     => 'master_spec/detail',
        ];
        $this->load->view( 'layout/wrapper', $data, false );
        }

    public function cetak($no_spec)
        {
        $master_spec = $this->Master_spec_model->detail( $no_spec );
        $data        = [ 
            'title'       => $master_spec->no_spec,
            'master_spec' => $master_spec,
            // 'content' => 'pasien/detail',
        ];
        $this->load->view( 'master_spec/cetak', $data, false );
        }

    // Delete data
    public function delete($no_spec)
        {
        $data = [ 'no_spec' => $no_spec ];
        // hapus
        $this->Master_spec_model->delete( $data );
        // Notifikasi
        $this->session->set_flashdata( 'sukses', 'Data telah dihapus' );
        redirect( base_url( 'master_spec' ), 'refresh' );
        }

    public function getSpecAutoComplete()
        {
        $search_term   = $this->input->post( 'search_term' );
        $data['specs'] = $this->Master_spec_model->getAutoComplete( $search_term );
        echo json_encode( $data['specs'] );
        }
    }