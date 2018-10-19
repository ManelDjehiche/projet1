<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends MY_Controller {

    public function __construct()
    {
       parent::__construct();
       $this->load->library('session');
       $this->load->model('sign_in_model');
       
    }


	public function index(){

        $template['page']="user/registration.php";
        $template['data']="";
        $template['title']="";

        $this->load->view("template",$template);

        $submit = $this->input->post('submit');
        if(isset($submit)){

            $this->sign_in();
        }

    }
    
    public function sign_in(){

                $id_user=$this->sign_in_model->generate_id();
                $email=$this->input->post('EMAIL_USER');
                $password=md5($this->input->post('PASSWORD_USER'));
                $first_name=$this->input->post('FIRST_NAME_USER');
                $last_name=$this->input->post('LAST_NAME_USER');
                $language=$this->input->post('LANGUAGE_USER');
                $country=$this->input->post('COUNTRY_USER');
                $currency=$this->input->post('CURRENCY_USER');
                $adress=$this->input->post('ADDRESS_USER');
                $zip_code=$this->input->post('ZIP_CODE_USER');
                $city=$this->input->post('CITY_USER');
                $phone=$this->input->post('PHONE_USER');
        
                $array=array(
        
                    'ID_USER'=> $id_user,
                    'EMAIL_USER'=> $email,
                    'PASSWORD_USER'=> $password,
                    'LANGUAGE_USER'=> $language,
                    'COUNTRY_USER'=> $country,
                    'CURRENCY_USER'=> $currency,
                    'FIRST_NAME_USER' => $first_name,
                    'LAST_NAME_USER'=> $last_name,
                    'ADDRESS_USER'=> $adress,
                    'ZIP_CODE_USER'=> $zip_code,
                    'CITY_USER'=> $city,
                    'PHONE_USER'=> $phone
                
                );
        
                $result=$this->sign_in_model->create_user($array);
                if($result){
                    if($this->sign_in_model->send_mail($email)){
                        echo "email is sent";
                    }else{
                        echo "email is not sent";
                    }
                }
                
                else{
                   echo 'compte non crrer';
                }
        
                }
        public function confirm_mail($key){
            $result = $this->sign_in_model->verify_email($key);
            
        }

    
        
        
            
}
?>