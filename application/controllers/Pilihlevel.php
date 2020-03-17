<?php

    class Pilihlevel extends CI_Controller{


        public function __construct(){

            parent::__construct();

            // cek session, jika tidak ada langsung redirect ke pelatihan
            if(!$this->session->userdata('pelatihan')){
                redirect('/pelatihan');
            }

        } // end of function construct




        public function index(){

            $idmember = $this->session->userdata('id_member');
            $pelatihan = $this->session->userdata('pelatihan');

            $kategori = substr($pelatihan, 0, 2);
            $datastatuspelatihan = $this->pelatihan_model->ambilstatuspelatihan($idmember, $kategori);
            
            // echo '<pre>';
            // echo 'data status pelatihan <br>';
            // print_r($datastatuspelatihan);
            // echo '</pre>';

            $data['statuspelatihan'] = $datastatuspelatihan;

            // cek status ujian
            $this->load->view('front/header');
            $this->load->view('front/pilihlevel', $data);
            $this->load->view('front/footer');

        } // end of function index



    } // end of class