<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {

	public function index()
	{

		$data['title']='';
		$this->load->view('contact',$data);
		
	}
}
?>