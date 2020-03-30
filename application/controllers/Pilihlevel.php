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
            

            $data['statuspelatihan'] = $datastatuspelatihan;

            // buat notif klo point kurang
            $data['point'] = false;

             // set point untuk bisa akses
             $pointLv1 = 0;
             $pointLv2 = 10;
             $pointLv3 = 80;
             $pointLv4 = 100;
 
             // ambil point
             $totalPoint = $this->ambilpoint();
             $data['totalpoint'] = $totalPoint;
 
             // notif akses level
             $pointcukup = array(
                 'level1' => 0,
                 'level2' => 0,
                 'level3' => 0,
                 'level4' => 0
             );
 
             if($totalPoint >= $pointLv1){
                 $pointcukup['level1'] = 1;
             }
             if($totalPoint >= $pointLv2){
                 $pointcukup['level2'] = 1;
             }
             if($totalPoint >= $pointLv3){ 
                 $pointcukup['level3'] = 1;
             }
             if($totalPoint >= $pointLv4){
                 $pointcukup['level4'] = 1;
             }
            

            $data['pointcukup'] = $pointcukup;

            echo '<pre>';
            print_r($data);
            echo '</pre>';

            // cek status ujian
            $this->load->view('front/header');
            $this->load->view('front/pilihlevel', $data);
            $this->load->view('front/footer');


        } // end of function index




        public function level($level){

            // set point untuk bisa akses
            $pointLv1 = 0;
            $pointLv2 = 10;
            $pointLv3 = 20;
            $pointLv4 = 40;

            // ambil point
            $totalPoint = $this->ambilpoint();

            // jika point tidak sesuai, tampilkan notif
            $akses = false;
            $pelatihan = '';

            // notif akses level
            $pointcukup = array(
                'level1' => false,
                'level2' => false,
                'level3' => false,
                'level4' => false
            );

            if($level == 1 && $totalPoint >= $pointLv1){
                $akses = true;
                $pelatihan = 'mp1';
                $pointcukupp['level1'] = true;
            }
            if($level == 2 && $totalPoint >= $pointLv2){
                $akses = true;
                $pelatihan = 'mp2';
                $pointcukupp['level3'] = true;
            }
            if($level == 3 && $totalPoint >= $pointLv3){
                $akses = true;
                $pelatihan = 'mp3';
                $pointcukupp['level3'] = true;
            }
            if($level == 4 && $totalPoint >= $pointLv4){
                $akses = true;
                $pelatihan = 'mp4';
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