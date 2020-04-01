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
        } // end of function __construct
        // =======================================================



        public function index(){

            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/topbar');
            $this->load->view('admin/dashboard');
            $this->load->view('admin/footer');

        } // end of function index
        // =======================================================



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
        // =======================================================



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
        // =======================================================





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
        // =======================================================





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
        // =======================================================





        public function ujian(){

            // ambil post ujian 
            $dataujian = $this->admin_model->ambildataujian();

            // echo '<pre>';
            // print_r($dataujian);
            // echo '</pre>';

            // die();

            $data['dataujian'] = $dataujian;

            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/topbar');
            $this->load->view('admin/ujian', $data);
            $this->load->view('admin/footer');

        } // end of function ujian
        // =======================================================



        public function lihatujian($idpost){

            // update view count
            $ambilviewcount = $this->postdetail_model->ambiljumlahview($idpost);

            // tambah view +1
            // simpan viwe
            $updateview = $ambilviewcount['view']+1;
            $this->postdetail_model->updatepostview($idpost, $updateview);
            ///////////////////////////////////////////////////

            // ambil data ujian spesifik
            $datapost = $this->admin_model->ambildataujian($idpost);

            // potong kategori
            // tadinya = ujianmp1
            // jadi kategori = mp
            $kategori = substr($datapost['idkategori'], -3, 2);
            $datapost['kategoriujian'] = $kategori;

            // potong level ujian
            $levelujian = substr($datapost['idkategori'], -1, 1);
            $datapost['levelujian'] = $levelujian;

            // ambil data pelatihandiikuti
            $datapelatihandiikuti = $this->admin_model->ambildatapelatihandiikuti($datapost['idauthor'], $kategori);
            $datapost['idpelatihandiikuti'] = $datapelatihandiikuti['idpelatihandiikuti'];

            // echo '<pre>';
            // print_r($datapost);
            // echo '</pre>';

            $data['post'] = $datapost;

            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/topbar');
            $this->load->view('admin/ujianlihat', $data);
            $this->load->view('admin/footer');

        } // end of function liahujian
        // =======================================================





        public function lulustes($idstatuspelatihan = null, $level = null, $idmember = null){

            // update data statuspelatihandiikuti
            $keterangan = 'lulus';
            $result = $this->admin_model->updatestatuspelatihandiikuti($idstatuspelatihan, $level, $keterangan);

            // kirim surat ucapan selamat
            // ke member
            $kirimsurat = $this->kirimsurat($idmember);


            if($result && $kirimsurat){
                redirect('admin/ujian');
            }

        } // end of function lulustes
        // =======================================================




        public function kirimsurat($idmember){

            $datainsert = array(
                'idpenerima' => $idmember,
                'idpengirim' => 1,
                'judulsurat' => 'Selamat anda lulus Tes',
                'isisurat' => 'Segera ikuti pelatihan dan jadilah guru terbaik'
            );

            $this->db->insert('surat', $datainsert);

            return true;

        } // end of function kirimsambutan
        // ==========================================================







        public function level(){

            $this->load->view('admin/header');
            $this->load->view('admin/sidebar');
            $this->load->view('admin/topbar');
            $this->load->view('admin/level');
            $this->load->view('admin/footer');

        } // end of function level



    } // end of class