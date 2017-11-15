<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller{

  public function homepage() {
    //$this->output->enable_profiler(TRUE);

    $this->load->model('main_model');
    $questions_from_db = $this->main_model->m_get_20_questions();

    if (empty($this->session->userdata('currentUser'))) {

      $view_data = array(
        'questions_for_view' => $questions_from_db
      );

      $this->load->view('homepage', $view_data);
    } else {


      $view_data = array(
        'user' => $this->session->userdata('currentUser'),
        'questions_for_view' => $questions_from_db
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

    $question = $this->Main->get_question_by_id($question_id);
    $answers = $this->Main->get_answers_by_q_id($question_id);

    $answers_with_comments = [];
    foreach ($answers as $answer) {
      $answer['comments'] = $this->Main->get_comments_by_answer_id($answer['id']);;
      $answers_with_comments[] = $answer;
    }

    $question['answers'] = $answers_with_comments;

var_dump($question);exit;
    $view_data = array(
      'question' => $question
    );

    $this->load->view('question/view');

    $view_data = array('question' => $question_from_db);
    $this->load->view('questions/view_question', $view_data);
  }

  public function answer_question($question_id) {
    $this->load->model('main_model');
    $this->load->model('Eng_model');
    $question_from_db = $this->main_model->m_get_one_question_by_id($question_id);

    $this->form_validation->set_rules('a_content', "answer", 'required|min_length[50]');

    if ($this->form_validation->run() == FALSE) {
      $view_data = array(
        'question' => $question_from_db
      );
      $this->load->view('questions/answer', $view_data);
    } else {
      $new_answer = array(
        'c_a_content' => $this->input->post('a_content', true),
        'c_q_id'  => $question_id,
        'c_eng_id' => $this->session->currentUser['id'],
      );
      $this->Eng_model->m_add_answer($new_answer);
      $this->session->set_flashdata('success', 'Thank you for answering this question');
      redirect('/questions/'.$question_id);
    }
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
                $view_data = array('error' => 'Incorrect username or password.');
                $this->session->set_flashdata('error', 'Incorrect username or password.');
                 // $this->load->view('users/user_login', $view_data);
                 redirect('/user/login');
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

    // public function c_get_one_question(){
    //   $this->load->model('main_model');
    //   $q_id = $this->input->post('q_id');
    //   $result = $this->main_model->m_get_one_question($q_id);
    //   $data = array(
    //           'one_questions' =>$result,
    //           'cUser' => $current_user
    //         );
    //   $this->load->view('main', $data);
    // }

    public function c_detailed_question(){
      //for platform
      $this->load->model('main');
      $q_id = $this->input->post('q_id');
      $question = $this->main_model->m_get_one_question_by_id($q_id);
      $answers = $this->main_model->get_answers_by_q_id($q_id);
      $answers_with_comments = [];

      foreach($answers as $answer){
          $answer['comments'] = $this->main_model->get_comments_by_answer_id($answers['id']);
          $$answers_with_comments[] = $answer;
      }
      $question['answers'] = $answers_with_comments;
      $data = array(
              'question' =>$question,
              'cUser' => $current_user
            );
      $this->load->view('view_detail', $data);
    }

    public function c_show_profile_details(){
      $this->load->model('main_model');
      $current_user = $this->session->userdata('currentUser');
      $id = $current_user['id'];
      if($current_user['role'] == 'engineer'){

        $result = $this->main_model->m_eng_details($id);
        $data = array(
                'engineer' => $result,
                'cUser' => $current_user
              );
       $this->load->view('users/engineer_profile', $data);
      }

      else{
        $result = $this->main_model->m_ngo_details($id);
        $data = array(
                'ngo' =>$result,
                'cUser' => $current_user
              );
       $this->load->view('users/ngo_profile', $data);
      }

    }



}
