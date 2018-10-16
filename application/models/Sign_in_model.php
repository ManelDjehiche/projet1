<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_in_model extends CI_Model{

    function __construct() {
        

        $this->load->database();
        parent::__construct();

  }


    
   function login($array){
   
    $email=$array['EMAIL_USER'];
    $passwod=$array['PASSWORD_USER'];
    $where= array('EMAIL_USER'=> $email,'PASSWORD_USER'=>$password);
    $this->db->where($where);
    $query=$this->db->get('user');
    $result=$query->result();
    if(empty($result)) return false;
    else return $result; 
   
  }

  function create_user($array){
   
    if($this->db->insert('user',$array)) return true;
    else return false;

  }


  function delete_user($user){
    
    $this->db->where('ID_USER',$user);
    if($this->db->delete('user')) return true;
    else return false;

  }

  function update_user($array){
    
    $this->db->where('ID_USER',$array['ID_USER']);
    if($this->db->update('user',$array)) return true;
    else return false;

  }

  function create_shop($array){
   
    if($this->db->insert('shop',$array)) return true;
    else return false;

  }
   
  function get_shop($id){
   
    $this->db->where('ID_USER',$id);
    $query=$this->db->get('shop');
    $result=$query->result();
    if(!empty($result)) return $result;
    else return 'empty';
    

  }


  function delete_shop($id){
    
    $this->db->where('ID_SHOP',$id);
    if($this->db->delete('shop')) return true;
    else return false;

  }
  

  function generate_id(){
    return uniqid(time().mt_rand(), true);
  }

}

?>