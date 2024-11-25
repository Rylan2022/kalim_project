<?php
defined('BASEPATH') or exit("No direct script allowed");


class RegisterController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('RegisterModel');
  }


  public function form()
  {
    $records = $this->RegisterModel->get_all();

    $this->load->view('common/header');
    $this->load->view('register/form', ['records' => $records]);
    $this->load->view('common/footer');
  }

  
  public function submit()
  {
    // Insert submitted data
    $data = [
      'name' => $this->input->post('name'),
      'email' => $this->input->post('email'),
      'gender' => $this->input->post('gender'),
      'phone' => $this->input->post('phone'),
    ];
    $this->RegisterModel->insert($data);

    // Redirect to the same page
    redirect(base_url('form'));

  }

  public function edit($id) {
    $record = $this->RegisterModel->get_by_id($id);

    $this->load->view('common/header');
    $this->load->view('register/edit_form', ['record' => $record]);
    $this->load->view('common/footer');
}

public function update($id) {
    $data = [
        'name'   => $this->input->post('name'),
        'email'  => $this->input->post('email'),
        'gender' => $this->input->post('gender'),
        'phone'  => $this->input->post('phone'),
    ];
    $this->RegisterModel->update($id, $data);
    redirect(base_url('form'));
}

public function delete($id) {
    $this->RegisterModel->delete($id);
    redirect(base_url('form'));
}


  

}


  // public function submit() {
  //   $data = array(
  //     'firstname' => $this->input->post('first_name'),
  //     'lastname' => $this->input->post('last_name'),
  //     'email' => $this->input->post('email'),
  //     'dob' => $this->input->post('dob'),
  //     'address' => $this->input->post('address'),
  //     'phone' => $this->input->post('phone'),
  //     'message' => $this->input->post('message'),
  //     'username' => $this->input->post('username'),
  //     'password' => $this->input->post('password'),
  //     'conpassword' => $this->input->post(''),
  //   );

  //   $this->RegisterModel->insert_data($data);

  //   $this->load->view('success_message');
  // }