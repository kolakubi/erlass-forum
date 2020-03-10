<?php

    class Postdetail extends CI_Controller{

        public function __construct(){

            parent::__construct();

            // cek jika login
            if(!$this->session->userdata('id_member')){

                // jika belum login, redirect ke login
                redirect('/login');

            }

        }


        public function post($idpost){

            //ambil post data
            $postdetail = $this->postdetail_model->ambilPostDetail($idpost);

            
            $arrayPoint = $this->forum_model->ambilPoint($idpost);

            // jika blom pernah dpt point
            $totalPoint = 0;
            $totalVote = 0;
            $postdetail['totalpoint'] = 0;
            $postdetail['totalvote'] = 0;

            // jika ada point
            if($arrayPoint){

                // loop setiap point dan jumlahkan
                for($i=0; $i<count($arrayPoint); $i++){
                    $totalPoint += $arrayPoint[$i]['nilairating'];

                    $totalVote+=1;
                }
            
                // insert total point ke array
                $postdetail['totalpoint'] = $totalPoint;
                $postdetail['totalvote'] = $totalVote;

            }

            /////////////////////////////////////////////
            /////////////////////////////////////////////
            // END OF AMBIL POINT

            // ambil komentar
            $komentar = $this->postdetail_model->ambilkomentar($idpost);

            $postdetail['komentar'] = $komentar;

            /////////////////////////////////////////////
            /////////////////////////////////////////////
            // END OF AMBIL KOMENTAR

            $data['posts'] = $postdetail;

            $this->load->view('front/header');
            $this->load->view('front/post-detail', $data);
            $this->load->view('front/footer');

        } // end of function post



        public function komentar($idpost){

            // set form validation
			$this->form_validation->set_rules(array(
				array(
					'field' => 'komentar',
					'label' => 'Komentar',
					'rules' => 'required'
				),
				array(
					'field' => 'rating',
					'label' => 'Rating',
					'rules' => 'required'
                )
                
            ));
            
            $this->form_validation->set_message('required', 'wajib diisi');

            if(!$this->form_validation->run()){

                redirect('postdetail/post/'.$idpost);
                
			}
			else{

                // ambil value dr field
                $datakomentar = array(
                    'komentar' => html_escape($this->input->post('komentar')),
                    'rating' => $this->input->post('rating'),
                    'idkomentator' => $this->session->userdata('id_member'),
                    'idpost' => $idpost
                );

                // simpan komentar dan rating
                $result = $this->postdetail_model->simpankomentar($datakomentar);

                redirect('postdetail/post/'.$idpost);

            }

        } // end of fungction komentar


    }