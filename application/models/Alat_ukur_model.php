<?php defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class alat_ukur_model extends CI_Model
    {

    public function __construct()
        {
        parent::__construct();
        $this->load->database();
        }

    // Ambil data pasien
    public function listing()
        {
        $this->db->select( '*' );
        $this->db->from( 'js_tools' );
        $this->db->order_by( 'id_tool', 'asc' );
        $query = $this->db->get();
        return $query->result();
        }

    // Ambil detail data pasien
    public function detail($id_tool)
        {
        $this->db->select( '*' );
        $this->db->from( 'js_tools' );
        $this->db->where( 'id_tool', $id_tool );
        $this->db->order_by( 'id_tool', 'asc' );
        $query = $this->db->get();
        return $query->row();
        }

    // login pasien
    // public function login($pasienname, $password)
    //     {
    //     $this->db->select( '*' );
    //     $this->db->from( 'pasien' );
    //     $this->db->where(
    //         array(
    //             'pasienname' => $pasienname,
    //             'password'   => sha1( $password )
    //         )
    //     );
    //     $this->db->order_by( 'id_pasien', 'desc' );
    //     $query = $this->db->get();
    //     return $query->row();
    //     }

    // Hitung total alat ukur
    public function total()
        {
        $this->db->select( 'COUNT(*) AS total_alat_ukur' );
        $this->db->from( 'js_tools' );
        $this->db->order_by( 'id_tool', 'asc' );
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
        $this->db->where( 'id_tool', $data['id_tool'] );
        $this->db->update( 'js_tools', $data );
        }

    // Tambah pasien
    public function tambah($data)
        {
        $this->db->insert( 'js_tools', $data );
        }
    }