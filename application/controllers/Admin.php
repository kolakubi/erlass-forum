<?php

    class Admin extends CI_Controller{

        public function __construct(){

            parent::__construct();

            // cek jika login
            if($this->session->userdata('id_member')){

                if($this->session->userdata('level') == 1){
                    
                    // lanjutin program

                }
                else{

                    // logout
                    redirect('/logout');

                }

            }
            else{

                // jika belum login, redirect ke login
                redirect('/login');

            }

        }


        public function index(){

            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/topbar');
            $this->load->view('admin/dashboard');
            $this->load->view('admin/footer');

        } // end of function index



        public function member(){

            // ambil data semua member
            $result = $this->admin_model->ambildatamember();

            $data['members'] = $result;

            // echo "<pre>";
            // print_r($result);
            // echo "</pre>";

            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/topbar');
            $this->load->view('admin/member', $data);
            $this->load->view('admin/footer');

        } // end of function member



        public function lihatmember($idmember){

            $result = $this->admin_model->ambildatamember($idmember);

            $data['member'] = $result;

            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/topbar');
            $this->load->view('admin/memberlihat', $data);
            $this->load->view('admin/footer');

        } // end of function lihatmember


        public function editmember($idmember){

            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/topbar');
            $this->load->view('admin/memberlihat', $data);
            $this->load->view('admin/footer');

        }





        public function post(){

            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/topbar');
            $this->load->view('admin/post');
            $this->load->view('admin/footer');

        } // end of function post



        public function level(){

            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/topbar');
            $this->load->view('admin/level');
            $this->load->view('admin/footer');

        } // end of function level



    } // end of class