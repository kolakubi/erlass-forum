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

    } // end of class