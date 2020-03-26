<?php

    class Member extends CI_Controller{

        public function __construct(){

            parent::__construct();
            // cek jika login
            if($this->session->userdata('id_member')){

                if($this->session->userdata('level') == 2){
                    
                    // lanjutin program
                }
                else{
                    // jika belum login, redirect ke login
                    redirect('/logout');
                }
            }
            else{
                // jika belum login, redirect ke login
                redirect('/login');
            }
        } // end of function construct
        //==================================================



        public function datasidebar(){

            $data = array(
                'inbox' => 0,
            );

            $jumlahinbox = $this->member_model->ambiljumlahsuratbelumdibaca($this->session->userdata('id_member'));
            if($jumlahinbox){
                $data['inbox'] = $jumlahinbox;
            }
            
            return $data;
        } // end of function data default
        //==================================================




        public function index(){

            $this->load->view('member/header');
            $this->load->view('member/sidebar', $this->datasidebar());
            $this->load->view('member/topbar');
            $this->load->view('member/dashboard');
            $this->load->view('member/footer');

        } // end of function index
        //==================================================



        public function inbox(){

            //ambil data surat spesifik
            $idmember = $this->session->userdata('id_member');
            $surat = $this->member_model->ambildatasurat($idmember);

            // echo '<pre>';
            // print_r($surat);
            // echo '</pre>';

            $data['datasurat'] = $surat;
 
            $this->load->view('member/header');
            $this->load->view('member/sidebar', $this->datasidebar());
            $this->load->view('member/topbar');
            $this->load->view('member/inbox', $data);
            $this->load->view('member/footer');

        } // end of function inbox
        //==================================================




        public function lihatsurat($idsurat){

            // ambil data surat
            $surat = $this->member_model->lihatsurat($idsurat);
            // update data surat sdh dibaca
            $this->member_model->suratdibaca($idsurat);

            $data['surat'] = $surat;

            $this->load->view('member/header');
            $this->load->view('member/sidebar', $this->datasidebar());
            $this->load->view('member/topbar');
            $this->load->view('member/lihatsurat', $data);
            $this->load->view('member/footer');

        } // end of function lihatsurat
        //==================================================




        public function profil(){

            $this->load->view('member/header');
            $this->load->view('member/sidebar', $this->datasidebar());
            $this->load->view('member/topbar');
            $this->load->view('member/profil');
            $this->load->view('member/footer');

        } // end of function profil
        //==================================================




        public function post(){

            $this->load->view('member/header');
            $this->load->view('member/sidebar', $this->datasidebar());
            $this->load->view('member/topbar');
            $this->load->view('member/post');
            $this->load->view('member/footer');

        } // end of function post
        //==================================================




        public function level(){

            $this->load->view('member/header');
            $this->load->view('member/sidebar', $this->datasidebar());
            $this->load->view('member/topbar');
            $this->load->view('member/level');
            $this->load->view('member/footer');

        } // end of function level
        //==================================================






    }