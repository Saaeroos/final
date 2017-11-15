<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ngo_c extends CI_Controller{


    public function logout(){
  					$this->session->sess_destroy();
  					redirect(base_url());
  		}

    //register
		public function ngo_register(){

			$data= array('success_msg' => $this->session->flashdata('success'));

			$this->load->view('users/ngo_registration');

		}

		public function	ngo_registerprocess(){
		$this->form_validation->set_rules('form_name',            'Name',                      'trim|required');
		$this->form_validation->set_rules('form_contact_person',   'Contact person',           'trim|required');
    $this->form_validation->set_rules('form_contact_email',    'Email',                    'trim|required|valid_email|is_unique[ngos.contact_email]');
    $this->form_validation->set_rules('form_fields_activity',  'Fields of activity', 'trim|required');
		$this->form_validation->set_rules('form_website',          'Website',                   'trim');
    $this->form_validation->set_rules('form_username',         'Username',                  'required|trim|min_length[5]');
    $this->form_validation->set_rules('form_password',         'Password',                  'required|trim|min_length[7]');
		$this->form_validation->set_rules('form_con_password',     'password Confirmation', 'trim|required|matches[form_password]');
		// $this->form_validation->set_rules('form_email',       'Email', 'required|valid_email|is_unique[users.email]');


        if ($this->form_validation->run() == FALSE)
        {
							$this->session->set_flashdata('error', 'invalid data');
							$this->load->view('users/ngo_registration');


        }
        else
        {

    //       $post = $this->input->post();
    //   $this->load->model('ngo_model');
    // //this has to be the same name  as the model $this->User->create
    //   $this->ngo_model->add_ngo($post['form_name'], $post['form_contact_person'], $post['form_contact_email'], $post['form_fields_activity'], $post['form_website'], $post['form_username'], $post['form_password'],$post['form_con_password']);
    //   $this->session->set_flashdata("flash", "You have registered, please login.");
    //   redirect('users/ngo_registration');
    // }

			$this->load->model('ngo_model');
			$data = array(
				'c_name'              => $this->input->post('form_name',true),
				'c_contact_person'    => $this->input->post('form_contact_person',true),
				'c_contact_email'    => $this->input->post('form_contact_email',true),
        'c_fields_activity'   => $this->input->post('form_fields_activity',true),
				'c_website'           => $this->input->post('form_website',true),
        'c_username'          => $this->input->post('form_username',true),
        'c_password'          => $this->input->post('form_password',true)
        // 'c_email'          => $this->input->post('form_password',true),
        );

			$this->session->set_flashdata('success', 'Users successfully added. Thanks');
			$this->ngo_model->add_ngo( $data );
			redirect(base_url('ngo/registration'));
        }
	}




    public function add_question(){
      $this->form_validation->set_rules('title', 'title', 'trim|required');
			$this->form_validation->set_rules('q_content', 'description', 'trim|required');
      $this->form_validation->set_rules('when_needed', 'when needed', 'trim|required');

      if($this->form_validation->run() == FALSE){
        $this->load->view('/users/add_question');
      }
      else{
        $this->load->model('Ngo_model');
				$cUser = $this->session->userdata('currentUser');

        $question = array(
          'c_title' => $this->input->post('title'),
        'c_content' => $this->input->post('q_content'),
          'c_when_needed' =>$this->input->post('when_needed'),
          'c_attachment' =>$this->input->post('attachment'),
          'cUser_id' => $cUser['id']
        );

        $this->Ngo_model->m_add_question($question);
        $this->session->set_flashdata('success', 'Thank you for adding your question.');
        redirect('/');
      }
    }


    //14-11-2017 mohamed
    public function c_add_comment_ngo(){
        $comment_text = $this->input->post('comment_text');
        $a_id = $this->input->post('a_id');
        $ngo_user = $this->session->userdata('currentuser');
        $ngo_id = $ngo_user['id'];
        $this->load->model('main-model');
        $data = array( 'c_comment_text' =>$comment_text,
                       'a_id' =>$a_id,
                       'ngo_id' =>$ngo_id);

        $this->main_model->m_add_comment($data);
        redirect("/home");
        }


        //15-11-2017 mohamed
            public function ngo_edit_profile(){
              $this->load->model('ngo_model');
              $cUser = $this->session->userdata('currentUser');
              $ngo_id = $cUser['id'];
              $result = $this->eng_model->select_one_ngo($ngo_id);
              $data = array(
                    'result'    => $result,
                    'cUser'		=> $cUser
                      );
              $this->load->view('ngos/view_ngo', $data);
            }

            public function c_update_ngo(){
              $data = array(
        				'c_name'              => $this->input->post('form_name',true),
        				'c_contact_person'    => $this->input->post('form_contact_person',true),
        				'c_contact_email'    => $this->input->post('form_contact_email',true),
                'c_fields_activity'   => $this->input->post('form_fields_activity',true),
        				'c_website'           => $this->input->post('form_website',true),
                'c_username'          => $this->input->post('form_username',true),
                'c_password'          => $this->input->post('form_password',true)
                );

                $this->session->set_flashdata('success', 'Data successfully updated');
                $this->Eng_model->m_update_ngo( $data );
                redirect(base_url('register'));
                  }
            }







 ?>
