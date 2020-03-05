<?php

    class Login extends CI_Controller{


        public function __construct(){

            parent::__construct();

        }

        public function index(){

            $data['gagal'] = false;
            $this->load->view('front/login', $data);

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
				)
            ));
            
            $this->form_validation->set_message('required', '%s tidak boleh kosong');

			if(!$this->form_validation->run()){
				$data['gagal'] = false;
				$this->load->view('front/login', $data);
			}
			else{
				// ambil value dr field
				$email = $this->input->post('email');
				$password = $this->input->post('password');

				// ambil ip dari fungsi ambilIP()
				// $ip = $this->ambilIP();

				// cek ip
				// if(!$this->cekIp($ip)){
				//     redirect('ipsalah');
				// }

				//ambil data dari model login_model
				$result = $this->login_model->login($email, $password);
				// jika ada result
				if($result){

					$level = $result; // cek level
					$this->session->set_userdata($result);

					if($level === '1'){ // jika level 1 ke admin
                        //redirect('karyawan');
                        
                        redirect('/'); // jika level 1 ke agen
					}
					else if($level === '2'){
						$_SESSION['level'] = '2';
						redirect('admin'); // jika level 2 ke agen
					}
					else{
						return false;
					}
				}
				// jika tdk ada result
				else{
					$data['gagal'] = true;
					$this->load->view('front/login', $data); // kembali ke login
				}
			}

        } // end of validasi

    }