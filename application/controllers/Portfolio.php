<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends MY_Controller {

	public function index()
	{

		$data['title']='';
		$this->load->view('portfolio',$data);
		
	}
}
?>