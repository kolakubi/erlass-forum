<?php

    class Postdetail_model extends CI_Model{

        public function __construct(){
            
            // koneksi ke database
            $this->load->database();

        } // end of function construct
        // ========================================




        // ambil data point
        public function ambilPoint($idpost){

            $this->db->select('postrating.nilairating');
            $this->db->from('postrating');
            $this->db->join('post', 'postrating.idpost = post.idpost');
            $this->db->where('postrating.idpost', $idpost);
            $result = $this->db->get()->result_array();
            return $result;

            // result nya array nilai rating

        } // end of ambil point
        // ========================================



        // ambil data post
        public function ambilPostDetail($idpost){

            $this->db->select('*');
            $this->db->from('post');
            $this->db->join('kategori', 'post.idkategori = kategori.idkategori');
            $this->db->join('member', 'post.idauthor = member.id_member');
            $this->db->where('post.idpost', $idpost);
            $result = $this->db->get()->row_array();

            return $result;

        } // end of ambil detail post
        // ========================================



        public function simpankomentar($datakomentar){

            // simpan data rating
            $this->db->insert('postrating', array(
                'idpost' => $datakomentar['idpost'],
                'nilairating' => $datakomentar['rating'],
                'idpenilai' => $datakomentar['idkomentator']
            ));

            // simpan data komentar
            $this->db->insert('komentar', array(
                'idpost' => $datakomentar['idpost'],
                'idkomentator' => $datakomentar['idkomentator'],
                'isikomentar' => $datakomentar['komentar']
            ));

            return true;

        } // end of function simpan komentar
        // ========================================



        public function ambilkomentar($idpost){

            $this->db->select('komentar.isikomentar, komentar.waktukomentar, komentar.idkomentator, member.nama');
            $this->db->from('komentar');
            $this->db->join('post', 'komentar.idpost = post.idpost');
            $this->db->join('member', 'komentar.idkomentator = member.id_member');
            $this->db->where('komentar.idpost', $idpost);
            $result = $this->db->get()->result_array();

            return $result;

        } // end of function ambilkomentar
        // ========================================




        public function ambiljumlahview($idpost){

            $this->db->select('view');
            $this->db->from('post');
            $this->db->where('idpost', $idpost);
            $result = $this->db->get()->row_array();

            return $result;

        } // end of function ambiljumlahview
        // ========================================



        public function updatepostview($idpost, $view){

            $this->db->set('view', $view);
            $this->db->where('idpost', $idpost);
            $this->db->update('post');

            return true;

        } // end of function updateview
        // ========================================


    } // end of class