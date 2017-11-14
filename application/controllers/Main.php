<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller{

  public function homepage(){

    $this->load->view('homepage');
  }
  public function signup(){
    $this->load->view('users/signup');
  }



  public function question_detail(){
    $this->load->view('question_detail');
  }
  public function user_login(){
      $data= array('error_msg' => $this->session->flashdata('error_msg'));

      $this->load->view('users/user_login', $data);
    }

    public function loginprocess(){
      $this->form_validation->set_rules('email', "Email", 'required|valid_email');
      $this->form_validation->set_rules('password', 'Password', 'required|min_length[7]');

      if ($this->form_validation->run() == FALSE) {

        // $this->session->set_flashdata('faild', 'invalid data');
        $this->load->view('users/user_login');
      }
      else{
        $email= $this->input->post('email',true);
        $password= $this->input->post('password',true);
        $this->load->model('User');
        $result = $this->User->loginByEmailPass($email, $password);


              if($result){
                      $this->session->set_userdata('currentUser', $result);
                      redirect(base_url('user/platform'));
              }
              else{
                      $this->session->set_flashdata('error_msg', 'invalid data');
                      redirect(base_url('user/login'));
              }
      }

    }
    public function user_platform(){
    $this->load->view('users/user_platform');
  }

  //14-11-2017 mohamed
  public function c_get_all_questions(){

      $this->load->model('main_model');
      $result = $this->main_model->m_get_all_questions();
      $current_user = $this->session->userdata('currentuser');
      $data = array(
              'all_questions' =>$result,
              'cUser' => $current_user
            );

      $this->load->view('main', $data);
    }

    public function c_get_one_question(){
      $this->load->model('main_model');
      $q_id = $this->input->post('q_id');
      $result = $this->main_model->m_get_one_question($q_id);
      $data = array(
              'one_questions' =>$result,
              'cUser' => $current_user
            );

      $this->load->view('main', $data);
    }


}
