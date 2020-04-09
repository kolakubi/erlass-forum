<?php

    class Pelatihan extends CI_Controller{


        // inisiasi variable idmember
        public $idmember = null;


        public function __construct(){
            parent::__construct();
        }
        // =====================================================




        public function index(){
            // cek jika login
            if($this->session->userdata('id_member')){

                $idmember = $this->session->userdata('id_member');

                // ambil data pelatihan yang diikuti
                $datapelatihandiikuti = $this->pelatihan_model->ambildatapelatihan($idmember);
                $listPelatihan = array();


                // cek list pelatihan
                // jika data pelatihan ada di list array
                // buat data pelatihan yg ditemukan menjadi true
                // cek data mengukuti menulis pemula
                if(in_array(['idmember' => $idmember, 'idpelatihan' => 'mp'], $datapelatihandiikuti)){
                    // buat variable pelatihan terikait
                    $data['menulispemula'] = true; 
                }
                // cek data mengukuti menulis pemula
                if(in_array(['idmember' => $idmember, 'idpelatihan' => 'yt1'], $datapelatihandiikuti)){
                    // buat variable pelatihan terikait
                    $data['youtubepart1'] = true; 
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
        // =====================================================






        public function ikut($idpelatihan){

            $datapendaftaran = array(
                'idmember' => $this->session->userdata('id_member'),
                'idpelatihan' => $idpelatihan 
            );
            // insert pendaftaran ke DB
            $pendaftaran = $this->pelatihan_model->daftar($datapendaftaran);

            if($pendaftaran){

                // jika mendaftar pelatihan menulis pemula
                if($idpelatihan == 'mp'){
                    $this->session->set_userdata(['pelatihan' => 'ujian'.$idpelatihan.'1']);

                    // redirect ke halaman ujian
                    $this->load->view('front/header');
                    $this->load->view('ujian/menulispemula/lv1');
                    $this->load->view('front/footer');
                }
                // jika mendaftar pelatihan video youtube
                elseif($idpelatihan == 'yt1'){
                    $this->session->set_userdata(['pelatihan' => 'ujian'.$idpelatihan.'1']);

                    // redirect ke halaman ujian
                    $this->load->view('front/header');
                    $this->load->view('ujian/youtubepart1/lv1');
                    $this->load->view('front/footer');
                }
                else{
                    echo 'sedang dikembangkan';
                }
            }
        } // end of function ikutipelatihan
        // =====================================================





        public function menulisPemula($level){

            // set point untuk bisa akses
            $pointLv1 = 0;
            $pointLv2 = 10;
            $pointLv3 = 80;
            $pointLv4 = 100;

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
                $kategori = substr($pelatihan, 0, -1);
                $datastatuspelatihan = $this->pelatihan_model->ambilstatuspelatihan($idmember, $kategori, $level);

                // set session pelatihan
                // buat di Controller Forum
                // di halaman forum akan di cek ketersediaan session pelatihan
                $this->session->set_userdata(['pelatihan' => $pelatihan]);

                // jika data status ada brati udah daftar
                if($datastatuspelatihan){ 

                    $sudahujian = $datastatuspelatihan['ujianlv'.$level];
                    // jika sdh ujian
                    if($sudahujian){

                        // cek apakah level sdh terbuka
                        $lvterbuka = $datastatuspelatihan['openlv'.$level];

                        // jika lv terbuka
                        if($lvterbuka){
                            redirect('/pilihlevel');
                        }
                        // jika lv belum terbuka
                        else{

                            // tampilkan halaman konfirmasi
                            $this->load->view('front/header');
                            $this->load->view('ujian/menunggukonfirmasi');
                            $this->load->view('front/footer');
                        }
                    }
                    // jika belum ujian
                    else{
                        // set session ujian + kode pelatihan
                        $this->session->set_userdata(['pelatihan' => 'ujian'.$pelatihan]);

                        // redirect ke halaman ujian
                        $this->load->view('front/header');
                        $this->load->view('ujian/menulispemula/lv'.$level);
                        $this->load->view('front/footer');
                    }
                }
                // jika data status belum ada brati belum daftar
                // redirect ke halaman daftar
                else{

                    $data['point'] = true;
                    // redirect ke halaman ujian
                    $this->load->view('front/header');
                    $this->load->view('front/pelatihan', $data);
                    $this->load->view('front/footer');
                }

            // simpan category di session
            }else{
                $data['point'] = true;
                // level poitn belum cukup tampilkan notif
                $this->load->view('front/header');
                $this->load->view('front/pelatihan', $data);
                $this->load->view('front/footer');
            }
        } // end of function menulis pemula
        // =====================================================




        public function yt1($level){

            // set point untuk bisa akses
            $pointLv1 = 0;
            $pointLv2 = 10;
            $pointLv3 = 80;
            $pointLv4 = 100;

            // ambil point dari data session
            $idmember = $this->session->userdata('id_member');
            $arrayPoint = $this->pelatihan_model->ambilPointYoutube1($idmember);

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
                $pelatihan = 'yt11';
            }
            if($level == 2 && $totalPoint >= $pointLv2){
                $akses = true;
                $pelatihan = 'yt12';
            }
            if($level == 3 && $totalPoint >= $pointLv3){
                $akses = true;
                $pelatihan = 'yt13';
            }
            if($level == 4 && $totalPoint >= $pointLv4){
                $akses = true;
                $pelatihan = 'yt14';
            }

            // jika akses true
            if($akses){
                // cek apakah sudah mengikuti ujian?
                $kategori = substr($pelatihan, 0, -1);
                $datastatuspelatihan = $this->pelatihan_model->ambilstatuspelatihan($idmember, $kategori, $level);

                // set session pelatihan
                // buat di Controller Forum
                // di halaman forum akan di cek ketersediaan session pelatihan
                $this->session->set_userdata(['pelatihan' => $pelatihan]);

                // echo "id = $idmember";
                // echo "kat = $kategori";
                // echo "level = $level";

                // echo '<pre>';
                // print_r($datastatuspelatihan);
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
                            redirect('/pilihlevel');
                        }
                        // jika lv belum terbuka
                        else{

                            // tampilkan halaman konfirmasi
                            $this->load->view('front/header');
                            $this->load->view('ujian/menunggukonfirmasi');
                            $this->load->view('front/footer');
                        }
                    }
                    // jika belum ujian
                    else{
                        // set session ujian + kode pelatihan
                        $this->session->set_userdata(['pelatihan' => 'ujian'.$pelatihan]);

                        // redirect ke halaman ujian
                        $this->load->view('front/header');
                        $this->load->view('ujian/menulispemula/lv'.$level);
                        $this->load->view('front/footer');
                    }
                }
                // jika data status belum ada brati belum daftar
                // redirect ke halaman daftar
                else{

                    $data['point'] = true;
                    // redirect ke halaman ujian
                    $this->load->view('front/header');
                    $this->load->view('front/pelatihan', $data);
                    $this->load->view('front/footer');
                }
            
            }
            // jika akses false
            else{
                $data['point'] = true;
                // level poitn belum cukup tampilkan notif
                $this->load->view('front/header');
                $this->load->view('front/pelatihan', $data);
                $this->load->view('front/footer');
            }
        } // end of function youtube
        // =====================================================

    } // end of class