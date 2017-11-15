<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_c extends CI_Controller{

  // login
  public function login(){
    $this->load->view('admin/login');
  }

  public function forgot_password(){
    $this->load->view('admin/forgot_password');
  }

  public function ngos(){
    // $this->load->model('admin_model');
    // $result = $this->admin_model->m_list_of_ngo();
    // $data = array('data' => $result);
    $data = array();
    $this->load->view('admin/ngos/index', $data);
  }

  public function view_ngo($id){
    $this->load->view('admin/ngos/view_ngo');
  }

  public function engineers(){
    // $this->load->model('admin_model');
    // $result = $this->admin_model->m_list_of_eng();
    // $data = array('data' => $result);
    $data = array();
    $this->load->view('admin/engineers/index', $data);
  }

  public function view_engineer($id){
    $this->load->view('admin/engineers/view_engineer');
  }

  public function view_question($id){
    $this->load->view('admin/questions/view_question');
  }

  public function c_list_of_questions(){
    //$this->load->model('admin_model');
    //$result = $this->admin_model->m_list_of_questions();
    //$data = array('data' => $result);
     $data = array();
    $this->load->view('admin/questions/index', $data);
  }

  public function c_list_of_ngo(){
    $this->load->model('Admin_model');
    $result = $this->admin_model->m_list_of_ngo();
    $data = array('data' => $result);
    $this->load->view('list_of_ngo', $data);
  }

  public function c_list_of_eng(){
    $this->load->model('Admin_model');
    $result = $this->admin_model->m_list_of_eng();
    $data = array('data' => $result);
    $this->load->view('list_of_eng', $data);
  }

  //public function c_list_of_questions(){
  //   $this->load->model('Admin_model');
  //   $result = $this->admin_model->m_list_of_questions();
  //   $data = array('data' => $result);
  //, $data);
  //$this->load->view('admin/questions/view_question');
 // }

  public function c_list_of_answers(){
    $this->load->model('Admin_model');
    $result = $this->Admin_model->m_list_of_answers();
    $data = array('data' => $result);
    $this->load->view('list_of_answers', $data);
  }

  public function c_list_of_comments(){
    $this->load->model('Admin_model');
    $result = $this->Admin_model->m_list_of_comments();
    $data = array('data' => $result);
    $this->load->view('list_of_comments', $data);
  }
//changed function name for ngo list

  public function c_list_of_ngo_newforms(){
    $this->load->model('admin_model');
    $result = $this->Admin_model->m_list_of_ngo_newforms();
    $data = array('data' => $result);
    $this->load->view('list_of_ngo_forms', $data);
  }

  public function c_list_of_eng_newforms(){
    $this->load->model('admin_model');
    $result = $this->Admin_model->m_list_of_eng_newforms();
    $data = array('data' => $result);
    $this->load->view('list_of_eng_forms', $data);
  }

  //need some work
  public function c_platform_all_question(){
    $this->load->model('admin_model');
    $result = $this->Admin_model->m_platform_question();
    $data = array('data' => $result);
    $this->load->view('list_of_eng_forms', $data);
  }

  public function c_platform_detailed_q(){
    $this->load->model('Admin_model');
    $result = $this->Admin_model->m_platform_detailed_q();
    $data = array('data' => $result);
    $this->load->view('list_of_eng_forms', $data);
  }


  //delete functions:

      public function c_delete_ngo($id){
             // get the $id from the route url, post is not used
			       // $id = $this->input->post('ngo_id');
			       // $this->load->model('Admin_model');
			       // $this->post_model->m_delete_ngo($id);
		         redirect('/admin/ngos');
      }

      public function c_delete_eng(){
  			   $id = $this->input->post('eng_id');
  			      $this->load->model('Admin_model');
  			         $this->Admin_model->m_delete_eng($id);
  			         redirect('home');
  		}

      public function c_delete_question(){
    			  $id = $this->input->post('question_id');
    			  $this->load->model('Admin_model');
    			  $this->Admin_model->m_delete_question($id);
    			  redirect('home');
    	}
      public function c_delete_answer(){
            $id = $this->input->post('answer_id');
            $this->load->model('Admin_model');
            $this->Admin_model->m_delete_answer($id);
            redirect('home');
      }
      public function c_delete_comment(){
            $id = $this->input->post('comments_id');
            $this->load->model('Admin_model');
            $this->Admin_model->m_delete_comment($id);
            redirect('home');
      }


      //edit functions


      public function c_edit_question(){
				$this->load->model('Admin_model');
				$data = array(
					           'q_text'    =>  $this->input->post('q_text'),
					           'q_id' =>	$this->input->post('q_id')
				             );
				$this->load->view('admin/edit/question', $data);
		  }

		  public function c_update_question(){
			     // $data = $this->input->post('updated_q');

				$this->form_validation->set_rules('updated_q', 'Updated question', 'trim|required');
			     if($this->form_validation->run() == FALSE){
              $this->load->view('admin/edit/question');
			     }
			     else {
			          $this->load->model('Admin_model');
			          $q_content = $this->input->post('updated_q');
			          $q_id = $this->input->post('q_id');
			          $array= array('q_content' => $q_content, 'q_id' => $q_id);
			          $this->Admin_model->m_update_question($array);
			             redirect('admin/questions');
		      }
	    }


      public function c_edit_answer(){
				// $this->load->model('Admin_model');
				$data = array(
					           'a_text'    =>  $this->input->post('a_text'),
					           'answer_id' =>	$this->input->post('a_id')
				             );
				$this->load->view('admin/edit/answer', $data);
		  }

		  public function c_update_answer(){
			     $data = $this->input->post('updated_a');

				$this->form_validation->set_rules('updated_a', 'updated_a', 'trim|required');
			     if($this->form_validation->run() == FALSE){
              $this->load->view('admin/edit/answer');
			     }
			     else {
			          $this->load->model('Admin_model');
			          $a_content = $this->input->post('updated_a');
			          $a_id = $this->input->post('a_id');
			          $array= array('a_content' => $a_content, 'a_id' => $a_id);
			          $this->Admin_model->m_update_answer($array);
			             redirect('admin/asnwers');
		      }
	    }


      public function c_edit_comment(){
				// $this->load->model('Admin_model');
				$data = array(
					           'c_text'    =>  $this->input->post('c_text'),
					           'comment_id' =>	$this->input->post('comment_id')
				             );
				$this->load->view('admin/edit/comment', $data);
		  }

		  public function c_update_comment(){
			     $data = $this->input->post('updated_c');

				$this->form_validation->set_rules('updated_c', 'Updated comment', 'trim|required');
			     if($this->form_validation->run() == FALSE){
              $this->load->view('admin/edit/comment');
			     }
			     else {
			          $this->load->model('Admin_model');
			          $c_content = $this->input->post('updated_c');
			          $c_id = $this->input->post('c_id');
			          $array= array('c_content' => $c_content, 'c_id' => $c_id);
			          $this->Admin_model->m_update_comment($array);
			             redirect('admin/comments');
		      }
	    }

      public function c_approve_ngo(){
        $this->load->model('Admin_model');
        $id = $this->input->post('ngo_id');
        $this->Admin_model->m_approve_ngo($id);
        redirect('admin/new_ngo_list');
      }

      public function c_approve_eng(){
        $this->load->model('Admin_model');
        $id = $this->input->post('eng_id');
        $this->Admin_model->m_approve_eng($id);
        redirect('admin/new_eng_list');
      }

}




 ?>
