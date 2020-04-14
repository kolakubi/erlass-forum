<?php

    class Posting extends CI_Controller{

        public function __construct(){
            parent::__construct();
        } // end of function __construct
        // =================================================



        public function index(){

            // ambil data kategori
            // berdasarkan idkategori di session
            $idkategori = $this->session->userdata('pelatihan');
            $kategori = $this->posting_model->ambilkategori($idkategori);

            $data['kategori'] = $kategori;

            $this->load->view('front/header');
            $this->load->view('front/posting', $data);
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
				// array(
				// 	'field' => 'isipost',
				// 	'label' => 'Isi Post',
				// 	'rules' => 'required'
                // )
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

                // jika kategori adalah ujian
                if($ujian){
                    $jumlahstring = strlen($pelatihan);
                    $idpelatihan = substr($pelatihan, 5, ($jumlahstring-5-1)); // hasilnya apapun setelah ujian dan kurangi 1 char
                    $level = substr($pelatihan, -1, 1); // 1 || 2 || 3;
                    // echo "level =".$level;
                    // 1017560898
                    
                    $dataupdatestatusujian = array(
                        'idmember' => $this->session->userdata('id_member'),
                        'idpelatihan' => $idpelatihan,
                        'level' => $level
    
                    );

                    // echo '<pre>';
                    // print_r($dataupdatestatusujian);
                    // echo '</pre>';
                    // die();

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