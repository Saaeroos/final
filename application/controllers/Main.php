<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller{

  public function homepage(){

    $this->load->view('homepage');
  }
  public function question_detail(){
    $this->load->view('question_detail');
  }
}

