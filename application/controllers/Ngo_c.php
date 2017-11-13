<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ngo_c extends CI_Controller{


    public function logout(){
  					$this->session->sess_destroy();
  					redirect(base_url());
  		}

  //login




  public function user_login(){
			$data= array('error_msg' => $this->session->flashdata('error_msg'));

			$this->load->view('users/user_login', $data);
		}

		public function loginprocess(){
			$this->form_validation->set_rules('email', "Email", 'required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[7]');

			if ($this->form_validation->run() == FALSE) {

				// $this->session->set_flashdata('faild', 'invalid data');
				$this->load->view('users/login');
			}
			else{
				$email= $this->input->post('email',true);
				$password= $this->input->post('password',true);
				$this->load->model('User');
				$result = $this->User->loginByEmailPass($email, $password);


							if($result){
											$this->session->set_userdata('currentUser', $result);
											redirect(base_url('mainpage'));
							}
							else{
											$this->session->set_flashdata('error_msg', 'invalid data');
											redirect(base_url('login'));
							}
			}

		}


    //register
		public function ngo_register(){

			$data= array('success_msg' => $this->session->flashdata('success'));

			$this->load->view('users/ngo_registration');

		}

		public function	ngo_registerprocess(){
		$this->form_validation->set_rules('form_name',            'Name',                      'trim|required|alpha');
		$this->form_validation->set_rules('form_contact_person',   'Contact_person',           'trim|required|alpha');
    $this->form_validation->set_rules('form_contact_email',    'Email',                    'trim|required|valid_email|is_unique[ngos.email]');
    $this->form_validation->set_rules('form_fields_activity',  'Fields_activity',          '|trim|required|alpha');
		$this->form_validation->set_rules('form_website',          'Website',                   'trim');
    $this->form_validation->set_rules('form_username',         'Username',                  'required|trim|min_length[5]');
    $this->form_validation->set_rules('form_password',         'Password',                  'required|trim|min_length[7]');
		$this->form_validation->set_rules('form_con_password',     'Con_password Confirmation', 'trim|required|matches[form_password]');
		// $this->form_validation->set_rules('form_email',       'Email', 'required|valid_email|is_unique[users.email]');


        if ($this->form_validation->run() == FALSE)
        {
							$this->session->set_flashdata('error', 'invalid data');
							$this->load->view('users/ngo_registration');


        }
        else
        {

			$this->load->model('Ngo_model');
			$data = array(
				'c_name'              => $this->input->post('form_name',true),
				'c_contact_person'    => $this->input->post('form_contact_person',true),
				'c_contacnt_email'    => $this->input->post('form_contacnt_email',true),
        'c_fields_activity'   => $this->input->post('form_fields_activity',true),
				'c_website'           => $this->input->post('form_website',true),
        'c_username'          => $this->input->post('form_username',true),
        'c_password'          => $this->input->post('form_password',true)
        // 'c_email'          => $this->input->post('form_password',true),
        );

			$this->session->set_flashdata('success', 'Users successfully added. Thanks');
			$this->User->add_user( $data );
			redirect(base_url('users/ngo_registration'));
        }
	}




    public function add_list(){
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
