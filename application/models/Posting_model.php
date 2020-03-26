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

        } // end of funtion simpan post





        public function ambilidpelatihandiikuti($datamember){

            $this->db->select('*');
            $this->db->from('pelatihandiikuti');
            $this->db->where('idmember', $datamember['idmember']);
            $this->db->where('idpelatihan', $datamember['idpelatihan']);
            $row = $this->db->get()->num_rows();

            if($row === 1){

                $this->db->select('*');
                $this->db->from('pelatihandiikuti');
                $this->db->where('idmember', $datamember['idmember']);
                $this->db->where('idpelatihan', $datamember['idpelatihan']);
                $result = $this->db->get()->row_array();
                return $result;
            }
            else{
                return false;
            }

        } // end of function ambilidpelatihandiikuti
        // ==========================================================






        public function updatestatusujian($datamember){

            // echo '<pre>';
            // print_r($datamember);
            // echo '</pre>';

            // die();

            $this->db->where('idpelatihandiikuti', $datamember['idpelatihandiikuti']);
            $this->db->update('statuspelatihandiikuti', array('ujianlv'.$datamember['level'] => 1));

            // echo '<pre>';
            // print_r($datamember);
            // echo '</pre>';

            // die();

            return true;

        } // end of function updatestatusujian
        // ==========================================================






        public function updatestatuspelatihan($datamember){

            // ambil id pelatihandiikuti
            $datapelatihandiikuti = $this->ambilidpelatihandiikuti($datamember);
            $datamember['idpelatihandiikuti'] = $datapelatihandiikuti['idpelatihandiikuti'];

            // update data status ujian
            $this->updatestatusujian($datamember);

            return true;


        } // end of function dataupdateujian
        // ==========================================================


    }