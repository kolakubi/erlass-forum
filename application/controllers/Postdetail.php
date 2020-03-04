<?php

    class Postdetail extends CI_Controller{

        public function __construct(){

            parent::__construct();

        }


        public function index(){

            $this->load->view('front/header');
            $this->load->view('front/post-detail');
            $this->load->view('front/footer');

        }


    }