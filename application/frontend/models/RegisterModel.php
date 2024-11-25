<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterModel extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // public function insert_data($data) {
    //     $this->db->insert('form_table', $data);
    // }

        public function insert($data) {
            $this->db->insert('contact', $data);
        }
    
        public function get_all() {
            return $this->db->get('contact')->result_array();
        }

        public function get_by_id($id) {
            return $this->db->get_where('contact', ['si_no' => $id])->row_array();
        }
        
        public function update($id, $data) {
            $this->db->where('si_no', $id);
            $this->db->update('contact', $data);
        }
        
        public function delete($id) {
            $this->db->where('si_no', $id);
            $this->db->delete('contact');
        }
        
    }
    
