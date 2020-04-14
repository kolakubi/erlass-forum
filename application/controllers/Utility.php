<?php

    Class Utility extends CI_Controller{

        public function __construct(){

            parent::__construct();

        }


        public function index(){


        }


        public function datajoinmember(){

            $this->load->model('utility_model');

            $minushari = 11;
            $banyakharilalu = 7;
            $datamember = array();

            for($i=0; $i<=$banyakharilalu; $i++){

                $tgl = date('Y-m-d', strtotime('-'.$minushari.' day'));
                $datamember['tanggal'][$i] = $tgl;
                $datamember['banyakmember'][$i] = $this->utility_model->ambiltanggalmember($tgl);

                $minushari += 1;

            }

            echo json_encode($datamember);

        }

    }