<?php

    class Login_model extends CI_Model{


        public function __construct(){
            // koneksi ke database
            $this->load->database();
        }

        public function ambilDataMember($email){

            $this->db->select('*');
            $this->db->from('member');
            $this->db->join('login', 'login.email = member.email');
            $this->db->where('member.email', $email);
            return $this->db->get()->row_array();

        }


        public function login($email, $password){
            // ambil data berdasarkan email dan password yg diinput
            $result = $this->db->get_where('login', array('email' => $email, 'password' => $password));
            $num_rows = $result->num_rows();
    
            // jika result nya ada
            if($num_rows > 0){
    
                // ambil data member
                $datamember = $this->ambilDataMember($email);
    
                // set session
                $this->session->set_userdata($datamember);
                //$_SESSION['member'] = $datamember;
    
                return $datamember['level'];
    
            }
    
        // jika tdk ada return false
        return false;
    
        }


    }