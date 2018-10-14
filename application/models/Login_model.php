<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{

    function __construct() {
        

        $this->load->database();
        parent::__construct();

  }




   function login($array){  
    
    $username=$array['username'];
    $password=$array['password'];
    $where=array('USERNAME' => $username, 'PASSWORD' => $password);
    $this->db->where($where);
    $query=$this->db->get('user');
    $result=$query->result();
    if(!empty($result)) return true;
    else return false;
   }





}

?>