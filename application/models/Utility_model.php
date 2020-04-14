<?php

    Class Utility_model extends CI_Model{

        public function __construct(){
            // koneksi ke database
            $this->load->database();
        } // end of function __construct
        // ======================================================


        public function ambiltanggalmember($tgl){

            $this->db->select('waktudaftar');
            $this->db->from('member');
            $this->db->like('waktudaftar', $tgl, 'after');
            $result = $this->db->get()->num_rows();

            return $result;

        }

    }