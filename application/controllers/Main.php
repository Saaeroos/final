<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {

	public function get_all_posts(){
			$this->load->model('post_model');
			$result = $this->post_model->all_content();
			$current_user = $this->session->userdata('currentUser');
			$data = array(
				'all_posts_database' => $result,
				'cUser' => $current_user
			);

			$this->load->view('/users/mainpage', $data);
}
