<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends MY_Controller {

    public function __construct()
    {
       parent::__construct();
       
       $this->load->library('session');
       $this->load->model('orders_model');
       
    }

	
	public function index()
	{
    
    $template['title']='Orders';
    $template['page']='Orders/orders_view';
	$this->load->view('template',$template);
		
    }
    
    
    public function create(){
        
        $id_order=$this->orders_model->generate_id();
        $id_client=$this->$this->input->post('ID_CLIENT');
        $id_product=$this->$this->input->post('ID_PRODUCT');
        $status=$this->input->post('STATUS_ORDER');      
        $date=date('Y-m-d');
        $fulfilment=$this->input->post('FULFILMENT_ORDER');
        $payement=$this->input->post('PAYEMENT_ORDER');
        $amount=$this->input->post('AMOUNT_ORDER');
        $quantity=$this->input->post('QUANTITY');
        

        $submit=$this->input->post('SUBMIT');

        if(isset($submit)){

        $array=array(

            'ID_ORDER'=> $id_order,
            'ID_USER'=> $id_client,
            'ID_PRODUCT'=> $id_product,
            'STATUS_ORDER'=> $status,
            'DATE_ORDER'=> $date,
            'FULFILMENT_ORDER' => $fulfilment,
            'PAYEMENT_ORDER'=> $payement,
            'AMOUNT_ORDER'=> $amount,
            'QUANTITY'=> $quantity
        
        
        );

        $result=$this->orders_model->insert_order($array);
        if($result){
            echo 'order crrer';
        }
        
        else{
           echo 'order non crrer';
        }

        }


    }

    function delete(){
     $id=$this->uri->segment(3);
     $array=array('ID_ORDER' => $id);
     $result=$this->order_model->delete_order($array);
     if($result) redirect(base_ur('orders'));
     else echo 'order non supprimé';
 
    }

   

}
?>