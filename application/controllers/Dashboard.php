<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {


    public function __construct()
    {
       parent::__construct();
       $this->load->library('database');
       $this->load->library('session');
       $this->load->model('dashboard_model');
       
    }

	public function index()
	{

		$data['title']='';
		$this->load->view('about',$data);
		
	}
}
?>