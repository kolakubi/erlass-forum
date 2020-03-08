<?php

    class Posting_model extends CI_Model{

        public function __construct(){
            
            // koneksi ke database
            $this->load->database();

        } // end of function construct

        
        // simpan data post
        public function simpanpost($dataposting){

            $this->db->insert('post', $dataposting);

            return true;

        }


    }