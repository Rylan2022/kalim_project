<?php
class dashbordModel extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getBlogs() {
        return $this->db->get('faq_table')->result_array();
    }

    public function getBlogById($id) {
        $query = $this->db->get_where('faq_table', ['id' => $id]);
        return $query->row_array();
    }

    public function addBlog($data) {
        if (!$this->db->insert('faq_table', $data)) {
            log_message('error', 'Database Insert Error: ' . $this->db->error());
        }
    }

    public function updateBlog($id, $data) {
        return $this->db->where('id', $id)->update('faq_table', $data);
    }

    public function deleteBlog($id) {
        return $this->db->where('id', $id)->delete('faq_table');
    }
}
