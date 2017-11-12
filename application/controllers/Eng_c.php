<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eng_c extends CI_Controller{


  public function eng_register(){

    $data= array('success_msg' => $this->session->flashdata('success'));
    $this->load->view('/users/register');
  }

  public function	eng_registerprocess(){
  $this->form_validation->set_rules('form_name',              'Name',                     'trim|required|alpha');
  $this->form_validation->set_rules('form_phone',             'Phone',                     'trim|required|alpha');
  $this->form_validation->set_rules('form_email',             'Email',                     'trim|required|valid_email|is_unique[engineers.email]');
  $this->form_validation->set_rules('form_fields_experties',  'Fields_experties',          'trim|required|alpha');
  $this->form_validation->set_rules('form_aboutme',           'Aboutme',                   'trim');
  $this->form_validation->set_rules('form_username',          'Username',                  'required|trim|min_length[5]|is_unique[engineers.username]');
  $this->form_validation->set_rules('form_password',          'Password',                  'required|trim|min_length[7]');
  $this->form_validation->set_rules('form_con_password',      'Con_password Confirmation', 'trim|required|matches[form_password]');
  // $this->form_validation->set_rules('form_email',       'Email', 'required|valid_email|is_unique[users.email]');


      if ($this->form_validation->run() == FALSE)
      {
            $this->session->set_flashdata('error', 'invalid data');
            $this->load->view('users/register');


      }
      else
      {

    $this->load->model('Eng_model');
    $data = array(
      'c_name'              => $this->input->post('form_name',true),
      'c_phone'             => $this->input->post('form_phone',true),
      'c_email'             => $this->input->post('form_email',true),
      'c_fields_experties'  => $this->input->post('form_fields_experties',true),
      'c_photo'             => $this->input->post('form_photo',true),
      'c_aboutme'           => $this->input->post('form_aboutme',true),
      'c_username'          => $this->input->post('form_username',true),
      'c_password'          => $this->input->post('form_password',true)
    );

    $this->session->set_flashdata('success', 'Users successfully added. Thanks');
    $this->User->add_eng( $data );
    redirect(base_url('register'));
      }
}
}




 ?>
