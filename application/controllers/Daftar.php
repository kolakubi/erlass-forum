<?php

    class Daftar extends CI_Controller{

        public function __construct(){

            parent::__construct();

        }

        public function index(){

            $data['gagal'] = false;
            $data['password'] = false;
            $data['email'] = false;
            $this->load->view('front/daftar', $data);


        }


        public function validasi(){

            // set form validation
			$this->form_validation->set_rules(array(
				array(
					'field' => 'email',
					'label' => 'Email',
					'rules' => 'required'
				),
				array(
					'field' => 'password',
					'label' => 'Password',
					'rules' => 'required'
                ),
                array(
					'field' => 'repeatpassword',
					'label' => 'Repeat Password',
					'rules' => 'required'
                ),
                array(
					'field' => 'nama',
					'label' => 'Nama',
					'rules' => 'required'
                ),
                array(
					'field' => 'nomorinduk',
					'label' => 'Nomor Induk',
					'rules' => 'required'
                ),
                array(
					'field' => 'alamat',
					'label' => 'Alamat',
					'rules' => 'required'
                ),
                array(
					'field' => 'sekolah',
					'label' => 'Sekolah',
					'rules' => 'required'
                ),
                array(
					'field' => 'hp',
					'label' => 'HP',
					'rules' => 'required'
                )
                
            ));
            
            $this->form_validation->set_message('required', 'wajib diisi');

            if(!$this->form_validation->run()){
                $data['gagal'] = false;
                $data['password'] = false;
                $data['email'] = false;
				$this->load->view('front/daftar', $data);
			}
			else{
				// ambil value dr field
				$datamember = array(
                    'email' => $this->input->post('email'),
                    'password' => $this->input->post('password'),
                    'repeatpassword' => $this->input->post('repeatpassword'),
                    'nama' => $this->input->post('nama'),
                    'nomorinduk' => $this->input->post('email'),
                    'alamat' => $this->input->post('alamat'),
                    'sekolah' => $this->input->post('sekolah'),
                    'hp' => $this->input->post('hp')
                );

                // jika password yg dimasukkan berbeda
                if($datamember['password'] !== $datamember['repeatpassword']){
                    $data['gagal'] = false;
                    $data['password'] = true;
                    $data['email'] = false;
				    $this->load->view('front/daftar', $data);
                }

                // jika password yang dimasukkan sama
                else{

                    //cek ketesediaan email
                    $emailvalid = $this->daftar_model->cekEmail($datamember['email']);

                    // jika email sudah dipakai
                    if($emailvalid){
                        $data['gagal'] = false;
                        $data['password'] = false;
                        $data['email'] = true;
                        $this->load->view('front/daftar', $data);
                    }

                    // jika email belum dipakai
                    else{

                        // simpan data
                        $simpanmember = $this->daftar_model->simpanmember($datamember);

                        if($simpanmember){

                            $status['daftar'] = true;
                            $status['gagal'] = false;
                            $this->load->view('front/login', $status);
                        }else{
                            echo 'ada kesalahan';
                            die();
                        }

                    }
                } // end of cek password sama

			}

        } // end of validasi

    }