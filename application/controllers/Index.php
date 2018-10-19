<?php


class Index extends CI_Controller{

	public function __construct()
    {
       parent::__construct();
       
    }
    public function index(){
		$this->load->view("templates/header");
		$this->load->view("templates/header_menu");
		$this->load->view("index.php");
		$this->load->view("templates/footer");
	}



}
?>