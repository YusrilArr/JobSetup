<?php
defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Mesin_model extends CI_Model
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
        $this->db->from( 'js_machines' );
        $this->db->order_by( 'id_mesin', 'desc' );
        $query = $this->db->get();
        return $query->result();
        }

    // Ambil detail data pasien
    public function detail($id_mesin)
        {
        $this->db->select( '*' );
        $this->db->from( 'js_machines' );
        $this->db->where( 'id_mesin', $id_mesin );
        $this->db->order_by( 'id_mesin', 'desc' );
        $query = $this->db->get();
        return $query->row();
        }

    // login pasien
    public function login($pasienname, $password)
        {
        $this->db->select( '*' );
        $this->db->from( 'pasien' );
        $this->db->where(
            array(
                'pasienname' => $pasienname,
                'password'   => sha1( $password )
            )
        );
        $this->db->order_by( 'id_pasien', 'desc' );
        $query = $this->db->get();
        return $query->row();
        }

    // Hitung total pasien
    public function total()
        {
        $this->db->select( 'COUNT(*) AS total_mesin' );
        $this->db->from( 'js_machines' );
        $this->db->order_by( 'id_mesin', 'desc' );
        $query = $this->db->get();
        return $query->row();
        }

    // Delete data
    public function delete($data)
        {
        $this->db->where( 'id_mesin', $data['id_mesin'] );
        $this->db->delete( 'js_machines', $data );
        }


    // Edit data
    public function edit($data)
        {
        // Mengatur zona waktu ke "Asia/Jakarta"
        date_default_timezone_set( 'Asia/Jakarta' );

        $data['tanggal_update'] = date( 'Y-m-d H:i:s' )
        ;

        $this->db->where( 'id_mesin', $data['id_mesin'] );
        $this->db->update( 'js_machines', $data );
        }

    // Tambah pasien
    public function tambah($data)
        {
        // Mengatur zona waktu ke "Asia/Jakarta"
        date_default_timezone_set( 'Asia/Jakarta' );

        $nama_mesin = $this->input->post( 'nama_mesin' );
        $id_mesin   = $this->input->post( 'id_mesin' );
        $username   = $this->session->userdata( 'username' );

        $data = [ 
            'tanggal_create' => date( 'Y-m-d H:i:s' ),
            'updated_by'     => $username,
            'nama_mesin'     => $nama_mesin,
            'id_mesin'       => $id_mesin,
        ];

        // $data['tanggal_create'] = date( 'Y-m-d H:i:s' );
        $this->db->insert( 'js_machines', $data );
        }
    }