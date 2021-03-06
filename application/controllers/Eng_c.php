<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eng_c extends CI_Controller{


  public function eng_register(){

    $data= array('success_msg' => $this->session->flashdata('success'));
    $this->load->view('/users/engineer_register');
  }

  public function	eng_registerprocess(){
    $config['upload_path']   = './uploads/';// relative to the root of this project
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size']      = 5000;
    $config['max_width']     = 2048;
    $config['max_height']    = 2048;
    $this->upload->initialize($config);

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

    $this->session->set_flashdata('success', 'Thank you for signing up, please login');
    $this->Eng_model->add_eng( $data );
    redirect('/');
      }
}

//14-11-2017 mohamed

public function c_add_answer(){
    $this->form_validation->set_rules('a_content', 'Answer content', 'trim|required');;
    if($this->form_validation->run() == FALSE){
          $data = array(
                  'cUser' => $this->session->userdata('currentUser')
                );
          $this->load->view('/users/create', $data);

    }
    else{

      $cUser = $this->session->userdata('currentUser');
      $q_id = $this->input->post('q_id');
      $cUser_id = $cUser['id'];
      $data = array(
            'c_a_content' 			=> $this->input->post('a_content',true),
            'c_a_id' 			    => $a_id,
            'c_eng_id'		  	=> $cUser_id,
              );
      $this->load->model('Ngo_model');
      $this->Ngo_model->m_add_answer($data);
      redirect(base_url());
    }

}

public function c_add_comment_eng(){
    $comment_text = $this->input->post('comment_text');
    $q_id = $this->input->post('a_id');
    $eng_user = $this->session->userdata('currentuser');
    $eng_id = $eng_user['id'];
    $this->load->model('main-model');
    $data = array( 'c_comment_text' =>$comment_text,
                   'a_id' =>$a_id,
                   'eng_id' =>$eng_id);

    $this->main_model->m_add_comment($data);
    redirect("/home");
    }
//15-11-2017 mohamed
    public function eng_edit_profile(){
      $this->load->model('main_model');
      $cUser = $this->session->userdata('currentUser');
      $eng_id = $cUser['id'];
      //$result = $this->eng_model->select_one_eng($eng_id);
      $result =$this->main_model->m_eng_details($eng_id);
      $data = array(
            'engineer'    => $result,
            'cUser'		=> $cUser
              );
      $this->load->view('users/engineer_edit_profile', $data);
    }

    public function c_update_eng(){
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
                $this->load->view('users/engineer_update_profile');
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
        $this->Eng_model->m_update_eng( $data );
        redirect(base_url('register'));
          }
    }
    public function eng_delete_profile() {
    $this->load->model('Eng_model');
    $this->Ngo_model->m_delete_eng($this->session->currentUser['id']);
    session_destroy();
    redirect('/');
  }

public function share_request($engineer_id) {
  $this->load->model('main_model');
  $ngo_id = $this->session->currentUser['id'];
  $this->main_model->insert_share_request($engineer_id, $ngo_id);
  // maybe redirect to the question again, but we need question id?
  redirect('/');
}

public function c_share_request_eng(){

$this->load->model('main_model');
 $eng_id = $this->session->currentUser['id'];

  $result =$this->main_model->get_all_share_request_eng($eng_id);
  $view_data =  array('share_requests' => $result);

  $this->load->view('users/engineer_share_request', $view_data);

}

public function c_approve_share_request($share_request_id){

  $this->load->model('share_request');
  $result =$this->share_request->m_update_status($share_request_id, 'approved');

  redirect('/user/engineer/share_requests');
}

public function c_decline_share_request($share_request_id){

  $this->load->model('share_request');
  $result =$this->share_request->m_update_status($share_request_id, 'decline');

  redirect('/user/engineer/share_requests');
}





}

