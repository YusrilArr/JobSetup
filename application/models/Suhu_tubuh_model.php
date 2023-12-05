<?php

defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Suhu_tubuh_model extends CI_Model
    {
    public function __construct()
        {
        parent::__construct();
        $this->load->database();
        }

    // Ambil data suhu_tubuh
    public function listing()
        {
        $this->db->select( 'suhu_tubuh.*, js_users.nama_user, 
                           js_users.username, pasien.nama_pasien, 
                           pasien.kode_pasien,pasien.jenis_kelamin' );
        $this->db->from( 'suhu_tubuh' );
        $this->db->join( 'js_users', 'js_users.id_user = suhu_tubuh.id_user', 'left' );
        $this->db->join( 'pasien', 'pasien.id_pasien = suhu_tubuh.id_pasien', 'left' );
        $this->db->order_by( 'id_suhu_tubuh', 'desc' );
        $query = $this->db->get();

        return $query->result();
        }

    // Riwayat pasien
    public function pasien( $id_pasien )
        {
        $this->db->select( 'suhu_tubuh.*, js_users.nama_user, 
                           js_users.username, pasien.nama_pasien, 
                           pasien.kode_pasien,pasien.jenis_kelamin' );
        $this->db->from( 'suhu_tubuh' );
        $this->db->join( 'js_users', 'js_users.id_user = suhu_tubuh.id_user', 'left' );
        $this->db->join( 'pasien', 'pasien.id_pasien = suhu_tubuh.id_pasien', 'left' );
        $this->db->where( 'pasien.id_pasien', $id_pasien );
        $this->db->order_by( 'id_suhu_tubuh', 'desc' );
        $query = $this->db->get();

        return $query->result();
        }


    // Ambil detail data suhu_tubuh
    public function detail( $id_suhu_tubuh )
        {
        $this->db->select( 'suhu_tubuh.*, js_users.nama_user, 
                           js_users.username, pasien.nama_pasien, 
                           pasien.kode_pasien,pasien.jenis_kelamin' );
        $this->db->from( 'suhu_tubuh' );
        $this->db->join( 'js_users', 'js_users.id_user = suhu_tubuh.id_user', 'left' );
        $this->db->join( 'pasien', 'pasien.id_pasien = suhu_tubuh.id_pasien', 'left' );
        $this->db->where( 'id_suhu_tubuh', $id_suhu_tubuh );
        $this->db->order_by( 'id_suhu_tubuh', 'desc' );
        $query = $this->db->get();

        return $query->row();
        }

    // Hitung total suhu_tubuh
    public function total()
        {
        $this->db->select( 'COUNT(*) AS total' );
        $this->db->from( 'suhu_tubuh' );
        // $this->db->order_by( 'id_suhu_tubuh', 'desc' );
        $query = $this->db->get();

        return $query->row();
        }

    // Delete data
    public function delete( $data )
        {
        $this->db->where( 'id_suhu_tubuh', $data['id_suhu_tubuh'] );
        $this->db->delete( 'suhu_tubuh', $data );
        }

    // Edit data
    public function edit( $data )
        {
        $this->db->where( 'id_suhu_tubuh', $data['id_suhu_tubuh'] );
        $this->db->update( 'suhu_tubuh', $data );
        }

    // Tambah suhu_tubuh
    public function tambah( $data )
        {
        $this->db->insert( 'suhu_tubuh', $data );
        }
    }