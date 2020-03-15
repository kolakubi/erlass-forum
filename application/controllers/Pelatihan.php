<?php

    class Pelatihan extends CI_Controller{

        public function __construct(){

            parent::__construct();

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

            if($pendaftaran){

                if($idpelatihan == 'mp'){

                    // redirect ke halaman ujian
                    $this->load->view('front/header');
                    $this->load->view('ujian/menulispemula/lv1');
                    $this->load->view('front/footer');
                }else{

                    echo 'sedang dikembangkan';

                }

                
            }

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

                // cek apakah sudah mengikuti ujian?
                $kategori = substr($this->session->userdata('pelatihan'), 0, 2);
                $datastatuspelatihan = $this->pelatihan_model->ambilstatuspelatihan($idmember, $kategori, $level);

                // set session pelatihan
                $this->session->set_userdata(['pelatihan' => $pelatihan]);

                // echo '<pre>';
                // print_r($datastatuspelatihan);
                // print_r($this->session->userdata());
                // echo '</pre>';

                // die();

                // jika data status ada brati udah daftar
                if($datastatuspelatihan){

                    $sudahujian = $datastatuspelatihan['ujianlv'.$level];

                    // jika sdh ujian
                    if($sudahujian){

                        // cek apakah level sdh terbuka
                        $lvterbuka = $datastatuspelatihan['openlv'.$level];

                        // jika lv terbuka
                        if($lvterbuka){

                            redirect('/forum');

                        }

                        // jika lv belum terbuka
                        else{

                            // cek status ujian
                            echo 'menunggu konfirmasi test dari admimn';

                        }

                    }
                    // jika belum ujian
                    else{

                        echo 'dari belum ujian';

                        // redirect ke halaman ujian
                        $this->load->view('front/header');
                        $this->load->view('ujian/menulispemula/lv1');
                        $this->load->view('front/footer');

                    }

                }

                // jika data status belum ada brati belum daftar
                // redirect ke halaman daftar
                else{

                    echo 'dari daftar';

                    echo '<pre>';
                    print_r($this->session->userdata());
                    echo '</pre>';

                    // redirect ke halaman ujian
                    $this->load->view('front/header');
                    $this->load->view('front/pelatihan');
                    $this->load->view('front/footer');

                }

                // [idpelatihandiikuti] => 3
                // [idmember] => 7
                // [idpelatihan] => mp
                // [idstatuspelatihandiikuti] => 2
                // [ujianlv1] => 0
                // [statusujianlv1] => 
                // [openlv1] => 0
                // [ujianlv2] => 0
                // [statusujianlv2] => 
                // [openlv2] => 0
                // [ujianlv3] => 0
                // [statusujianlv3] => 
                // [openlv3] => 0

                // simpan category di session

            }else{


                $data['point'] = true;
                // level poitn belum cukup tampilkan notif
                $this->load->view('front/header');
                $this->load->view('front/pelatihan', $data);
                $this->load->view('front/footer');
                
            }

            

        } // end of function level


    }