<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders_model extends CI_Model{

    function __construct() {
        

        $this->load->database();
        parent::__construct();

  }

  function insert_orders($array){

    /* prend les attribut de la table order */
    if($this->db->insert('orders',$array)) return true;
    else return false;

  }

   function get_orders($user){
    
     $this->db->select('*');
     $this->db->from('orders');
     $this->db->join('product',' orders.ID_PRODUCT = product.ID_PRODUCT ');
     $this->db->where('ID_USER',$user);
     $query=$this->db->get();
     $result=$query->result();
     return $result;
   }


   function get_one_orders($id){

    $this->db->where('ID_ORDER',$id);
    $query=$this->db->get('orders');
    $result=$query->result();
    return $result;

  }

  function update_orders($array){
  
    $this->db->where('ID_ORDER',$array['ID_ORDER']);
    if($this->db->update('orders',$array)) return true;
    else return false;

  }

  function delete_orders($id){
   
    $this->db->where($id);
    if($this->db->delete('orders')) return true;
    else return false;

  }

 function generate_id(){
   return md5(uniqid(time().mt_rand(), true));
 }
 
}

?>