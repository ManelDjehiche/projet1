<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Payment extends CI_Controller{

    public function __construct()
    {
       parent::__construct();
       $this->load->library('stripe');
       
    }

    function index(){
        $this->load->view("payment");
       
        
         
    }

    function checkout(){
        $user['name']=$this->input->post('owner');
        $user['cvc']=$this->input->post('cvv');
        $user['number']=$this->input->post('cardNum');
        $user['exp_month']=$this->input->post('monthExp');
        $user['exp_year']=$this->input->post('yearExp');
        $token = $this->stripe->create_token($user);

        
        
        $data['token'] = $token;
        $data['amount'] = 100;
        $data['description']="k.quitami@gmail.com";

        $status = $this->stripe->charge($data);
        echo $status;
        
    }

    

    

    
}