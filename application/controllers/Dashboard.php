<?php
defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

class Dashboard extends CI_Controller
    {

    // Load all tabel model
    public function __construct()
        {
        parent::__construct();
        // Panggil fungsi check login
        $this->load->model( 'alat_tools_model' );
        $this->load->model( 'master_spec_model' );
        $this->load->model( 'user_model' );
        $this->load->model( 'setup_model' );
        $this->load->model( 'mesin_model' );
        $this->check_login->cek_login();
        }

    // Main page dashboard
    public function index()
        {
        // data total per model
        $setup       = $this->setup_model->total();
        $user        = $this->user_model->total();
        $alat_tools  = $this->alat_tools_model->total();
        $master_spec = $this->master_spec_model->total();
        $mesin       = $this->mesin_model->total();
        // end data total

        $data = array(
            'title'       => 'JobSetup Dashboard',
            'setup'       => $setup,
            'user_tot'    => $user,
            'alat_tools'  => $alat_tools,
            'master_spec' => $master_spec,
            'mesin'       => $mesin,
            'content'     => 'dashboard/index'
        );
        $this->load->view( 'layout/wrapper', $data, FALSE );
        }
    }