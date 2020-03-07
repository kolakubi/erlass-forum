<?php

    class Forum extends CI_Controller{


        public function __construct(){

            parent::__construct();

            // cek session, jika tidak ada langsung redirect ke pelatihan
            if(!$this->session->userdata('pelatihan')){
                redirect('/pelatihan');
            }

        }


        public function index(){

            // ambil data kategori
            $kategori = $this->session->userdata('pelatihan');
            $semuaPost = $this->forum_model->ambilDataPostDarikategori($kategori);

            // set panjang char excerpt
            $postExcerpt = 250;

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

            }

            $data['posts'] = $semuaPost;

            $this->load->view('front/header');
            $this->load->view('front/forum', $data);
            $this->load->view('front/footer');

        }


    }