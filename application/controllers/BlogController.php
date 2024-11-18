<?php
defined('BASEPATH') or exit("No direct script allowed");

class HomeController extends CI_Controller {
    public function blog_details() {
      $this->load->view('common/header');
      $this->load->view('blog/blog-details');
      $this->load->view('common/footer');

    }
    public function blog_grid() {
      $this->load->view('common/header');
      $this->load->view('blog/blog-grid-v4');
      $this->load->view('common/footer');
    }
    public function blog_single() {
      $this->load->view('common/header');
      $this->load->view('blog/blog-single-v1');
      $this->load->view('common/footer');
    }
}