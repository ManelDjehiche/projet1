<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends MY_Controller {

    public function __construct()
    {
       parent::__construct();
       $this->load->library('database');
       $this->load->library('session');
       $this->load->model('account_model');
       
    }

	public function index()
	{

	}
}
?>