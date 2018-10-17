<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_in extends MY_Controller {

    public function __construct()
    {
       parent::__construct();
       
       $this->load->library('session');
       $this->load->model('sign_in_model');
       
    }


    public function login(){

        $email=$this->input->post('EMAIL_USER');
        $password=md5($this->input->post('PASSWORD_USER'));
        $submit=$this->input->post('SUBMIT');

        if(isset($submit)){

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
            redirect(base_ur('dashboard'));
        }

        }


    }


    public function sign_in(){
/* les donner de user*/
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

        $submit=$this->input->post('SUBMIT');

        if(isset($submit)){

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
            echo 'compte crrer';
        }
        
        else{
           echo 'compte non crrer';
        }

        }


    }


    function update(){

        $id_user=$this->session->userdata('user');
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

        $submit=$this->input->post('SUBMIT');
        if(isset($submit)){

        $array=array(
            
            'ID_USER'=> $id_user,
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

        $result=$this->sign_in_model->update_user($array);
        if($result){
            echo 'compte modifier';
        }
        
        else{
           echo 'compte non modifier';
        }

        }




    }



    function delete(){
     
        $id = $this->uri->segment(3);
        $result=$this->sign_in_model->delete_user($id_user);
        if($result) redirect(base_ur(''));
        else echo 'compte non suprrimer';

    }
}
?>