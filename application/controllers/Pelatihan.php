<?php

    class Pelatihan extends CI_Controller{

        // ambil id member dari session
        //private $idmember;


        public function __construct(){

            parent::__construct();

            // if($this->session->userdata('id_member'){

            //     $this->idmember = $this->session->userdata('id_member');

            // }

        }


        public function index(){

            // cek jika login
            if($this->session->userdata('id_member')){

                $idmember = $this->session->userdata('id_member');

                // ambil data pelatihan yang diikuti
                $datapelatihandiikuti = $this->pelatihan_model->ambildatapelatihan($idmember);

                $listPelatihan = array();

                if(in_array(['idmember' => $idmember, 'idpelatihan' => 'mp'], $datapelatihandiikuti)){

                    // buat variable pelatihan terikait
                    $data['menulispemula'] = 1; 
                }


                $data['point'] = false;
                // jika sdh login, beri akses
                $this->load->view('front/header');
                $this->load->view('front/pelatihan', $data);
                $this->load->view('front/footer');

            }
            else{

                // jika belum login, redirect ke login
                redirect('/login');

            }

        } // end of function index


        public function ikut($idpelatihan){

            $datapendaftaran = array(
                'idmember' => $this->session->userdata('id_member'),
                'idpelatihan' => $idpelatihan 
            );

            // insert pendaftaran ke DB
            $pendaftaran = $this->pelatihan_model->daftar($datapendaftaran);

        } // end of function ikutipelatihan


        public function menulisPemula($level){

            // set point untuk bisa akses
            $pointLv1 = 0;
            $pointLv2 = 10;
            $pointLv3 = 20;
            $pointLv4 = 40;

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

            // jika point tidak sesuai, tampilkan notif

            $akses = false;
            $pelatihan = '';

            if($level == 1 && $totalPoint >= $pointLv1){
                $akses = true;
                $pelatihan = 'mp1';
            }
            if($level == 2 && $totalPoint >= $pointLv2){
                $akses = true;
                $pelatihan = 'mp2';
            }
            if($level == 3 && $totalPoint >= $pointLv3){
                $akses = true;
                $pelatihan = 'mp3';
            }
            if($level == 4 && $totalPoint >= $pointLv4){
                $akses = true;
                $pelatihan = 'mp4';
            }

            if($akses){

                // simpan category di session

                $this->session->set_userdata(['pelatihan' => $pelatihan]);

                redirect('/forum');

            }else{


                $data['point'] = true;
                // level poitn belum cukup tampilkan notif
                $this->load->view('front/header');
                $this->load->view('front/pelatihan', $data);
                $this->load->view('front/footer');
                
            }

            

        } // end of function level


    }