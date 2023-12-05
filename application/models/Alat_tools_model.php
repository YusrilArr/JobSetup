<?php

defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Alat_tools_model extends CI_Model
    {
    public function __construct()
        {
        parent::__construct();
        $this->load->database();
        }


    // Ambil data denyut_nadi
    public function listing()
        {
        $this->db->select( '*' );
        $this->db->from( 'js_tools' );
        $this->db->order_by( 'id_tool' );
        $query = $this->db->get();
        return $query->result();
        }

    // Get data for automation
    public function getTools($id_tool)
        {
        $this->db->select( 'id_tool' );
        $this->db->from( 'js_tools' );
        $query = $this->db->get();
        return $query->row_array();
        }

    // Ambil detail data tools
    public function detail($id_tool)
        {
        $this->db->select( '*' );
        $this->db->from( 'js_tools' );
        $this->db->where( 'id_tool', $id_tool );
        $this->db->order_by( 'tipe_tool', 'desc' );
        $query = $this->db->get();

        return $query->row();
        }

    // Hitung total tools
    public function total()
        {
        $this->db->select( 'COUNT(*) AS total_tools' );
        $this->db->from( 'js_tools' );
        $this->db->order_by( 'id_tool' );
        $query = $this->db->get();
        return $query->row();
        }

    // Delete data
    public function delete($data)
        {
        $this->db->where( 'id_tool', $data['id_tool'] );
        $this->db->delete( 'js_tools', $data );
        }

    // Edit data
    public function edit($data)
        {
        // Mengatur zona waktu ke "Asia/Jakarta"
        date_default_timezone_set( 'Asia/Jakarta' );

        $data['tanggal_update'] = date( 'Y-m-d H:i:s' );
        // 'tanggal_create' => date( 'Y-m-d H:i:s' )

        $this->db->where( 'id_tool', $data['id_tool'] );
        $this->db->update( 'js_tools', $data );
        }


    public function tambah($data)
        {
        // Mengatur zona waktu ke "Asia/Jakarta"
        date_default_timezone_set( 'Asia/Jakarta' );

        $id_tool          = $this->input->post( 'id_tool' );
        $tipe_tool        = $this->input->post( 'tipe_tool' );
        $kategori         = $this->input->post( 'kategori' );
        $stiker_kalibrasi = $this->input->post( 'stiker_kalibrasi' );
        $expired_date     = $this->input->post( 'expired_date' );
        $username         = $this->session->userdata( 'username' );

        $data = [ 
            'id_tool'          => $id_tool,
            'tipe_tool'        => $tipe_tool,
            'kategori'         => $kategori,
            'stiker_kalibrasi' => $stiker_kalibrasi,
            'expired_date'     => $expired_date,
            'update_by'        => $username,
            'tanggal_create'   => date( 'Y-m-d H:i:s' ),
        ];



        $this->db->insert( 'js_tools', $data );
        }

    public function get_tool_info($id_tool_thickness)
        {
        $this->db->select( '*' );
        $this->db->from( 'js_tools' );
        $this->db->where( 'id_tool', $id_tool_thickness );
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array();
            }
        else {
            return false;
            }
        }

    public function get_width_info($id_tool_width)
        {
        $this->db->select( '*' );
        $this->db->from( 'js_tools' );
        $this->db->where( 'id_tool', $id_tool_width );
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row_array();
            }
        else {
            return false;
            }
        }

    public function is_thick_exists($id_tool_thickness)
        {
        $this->db->where( 'id_tool', $id_tool_thickness );
        $query = $this->db->get( 'js_tools' );
        return $query->num_rows() > 0;
        }

    public function is_width_exists($id_tool_width)
        {
        $this->db->where( 'id_tool', $id_tool_width );
        $query = $this->db->get( 'js_tools' );
        return $query->num_rows() > 0;
        }

    public function getThicknessTool()
        {
        $this->db->select( 'id_tool' );
        $this->db->where( 'tipe_tool', 'Thickness' );
        $this->db->where( 'kategori', 'Topping Callender' );
        $query = $this->db->get( 'js_tools' );

        return $query->result_array();
        }

    public function getWidthTool()
        {
        $this->db->select( 'id_tool' );
        $this->db->where( 'tipe_tool', 'Width' );
        $this->db->where( 'kategori', 'Topping Callender' );
        $query = $this->db->get( 'js_tools' );

        return $query->result_array();
        }

    }