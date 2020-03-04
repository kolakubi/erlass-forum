<?php

    class Pelatihan extends CI_Controller{


        public function __construct(){


            parent::__construct();


        }


        public function index(){


            $this->load->view('front/pelatihan');


        }

        public function level(){


            $this->load->view('front/level');

        }


    }