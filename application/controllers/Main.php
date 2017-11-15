<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller{

  public function homepage() {
    if (empty($this->session->userdata('currentUser'))) {
      $this->load->model('main_model');
      $questions_from_db = $this->main_model->m_get_20_questions();

      $view_data = array(
        'questions_for_view' => $questions_from_db
      );

      $this->load->view('homepage', $view_data);
    } else {
      $view_data = array(
        'user' => $this->session->userdata('currentUser')
      );

      $this->load->view('users/user_platform', $view_data);
    }
  }

  public function signup(){
    $this->load->view('users/signup');
  }

  public function question_detail(){
    $this->load->view('question_detail');
  }

  public function view_question($question_id) {
    $this->load->model('main_model');
    $question_from_db = $this->main_model->m_get_one_question_by_id($question_id);

    $view_data = array('question' => $question_from_db);
    $this->load->view('questions/view_question', $view_data);
  }

    public function loginprocess(){
      $this->form_validation->set_rules('username', "Username", 'required');
      $this->form_validation->set_rules('password', 'Password', 'required|min_length[7]');

      if ($this->form_validation->run() == FALSE) {
        $this->load->view('users/user_login');
      }
      else{
        $username= $this->input->post('username',true);
        $password= $this->input->post('password',true);
        $this->load->model('User');
        $result = $this->User->loginByUsernamePass($username, $password);

              if(!empty($result)){
                      $this->session->set_userdata('currentUser', $result);
                      redirect('/');
              }
              else{
                $view_data = array('error_login' => 'Incorrect username or password.');
                  $this->load->view('users/user_login', $view_data);
              }
      }

    }

    public function logout() {
      session_destroy();
      redirect('/');
    }

  public function user_question(){
    $this->load->view('users/add_question');
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
