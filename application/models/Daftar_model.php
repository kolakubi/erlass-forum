<?php

    class Daftar_model extends CI_Model{

        public function __construct(){
            // koneksi ke database
            $this->load->database();
        }

        public function cekEmail($email){

            $this->db->select('*');
            $this->db->from('login');
            $this->db->where('email', $email);
            return $this->db->get()->row_array();

        }

        public function simpanMember($data){

            

        }


    }