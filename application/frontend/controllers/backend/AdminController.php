<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('backend/dashbordModel');
    }

    public function dashbord() {
        $data['items'] = $this->dashbordModel->getBlogs();
        $this->load->view('common/header');
        $this->load->view('backend/admin/dashbord', $data);
        $this->load->view('common/footer');
    }

    public function add_blog() {
        if ($this->input->method() === 'post') {
            $data = [
                'title' => $this->input->post('title'),
                'text'  => $this->input->post('text'),
            ];
            
            // Debug logging
            log_message('debug', 'Blog Data: ' . print_r($data, true));

            $this->dashbordModel->addBlog($data);
            redirect('backend/admincontroller/dashbord');
        }
        $this->load->view('backend/admin/add_blog');
    }

    public function edit($id) {
        if ($this->input->method() === 'post') {
            $data = [
                'title' => $this->input->post('title'),
                'text'  => $this->input->post('text'),
            ];
            $this->dashbordModel->updateBlog($id, $data);
            redirect('backend/admincontroller/dashbord');
        }

        $data['blog'] = $this->dashbordModel->getBlogById($id);
        $this->load->view('backend/admin/edit_blog', $data);
    }

    public function delete($id) {
        $this->dashbordModel->deleteBlog($id);
        redirect('backend/admincontroller/dashbord');
    }
}
