<?php


class Index extends CI_Controller{

	public function __construct()
    {
       parent::__construct();
       
    }
    public function index(){
		$template['page']="index";
        $template['title']="index";
		$template['data']="";
		// $this->load->view("templates/header_menu");
        $this->load->view("template",$template);
	}



}
?>