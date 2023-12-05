<?php
defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Setup_model extends CI_Model
    {
    public function __construct()
        {
        parent::__construct();
        $this->load->database();
        }

    // Ambil data user
    public function listing()
        {
        $this->db->select( '*' );
        $this->db->from( 'js_transaksi' );
        $this->db->order_by( 'item_code' );
        $query = $this->db->get();
        return $query->result();
        }

    // Ambil detail data user
    public function detail($no_roll)
        {
        $this->db->select( '*' );
        $this->db->from( 'js_transaksi' );
        $this->db->where( 'no_roll', $no_roll );
        $this->db->order_by( 'no_roll' );
        $query = $this->db->get();
        return $query->row();
        }

    public function login($username, $password)
        {
        $this->db->select( '*' );
        $this->db->from( 'js_transaksi' );
        $this->db->where(
            array(
                'username' => $username,
                'password' => $password,
                // 'password' => sha1( $password )
            )
        );
        $this->db->order_by( 'item_code' );
        $query = $this->db->get();
        return $query->row();
        }

    // Hitung total user
    public function total()
        {
        $this->db->select( 'COUNT(*) AS total_transaksi' );
        $this->db->from( 'js_transaksi' );
        $this->db->order_by( 'item_code' );
        $query = $this->db->get();
        return $query->row();
        }

    // Delete data
    public function delete($data)
        {
        $this->db->where( 'no_roll', $data['no_roll'] );
        $this->db->delete( 'js_transaksi', $data );
        }

    // Edit data
    public function edit($data)
        {
        // Mengatur zona waktu ke "Asia/Jakarta"
        date_default_timezone_set( 'Asia/Jakarta' );

        $data['tanggal_update'] = date( 'Y-m-d H:i:s' );

        $this->db->where( 'no_roll', $data['no_roll'] );
        $this->db->update( 'js_transaksi', $data );
        }

    // Tambah user
    public function insert_data($data)
        {
        // Mengatur zona waktu ke "Asia/Jakarta"
        date_default_timezone_set( 'Asia/Jakarta' );

        // $data['tanggal_transaksi'] = date( 'Y-m-d H:i:s' );

        // $no_mesin          = $this->input->post( 'no_mesin' );
        // $tanggal_transaksi = $this->input->post( 'tanggal_transaksi' );
        // $shift             = $this->input->post( 'shift' );
        // $group             = $this->input->post( 'group' );
        // $operator          = $this->input->post( 'operator' );
        // $nip               = $this->input->post( 'nip' );

        // $id_tool_thickness      = $this->input->post( 'id_tool_thickness' );
        // $ok_kalibrasi_thickness = $this->input->post( 'ok_kalibrasi_thickness' );
        // $expired_thickness      = $this->input->post( 'expired_thickness' );
        // $id_tool_width          = $this->input->post( 'id_tool_width' );
        // $ok_kalibrasi_width     = $this->input->post( 'ok_kalibrasi_width' );
        // $expired_width          = $this->input->post( 'expired_width' );

        // // $no_roll                           = $this->input->post( 'no_roll' );
        // $item_code        = $this->input->post( 'item_code' );
        // $no_spec          = $this->input->post( 'no_spec' );
        // $dc_supplier      = $this->input->post( 'dc_supplier' );
        // $dc_item_code     = $this->input->post( 'dc_item_code' );
        // $dc_barcode_no    = $this->input->post( 'dc_barcode_no' );
        // $dc_tanggal_masuk = $this->input->post( 'dc_tanggal_masuk' );
        // $dc_no_roll       = $this->input->post( 'dc_no_roll' );
        // $dc_expired       = $this->input->post( 'dc_expired' );
        // $dc_a             = $this->input->post( 'dc_a' );
        // $dc_spl_a         = $this->input->post( 'dc_spl_a' );

        // $comp_code             = $this->input->post( 'comp_code' );
        // $comp_barcode          = $this->input->post( 'comp_barcode' );
        // $comp_batch            = $this->input->post( 'comp_batch' );
        // $comp_tgl_bln_grp_line = $this->input->post( 'comp_tgl_bln_grp_line' );
        // $comp_expired          = $this->input->post( 'comp_expired' );
        // $comp_a                = $this->input->post( 'comp_a' );
        // $comp_output_ext_a     = $this->input->post( 'comp_output_ext_a' );

        // $std_produk_ds                     = $this->input->post( 'std_produk_ds' );
        // $std_produk_ctr                    = $this->input->post( 'std_produk_ctr' );
        // $std_produk_hs                     = $this->input->post( 'std_produk_hs' );
        // $std_produk_width                  = $this->input->post( 'std_produk_width' );
        // $std_proses_fabric_before_calender = $this->input->post( 'std_proses_fabric_before_calender' );
        // $std_proses_fabric_after_calender  = $this->input->post( 'std_proses_fabric_after_calender' );
        // $std_proses_crossing_hs_1_4        = $this->input->post( 'std_proses_crossing_hs_1_4' );
        // $std_proses_crossing_ds_1_4        = $this->input->post( 'std_proses_crossing_ds_1_4' );
        // $std_proses_gaproll_ds_1_2         = $this->input->post( 'std_proses_gaproll_ds_1_2' );
        // $std_proses_gaproll_ds_2_3         = $this->input->post( 'std_proses_gaproll_ds_2_3' );
        // $std_proses_gaproll_ds_3_4         = $this->input->post( 'std_proses_gaproll_ds_3_4' );
        // $std_proses_gaproll_hs_1_2         = $this->input->post( 'std_proses_gaproll_hs_1_2' );
        // $std_proses_gaproll_hs_2_3         = $this->input->post( 'std_proses_gaproll_hs_2_3' );
        // $std_proses_gaproll_hs_3_4         = $this->input->post( 'std_proses_gaproll_hs_3_4' );

        // $act_produk_ds                     = $this->input->post( 'act_produk_ds' );
        // $act_produk_ctr                    = $this->input->post( 'act_produk_ctr' );
        // $act_produk_hs                     = $this->input->post( 'act_produk_hs' );
        // $act_produk_width                  = $this->input->post( 'act_produk_width' );
        // $act_proses_fabric_before_calender = $this->input->post( 'no_roll' );
        // $act_proses_fabric_after_calender  = $this->input->post( 'act_proses_fabric_after_calender' );
        // $act_proses_crossing_hs_1_4        = $this->input->post( 'act_proses_crossing_hs_1_4' );
        // $act_proses_crossing_ds_1_4        = $this->input->post( 'act_proses_crossing_ds_1_4' );
        // $act_proses_gaproll_ds_1_2         = $this->input->post( 'act_proses_gaproll_ds_1_2' );
        // $act_proses_gaproll_ds_2_3         = $this->input->post( 'act_proses_gaproll_ds_2_3' );
        // $act_proses_gaproll_ds_3_4         = $this->input->post( 'act_proses_gaproll_ds_3_4' );
        // $act_proses_gaproll_hs_1_2         = $this->input->post( 'act_proses_gaproll_hs_1_2' );
        // $act_proses_gaproll_hs_2_3         = $this->input->post( 'act_proses_gaproll_hs_2_3' );
        // $act_proses_gaproll_hs_3_4         = $this->input->post( 'act_proses_gaproll_hs_3_4' );

        // $appr_treatment             = $this->input->post( 'appr_treatment' );
        // $penggantian_kondisi_linear = $this->input->post( 'penggantian_kondisi_linear' );
        // $supply_treatment           = $this->input->post( 'supply_treatment' );
        // $quantity                   = $this->input->post( 'quantity' );
        // $tag_identified             = $this->input->post( 'tag_identified' );


        // $data = [ 
        //     'no_mesin'                          => $no_mesin,
        //     'tanggal_transaksi'                 => $tanggal_transaksi,
        //     'shift'                             => $shift,
        //     'group'                             => $group,
        //     'operator'                          => $operator,
        //     'nip'                               => $nip,

        //     'id_tool_thickness'                 => $id_tool_thickness,
        //     'ok_kalibrasi_thickness'            => $ok_kalibrasi_thickness,
        //     'expired_thickness'                 => $expired_thickness,
        //     'id_tool_width'                     => $id_tool_width,
        //     'ok_kalibrasi_width'                => $ok_kalibrasi_width,
        //     'expired_width'                     => $expired_width,

        //     // 'no_roll'                           => $no_roll,
        //     'item_code'                         => $item_code,
        //     'no_spec'                           => $no_spec,
        //     'dc_supplier'                       => $dc_supplier,
        //     'dc_item_code'                      => $dc_item_code,
        //     'dc_barcode_no'                     => $dc_barcode_no,
        //     'dc_tanggal_masuk'                  => $dc_tanggal_masuk,
        //     'dc_no_roll'                        => $dc_no_roll,
        //     'dc_expired'                        => $dc_expired,
        //     'dc_a'                              => $dc_a,
        //     'dc_spl_a'                          => $dc_spl_a,

        //     'comp_code'                         => $comp_code,
        //     'comp_barcode'                      => $comp_barcode,
        //     'comp_batch'                        => $comp_batch,
        //     'comp_tgl_bln_grp_line'             => $comp_tgl_bln_grp_line,
        //     'comp_expired'                      => $comp_expired,
        //     'comp_a'                            => $comp_a,
        //     'comp_output_ext_a'                 => $comp_output_ext_a,

        //     'std_produk_ds'                     => $std_produk_ds,
        //     'std_produk_ctr'                    => $std_produk_ctr,
        //     'std_produk_hs'                     => $std_produk_hs,
        //     'std_produk_width'                  => $std_produk_width,
        //     'std_proses_fabric_before_calender' => $std_proses_fabric_before_calender,
        //     'std_proses_fabric_after_calender'  => $std_proses_fabric_after_calender,
        //     'std_proses_crossing_hs_1_4'        => $std_proses_crossing_hs_1_4,
        //     'std_proses_crossing_ds_1_4'        => $std_proses_crossing_ds_1_4,
        //     'std_proses_gaproll_ds_1_2'         => $std_proses_gaproll_ds_1_2,
        //     'std_proses_gaproll_ds_2_3'         => $std_proses_gaproll_ds_2_3,
        //     'std_proses_gaproll_ds_3_4'         => $std_proses_gaproll_ds_3_4,
        //     'std_proses_gaproll_hs_1_2'         => $std_proses_gaproll_hs_1_2,
        //     'std_proses_gaproll_hs_2_3'         => $std_proses_gaproll_hs_2_3,
        //     'std_proses_gaproll_hs_3_4'         => $std_proses_gaproll_hs_3_4,

        //     'act_produk_ds'                     => $act_produk_ds,
        //     'act_produk_ctr'                    => $act_produk_ctr,
        //     'act_produk_hs'                     => $act_produk_hs,
        //     'act_produk_width'                  => $act_produk_width,
        //     'act_proses_fabric_before_calender' => $act_proses_fabric_before_calender,
        //     'act_proses_fabric_after_calender'  => $act_proses_fabric_after_calender,
        //     'act_proses_crossing_hs_1_4'        => $act_proses_crossing_hs_1_4,
        //     'act_proses_crossing_ds_1_4'        => $act_proses_crossing_ds_1_4,
        //     'act_proses_gaproll_ds_1_2'         => $act_proses_gaproll_ds_1_2,
        //     'act_proses_gaproll_ds_2_3'         => $act_proses_gaproll_ds_2_3,
        //     'act_proses_gaproll_ds_3_4'         => $act_proses_gaproll_ds_3_4,
        //     'act_proses_gaproll_hs_1_2'         => $act_proses_gaproll_hs_1_2,
        //     'act_proses_gaproll_hs_2_3'         => $act_proses_gaproll_hs_2_3,
        //     'act_proses_gaproll_hs_3_4'         => $act_proses_gaproll_hs_3_4,

        //     'appr_treatment'                    => $appr_treatment,
        //     'penggantian_kondisi_linear'        => $penggantian_kondisi_linear,
        //     'supply_treatment'                  => $supply_treatment,
        //     'quantity'                          => $quantity,
        //     'tag_identified'                    => $tag_identified,


        // ];

        $this->db->insert( 'js_transaksi', $data );
        return $this->db->insert_id();
        }

    public function get_access_level($username)
        {
        $this->db->select( 'akses_level' );
        $this->db->where( 'username', $username );
        $query = $this->db->get( 'js_users' );

        if ($query->num_rows() > 0) {
            return $query->row()->akses_level;
            }
        else {
            return null;
            }
        }

    public function get_setup_by_item_code($item_code)
        {
        // Query the database to retrieve setup data based on item_code
        $query = $this->db->get_where( 'js_transaksi', array( 'item_code' => $item_code ) );

        // Return the result as an object
        return $query->row();
        }


    }