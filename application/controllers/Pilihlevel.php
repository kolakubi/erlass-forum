<?php

    class Pilihlevel extends CI_Controller{

        // set point akses
        public $pointLv1 = 0;
        public $pointLv2 = 10;
        public $pointLv3 = 80;
        public $pointLv4 = 100;


        public function __construct(){

            parent::__construct();
            // cek session, jika tidak ada langsung redirect ke pelatihan
            if(!$this->session->userdata('pelatihan')){
                redirect('/pelatihan');
            }
        } // end of function construct




        public function index(){

            // echo '<pre>';
            // print_r($this->session->userdata());
            // echo '</pre>';
            // die();

            $idmember = $this->session->userdata('id_member');
            $pelatihan = $this->session->userdata('pelatihan');

            $kategori = substr($pelatihan, 0, -1);
            $datastatuspelatihan = $this->pelatihan_model->ambilstatuspelatihan($idmember, $kategori);
            

            $data['statuspelatihan'] = $datastatuspelatihan;

            // buat notif klo point kurang
            $data['point'] = false;
 
             // ambil point
             $totalPoint = $this->ambilpoint();
             $data['totalpoint'] = $totalPoint;
 
             // notif akses level
             $pointcukup = array(
                 'level1' => false,
                 'level2' => false,
                 'level3' => false,
                 'level4' => false
             );
 
             if($totalPoint >= $this->pointLv1){
                 $pointcukup['level1'] = true;
             }
             if($totalPoint >= $this->pointLv2){
                 $pointcukup['level2'] = true;
             }
             if($totalPoint >= $this->pointLv3){ 
                 $pointcukup['level3'] = true;
             }
             if($totalPoint >= $this->pointLv4){
                 $pointcukup['level4'] = true;
             }
            

            $data['pointcukup'] = $pointcukup;

            // echo '<pre>';
            // print_r($data);
            // echo '</pre>';

            // cek status ujian
            $this->load->view('front/header');
            $this->load->view('front/pilihlevel', $data);
            $this->load->view('front/footer');


        } // end of function index




        public function level($level){

            // ambil point
            $totalPoint = $this->ambilpoint();

            // jika point tidak sesuai, tampilkan notif
            $akses = false;
            // yang tdnya mp1 => mp saja
            $pelatihan = substr($this->session->userdata('pelatihan'), 0, -1);

            // notif akses level
            $pointcukup = array(
                'level1' => false,
                'level2' => false,
                'level3' => false,
                'level4' => false
            );

            if($level == 1 && $totalPoint >= $this->pointLv1){
                $akses = true;
                $pelatihan = $pelatihan.'1';
                $pointcukupp['level1'] = true;
            }
            if($level == 2 && $totalPoint >= $this->pointLv2){
                $akses = true;
                $pelatihan = $pelatihan.'2';
                $pointcukupp['level2'] = true;
            }
            if($level == 3 && $totalPoint >= $this->pointLv3){
                $akses = true;
                $pelatihan = $pelatihan.'3';
                $pointcukupp['level3'] = true;
            }
            if($level == 4 && $totalPoint >= $this->pointLv4){
                $akses = true;
                $pelatihan = $pelatihan.'4';
                $pointcukupp['level4'] = true;
            }

            if($akses){

                // set session pelatihan
                // buat di Controller Forum
                // di halaman forum akan di cek ketersediaan session pelatihan
                $this->session->set_userdata(['pelatihan' => $pelatihan]);

                // redirect ke forum
                redirect('forum');


            }else{

                $data['point'] = true;
                $data['pointcukup'] = $pointcukup;
                // level poitn belum cukup tampilkan notif
                $this->load->view('front/header');
                $this->load->view('front/pilihlevel', $data);
                $this->load->view('front/footer');
                
            }

        } // end of function level




        public function ambilpoint(){
            // ambil point dari data session
            $idmember = $this->session->userdata('id_member');

            $arrayPoint = $this->pelatihan_model->ambilpoint($idmember);

            // jumlahkan point
            // loop buat jumlahin total nilai
            $totalPoint = 0;

            if($arrayPoint){
                for($i=0; $i<count($arrayPoint); $i++){
                    $totalPoint += $arrayPoint[$i]['nilairating'];
                }
            }

            return $totalPoint;
        }



    } // end of class