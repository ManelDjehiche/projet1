<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends MY_Controller{


  public function __construct()
  {
     parent::__construct();
     
     $this->load->library('session');
     $this->load->model('sign_in_model');
     
  }
  public function index(){
        $template['page']="user/login.php";
        $template['title']="login";
        $template['data']="";
        $this->load->view("template",$template);
        $submit = $this->input->post('submit');
        if(isset($submit)){
          // $data['EMAIL_USER']=$this->input->post('EMAIL_USER');
          // $data['PASSWORD_USER']=$this->input->post('PASSWORD_USER');
          // print_r($data);
          $this->login();
        }
  }
  public function login(){

    $email=$this->input->post('EMAIL_USER');
    $password=md5($this->input->post('PASSWORD_USER'));

    $array=array('EMAIL_USER'=> $email,'PASSWORD_USER'=> $password);
    $result=$this->sign_in_model->login($array);
    if(empty($result)){
        echo 'c pas toi!!!';
    }
    else{
        echo 'ouii c toi';
        $ok=array('Logged_in'=> true,'user'=> $result);
        $this->session->set_userdata($ok);
        echo "<pre>";
        print_r($this->session->all_userdata());
        echo "</pre>";
        redirect(base_url('Profile'));
    }
    
}




}



?>