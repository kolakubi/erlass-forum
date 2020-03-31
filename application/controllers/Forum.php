<?php

    class Forum extends CI_Controller{


        public function __construct(){

            parent::__construct();

            // cek session, jika tidak ada langsung redirect ke pelatihan
            if(!$this->session->userdata('pelatihan')){
                redirect('/pelatihan');
            }

            //load libary pagination
            $this->load->library('pagination');

        }

        public function configPagination(){

            //konfigurasi pagination
            $config['base_url'] = site_url('forum/index'); //site url
            $kategori = $this->session->userdata('pelatihan');
            $config['total_rows'] = $this->forum_model->ambilTotalPost($kategori); //total row
            $config['per_page'] = 5;  //show record per halaman
            $config["uri_segment"] = 3;  // uri parameter
            $choice = $config["total_rows"] / $config["per_page"];
            $config["num_links"] = floor($choice);

            // Membuat Style pagination untuk BootStrap v4
            $config['first_link']       = 'First';
            $config['last_link']        = 'Last';
            $config['next_link']        = 'Next';
            $config['prev_link']        = 'Prev';
            $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
            $config['full_tag_close']   = '</ul></nav></div>';
            $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close']  = '</span>Next</li>';
            $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close']  = '</span></li>';

            return $config;
            
        } // end of function configpagination


        public function index(){

            $config = $this->configPagination();


            $this->pagination->initialize($config);

            $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

            
            // ambil kategori dari session
            $kategori = $this->session->userdata('pelatihan');

            // ambil data post dari db
            $semuaPost = $this->forum_model->ambilDataPostDarikategoriLimit($kategori, $config["per_page"], $data['page']);

            // set panjang char excerpt
            $postExcerpt = 150;

            // ambil point dari post
            foreach ($semuaPost as $key => $post) {
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

                // modif panjang excerpt string
                $semuaPost[$key]['isipost'] = substr($semuaPost[$key]['isipost'], 0, $postExcerpt)."...";

                // insert total point ke array
                $semuaPost[$key]['totalpoint'] = $totalPoint;
                $semuaPost[$key]['totalvote'] = $totalVote;
            } // end loop forech

            $data['posts'] = $semuaPost;

            $data['pagination'] = $this->pagination->create_links();

            // panggil view
            $this->load->view('front/header');
            $this->load->view('front/forum', $data);
            $this->load->view('front/sidebar');
            $this->load->view('front/footer');


        } // end of function index




        public function forumPagination(){

            
        }


    }