<?php

    class Posting extends CI_Controller{

        public function __construct(){
            parent::__construct();
        } // end of function __construct
        // =================================================



        public function index(){

            $this->load->view('front/header');
            $this->load->view('front/posting');
            $this->load->view('front/footer');

        }
        // end of function __construct
        // =================================================




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
                    'judul' => html_escape($this->input->post('judul')),
                    'isipost' => $this->input->post('isipost'),
                    'idauthor' => $this->session->userdata('id_member'),
                    'idkategori' => $this->session->userdata('pelatihan'),

                );             
                // ambil data pelatihan dari session
                // extrak kategori pelatihan
                $pelatihan = $this->session->userdata('pelatihan');
                $ujian = substr($pelatihan, 0, 5); // ujian
                $ujian = 'ujian' ? true : false;

                // echo '<pre>';
                // print_r($dataposting);
                // echo '</pre>';

                // die();

                // die();

                // jika kategori adalah ujian
                if($ujian){
                    $idpelatihan = substr($pelatihan, -3, 2); // mp
                    $level = substr($pelatihan, -1, 1); // 1 || 2 || 3;
                    // echo "level =".$level;

                    // echo '<pre>';
                    // print_r($_SESSION);
                    // echo '</pre>';
                    // die();
                    $dataupdatestatusujian = array(
                        'idmember' => $this->session->userdata('id_member'),
                        'idpelatihan' => $idpelatihan,
                        'level' => $level
    
                    );
                    // update status pelatihan
                    $this->posting_model->updatestatuspelatihan($dataupdatestatusujian);

                    // simpan data ujian
                    $result = $this->posting_model->simpanpost($dataposting);

                    if($result){
                        redirect('pelatihan');
                    }
                }
                // jika bukan ujian
                // alias post biasa
                else{
                    // simpan data post
                    $result = $this->posting_model->simpanpost($dataposting);
                    // redirect ke forum
                    if($result){
                        redirect('forum');
                    }
                }
            }

        } // end of function simpanpost
        // =================================================

    } // end of class