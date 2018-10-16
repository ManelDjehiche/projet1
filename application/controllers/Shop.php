<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends MY_Controller {

    public function __construct()
    {
       parent::__construct();
      
       $this->load->library('session');
       $this->load->model('sign_in_model');
       
    }


	public function index()
	{
      $user=$this->session->userdata('user');
      $result=$this->sign_in_model->get_shop($user);
      if($result == 'empty') echo "shop vide";
      else 
      {
          $template['title']='Shop list';
          $template['view']='Shop/shop_view';
          $template['data']=$result;
          $this->load->view('template',$template);
      }
		
	}
}
?>