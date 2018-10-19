<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends MY_Controller {

    public function __construct()
    {
       parent::__construct();
    
       $this->load->library('session');
       $this->load->model('product_model');
       
    }

	public function index(){
    
    /*$user=$this->session->userdata('user');*/
    $user='1';
    $result=$this->product_model->get_products($user);
    if(!empty($result)){

        $template['title']='Products';
        $template['page']="product/product_view.php";
        $template['data']=$result;   
        $this->load->view("template",$template);

    }
		
    }
    


    function add(){
       
        $template['title']='Products';
        $template['page']="product/add_product.php";
        $template['data']="";
        $this->load->view("template",$template);


    }
    function create(){
        
        $error=false;
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

        $array=array(

            'ID_USER'=> '1',
            'ID_PRODUCT'=> $id_product,
            'ID_SHOP'=> '1',
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
            'REQUIRE_INFORMATION_PRODUCT'=> '22'
        
        );

        if( empty($price)|| empty($title) ||  empty($image)){
            $error= true;
            echo '<span class="text-danger"> Fill in all feilds price , name  and image <span>';
        }

        echo $image;

        if($error == false){
        $result=$this->product_model->insert_product($array);
        if($result){
            echo '<span class="text-success"> product created</span>';
        }
        
        else{
           echo 'product can\'t be created now ';
        }
    }
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
                   echo 'Product updated';
               }
               
               else{
                  echo 'product can\'t be updated now';
               }
       
       }
   }

    function delete(){
    $id=$this->input->post('ID_PRODUCT');
    $array=array('ID_PRODUCT' => $id);
    $result=$this->product_model->delete_product($array);
    if($result) echo 'Product deleted';
    else echo 'error product can\'t be deleted no';

   }

   
   function edit(){
    $id=$this->uri->segment(3);
    $array=array('ID_PRODUCT' => $id);
    $result=$this->product_model->get_one_product($array);
    if(!empty($result)){
    $template['title']='Edit Product' ;
    $template['page']='Product/edit_product';
    $template['data']=$result;
    $this->load->view('template',$template);
    }
    else echo 'empty';
   }


}
?>