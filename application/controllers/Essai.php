<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Collection extends MY_Controller {


    public function __construct()
    {
       parent::__construct();
       $this->load->library('session');
       $this->load->model('collection_model');
       $this->load->model('order_model');
       $this->load->model('sign_in_model');
       $this->load->model('product_model');
       
    }


	public function index()
	{
    
		
	}
}
?>