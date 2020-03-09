<?php

    class Member extends CI_Controller{

        public function __construct(){

            parent::__construct();

        }


        public function index(){

            $this->load->view('member/header');
            $this->load->view('member/sidebar');
            $this->load->view('member/topbar');
            $this->load->view('member/dashboard');
            $this->load->view('member/footer');


        }


    }