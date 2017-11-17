<?php
// uncomment this to create 1 admin user password
// print password_hash('test12345', PASSWORD_DEFAULT);
// then add the manually in the database
// exit;
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_c extends CI_Controller{

  // process login for admin
  public function login(){
    $this->form_validation->set_rules('username', "Username", 'required');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[7]');

      if ($this->form_validation->run() == FALSE) {
        $this->load->view('admin/login');
      }
      else{

        $username= $this->input->post('username',true);
        $password= $this->input->post('password',true);
        $this->load->model('User');
        $result = $this->User->loginAdmin($username, $password);

              if(empty($result)){
                $this->session->set_flashdata('error', 'Incorrect username or password.');
                 redirect('/admin/login');
              }
              else {
                $this->session->set_userdata('currentUser', $result);
                redirect('/admin/ngos');
              }
      }

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

  // public function c_list_of_questions(){
  //   //$this->load->model('admin_model');
  //   //$result = $this->admin_model->m_list_of_questions();
  //   //$data = array('data' => $result);
  //    $data = array();
  //   $this->load->view('admin/questions/index', $data);
  // }

  public function c_list_of_ngo(){
    $this->check_admin_logged_in();

    $this->load->model('admin_model');
    $result = $this->admin_model->m_list_of_ngo();

    $data = array('data' => $result);
    $this->load->view('admin/ngos/index', $data);
  }

  public function c_list_of_eng(){
    $this->check_admin_logged_in();
    $this->load->model('admin_model');
    $result = $this->admin_model->m_list_of_eng();
    $data = array('data' => $result);
    $this->load->view('admin/engineers/index', $data);
  }

  public function c_list_of_questions(){
    $this->check_admin_logged_in();
    $this->load->model('admin_model');
    $result = $this->admin_model->m_list_of_questions();
    $data = array('data' => $result);
  $this->load->view('admin/questions/index', $data);
 }

  public function c_list_of_answers(){
    $this->check_admin_logged_in();
    $this->load->model('admin_model');
    $result = $this->admin_model->m_list_of_answers();
    $data = array('data' => $result);
    $this->load->view('admin/answers/a_list', $data);
  }

  public function c_list_of_comments(){
    $this->check_admin_logged_in();
    $this->load->model('admin_model');
    $result = $this->admin_model->m_list_of_comments();
    $data = array('data' => $result);
    $this->load->view('admin/comments/c_list', $data);
  }
//changed function name for ngo list

  public function c_list_of_ngo_newforms(){
    $this->check_admin_logged_in();
    $this->load->model('admin_model');
    $result = $this->admin_model->m_list_of_ngo_newforms();
    $data = array('data' => $result);
    $this->load->view('admin/ngos/pending_ngo_list', $data);
  }

  public function c_list_of_eng_newforms(){
    $this->check_admin_logged_in();
    $this->load->model('admin_model');
    $result = $this->admin_model->m_list_of_eng_newforms();
    $data = array('data' => $result);
    $this->load->view('admin/engineers/pending_eng_list', $data);
  }

  //need some work
  public function c_platform_all_question(){
    $this->check_admin_logged_in();
    $this->load->model('admin_model');
    $result = $this->admin_model->m_platform_question();
    $data = array('data' => $result);
    $this->load->view('list_of_eng_forms', $data);
  }

  public function c_platform_detailed_q(){
    $this->check_admin_logged_in();
    $this->load->model('admin_model');
    $result = $this->admin_model->m_platform_detailed_q();
    $data = array('data' => $result);
    $this->load->view('list_of_eng_forms', $data);
  }


  //delete functions:

      public function c_delete_ngo($id){
        $this->check_admin_logged_in();
             // get the $id from the route url, post is not used
			       // $id = $this->input->post('ngo_id');
			       // $this->load->model('Admin_model');
			       // $this->post_model->m_delete_ngo($id);
		         redirect('/admin/ngos');
      }

      public function c_delete_eng(){
        $this->check_admin_logged_in();
  			   $id = $this->input->post('eng_id');
  			      $this->load->model('admin_model');
  			         $this->admin_model->m_delete_eng($id);
  			         redirect('/admin/engineers');
  		}

      public function c_delete_question(){
        $this->check_admin_logged_in();
    			  $id = $this->input->post('q_id');
    			  $this->load->model('admin_model');
    			  $this->admin_model->m_delete_question($id);
    			  redirect('/admin/questions');
    	}
      public function c_delete_answer(){
        $this->check_admin_logged_in();
            $id = $this->input->post('a_id');
            $this->load->model('admin_model');
            $this->admin_model->m_delete_answer($id);
            redirect('/admin/answers');
      }
      public function c_delete_comment(){
        $this->check_admin_logged_in();
            $id = $this->input->post('c_id');
            $this->load->model('admin_model');
            $this->admin_model->m_delete_comment($id);
            redirect('/admin/comments');
      }


      //edit functions


      public function c_edit_question(){
        $this->check_admin_logged_in();
				// $this->load->model('admin_model');
				$data = array(
					           'q_text'    =>  $this->input->post('q_text'),
					           'q_id' =>	$this->input->post('q_id')
				             );
				$this->load->view('admin/edit/question', $data);
		  }

		  public function c_update_question(){
        $this->check_admin_logged_in();
			     // $data = $this->input->post('updated_q');

				$this->form_validation->set_rules('updated_q', 'Updated question', 'trim|required');
			     if($this->form_validation->run() == FALSE){
              $this->load->view('admin/edit/question');
			     }
			     else {
			          $this->load->model('admin_model');
			          $q_content = $this->input->post('updated_q');
			          $q_id = $this->input->post('q_id');
			          $array= array('q_content' => $q_content, 'q_id' => $q_id);
			          $this->admin_model->m_update_question($array);
			             redirect('admin/questions');
		      }
	    }


      public function c_edit_answer(){
        $this->check_admin_logged_in();
				// $this->load->model('Admin_model');
				$data = array(
					           'a_text'    =>  $this->input->post('a_text'),
					           'answer_id' =>	$this->input->post('a_id')
				             );
				$this->load->view('admin/edit/answer', $data);
		  }

		  public function c_update_answer(){
        $this->check_admin_logged_in();
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
			          $this->admin_model->m_update_answer($array);
			             redirect('admin/asnwers');
		      }
	    }


      public function c_edit_comment(){
        $this->check_admin_logged_in();
				// $this->load->model('Admin_model');
				$data = array(
					           'c_text'    =>  $this->input->post('c_text'),
					           'comment_id' =>	$this->input->post('comment_id')
				             );
				$this->load->view('admin/edit/comment', $data);
		  }

		  public function c_update_comment(){
        $this->check_admin_logged_in();
			     $data = $this->input->post('updated_c');

				$this->form_validation->set_rules('updated_c', 'Updated comment', 'trim|required');
			     if($this->form_validation->run() == FALSE){
              $this->load->view('admin/edit/comment');
			     }
			     else {
			          $this->load->model('admin_model');
			          $c_content = $this->input->post('updated_c');
			          $c_id = $this->input->post('c_id');
			          $array= array('c_content' => $c_content, 'c_id' => $c_id);
			          $this->admin_model->m_update_comment($array);
			             redirect('admin/comments');
		      }
	    }

      public function c_approve_ngo(){
        $this->check_admin_logged_in();
        $this->load->model('admin_model');
        $this->load->model('main_model');

        $id = $this->input->post('ngo_id');
        $this->admin_model->m_approve_ngo($id);

        $ngo = $this->main_model->m_ngo_details($id);

        // send email to ngo
        $this->email->from('engineers@ewbnl.org', 'Engineers Without Borders');
        $this->email->to($ngo['contact_email']);
        $this->email->subject('Account approved');
        $this->email->message('Hello '.$ngo['contact_person'].',

Thank you for signing up for EWB platform. Please feel free to ask us any questions you may have at engineers@ewbnl.org

Please login at: '.base_url().'user/login

Best of luck,

The EWB team');

        $result = $this->email->send();

        redirect('admin/pending/ngos');
      }

      public function c_approve_eng(){
        $this->check_admin_logged_in();
        $this->load->model('admin_model');
        $this->load->model('main_model');

        $id = $this->input->post('eng_id');
        $this->admin_model->m_approve_eng($id);

        $eng = $this->main_model->m_eng_details($id);

        // send email to ngo
        $this->email->from('engineers@ewbnl.org', 'Engineers Without Borders');
        $this->email->to($eng['email']);
        $this->email->subject('Account approved');
        $this->email->message('Hello '.$eng['name'].',

Thank you for signing up for EWB platform. Please feel free to ask us any questions you may have at engineers@ewbnl.org

Please login at: '.base_url().'user/login

Best of luck,

The EWB team');

        $result = $this->email->send();

        redirect('admin/pending/engineer');
      }


      public function c_eng_details(){
        $this->check_admin_logged_in();
        $this->load->model('admin_model');
        $eng_id = $this->input->post('eng_id');
        $result = $this->admin_model->m_eng_details($eng_id);
        $data = array('data' =>$result);
        $this->load->view('admin/engineers/view_detail_eng', $data);
      }

      public function c_ngo_details(){
        $this->check_admin_logged_in();
        $this->load->model('admin_model');
        $ngo_id = $this->input->post('ngo_id');
        $result = $this->admin_model->m_ngo_details($ngo_id);
        $data = array('data' =>$result);
        $this->load->view('admin/ngos/view_detail_ngo', $data);
      }

      private function check_admin_logged_in() {
        if(empty($this->session->currentUser && $this->session->currentUser['role'] == 'admin')) {
          $this->session->set_flashdata('error', 'Not allowed, please sign in as admin first.');
          redirect('/admin/login');
        }
      }
}




 ?>
