<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_in extends MY_Controller {

    public function __construct()
    {
       parent::__construct();
       
       $this->load->library('session');
       $this->load->model('sign_in_model');
       
    }


	public function index()
	{

		
	}
}
?>