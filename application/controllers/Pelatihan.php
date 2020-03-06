<?php

    class Pelatihan extends CI_Controller{


        public function __construct(){

            parent::__construct();

        }


        public function index(){

            // cek jika login
            if($this->session->userdata('id_member')){

                // jika sdh login, beri akses
                $this->load->view('front/header');
                $this->load->view('front/pelatihan');
                $this->load->view('front/footer');

            }
            else{

                // jika belum login, redirect ke login
                redirect('/login');

            }

        } // end of function index


        public function level($level){

            // ambil point dari data session
            $idmember = $this->session->userdata('id_member');

            $arrayPoint = $this->pelatihan_model->ambilpoint($idmember);

            // jumlahkan point
            // loop buat jumlahin total nilai
            $totalPoint = 0;
            for($i=0; $i<count($arrayPoint); $i++){
                $totalPoint += $arrayPoint[$i]['nilairating'];
            }

            // jika point tidak sesuai, tampilkan notif

            $akses = false;
            if($level == 1 && $totalPoint >= 10){
                $akses = true;
            }
            if($level == 2 && $totalPoint >= 10){
                $akses = true;
            }
            if($level == 3 && $totalPoint >= 20){
                $akses = true;
            }
            if($level == 4 && $totalPoint >= 50){
                $akses = true;
            }

            if($akses){

                echo "point cukup";
                die();

            }else{

                echo "point belum cukup";
                die();

                $this->load->view('front/header');
                $this->load->view('front/pelatihan');
                $this->load->view('front/footer');
            }

            

        } // end of function level


    }