<?php
defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Panduan extends CI_Controller
    {
    public function index()
        {
        $data = array(
            'title'   => 'Panduan Penggunaan Sistem Informasi',
            'content' => 'panduan/index',
        );
        $this->load->view( 'layout/wrapper', $data, FALSE );
        }
    }