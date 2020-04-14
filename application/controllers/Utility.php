<?php

    Class Utility extends CI_Controller{

        public function __construct(){

            parent::__construct();

        }


        public function index(){

            redirect('/');
 
        } // end of function index


        public function datajoinmember(){

            $this->load->model('utility_model');

            // inushai default nya 0
            // ksh value 11 krn yg join 11 hari lalu
            $minushari = 11;

            // berapa hari yang ingin disajikan datanya
            $banyakharilalu = 7;

            // untuk return
            $datamember = array();

            for($i=0; $i<=$banyakharilalu; $i++){

                $tgl = date('Y-m-d', strtotime('-'.$minushari.' day'));
                $datamember['tanggal'][$i] = $tgl;
                $datamember['banyakmember'][$i] = $this->utility_model->ambiltanggalmember($tgl);

                $minushari += 1;
            }
            // buat passing data ke javascript
            echo json_encode($datamember);
        } // end of function datajoinmember


    } // end of class