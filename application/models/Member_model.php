<?php

    class Member_model extends CI_Model{

        public function __construct(){

            // koneksi ke database
            $this->load->database();

        } // end of function __construct
        // ======================================================



        public function ambildatasurat($idmember){

            $this->db->select('*');
            $this->db->from('surat');
            $this->db->join('member', 'surat.idpengirim = member.id_member');
            $this->db->where('surat.idpenerima', $idmember);

            $result = $this->db->get()->result_array();
            return $result;

        }// end of function
        // =======================================================




        public function ambiljumlahsuratbelumdibaca($idmember){

            $this->db->select('*');
            $this->db->from('surat');
            $this->db->join('member', 'surat.idpengirim = member.id_member');
            $this->db->where('surat.idpenerima', $idmember);
            $this->db->where('surat.dilihat', 0);

            $result = $this->db->get()->num_rows();
            return $result;

        } // end of function ambiljumlahsuratbelumdibaca
        // =======================================================




        public function lihatsurat($idsurat){
            $this->db->select('*');
            $this->db->from('surat');
            $this->db->join('member', 'surat.idpengirim = member.id_member');
            $this->db->where('surat.idsurat', $idsurat);

            $result = $this->db->get()->row_array();
            return $result;
        } // end of function lihatsurat
        // =======================================================




        public function suratdibaca($idsurat){
            $this->db->where('idsurat', $idsurat);
            $this->db->update('surat', array('dilihat' => 1));

            return true;
        } // end of function suratdibaca
        // =======================================================





    } // end of class