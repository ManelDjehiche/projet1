<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Collection extends MY_Controller {


    public function __construct()
    {
       parent::__construct();
       $this->load->library('session');
       $this->load->model('collection_model');
       
    }


	public function index()
	{


    /*$user=$this->session->userdata('user');*/
    $user='1';
    $array=array('ID_USER'=>$user);
    $result=$this->collection_model->get_collections($array);
    $template['title']='Collection';
    $template['page']='Collection/collection_view.php';
    $template['data']=$result;
	$this->load->view("template",$template);
		
   
}
    

    public function create(){
    
    $erroempty=false;
       
        /*$id_user=$this->session->userdata('user');*/
        $id_collection=$this->collection_model->generate_id();
    
        /*$id_shop=$this->session->userdata('shop');*/
        $id_user='1';
        $id_shop='1';
        $name=$this->input->post('NAME_COLLECTION');      
        $description=$this->input->post('DESCRIPTION_COLLECTION');
        $header=$this->input->post('HEADER_COLLECTION');
        $background=$this->input->post('BACKGROUND_COLLECTION');
        $blurryimage=$this->input->post('BLURRY_IMAGE_COLLECTION');
        $button_color_collection=$this->input->post('BUTTON_COLLOR_COLLECTION');
        
       
        if(empty($name)){
        echo '<span class="text-danger"> Fill in name collection !</span>'; 
        $erroempty= true;
        }


        if($erroempty == false){
        $array=array(

            'ID_COLLECTION'=> $id_collection,
            'ID_USER'=> $id_user,
            'ID_SHOP'=> $id_shop,
            'NAME_COLLECTION'=> $name,
            'DESCRIPTION_COLLECTION'=> $description,
            'HEADER_COLLECTION' => $header,
            'BACKGROUND_COLLECTION'=> $background,
            'BLURRY_IMAGE_COLLECTION' => $blurryimage,
            'BUTTON_COLLOR_COLLECTION'=> $button_color_collection
        
        
        );

        
        $result=$this->collection_model->insert_collection($array);
        if($result){
            echo '<b><span class="text-success">Collection'.' "'.$name.'" '.'created</span></b>';
        }
        
        else{
           echo 'collection non crrer';
        }

    }
        echo '';

        }
    



    function update(){

        $error=false;
        $id_collection=$this->input->post('ID_COLLECTION');   
        $name=$this->input->post('NAME_COLLECTION');      
        $description=$this->input->post('DESCRIPTION_COLLECTION');
        $header=$this->input->post('HEADER_COLLECTION');
        $background=$this->input->post('BACKGROUND_COLLECTION');
        $blurryimage=$this->input->post('BLURRY_IMAGE_COLLECTION');
        $button_color_collection=$this->input->post('BUTTON_COLLOR_COLLECTION');

        


            $array=array(
                'ID_COLLECTION' => $id_collection,
                'NAME_COLLECTION'=> $name,
                'DESCRIPTION_COLLECTION'=> $description,
                'HEADER_COLLECTION' => $header,
                'BACKGROUND_COLLECTION'=> $background,
                'BLURRY_IMAGE_COLLECTION' => $blurryimage,
                'BUTTON_COLLOR_COLLECTION'=> $button_color_collection           
            
            );

            if(empty($name)){
                echo '<span class="text-danger"> Fill in name collection !</span>'; 
                $erroempty= true;
                }
            if($error == false){
            $result=$this->collection_model->update_collection($array);
            if($result){
                echo '<span class="text-success"> Collection updated</span>'; 
            }
            
            else{
               echo 'collection non modifier';
            }
            
        }
    
}

    function delete(){
    $id = $this->input->post('ID_COLLECTION');
    $array=array('ID_COLLECTION' => $id);
    $result=$this->collection_model->delete_collection($array);
    if($result) echo 'collection deleted';
    else echo 'collection non supprimé';

   }



   function products(){
    $id=$this->uri->segment(3);
    $array=array('collection.ID_COLLECTION' => $id);
    $result=$this->collection_model->get_products_collection($array);
    if(!empty($result)){
    $template['title']='Products in'.''.$result[0]['NAME_COLLECTION'];
    $template['page']='Collection/products_in_collection';
    $template['data']=$result;
    $this->load->view('template',$template);
    }
    else echo 'empty';
   }


   function edit(){
    $id=$this->uri->segment(3);
    $array=array('ID_COLLECTION' => $id);
    $result=$this->collection_model->get_one_collection($array);
    if(!empty($result)){
    $template['title']='collection';
    $template['page']='Collection/edit_collection';
    $template['data']=$result;
    $this->load->view('template',$template);
    }
    else echo 'empty';
   }

   function add(){

    $template['title']='collection';
    $template['page']='Collection/add_collection';
    $template['data']='';
    $this->load->view('template',$template);
    

}


 public function delete_from_collection(){

    $id=$this->input->post('ID_PRODUCT');
    $array=array('ID_COLLECTION'=> NULL, 'ID_PRODUCT' => $id );
    $result=$this->collection_model->update_product($array);
    if($result) echo 'Product deleted from this collection';
    else 'product can\'t be deleted now ! ';
 }
}
?>