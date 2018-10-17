<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MY_Controller {

    public function __construct()
    {
       parent::__construct();
     
    //    $this->load->library('session');
    //    $this->load->model('profile_model');
       
    }


	public function index()
	{
        $template['page']="user/profile.php";
        $data['EMAIL_USER']="kaous.nadir.hatem@gmail.com";
        $data['COUNTRY_USER']="France";
        $data['FIRST_NAME_USER']="nadir";
        $data['LAST_NAME_USER']="kaous";
        $data['ADDRESS_USER']="bp 40";
        $data['ZIP_CODE_USER']="18000";
        $data['CITY_USER']="jijel";
        $data['PHONE_USER']="034495031";
        $template['data']=$data;
        $this->load->view("template",$template);
        $submit = $this->input->post('submit');
        if(!isset($submit)){
            $data['EMAIL_USER']=$this->input->post('EMAIL_USER');
            $data['COUNTRY_USER']=$this->input->post('COUNTRY_USER');
            $data['FIRST_NAME_USER']=$this->input->post('FIRST_NAME_USER');
            $data['LAST_NAME_USER']=$this->input->post('LAST_NAME_USER');
            $data['ADDRESS_USER']=$this->input->post('ADDRESS_USER');
            $data['ZIP_CODE_USER']=$this->input->post('ZIP_CODE_USER');
            $data['CITY_USER']=$this->input->post('CITY_USER');
            $data['PHONE_USER']=$this->input->post('PHONE_USER');
        }
        
        
        

        

	
		
	}
}
?>