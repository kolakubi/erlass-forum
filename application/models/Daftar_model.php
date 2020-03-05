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

        //insert data login
        public function insertLogin($data){

            if($this->db->insert('login', array(
                'email' => $data['email'],
                'password' => $data['password'],
                'level' => 2
                ))
            ){
                return true;
            }

            return false;

        }

        // insert data member
        public function insertMember($data){

            if($this->db->insert('member', array(
                'nama' => $data['nama'],
                'no_induk' => $data['nomorinduk'],
                'sekolah' => $data['sekolah'],
                'alamat' => $data['alamat'],
                'hp' => $data['hp'],
                'email' => $data['email'],
                ))
            ){
                return true;
            }

            return false;

        }

        public function simpanMember($data){

            // insert data login
            if($this->insertLogin($data)){

                // insert data member
                if($this->insertMember($data)){

                    return true;

                }

            }

            return false;

        }


    }