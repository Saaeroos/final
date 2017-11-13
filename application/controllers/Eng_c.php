<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eng_c extends CI_Controller{


  public function eng_register(){

    $data= array('success_msg' => $this->session->flashdata('success'));
    $this->load->view('/users/engineer_register');
  }

  public function	eng_registerprocess(){
    $config['upload_path']   = './uploads/'; // relative to the root of this project
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size']      = 5000;
    $config['max_width']     = 2048;
    $config['max_height']    = 2048;

    $this->load->library('upload', $config);

  $this->form_validation->set_rules('form_name',              'Name',                     'trim|required');
  $this->form_validation->set_rules('form_phone',             'Phone',                     'trim|required');
  $this->form_validation->set_rules('form_email',             'Email',                     'trim|required|valid_email|is_unique[engineers.email]');
  $this->form_validation->set_rules('form_fields_expertise',  'Fields_expertise',          'trim|required');
  $this->form_validation->set_rules('form_aboutme',           'Aboutme',                   'trim');
  $this->form_validation->set_rules('form_linkedin',           'LinkedIn',                   'trim');
  $this->form_validation->set_rules('form_username',          'Username',                  'required|trim|min_length[5]|is_unique[engineers.username]');
  $this->form_validation->set_rules('form_password',          'Password',                  'required|trim|min_length[7]');
  $this->form_validation->set_rules('form_con_password',      'Password Confirmation', 'trim|required|matches[form_password]');
  // $this->form_validation->set_rules('form_email',       'Email', 'required|valid_email|is_unique[users.email]');

      $upload_picture = $this->upload->do_upload('form_photo');
      if ($this->form_validation->run() == FALSE || $upload_picture == FALSE)
      {
            $this->session->set_flashdata('error', 'invalid data');
            $this->load->view('users/engineer_register');
      }
      else
      {

        $photo = $this->upload->data();

    $this->load->model('Eng_model');
    $data = array(
      'c_name'              => $this->input->post('form_name',true),
      'c_phone'             => $this->input->post('form_phone',true),
      'c_email'             => $this->input->post('form_email',true),
      'c_fields_expertise'  => $this->input->post('form_fields_expertise',true),
      'c_photo'             => $photo['file_name'],
      'c_form_linkedin'     => $this->input->post('form_linkedin',true),
      'c_aboutme'           => $this->input->post('form_aboutme',true),
      'c_linkedin'          => $this->input->post('form_linkedin',true),
      'c_username'          => $this->input->post('form_username',true),
      'c_password'          => $this->input->post('form_password',true)
    );

    $this->session->set_flashdata('success', 'Users successfully added. Thanks');
    $this->Eng_model->add_eng( $data );
    redirect(base_url('register'));
      }
}
}




 ?>
