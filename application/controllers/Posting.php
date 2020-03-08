<?php

    class Posting extends CI_Controller{

        public function __construct(){

            parent::__construct();

        }

        public function index(){

            $this->load->view('front/header');
            $this->load->view('front/posting');
            $this->load->view('front/footer');

        }

        public function simpanpost(){

            // set form validation
			$this->form_validation->set_rules(array(
				array(
					'field' => 'judul',
					'label' => 'Judul',
					'rules' => 'required'
				),
				array(
					'field' => 'isipost',
					'label' => 'Isi Post',
					'rules' => 'required'
                )
                
            ));

            $this->form_validation->set_message('required', 'wajib diisi');

            if(!$this->form_validation->run()){
                // echo "error";
                // die();

                $this->load->view('front/header');
                $this->load->view('front/posting');
                $this->load->view('front/footer');
                
            }
            else{

                $dataposting = array(

                    'judul' => $this->input->post('judul'),
                    'isipost' => $this->input->post('isipost'),
                    'idauthor' => $this->session->userdata('id_member'),
                    'idkategori' => $this->session->userdata('pelatihan'),

                );

                echo "<pre>";
                print_r($dataposting);
                echo "</pre>";

                die();

            }

        } // end of function simpanpost

    }