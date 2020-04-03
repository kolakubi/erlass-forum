<?php

    class Member extends CI_Controller{

        public $id_member = null;



        public function __construct(){
            parent::__construct();
            // cek jika login
            if($this->session->userdata('id_member')){

                // ambil id member
                // lalu simpan di class variable
                $this->id_member = $this->session->userdata('id_member');

                if($this->session->userdata('level') == 2){
                    
                    // lanjutin program
                }
                else{
                    // jika belum login, redirect ke login
                    redirect('/logout');
                }
            }
            else{
                // jika belum login, redirect ke login
                redirect('/login');
            }
        } // end of function construct
        //==================================================



        public function datasidebar(){

            $data = array(
                'inbox' => 0,
            );
            // ambil data surat belum dibaca
            $jumlahinbox = $this->member_model->ambiljumlahsuratbelumdibaca($this->session->userdata('id_member'));
            if($jumlahinbox){
                $data['inbox'] = $jumlahinbox;
            }
            
            return $data;
        } // end of function data default
        //==================================================




        public function index(){

            $this->load->view('member/header');
            $this->load->view('member/sidebar', $this->datasidebar());
            $this->load->view('member/topbar');
            $this->load->view('member/dashboard');
            $this->load->view('member/footer');

        } // end of function index
        //==================================================



        public function inbox(){

            //ambil data surat spesifik
            $idmember = $this->session->userdata('id_member');
            $surat = $this->member_model->ambildatasurat($idmember);

            // echo '<pre>';
            // print_r($surat);
            // echo '</pre>';

            $data['datasurat'] = $surat;
 
            $this->load->view('member/header');
            $this->load->view('member/sidebar', $this->datasidebar());
            $this->load->view('member/topbar');
            $this->load->view('member/inbox', $data);
            $this->load->view('member/footer');

        } // end of function inbox
        //==================================================




        public function lihatsurat($idsurat){

            // ambil data surat
            $surat = $this->member_model->lihatsurat($idsurat);
            // update data surat sdh dibaca
            $this->member_model->suratdibaca($idsurat);

            $data['surat'] = $surat;

            $this->load->view('member/header');
            $this->load->view('member/sidebar', $this->datasidebar());
            $this->load->view('member/topbar');
            $this->load->view('member/lihatsurat', $data);
            $this->load->view('member/footer');

        } // end of function lihatsurat
        //==================================================




        public function profil(){

            // ambil data member dari Admin_model
            // ambil data spesifik member
            $result = $this->admin_model->ambildatamember($this->id_member);

            $data['member'] = $result;

            $this->load->view('member/header');
            $this->load->view('member/sidebar', $this->datasidebar());
            $this->load->view('member/topbar');
            $this->load->view('member/profil', $data);
            $this->load->view('member/footer');

        } // end of function profil
        //==================================================




        public function editprofil($imagerror = null){

            // ambil data member dari Admin_model
            // ambil data spesifik member
            $result = $this->admin_model->ambildatamember($this->id_member);

            $data['member'] = $result;
            $data['error']['image'] = $imagerror;

            $this->load->view('member/header');
            $this->load->view('member/sidebar', $this->datasidebar());
            $this->load->view('member/topbar');
            $this->load->view('member/profiledit', $data);
            $this->load->view('member/footer');

        } // end of function editprofil
        //==================================================

        

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
            $idmember = $this->id_member;
            $datamember = array(
                'email' => $this->input->post('email'),
                'no_induk' => $this->input->post('nomorinduk'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'sekolah' => $this->input->post('sekolah'),
                'hp' => $this->input->post('hp'),
            );

            // jika ada image
            if(@$_FILES['image']['name'] != null){

                $config['upload_path']          = './upload/memberpic/';
                $config['allowed_types']        = 'jpg|png|jpeg';
                $config['file_name']            = 'image-'.date('ymd').'-'.substr(md5(rand()), 0, 10);
                $config['max_size']             = 1024; // 1MB
                $this->load->library('upload', $config);

                // jika berhasil upload
                if($this->upload->do_upload('image')){
                    $datamember['foto'] = $this->upload->data('file_name');

                    // simpan data
                    $result = $this->admin_model->simpandataeditmember($idmember, $datamember); 
                    if($result){
                        redirect('member/profil');
                    }
                    else{
                        echo 'error';
                    }
                }
                // jika gagal
                else{
                    // $this->upload->display_errors()
                    $this->editprofil($imagerror = 'file tidak sesuai kriteria');
                }
            }
            // jika ga ada image 
            // simpan data seadanya
            else{
                // simpan data
                $result = $this->admin_model->simpandataeditmember($idmember, $datamember);
                if($result){
                    redirect('member/profil');
                }
                else{
                    echo 'error';
                }
            }
        } // end of function simpaneditmember
        // =======================================================






        public function post(){

            // ambil data post yang pernah dibuat
            $posts = $this->member_model->ambilpost($this->id_member);

            
            // rumus total point
            foreach ($posts as $key => $post) {
                $arrayPoint = $this->forum_model->ambilPoint($post['idpost']);

                // jika blom pernah dpt point
                $totalPoint = 0;
                $totalVote = 0;

                // jika ada point
                if($arrayPoint){
                    for($i=0; $i<count($arrayPoint); $i++){
                        $totalPoint += $arrayPoint[$i]['nilairating'];

                        $totalVote+=1;
                    }
                }

                // insert total point ke array
                $posts[$key]['totalpoint'] = $totalPoint;
                $posts[$key]['totalvote'] = $totalVote;
            } // end loop forech

            // echo '<pre>';
            // print_r($posts); 
            // echo '</pre>';

            $data['posts'] = $posts;

            $this->load->view('member/header');
            $this->load->view('member/sidebar', $this->datasidebar());
            $this->load->view('member/topbar');
            $this->load->view('member/post', $data);
            $this->load->view('member/footer');

        } // end of function post
        //==================================================




        public function lihatpost($postid){

            // ambil data post yang pernah dibuat
            $post = $this->member_model->ambilpost($this->id_member, $postid);

            $data['post'] = $post;

            $this->load->view('member/header');
            $this->load->view('member/sidebar', $this->datasidebar());
            $this->load->view('member/topbar');
            $this->load->view('member/postlihat', $data);
            $this->load->view('member/footer');

        } // end of function post
        //==================================================





        public function hitungpoint($idkategori){

            $point=0;
            // ambil data pelatihan sesuai kategori
            $arraypoint = $this->member_model->ambildatanilai($this->id_member, $idkategori); 
            for($i=0; $i<count($arraypoint); $i++){
                $point = $point += $arraypoint[$i]['nilairating'];
            }

            return $point;

        } // end of function hitungpoint
        //==================================================
        // ||
        // ||
        // ||

        public function pelatihan(){

            // ambil data pelatihan yang sudah diikuti
            $pelatihan = $this->member_model->ambilpelatihan($this->id_member);
            $data['pelatihan'] = $pelatihan;

            // jika ada pelatihan tertentu
            $menulispemula = false;
            $pointmenulispemula = 0;

            $menulisbuku = false;
            $pointmenulisbuku = 0;

            $menuliscerpen = false;
            $pointmenuliscerpen = 0;

            // cek semua id pelatihan
            foreach($pelatihan as $latih){
                if($latih['idpelatihan']== 'mp'){
                    $menulispemula = true;
                    $pointmenulispemula = $this->hitungpoint('mp');
                }
                if($latih['idpelatihan'] == 'mb'){
                    $menulisbuku = true;
                    $pointmenulispemula = $this->hitungpoint('mb');
                }
                if($latih['idpelatihan'] == 'mc'){
                    $menuliscerpet = true;
                    $pointmenulispemula = $this->hitungpoint('mc');
                }
            } // end of foreach

            $data['pelatihan'] = array(
                'menulispemula' => $menulispemula,
                'pointmenulispemula' => $pointmenulispemula,
                'menulisbuku' => $menulisbuku,
                'pointmenulisbuku' => $pointmenulisbuku,
                'menuliscerpen' => $menuliscerpen,
                'pointmenuliscerpen' => $pointmenuliscerpen
            );

            $this->load->view('member/header');
            $this->load->view('member/sidebar', $this->datasidebar());
            $this->load->view('member/topbar');
            $this->load->view('member/pelatihan',$data);
            $this->load->view('member/footer');

        } // end of function pelatihan
        // ================================================





        public function level(){

            $this->load->view('member/header');
            $this->load->view('member/sidebar', $this->datasidebar());
            $this->load->view('member/topbar');
            $this->load->view('member/level');
            $this->load->view('member/footer');

        } // end of function level
        //==================================================






    }