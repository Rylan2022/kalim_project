<?php
defined('BASEPATH') or exit("No direct script allowed");

class OtherController extends CI_Controller {
    public function status() {
      $this->load->view('common/header');
      $this->load->view('other/404');
      $this->load->view('common/footer');
    }
    public function faq() {
      $this->load->view('common/header');
      $this->load->view('other/faq');
      $this->load->view('common/footer');
    }
    public function our_services() {
      $this->load->view('common/header');
      $this->load->view('other/our-services');
      $this->load->view('common/footer');
    }
    public function terms_and_condition() {
      $this->load->view('common/header');
      $this->load->view('other/terms-and-condition');
      $this->load->view('common/footer');
    }

}