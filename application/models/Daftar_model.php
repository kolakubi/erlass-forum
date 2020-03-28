<?php

    class Daftar_model extends CI_Model{

        public function __construct(){
            // koneksi ke database
            $this->load->database();
        } // end of function __construct
        // ==========================================================



        public function cekEmail($email){

            $this->db->select('*');
            $this->db->from('login');
            $this->db->where('email', $email);
            return $this->db->get()->row_array();

        }
        // end of function cekEmail
        // ==========================================================



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
        }// end of function insertLogin
        // ==========================================================



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
        // end of function insertMember
        // ==========================================================



        public function simpanMember($data){

            // insert data login
            if($this->insertLogin($data)){
                // insert data member
                if($this->insertMember($data)){
                    // ambil last insert id
                    $insert_id = $this->db->insert_id();
                    // kirim pesan sambutan ke member baru
                    $this->kirimsurat($insert_id);

                    return true;
                }
            }
            return false;
        }// end of function simpanMember
        // ==========================================================



        public function kirimsurat($idmember){

            $datainsert = array(
                'idpenerima' => $idmember,
                'idpengirim' => 1,
                'judulsurat' => 'Selamat datang di Erlass',
                'isisurat' => 'terima kasih telah bergabung ke Pelatihan. Ayo kumpulkan poinmu dan dapatkan hadiah menarik'
            );

            $this->db->insert('surat', $datainsert);

        } // end of function kirimsambutan
        // ==========================================================




    } // end of class