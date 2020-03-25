<?php

    class Admin_model extends CI_Model{


        public function __construct(){
            // koneksi ke database
            $this->load->database();
        }



        public function ambildatamember($idmember = null){

            if($idmember) {

                // ambil spesifik member
                $result = $this->db->get_where('member', array('id_member' => $idmember))->row_array();
                return $result;

            }
            else{

                // ambil semua data membewr
                $result = $this->db->get('member')->result_array();
                return $result;

            }

        } // end of function ambildatamember


        public function simpandataeditmember($idmember, $datamember){

            $this->db->where('id_member', $idmember);
            $this->db->update('member', $datamember);

            return true;

        } // end of function simpandataeditmember






    } // end of class