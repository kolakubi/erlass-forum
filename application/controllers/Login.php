<?php

    class Login extends CI_Controller{


        public function __construct(){

            parent::__construct();

        }

        public function index(){

			$data['gagal'] = false;
			$data['daftar'] = false;
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
				$data['daftar'] = false;
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

					if($level === '2'){ // jika level 2 ke member
                        
                        redirect('/'); // jika level 2 ke member
					}
					else if($level === '1'){
						$_SESSION['level'] = '1';
						redirect('admin'); // jika level 1 ke admin
					}
					else{
						return false;
					}
				}
				// jika tdk ada result
				else{
					$data['gagal'] = true;
					$data['daftar'] = false;
					$this->load->view('front/login', $data); // kembali ke login
				}
			}

        } // end of validasi

    }