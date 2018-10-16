<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {


    public function __construct()
    {
       parent::__construct();
    
       $this->load->library('session');
       $this->load->model('dashboard_model');
       
    }

	public function index()
	{
    
    $data=$this->session->userdata('id_user');
    $template['title']='Dachboard';
    $template['view']='Dachboard/dachboard_view';
    $template['data']=$data;
	$this->load->view('Template',$template);
		
	}
}
?>