<?php
defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class User_model extends CI_Model
    {
    public function __construct()
        {
        parent::__construct();
        $this->load->database();
        }

    public function getAccessLevel($id_user)
        {
        $this->db->select( 'akses_level' );
        $this->db->where( 'id_user', $id_user );
        $query = $this->db->get( 'js_users' );

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->akses_level;
            }
        }

    // Ambil data user
    public function listing()
        {
        $this->db->select( '*' );
        $this->db->from( 'js_users' );
        $this->db->order_by( 'id_user' );
        $query = $this->db->get();
        return $query->result();
        }

    // Ambil detail data user
    public function detail($id_user)
        {
        $this->db->select( '*' );
        $this->db->from( 'js_users' );
        $this->db->where( 'id_user', $id_user );
        $this->db->order_by( 'id_user' );
        $query = $this->db->get();
        return $query->row();
        }

    public function login($username, $password)
        {
        $this->db->select( '*' );
        $this->db->from( 'js_users' );
        $this->db->where(
            array(
                'username' => $username,
                'password' => $password,
                'password' => sha1( $password )
            )
        );
        $this->db->order_by( 'id_user' );
        $query = $this->db->get();
        return $query->row();
        }

    // Hitung total user
    public function total()
        {
        $this->db->select( 'COUNT(*) AS total_user' );
        $this->db->from( 'js_users' );
        $this->db->order_by( 'id_user' );
        $query = $this->db->get();
        return $query->row();
        }

    // Delete data
    public function delete($data)
        {
        $this->db->where( 'id_user', $data['id_user'] );
        $this->db->delete( 'js_users', $data );
        }

    // Edit data
    public function edit($data)
        {
        // Mengatur zona waktu ke "Asia/Jakarta"
        date_default_timezone_set( 'Asia/Jakarta' );

        $data['tanggal_update'] = date( 'Y-m-d H:i:s' );

        $this->db->where( 'id_user', $data['id_user'] );
        $this->db->update( 'js_users', $data );
        }

    // Tambah user
    public function tambah($data)
        {
        // Mengatur zona waktu ke "Asia/Jakarta"
        date_default_timezone_set( 'Asia/Jakarta' );


        $data['tanggal_create'] = date( 'Y-m-d H:i:s' );
        $this->db->insert( 'js_users', $data );
        }
    }