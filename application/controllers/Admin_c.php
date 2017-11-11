<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_c extends CI_Controller{


  public function c_list_of_ngo(){
    $this->load->model('admin_model');
    $result = $this->admin_model->m_list_of_ngo();
    $data = array('data' => $result);
    $this->load->view('list_of_ngo', $data);
  }

  public function c_list_of_eng(){
    $this->load->model('admin_model');
    $result = $this->admin_model->m_list_of_eng();
    $data = array('data' => $result);
    $this->load->view('list_of_eng', $data);
  }

  public function c_list_of_questions(){
    $this->load->model('admin_model');
    $result = $this->admin_model->m_list_of_questions();
    $data = array('data' => $result);
    $this->load->view('list_of_questions', $data);
  }

  public function c_list_of_answers(){
    $this->load->model('admin_model');
    $result = $this->admin_model->m_list_of_answers();
    $data = array('data' => $result);
    $this->load->view('list_of_answers', $data);
  }

  public function c_list_of_comments(){
    $this->load->model('admin_model');
    $result = $this->admin_model->m_list_of_comments();
    $data = array('data' => $result);
    $this->load->view('list_of_comments', $data);
  }

  public function c_list_of_ngo_newforms(){
    $this->load->model('admin_model');
    $result = $this->admin_model->m_list_of_ngo_newforms();
    $data = array('data' => $result);
    $this->load->view('list_of_ngo_forms', $data);
  }

  public function c_list_of_eng_newforms(){
    $this->load->model('admin_model');
    $result = $this->admin_model->m_list_of_eng_newforms();
    $data = array('data' => $result);
    $this->load->view('list_of_eng_forms', $data);
  }


  public function c_platform_question(){
    $this->load->model('admin_model');
    $result = $this->admin_model->m_platform_question();
    $data = array('data' => $result);
    $this->load->view('list_of_eng_forms', $data);
  }

  public function c_platform_detailed_q(){
    $this->load->model('admin_model');
    $result = $this->admin_model->m_platform_detailed_q();
    $data = array('data' => $result);
    $this->load->view('list_of_eng_forms', $data);
  }


  //delete functions:

      public function c_delete_ngo(){
			       $id = $this->input->post('ngo_id');
			       $this->load->model('admin_model');
			       $this->post_model->m_delete_ngo($id);
		         redirect('home');
		  }

      public function c_delete_eng(){
  			   $id = $this->input->post('eng_id');
  			      $this->load->model('admin_model');
  			         $this->post_model->m_delete_eng($id);
  			         redirect('home');
  		}

      public function c_delete_question(){
    			  $id = $this->input->post('question_id');
    			  $this->load->model('admin_model');
    			  $this->post_model->m_delete_question($id);
    			  redirect('home');
    	}
      public function c_delete_answer(){
            $id = $this->input->post('answer_id');
            $this->load->model('admin_model');
            $this->post_model->m_delete_answer($id);
            redirect('home');
      }
      public function c_delete_comment(){
            $id = $this->input->post('comments_id');
            $this->load->model('admin_model');
            $this->post_model->m_delete_comment($id);
            redirect('home');
      }


      //edit functions

      public function c_edit_question(){
				$this->load->model('admin_model');
				$data = array(
					           'q_text'    =>  $this->input->post('q_text'),
					           'question_id' =>	$this->input->post('question_id')
				             );
				$this->load->view('admin/edit/question', $data);
		  }

		  public function c_update_question(){
			     $data = $this->input->post('updated_q');

				$this->form_validation->set_rules('updated_q', 'updated_q', 'trim|required');
			     if($this->form_validation->run() == FALSE){
              $this->load->view('admin/edit/question');
			     }
			     else {
			          $this->load->model('admin_model');
			          $q_content = $this->input->post('updated_q');
			          $q_id = $this->input->post('q_id');
			          $array= array('q_data' => $q_data, 'q_id' => $q_id);
			          $this->post_model->m_update_question($array);
			             redirect('admin/questions');
		      }
	    }


      public function c_edit_answer(){
				$this->load->model('admin_model');
				$data = array(
					           'a_text'    =>  $this->input->post('a_text'),
					           'answer_id' =>	$this->input->post('answer_id')
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
			          $this->load->model('admin_model');
			          $a_content = $this->input->post('updated_a');
			          $a_id = $this->input->post('a_id');
			          $array= array('a_content' => $a_content, 'a_id' => $a_id);
			          $this->post_model->m_update_answer($array);
			             redirect('admin/asnwers');
		      }
	    }


      public function c_edit_comment(){
				$this->load->model('admin_model');
				$data = array(
					           'c_text'    =>  $this->input->post('c_text'),
					           'comment_id' =>	$this->input->post('comment_id')
				             );
				$this->load->view('admin/edit/comment', $data);
		  }

		  public function c_update_comment(){
			     $data = $this->input->post('updated_c');

				$this->form_validation->set_rules('updated_c', 'updated_c', 'trim|required');
			     if($this->form_validation->run() == FALSE){
              $this->load->view('admin/edit/comment');
			     }
			     else {
			          $this->load->model('admin_model');
			          $c_content = $this->input->post('updated_c');
			          $c_id = $this->input->post('c_id');
			          $array= array('c_content' => $c_content, 'c_id' => $c_id);
			          $this->post_model->m_update_comment($array);
			             redirect('admin/comments');
		      }
	    }

}




 ?>
