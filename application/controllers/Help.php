<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Help extends MY_Controller {

    public function __construct()
    {
       parent::__construct();

       $this->load->library('session');
       $this->load->model('help_model');
       
    }


	public function index()
	{

		
		
	}
}
?>