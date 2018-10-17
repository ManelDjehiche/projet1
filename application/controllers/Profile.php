<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends MY_Controller {

    public function __construct()
    {
       parent::__construct();
     
       $this->load->library('session');
       $this->load->model('sign_in_model');
       
    }


	public function index()
	{
        $id_user=$this->session->userdata('user')['0']->ID_USER;
        echo $id_user;
        $user = $this->sign_in_model->get_user(array('ID_USER'=>$id_user));
        $data['EMAIL_USER']=$user['EMAIL_USER'];
        $data['COUNTRY_USER']=$user['COUNTRY_USER'];
        $data['FIRST_NAME_USER']=$user['FIRST_NAME_USER'];
        $data['LAST_NAME_USER']=$user['LAST_NAME_USER'];
        $data['ADDRESS_USER']=$user['ADDRESS_USER'];
        $data['ZIP_CODE_USER']=$user['ZIP_CODE_USER'];
        $data['CITY_USER']=$user['CITY_USER'];
        $data['PHONE_USER']=$user['PHONE_USER'];
        $template['page']='user/profile';
        // $data['EMAIL_USER']="kaous.nadir.hatem@gmail.com";
        // $data['COUNTRY_USER']="France";
        // $data['FIRST_NAME_USER']="nadir";
        // $data['LAST_NAME_USER']="kaous";
        // $data['ADDRESS_USER']="bp 40";
        // $data['ZIP_CODE_USER']="18000";
        // $data['CITY_USER']="jijel";
        // $data['PHONE_USER']="034495031";
        $template['title']='Profile';
        $template['data']=$data;
        $this->load->view("template",$template);
        $submit = $this->input->post('submit');
        
        if(isset($submit)){
            // $data['EMAIL_USER']=$this->input->post('EMAIL_USER');
            // $data['COUNTRY_USER']=$this->input->post('COUNTRY_USER');
            // $data['FIRST_NAME_USER']=$this->input->post('FIRST_NAME_USER');
            // $data['LAST_NAME_USER']=$this->input->post('LAST_NAME_USER');
            // $data['ADDRESS_USER']=$this->input->post('ADDRESS_USER');
            // $data['ZIP_CODE_USER']=$this->input->post('ZIP_CODE_USER');
            // $data['CITY_USER']=$this->input->post('CITY_USER');
            // $data['PHONE_USER']=$this->input->post('PHONE_USER');
            $this->update();
            
        }
    }
        
        function update(){

            $id_user=$this->session->userdata('user')['0']->ID_USER;
            // $password=md5($this->input->post('PASSWORD_USER'));
            $first_name=$this->input->post('FIRST_NAME_USER');
            $last_name=$this->input->post('LAST_NAME_USER');
            // $language=$this->input->post('LANGUAGE_USER');
            $country=$this->input->post('COUNTRY_USER');
            // $currency=$this->input->post('CURRENCY_USER');
            $adress=$this->input->post('ADDRESS_USER');
            $zip_code=$this->input->post('ZIP_CODE_USER');
            $city=$this->input->post('CITY_USER');
            $phone=$this->input->post('PHONE_USER');
            
            $submit=$this->input->post('SUBMIT');
           
    
            $array=array(
                
                'ID_USER'=> $id_user,
                'COUNTRY_USER'=> $country,
                'FIRST_NAME_USER' => $first_name,
                'LAST_NAME_USER'=> $last_name,
                'ADDRESS_USER'=> $adress,
                'ZIP_CODE_USER'=> $zip_code,
                'CITY_USER'=> $city,
                'PHONE_USER'=> $phone
            
            );
    
            $result=$this->sign_in_model->update_user($array);
            if($result){
                echo 'compte modifier';
            }
            
            else{
               echo 'compte non modifier';
            }
    
    
    
        }
        
        

        

	
		
	
}
?>