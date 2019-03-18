<?php if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        $this->load->database();
        //      $this->load->model('Penilaian_model');
        $this->load->helper(array('form','url','file','download'));
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
    }



    public function index()
    {
        $lokasi= $this->input->get('lokasi', true);

        $this->load->model('fingerprint_model');


        $list=  $this->fingerprint_model->getAbsen($lokasi);
        //   die(var_dump($this->db->last_query()));
        $data = ['lokasi' => $lokasi,
                     'list' => $list,
                   ];
        // print_r($data['dataKuisioner']);
        $this->load->view('base/header', $data);
        $this->load->view('absen/tabel_absen', $data);
    }
}
