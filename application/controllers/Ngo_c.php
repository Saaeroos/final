<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ngo_c extends CI_Controller{


    public function logout(){
  					$this->session->sess_destroy();
  					redirect(base_url());
  		}

  //login







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
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
				$this->form_validation->set_rules('description', 'Description', 'trim|required');
				$this->form_validation->set_rules('price', 'Price', 'trim|required');
				$this->form_validation->set_rules('contact_details', 'Contact_details', 'trim|required');
				$this->form_validation->set_rules('location', 'Location', 'trim|required');
        if($this->form_validation->run() == FALSE){
							$data = array(
											'cUser' => $this->session->userdata('currentUser')
										);
              $this->load->view('/users/create', $data);

							// redirect(base_url('create'));

        }
        else{

					$cUser = $this->session->userdata('currentUser');
					$cUser_id = $cUser['id'];
          $postValues = array(
                'c_title' 						=> $this->input->post('title',true),
                'c_description' 			=> $this->input->post('description',true),
                'c_price'						 	=> $this->input->post('price',true),
                'c_contact_details'		=> $this->input->post('contact_details',true),
								'c_location' 					=> $this->input->post('location',true),
								'cUser_id' 						=> $cUser_id
              		);
          $this->load->model('post_model');
          $this->post_model->insert_list($postValues);
          redirect(base_url());
        }

    }
}




 ?>
