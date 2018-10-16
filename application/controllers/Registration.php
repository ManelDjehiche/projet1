<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends MY_Controller {

    public function __construct()
    {
       parent::__construct();
       
    }


	public function index(){

        $template['page']="user/registration.php";
        $this->load->view("template",$template);

        $data['EMAIL_USER']=$this->input->post('EMAIL_USER');
        $data['PASSWORD_USER']=$this->input->post('PASSWORD_USER');
        $data['COUNTRY_USER']=$this->input->post('COUNTRY_USER');
        $data['CURRENCY_USER']=$this->input->post('CURRENCY_USER');
        $data['FIRST_USER']=$this->input->post('FIRST_USER');
        $data['LAST_USER']=$this->input->post('LAST_USER');
        $data['ADDRESS_USER']=$this->input->post('ADDRESS_USER');
        $data['ZIP_CODE_USER']=$this->input->post('ZIP_CODE_USER');
        $data['CITY_USER']=$this->input->post('CITY_USER');
        $data['PHONE_USER']=$this->input->post('PHONE_USER');

        $submit = $this->input->post('submit');
        if(isset($submit)){
            print_r($data);

        }
	}
}
?>