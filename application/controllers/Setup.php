<?php

defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Setup extends CI_Controller
    {
    public function __construct()
        {
        parent::__construct();
        // proteksi halaman
        $this->check_login->cek_login();
        $this->load->model( 'Setup_model' );
        $this->load->model( 'Master_spec_model' );
        $this->load->model( 'Alat_tools_model' );
        // harus sesuai dengan nama model, case sensitive
        }



    // Data Pasien
    public function index()
        {

        $setup = $this->Setup_model->listing();
        $total = $this->Setup_model->total();

        $data = [ 
            'title'   => 'Data Set Up (' . $total->total_transaksi . ')',
            'setup'   => $setup,
            'content' => 'setup/index',
        ];

        $this->load->view( 'layout/wrapper', $data, false );
        }

    public function tambah_baru()
        {
        $data                  = [ 
            'title'   => 'Tambah Transaksi',
            // 'setup'   => $tambah_baru,
            'content' => 'setup/tambah_baru',
        ];
        $data['thicknessTool'] = $this->getDropDown();
        $data['widthTool']     = $this->getDropdownWidth();
        $this->load->view( 'layout/wrapper', $data, false );
        }



    // Tambah Setup
    public function tambah_data()
        {
        $this->load->helper( 'form' );
        $this->load->library( 'form_validation' );
        $username = $this->session->userdata( 'username' );
        $id_user  = $this->session->userdata( 'id_user' );


        $this->form_validation->set_rules(
            'no_spec',
            'Nomor Spec',
            'required',
        );

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_baru();
            }
        else {
            $this->load->model( 'Setup_model' );
            $this->load->model( 'Alat_tools_model' );
            $this->load->model( 'Master_spec_model' );

            $no_spec = $this->input->post( 'no_spec' );
            if (! $this->Master_spec_model->is_spec_exists( $no_spec )) {
                $this->session->set_flashdata( 'gagal', 'Nomor Spec Tidak Valid!' );
                redirect( base_url( 'setup/tambah_baru' ), 'refresh' );
                return;
                }

            $id_tool_thickness = $this->input->post( 'id_tool_thickness' );
            // if (! $this->Alat_tools_model->is_thick_exists( $id_tool_thickness )) {
            //     $this->session->set_flashdata( 'gagal', 'Nomor Tool Thickness Tidak Valid!' );
            //     redirect( base_url( 'setup/tambah_baru' ), 'refresh' );
            //     }


            $id_tool_width = $this->input->post( 'id_tool_width' );
            // if (! $this->Alat_tools_model->is_width_exists( $id_tool_width )) {
            //     $this->session->set_flashdata( 'gagal', 'Nomor Tool Width Tidak Valid!' );
            //     redirect( base_url( 'setup/tambah_baru' ), 'refresh' );
            //     }


            $akses_level = $this->Setup_model->get_access_level( $username );
            $this->session->userdata( 'akses_level', $akses_level );

            $spec_info  = $this->Master_spec_model->get_spec_info( $no_spec );
            $width_info = $this->Alat_tools_model->get_width_info( $id_tool_width );
            $tool_info  = $this->Alat_tools_model->get_tool_info( $id_tool_thickness );

            if ($tool_info) {
                $data        = array(
                    'no_mesin'                          => $this->input->post( 'no_mesin' ),
                    'tanggal_transaksi'                 => $this->input->post( 'hidden_tanggal' ),
                    'operator'                          => $username,
                    'shift'                             => $this->input->post( 'shift' ),
                    'group'                             => $this->input->post( 'group' ),
                    'nip'                               => $id_user,

                    'id_tool_thickness'                 => $id_tool_thickness,
                    'ok_kalibrasi_thickness'            => $tool_info['stiker_kalibrasi'],
                    'expired_thickness'                 => $tool_info['expired_date'],
                    'id_tool_width'                     => $id_tool_width,
                    'ok_kalibrasi_width'                => $width_info['stiker_kalibrasi'],
                    'expired_width'                     => $width_info['expired_date'],

                    // 'no_roll'                           => $this->input->post( 'no_roll' ),
                    'item_code'                         => $this->input->post( 'item_code' ),
                    'no_spec'                           => $no_spec,
                    'dc_supplier'                       => $this->input->post( 'dc_supplier' ),
                    'dc_item_code'                      => $this->input->post( 'dc_item_code' ),
                    'dc_barcode_no'                     => $this->input->post( 'dc_barcode_no' ),
                    'dc_tanggal_masuk'                  => $this->input->post( 'dc_tanggal_masuk' ),
                    'dc_no_roll'                        => $this->input->post( 'dc_no_roll' ),
                    'dc_expired'                        => $this->input->post( 'dc_expired' ),
                    'dc_a'                              => $this->input->post( 'dc_a' ),
                    'dc_spl_a'                          => $this->input->post( 'dc_spl_a' ),

                    'comp_code'                         => $this->input->post( 'comp_code' ),
                    'comp_barcode'                      => $this->input->post( 'comp_barcode' ),
                    'comp_batch'                        => $this->input->post( 'comp_batch' ),
                    'comp_tgl_bln_grp_line'             => $this->input->post( 'comp_tgl_bln_grp_line' ),
                    'comp_expired'                      => $this->input->post( 'comp_expired' ),
                    'comp_a'                            => $this->input->post( 'comp_a' ),
                    'comp_output_ext_a'                 => $this->input->post( 'comp_output_ext_a' ),

                    'std_produk_ds'                     => $spec_info['thick_drive_side'],
                    'std_produk_ctr'                    => $spec_info['thick_center'],
                    'std_produk_hs'                     => $spec_info['thick_heather_side'],
                    'std_produk_width'                  => $spec_info['width'],
                    'std_proses_fabric_before_calender' => $spec_info['fabric_before_calender'],
                    'std_proses_fabric_after_calender'  => $spec_info['fabric_after_calender'],
                    'std_proses_gaproll_ds_1_2'         => $spec_info['gaproll_ds_1_2'],
                    'std_proses_gaproll_ds_2_3'         => $spec_info['gaproll_ds_2_3'],
                    'std_proses_gaproll_ds_3_4'         => $spec_info['gaproll_ds_3_4'],
                    'std_proses_crossing_hs_1_4'        => $spec_info['crossing_hs_1_4'],
                    'std_proses_crossing_ds_1_4'        => $spec_info['crossing_ds_1_4'],
                    'std_proses_gaproll_hs_1_2'         => $spec_info['gaproll_hs_1_2'],
                    'std_proses_gaproll_hs_2_3'         => $spec_info['gaproll_hs_2_3'],
                    'std_proses_gaproll_hs_3_4'         => $spec_info['gaproll_hs_3_4'],

                    'act_produk_ds'                     => $this->input->post( 'act_produk_ds' ),
                    'act_produk_ctr'                    => $this->input->post( 'act_produk_ctr' ),
                    'act_produk_hs'                     => $this->input->post( 'act_produk_hs' ),
                    'act_produk_width'                  => $this->input->post( 'act_produk_width' ),
                    'act_proses_fabric_before_calender' => $this->input->post( 'act_proses_fabric_before_calender' ),
                    'act_proses_fabric_after_calender'  => $this->input->post( 'act_proses_fabric_after_calender' ),
                    'act_proses_gaproll_ds_1_2'         => $this->input->post( 'act_proses_gaproll_ds_1_2' ),
                    'act_proses_gaproll_ds_2_3'         => $this->input->post( 'act_proses_gaproll_ds_2_3' ),
                    'act_proses_gaproll_ds_3_4'         => $this->input->post( 'act_proses_gaproll_ds_3_4' ),
                    'act_proses_crossing_hs_1_4'        => $this->input->post( 'act_proses_crossing_hs_1_4' ),
                    'act_proses_crossing_ds_1_4'        => $this->input->post( 'act_proses_crossing_ds_1_4' ),
                    'act_proses_gaproll_hs_1_2'         => $this->input->post( 'act_proses_gaproll_hs_1_2' ),
                    'act_proses_gaproll_hs_2_3'         => $this->input->post( 'act_proses_gaproll_hs_2_3' ),
                    'act_proses_gaproll_hs_3_4'         => $this->input->post( 'act_proses_gaproll_hs_3_4' ),

                    'appr_treatment'                    => $this->input->post( 'appr_treatment' ),
                    'penggantian_kondisi_linear'        => $this->input->post( 'penggantian_kondisi_linear' ),
                    'supply_treatment'                  => $this->input->post( 'supply_treatment' ),
                    'quantity'                          => $this->input->post( 'quantity' ),
                    'tag_identified'                    => $this->input->post( 'tag_identified' ),

                );
                $inserted_id = $this->Setup_model->insert_data( $data );

                if ($inserted_id) {

                    $this->session->set_flashdata( 'sukses', 'Data telah ditambahkan' );
                    redirect( base_url( 'setup' ), 'refresh' );
                    }
                else {
                    $this->session->set_flashdata( 'gagal', 'Data gagal ditambahkan' );
                    redirect( base_url( 'setup' ), 'refresh' );
                    }
                }


            }

        }



    // Edit Mesin
    public function edit($no_roll)
        {
        // panggil data yang akan diambil
        $this->load->model( 'Setup_model' );
        $setup = $this->Setup_model->detail( $no_roll );
        // Validasi input
        $valid = $this->form_validation;

        // Cek na
        $valid->set_rules(
            'no_roll',
            'Nama Mesin',
            'required',
            [ 'required' => '%s harus diisi' ]
        );

        if ($valid->run() === false) {
            $this->edit_data( $no_roll );
            // End Validasi dan error
            $data = [ 
                'title'   => 'Edit Set Up (' . $setup->no_roll . ')',
                'setup'   => $setup,
                'content' => 'setup/edit_data',
            ];
            $this->load->view( 'layout/wrapper', $data, false );
            // Jika validasi ok masuk database
            }
        else {
            $data = [ 
                'no_mesin'                          => $this->input->post( 'no_mesin' ),
                'tanggal_transaksi'                 => $this->input->post( 'tanggal_transaksi' ),
                'operator'                          => $this->input->post( 'operator' ),
                'shift'                             => $this->input->post( 'shift' ),
                'group'                             => $this->input->post( 'group' ),
                'nip'                               => $this->input->post( 'nip' ),

                'id_tool_thickness'                 => $this->input->post( 'id_tool_thickness' ),
                'ok_kalibrasi_thickness'            => $this->input->post( 'ok_kalibrasi_thickness' ),
                'expired_thickness'                 => $this->input->post( 'expired_thickness' ),
                'id_tool_width'                     => $this->input->post( 'id_tool_width' ),
                'ok_kalibrasi_width'                => $this->input->post( 'ok_kalibrasi_width' ),
                'expired_width'                     => $this->input->post( 'expired_width' ),

                'no_roll'                           => $no_roll,
                'item_code'                         => $this->input->post( 'item_code' ),
                'no_spec'                           => $this->input->post( 'no_spec' ),
                'dc_supplier'                       => $this->input->post( 'dc_supplier' ),
                'dc_item_code'                      => $this->input->post( 'dc_item_code' ),
                'dc_barcode_no'                     => $this->input->post( 'dc_barcode_no' ),
                'dc_tanggal_masuk'                  => $this->input->post( 'dc_tanggal_masuk' ),
                'dc_no_roll'                        => $this->input->post( 'dc_no_roll' ),
                'dc_expired'                        => $this->input->post( 'dc_expired' ),
                'dc_a'                              => $this->input->post( 'dc_a' ),
                'dc_spl_a'                          => $this->input->post( 'dc_spl_a' ),

                'comp_code'                         => $this->input->post( 'comp_code' ),
                'comp_barcode'                      => $this->input->post( 'comp_barcode' ),
                'comp_batch'                        => $this->input->post( 'comp_batch' ),
                'comp_tgl_bln_grp_line'             => $this->input->post( 'comp_tgl_bln_grp_line' ),
                'comp_expired'                      => $this->input->post( 'comp_expired' ),
                'comp_a'                            => $this->input->post( 'comp_a' ),
                'comp_output_ext_a'                 => $this->input->post( 'comp_output_ext_a' ),

                // 'std_produk_ds'                     => $this->input->post( 'thick_drive_side' ),
                // 'std_produk_ctr'                    => $this->input->post( 'thick_center' ),
                // 'std_produk_hs'                     => $this->input->post( 'thick_heather_side' ),
                // 'std_produk_width'                  => $this->input->post( 'width' ),
                // 'std_proses_fabric_before_calender' => $this->input->post( 'fabric_before_calender' ),
                // 'std_proses_fabric_after_calender'  => $this->input->post( 'fabric_after_calender' ),
                // 'std_proses_gaproll_ds_1_2'         => $this->input->post( 'gaproll_ds_1_2' ),
                // 'std_proses_gaproll_ds_2_3'         => $this->input->post( 'gaproll_ds_2_3' ),
                // 'std_proses_gaproll_ds_3_4'         => $this->input->post( 'gaproll_ds_3_4' ),
                // 'std_proses_crossing_hs_1_4'        => $this->input->post( 'crossing_hs_1_4' ),
                // 'std_proses_crossing_ds_1_4'        => $this->input->post( 'crossing_ds_1_4' ),
                // 'std_proses_gaproll_hs_1_2'         => $this->input->post( 'gaproll_hs_1_2' ),
                // 'std_proses_gaproll_hs_2_3'         => $this->input->post( 'gaproll_hs_2_3' ),
                // 'std_proses_gaproll_hs_3_4'         => $this->input->post( 'gaproll_hs_3_4' ),

                'act_produk_ds'                     => $this->input->post( 'act_produk_ds' ),
                'act_produk_ctr'                    => $this->input->post( 'act_produk_ctr' ),
                'act_produk_hs'                     => $this->input->post( 'act_produk_hs' ),
                'act_produk_width'                  => $this->input->post( 'act_produk_width' ),
                'act_proses_fabric_before_calender' => $this->input->post( 'act_proses_fabric_before_calender' ),
                'act_proses_fabric_after_calender'  => $this->input->post( 'act_proses_fabric_after_calender' ),
                'act_proses_gaproll_ds_1_2'         => $this->input->post( 'act_proses_gaproll_ds_1_2' ),
                'act_proses_gaproll_ds_2_3'         => $this->input->post( 'act_proses_gaproll_ds_2_3' ),
                'act_proses_gaproll_ds_3_4'         => $this->input->post( 'act_proses_gaproll_ds_3_4' ),
                'act_proses_crossing_hs_1_4'        => $this->input->post( 'act_proses_crossing_hs_1_4' ),
                'act_proses_crossing_ds_1_4'        => $this->input->post( 'act_proses_crossing_ds_1_4' ),
                'act_proses_gaproll_hs_1_2'         => $this->input->post( 'act_proses_gaproll_hs_1_2' ),
                'act_proses_gaproll_hs_2_3'         => $this->input->post( 'act_proses_gaproll_hs_2_3' ),
                'act_proses_gaproll_hs_3_4'         => $this->input->post( 'act_proses_gaproll_hs_3_4' ),

                'appr_treatment'                    => $this->input->post( 'appr_treatment' ),
                'penggantian_kondisi_linear'        => $this->input->post( 'penggantian_kondisi_linear' ),
                'supply_treatment'                  => $this->input->post( 'supply_treatment' ),
                'quantity'                          => $this->input->post( 'quantity' ),
                'tag_identified'                    => $this->input->post( 'tag_identified' ),
                'tanggal_update'                    => date( 'Y-m-d H:i:s' ),
            ];

            // Proses model untuk penambahan data
            $this->Setup_model->edit( $data );
            // Notifikasi dan redirect
            $this->session->set_flashdata( 'sukses', 'Data telah diedit' );
            redirect( base_url( 'setup' ), 'refresh' );
            }
        }

    public function edit_data($no_roll)
        {
        $setup = $this->Setup_model->detail( $no_roll );
        $data  = [ 
            'title'   => 'Edit Transaksi',
            'setup'   => $setup,
            'content' => 'setup/edit',
        ];
        $this->load->view( 'layout/wrapper', $data, false );
        }

    // Detail \
    public function detail($no_roll)
        {
        $setup = $this->Setup_model->detail( $no_roll );
        $data  = [ 
            'title'   => 'Detail Data, No. Roll ' . $setup->no_roll . '',
            'setup'   => $setup,
            'content' => 'setup/detail',
        ];
        $this->load->view( 'layout/wrapper', $data, false );
        }

    public function cetak($no_roll)
        {
        $setup = $this->Setup_model->detail( $no_roll );
        $data  = [ 
            'title' => 'Cetak',
            'setup' => $setup,
            // 'content' => 'setup/detail',
        ];
        $this->load->view( 'setup/cetak', $data, false );
        }

    // Delete data
    public function delete($no_roll)
        {
        $data = [ 'no_roll' => $no_roll ];
        // hapus
        $this->Setup_model->delete( $data );
        // Notifikasi
        $this->session->set_flashdata( 'sukses', 'Data telah dihapus' );
        redirect( base_url( 'setup' ), 'refresh' );
        }

    public function autoFillShift()
        {
        //Set waktu default
        date_default_timezone_set( 'Asia/Jakarta' );

        $current_time = date( 'H:i' ); // Ambil waktu saat ini dalam format jam:menit
        $shift        = $this->calculateShift( $current_time );

        echo json_encode( [ 'shift' => $shift ] );
        }

    public function calculateShift($current_time)
        {
        if ($current_time >= '07:00' && $current_time < '15:00') {
            return 'Shift I';
            }
        elseif ($current_time >= '15:00' && $current_time < '23:00') {
            return 'Shift II';
            }
        else {
            return 'Shift III';
            }
        }

    public function getDropDown()
        {
        $this->load->model( 'Alat_tools_model' );
        $thicknessTools = $this->Alat_tools_model->getThicknessTool();
        return $thicknessTools;
        }

    public function getDropdownWidth()
        {
        $this->load->model( 'Alat_tools_model' );
        $widthTools = $this->Alat_tools_model->getWidthTool();
        return $widthTools;
        }

    }

