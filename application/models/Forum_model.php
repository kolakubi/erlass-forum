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
            $this->db->order_by('waktupublish', 'DESC');
            $result = $this->db->get()->result_array();

            return $result;

        }

        public function ambilDataPostDarikategoriLimit($kategori, $limit, $start){

            $this->db->select('*');
            $this->db->from('post');
            $this->db->join('kategori', 'post.idkategori = kategori.idkategori');
            // $this->db->join('postrating', 'post.idpost = postrating.idpost');
            $this->db->join('member', 'post.idauthor = member.id_member');
            $this->db->where('post.idkategori', $kategori);
            $this->db->order_by('waktupublish', 'DESC');
            $this->db->limit($limit, $start);
            $result = $this->db->get()->result_array();

            return $result;

        }





        //ambil data mahasiswa dari database
        function ambilDataPost($limit, $start){
            $query = $this->db->get('post', $limit, $start);
            return $query;
        } // end of function ambilDataPost






        public function ambilTotalPost($kategori){

            return $this->db->get_where('post', array('idkategori' => $kategori))->num_rows();
            

        } // end of function ambilTotalPost


    }