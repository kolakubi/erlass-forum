<?php

    class Member extends CI_Controller{

        public function __construct(){

            parent::__construct();

            // cek jika login
            if($this->session->userdata('id_member')){

                if($this->session->userdata('id_member') == 1){
                    
                    // jika admin yg login, redirect ke admin
                    redirect('/admin');
                }

            }
            else{

                // jika belum login, redirect ke login
                redirect('/login');

            }

        }


        public function index(){

            $this->load->view('member/header');
            $this->load->view('member/sidebar');
            $this->load->view('member/topbar');
            $this->load->view('member/dashboard');
            $this->load->view('member/footer');


        }


        public function profil(){

            $this->load->view('member/header');
            $this->load->view('member/sidebar');
            $this->load->view('member/topbar');
            $this->load->view('member/profil');
            $this->load->view('member/footer');

        } // end of function profil



        public function post(){

            $this->load->view('member/header');
            $this->load->view('member/sidebar');
            $this->load->view('member/topbar');
            $this->load->view('member/post');
            $this->load->view('member/footer');

        } // end of function post


    }