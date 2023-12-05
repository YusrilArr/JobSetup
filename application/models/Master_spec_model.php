<?php
defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Master_spec_model extends CI_Model
    {
    public function __construct()
        {
        parent::__construct();
        $this->load->database();
        }

    // Ambil data js_spec
    public function listing()
        {
        $this->db->select( '*' );
        $this->db->from( 'js_spec' );
        $this->db->order_by( 'no_spec', 'desc' );
        $query = $this->db->get();
        return $query->result();
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
    // Ambil detail data js_spec
    public function detail($no_spec)
        {
        $this->db->select( '*' );
        $this->db->from( 'js_spec' );
        $this->db->where( 'no_spec', $no_spec );
        $this->db->order_by( 'no_spec', 'desc' );
        $query = $this->db->get();
        return $query->row();
        }

    // Hitung total js_spec
    public function total()
        {
        $this->db->select( 'COUNT(*) AS total_spec' );
        $this->db->from( 'js_spec' );
        $this->db->order_by( 'no_spec', 'desc' );
        $query = $this->db->get();
        return $query->row();
        }

    // Delete data
    public function delete($data)
        {
        $this->db->where( 'no_spec', $data['no_spec'] );
        $this->db->delete( 'js_spec', $data );
        }

    // Edit data
    public function edit($data)
        {
        date_default_timezone_set( 'Asia/Jakarta' );

        $data['update_at'] = date( 'Y-m-d H:i:s' );

        $this->db->where( 'no_spec', $data['no_spec'] );
        $this->db->update( 'js_spec', $data );
        }

    // Tambah js_spec
    public function tambah($data)
        {
        // Mengatur zona waktu ke "Asia/Jakarta"
        date_default_timezone_set( 'Asia/Jakarta' );

        $no_spec                = $this->input->post( 'no_spec' );
        $thick_drive_side       = $this->input->post( 'thick_drive_side' );
        $thick_center           = $this->input->post( 'thick_center' );
        $thick_heather_side     = $this->input->post( 'thick_heather_side' );
        $width                  = $this->input->post( 'width' );
        $fabric_before_calender = $this->input->post( 'fabric_before_calender' );
        $fabric_after_calender  = $this->input->post( 'fabric_after_calender' );
        $crossing_hs_1_4        = $this->input->post( 'crossing_hs_1_4' );
        $crossing_ds_1_4        = $this->input->post( 'crossing_ds_1_4' );
        $gaproll_ds_1_2         = $this->input->post( 'gaproll_ds_1_2' );
        $gaproll_ds_2_3         = $this->input->post( 'gaproll_ds_2_3' );
        $gaproll_ds_3_4         = $this->input->post( 'gaproll_ds_3_4' );
        $gaproll_hs_1_2         = $this->input->post( 'gaproll_hs_1_2' );
        $gaproll_hs_2_3         = $this->input->post( 'gaproll_hs_2_3' );
        $gaproll_hs_3_4         = $this->input->post( 'gaproll_hs_3_4' );
        $username               = $this->session->userdata( 'username' );

        $data = [ 
            'no_spec'                => $no_spec,
            'thick_drive_side'       => $thick_drive_side,
            'thick_center'           => $thick_center,
            'thick_heather_side'     => $thick_heather_side,
            'width'                  => $width,
            'fabric_before_calender' => $fabric_before_calender,
            'fabric_after_calender'  => $fabric_after_calender,
            'crossing_hs_1_4'        => $crossing_hs_1_4,
            'crossing_ds_1_4'        => $crossing_ds_1_4,
            'gaproll_ds_1_2'         => $gaproll_ds_1_2,
            'gaproll_ds_2_3'         => $gaproll_ds_2_3,
            'gaproll_ds_3_4'         => $gaproll_ds_3_4,
            'gaproll_hs_1_2'         => $gaproll_hs_1_2,
            'gaproll_hs_2_3'         => $gaproll_hs_2_3,
            'gaproll_hs_3_4'         => $gaproll_hs_3_4,
            'created_by'             => $username,
            'tanggal_create'         => date( 'Y-m-d H:i:s' ),
        ];


        $this->db->insert( 'js_spec', $data );
        }

    //Get Spec for Transactions
    public function get_spec_info($no_spec)
        {
        $this->db->select( '*' );
        $this->db->from( 'js_spec' );
        $this->db->where( 'no_spec', $no_spec );
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array();
            }
        else {
            return false;
            }
        }

    public function is_spec_exists($no_spec)
        {
        $this->db->where( 'no_spec', $no_spec );
        $query = $this->db->get( 'js_spec' );
        return $query->num_rows() > 0;
        }

    public function getAutoComplete($search_term)
        {
        $this->db->like( 'no_spec', $search_term );
        $query = $this->db->get( 'js_spec' );
        return $query->result();
        }

    }