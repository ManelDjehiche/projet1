<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model{

    function __construct() {
        

        $this->load->database();
        parent::__construct();

  }


  function insert_product($array){

    /* prend les attributs de la table product */
    if($this->db->insert('product',$array)) return true;
    else return false;

  }

   function get_products($user){
     
     $this->db->where('ID_USER',$user);
     $query=$this->db->get('product');
     $result=$query->result_array();
     return $result;

   }


   function get_one_product($array){

    /* prend id user et element cherché */
    $this->db->where($array);
    $query=$this->db->get('product');
    $result=$query->result_array();
    return $result;

  }

  function update_product($array){
    
    $this->where('ID_PRODUCT',$array['ID_PRODUCT']);
    if($this->db->update('product',$array)) return true;
    else return false;

  }

  function delete_product($array){
   
    $this->db->where($array);
    if($this->db->delete('product')) return true;
    else return false;

  }

  function insert_digital_product($array){

    /* prend les attributs de la table product */
    if($this->db->insert('digital_product',$array)) return true;
    else return false;

  }

  function insert_service_product($array){

    /* prend les attributs de la table product */
    if($this->db->insert('service_product',$array)) return true;
    else return false;

  }

  function insert_subscription_product($array){

    /* prend les attributs de la table product */
    if($this->db->insert('subscription_product',$array)) return true;
    else return false;

  }

  function insert_physical_product($array){

    /* prend les attributs de la table product */
    if($this->db->insert('physical_product',$array)) return true;
    else return false;

  }

  function generate_id(){
    return uniqid(time().mt_rand(), true);
  }


}

?>