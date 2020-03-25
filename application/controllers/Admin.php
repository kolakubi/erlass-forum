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

            // ambil data spesifik member
            $result = $this->admin_model->ambildatamember($idmember);

            $data['member'] = $result;

            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/topbar');
            $this->load->view('admin/memberlihat', $data);
            $this->load->view('admin/footer');

        } // end of function lihatmember


        public function editmember($idmember){

            // ambil data spesifik member
            $result = $this->admin_model->ambildatamember($idmember);

            $data['member'] = $result;


            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/topbar');
            $this->load->view('admin/memberedit', $data);
            $this->load->view('admin/footer');
 
        } // end of function editmember



        public function simpaneditmember(){

            // set form validation
			$this->form_validation->set_rules(array(
				array(
					'field' => 'email',
					'label' => 'Email',
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
                ),
                array(
					'field' => 'memberid',
					'label' => 'memberid',
					'rules' => 'required'
                )
                
            ));

            

            $this->form_validation->set_message('required', 'wajib diisi');

            // ambil semua variable
            $idmember = $this->input->post('memberid');

            $datamember = array(
                'email' => $this->input->post('email'),
                'no_induk' => $this->input->post('nomorinduk'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'sekolah' => $this->input->post('sekolah'),
                'hp' => $this->input->post('hp'),
            );

            // simpan data
            $result = $this->admin_model->simpandataeditmember($idmember, $datamember);

            if($result){
                redirect('admin/member');
            }
            else{
                echo 'error';
            }


        } // end of function simpaneditmember





        public function ujian(){

            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/topbar');
            $this->load->view('admin/ujian');
            $this->load->view('admin/footer');

        } // end of function ujian



        public function level(){

            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/topbar');
            $this->load->view('admin/level');
            $this->load->view('admin/footer');

        } // end of function level



    } // end of class