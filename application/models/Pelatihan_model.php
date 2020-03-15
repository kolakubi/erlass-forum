<?php

    class Pelatihan_model extends CI_Model{


        public function __construct(){
            
            // koneksi ke database
            $this->load->database();

        } // end of function construct


        // ambil point dari post rating
        public function ambilPoint($idmember){

            $this->db->select('postrating.nilairating');
            $this->db->from('postrating');
            $this->db->join('post', 'postrating.idpost = post.idpost');
            $this->db->where('post.idauthor', $idmember);
            $result = $this->db->get()->result_array();
            return $result;

            // result nya array nilai rating

        } // end of ambilPoint function


        public function ambildatapelatihan($idmember){

            $this->db->select(['idmember', 'idpelatihan']);
            $this->db->from('pelatihandiikuti');
            $this->db->where('idmember', $idmember);
            $result = $this->db->get()->result_array();

            return $result;

        } // end of function ambildatapelatihan


        public function simpanpelatihan($datapendaftaran){

            $this->db->insert('pelatihandiikuti', $datapendaftaran);

            $simpanid = $this->db->insert_id();

            // return id terakhir di simpan
            return  $simpanid;

        } // end of function simpanpelatihan


        public function simpanstatuspelatihan($idpelatihandiikuti){

            $this->db->insert('statuspelatihandiikuti', ['idpelatihandiikuti'=>$idpelatihandiikuti]);

            return true;

        } // end of simpanstatuspelatihan


        public function daftar($datapendaftaran){

            // insert data ke pelatihandiikuti
            // lalu ambil idpelatihandiikuti terakhir
            $idpelatihandiikuti = $this->simpanpelatihan($datapendaftaran);

            // jika sukses
            if($idpelatihandiikuti){ 

               // insert data ke status pelatihan
               $result = $this->simpanstatuspelatihan($idpelatihandiikuti);
               
                // jika insert berhasil
                if($result){

                    // redirect ke halaman ujian
                    $this->load->view('front/header');
                    $this->load->view('ujian/ujianmenulispemula');
                    $this->load->view('front/footer');

                }

            }

        } // end of function daftar


    } // end of class