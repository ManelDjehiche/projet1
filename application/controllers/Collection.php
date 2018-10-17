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

    $template['title']='Collection';
    $template['page']='Collection/collection_view.php';
	$this->load->view("template",$template);
		
    }
    

    public function create(){
        
        $id_user=$this->session->userdata('user');
        $id_collection=$this->collection_model->generate_id();
        $id_shop=$this->session->userdata('shop');
        $name=$this->input->post('NAME_COLLECTION');      
        $description=$this->input->post('DESCRIPTION_COLLECTION');
        $header=$this->input->post('HEADER_COLLECTION');
        $background=$this->input->post('BACKGROUND_COLLECTION');
        $button_color_collection=$this->input->post('BUTTON_COLLOR_COLLECTION');
        

        $submit=$this->input->post('SUBMIT');

        if(isset($submit)){

        $array=array(

            'ID_COLLECTION'=> $id_collection,
            'ID_USER'=> $id_user,
            'ID_SHOP'=> $id_shop,
            'NAME_COLLECTION'=> $name,
            'DESCRIPTION_COLLECTION'=> $description,
            'HEADER_COLLECTION' => $header,
            'BACKGROUND_COLLECTION'=> $background,
            'BUTTON_COLLOR_COLLECTION'=> $button_color_collection
        
        
        );

        $result=$this->collection_model->insert_collection($array);
        if($result){
            echo 'collection crrer';
        }
        
        else{
           echo 'collection non crrer';
        }

        }


    }


    function update(){

        $id_collection=$this->input->post('ID_COLLECTION');   
        $name=$this->input->post('NAME_COLLECTION');      
        $description=$this->input->post('DESCRIPTION_COLLECTION');
        $header=$this->input->post('HEADER_COLLECTION');
        $background=$this->input->post('BACKGROUND_COLLECTION');
        $button_color_collection=$this->input->post('BUTTON_COLLOR_COLLECTION');

        if(isset($submit)){

            $array=array(
                'ID_COLLECTION' => $id_collection,
                'NAME_COLLECTION'=> $name,
                'DESCRIPTION_COLLECTION'=> $description,
                'HEADER_COLLECTION' => $header,
                'BACKGROUND_COLLECTION'=> $background,
                'BUTTON_COLLOR_COLLECTION'=> $button_color_collection           
            
            );
    
            $result=$this->collection_model->update_collection($array);
            if($result){
                echo 'collection modifié';
            }
            
            else{
               echo 'collection non modifier';
            }
    
    }
}

    function delete(){
    $id = $this->uri->segment(3);
    $result=$this->collection_model->delete_collection($id);
    if($result) redirect(base_ur('collection'));
    else echo 'collection non supprimé';

   }



   function products(){
    $id=$this->input->post('ID_COLLECTION');
    $result=$this->collection_model->get_products_collection($id);
    if(!empty($result)){
    $template['title']='Products in'.''.$result->NAME_COLLECTION;
    $template['page']='Collection/products_in_collection';
    $template['data']=$result;
    $this->load->view('template',$template);
    }
    else echo 'empty';
   }

}
?>