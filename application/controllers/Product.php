<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller {

    public function __construct()
    {
       parent::__construct();
    
       $this->load->library('session');
       $this->load->model('product_model');
       
    }

	public function index()
	{
    
    $user=$this->session->userdata('id_user');
    $data=$this->product_model->get_product($user);
    $template['title']='Products';
    $template['view']='Product/product_view';
    $template['data']=$data;
	$this->load->view('Template',$template);
		
    }
    

    function create(){

        
        $id_user=$this->session->userdata('user');
        $id_product=$this->product_model->generate_id();
        $id_shop=$this->session->userdata('shop');
        $id_collection=$this->input->post('ID_COLLECTION');
        $limit_stock=$this->input->post('LIMIT_STOCK_PRODUCT');
        $price=$this->input->post('PRICE_PRODUCT');
        $discount=$this->input->post('DISCOUNT_PRODUCT');
        $count_down=$this->input->post('COUNT_DOWN_PRODUCT');
        $fees_delivry=$this->input->post('FEES_DELIVRY_PRODUCT');
        $title=$this->input->post('TITLE_PRODUCT');
        $description=$this->input->post('DESCRIPTION_PRODUCT');
        $image=$this->input->post('IMAGE_PRODUCT');
        $note_client=$this->input->post('NOTE_CLIENT_PRODUCT');
        $status=$this->input->post('STATUS_PRODUCT');
        $header=$this->input->post('HEADER_PRODUCT');
        $background=$this->input->post('BACKGROUND_PRODUCT');
        $blurry_image=$this->input->post('BLURRY_IMAGE_PRODUCT');
        $order_button=$this->input->post('ORDER_BUTTON_PRODUCT');
        $color_order_button=$this->input->post('COLOR_ORDER_BUTTON_PRODUCT');
        $text_color=$this->input->post('TEXT_COLOR_PRODUCT');
        $require_information=$this->input->post('REQUIRE_INFORMATION_PRODUCT');


        $submit=$this->input->post('SUBMIT');

        if(isset($submit)){

        $array=array(

            'ID_USER'=> $id_user,
            'ID_PRODUCT'=> $id_product,
            'ID_SHOP'=> $id_shop,
            'ID_COLLECTION'=> $id_collection,
            'LIMIT_STOCK_PRODUCT'=> $limit_stock,
            'PRICE_PRODUCT'=> $price,
            'DISCOUNT_PRODUCT' => $discount,
            'COUNT_DOWN_PRODUCT'=> $count_down,
            'FEES_DELIVRY_PRODUCT'=> $fees_delivry,
            'TITLE_PRODUCT'=> $title,
            'DESCRIPTION_PRODUCT'=> $description,
            'IMAGE_PRODUCT'=> $image,
            'NOTE_CLIENT_PRODUCT'=> $note_client,
            'STATUS_PRODUCT'=> $status,
            'HEADER_PRODUCT'=> $header,
            'BACKGROUND_PRODUCT'=> $background,
            'BLURRY_IMAGE_PRODUCT'=> $blurry_image,
            'ORDER_BUTTON_PRODUCT'=> $order_button,
            'COLOR_ORDER_BUTTON_PRODUCT'=> $color_order_button,
            'TEXT_COLOR_PRODUCT'=> $text_color,
            'REQUIRE_INFORMATION_PRODUCT'=> $require_information
        
        );

        $result=$this->product_model->insert_product($array);
        if($result){
            echo 'produit crrer';
        }
        
        else{
           echo 'produit non crrer';
        }
 

         /* inserer dans la petite table 
        $array2=array('ID_PRODUCT'=> $id_product);
        $resulthi2=$ts->product_model->insert_physical_product($array2);
        if($result){
            echo '<br>produit crrer dans la petite table physical product';
        }
        
        else{
           echo '<br>produit non crrer dans physical product';
        }

        }*/


    }
}
   
       function update(){
        
        $id_product=$this->input->post('ID_PRODUCT');
        $limit_stock=$this->input->post('LIMIT_STOCK_PRODUCT');
        $price=$this->input->post('PRICE_PRODUCT');
        $discount=$this->input->post('DISCOUNT_PRODUCT');
        $count_down=$this->input->post('COUNT_DOWN_PRODUCT');
        $fees_delivry=$this->input->post('FEES_DELIVRY_PRODUCT');
        $title=$this->input->post('TITLE_PRODUCT');
        $description=$this->input->post('DESCRIPTION_PRODUCT');
        $image=$this->input->post('IMAGE_PRODUCT');
        $note_client=$this->input->post('NOTE_CLIENT_PRODUCT');
        $status=$this->input->post('STATUS_PRODUCT');
        $header=$this->input->post('HEADER_PRODUCT');
        $background=$this->input->post('BACKGROUND_PRODUCT');
        $blurry_image=$this->input->post('BLURRY_IMAGE_PRODUCT');
        $order_button=$this->input->post('ORDER_BUTTON_PRODUCT');
        $color_order_button=$this->input->post('COLOR_ORDER_BUTTON_PRODUCT');
        $text_color=$this->input->post('TEXT_COLOR_PRODUCT');
        $require_information=$this->input->post('REQUIRE_INFORMATION_PRODUCT');

           if(isset($submit)){
   
               $array=array(
              
                'ID_PRODUCT' => $id_product,
                'LIMIT_STOCK_PRODUCT'=> $limit_stock,
                'PRICE_PRODUCT'=> $price,
                'DISCOUNT_PRODUCT' => $discount,
                'COUNT_DOWN_PRODUCT'=> $count_down,
                'FEES_DELIVRY_PRODUCT'=> $fees_delivry,
                'TITLE_PRODUCT'=> $title,
                'DESCRIPTION_PRODUCT'=> $description,
                'IMAGE_PRODUCT'=> $image,
                'NOTE_CLIENT_PRODUCT'=> $note_client,
                'STATUS_PRODUCT'=> $status,
                'HEADER_PRODUCT'=> $header,
                'BACKGROUND_PRODUCT'=> $background,
                'BLURRY_IMAGE_PRODUCT'=> $blurry_image,
                'ORDER_BUTTON_PRODUCT'=> $order_button,
                'COLOR_ORDER_BUTTON_PRODUCT'=> $color_order_button,
                'TEXT_COLOR_PRODUCT'=> $text_color,
                'REQUIRE_INFORMATION_PRODUCT'=> $require_information           
               
               );
       
               $result=$this->product_model->update_product($array);
               if($result){
                   echo 'product modifié';
               }
               
               else{
                  echo 'product non modifier';
               }
       
       }
   }

    function delete(){
    $id=$this->input->post('ID_PRODUCT');
    $result=$this->product_model->delete_product($id);
    if($result) echo 'product spprimé';
    else echo 'product non supprimé';

   }

   


}
?>