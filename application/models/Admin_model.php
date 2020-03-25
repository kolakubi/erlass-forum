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





        public function ambildataujian($idpost = null){

            $result = null;

            $this->db->select('*');
            $this->db->from('post');
            $this->db->join('kategori', 'post.idkategori = kategori.idkategori');
            $this->db->join('member', 'post.idauthor = member.id_member');
            $this->db->like('post.idkategori', 'ujian');

            // jika ada postid
            // ambil 1 postingan
            if($idpost){

                $this->db->where('post.idpost', $idpost);
                $result = $this->db->get()->row_array();

            }

            // jika tdk ada postid
            // ambil semua post
            else{
                $result = $this->db->get()->result_array();
            }

            return $result;

        } // end of function ambildataujian



        public function ambildatapelatihandiikuti($idmember, $kategori){

            $this->db->select('*');
            $this->db->from('pelatihandiikuti');
            $this->db->join('statuspelatihandiikuti', 'pelatihandiikuti.idpelatihandiikuti = statuspelatihandiikuti.idpelatihandiikuti');
            $this->db->where('pelatihandiikuti.idmember', $idmember);
            $this->db->where('pelatihandiikuti.idpelatihan', $kategori);
            $result = $this->db->get()->row_array();

            return $result;

        }






    } // end of class