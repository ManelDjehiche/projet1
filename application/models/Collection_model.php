<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Collection_model extends CI_Model{

    function __construct() {
        

        $this->load->database();
        parent::__construct();

  }

  
  function insert_collection($array){
 
    /* prend les attribut de la table collection*/
    if($this->db->insert('collection',$array)) return true;
    else return false;

  }

   function get_collection($array){
     
     $this->db->where($array);
     $query=$this->db->get('collection');
     $result=$query->result_array();
     return $result;
   }


   function get_one_collection($array){
    /* prend id_user et id collection */
    $this->db->where($array);
    $query=$this->db->get('collection');
    $result=$query->result_array();
    return $result;

  }


  function get_products_collection($user){
    
    $this->db->select('*');
    $this->db->from('collection');
    $this->db->join('product','product.ID_COLLECTION = collection.ID_COLLECTION');
    $this->db->where('collection.ID_USER',$user);
    $query=$this->db->get();
    $result=$query->result_array();
    return $result;

  }


  function update_collection($array){
  
    /* prend les attribut a modeifier */
    $this->db->where($array);
    if($this->db->update('collection',$array)) return true;
    else return false;

  }

  function delete_collection($array){
   
    /* prend la condition de la suppression */
    $this->db->where($array);
    if($this->db->delete('collection')) return true;
    else return false;

  }


  function generate_id(){
    return uniqid(time().mt_rand(), true);
  }

}




?>


