<?php

class Login extends CI_Controller{


    public function logIn(){
        $useremail=$this->input->post('useremail');
        $userpassword=md5($this->input->post('userpassword'));
        $this->load->model("HandymanModel");
  
        if($useremail && $userpassword && $this->HandymanModel->logInUser($useremail,$userpassword)){
          $data['msg']="Successfully Logged in!";
          $data['title']="Logged In";
          $this->load->view("header",$data);
          $this->load->view("confirmation",$data);
          $this->load->view("footer",$data);
        } else{
          $data['title']="Sign up / Log in";
          $this->load->view("header",$data);
          $this->load->view("page3", $data);
          $this->load->view("footer",$data);
        }
      }



}



?>