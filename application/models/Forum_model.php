<?php

    class Forum_model extends CI_Model{

        public function __construct(){
            
            // koneksi ke database
            $this->load->database();

        } // end of function construct

        public function ambilPoint($idpost){

            $this->db->select('postrating.nilairating');
            $this->db->from('postrating');
            $this->db->join('post', 'postrating.idpost = post.idpost');
            $this->db->where('postrating.idpost', $idpost);
            $result = $this->db->get()->result_array();
            return $result;

            // result nya array nilai rating

        } // end of ambilPoint function


        public function ambilDataPostDarikategori($kategori){

            $this->db->select('*');
            $this->db->from('post');
            $this->db->join('kategori', 'post.idkategori = kategori.idkategori');
            // $this->db->join('postrating', 'post.idpost = postrating.idpost');
            $this->db->join('member', 'post.idauthor = member.id_member');
            $this->db->where('post.idkategori', $kategori);
            $result = $this->db->get()->result_array();

            return $result;

        }


    }