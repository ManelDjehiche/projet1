<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends MY_Controller {

    public function __construct()
    {
       parent::__construct();
      
       $this->load->library('session');
       $this->load->model('sign_in_model');
       $this->load->helper(array('form', 'url'));
       
    }


	public function index()
	{
    //   $user=$this->session->userdata('user');
    //   $result=$this->sign_in_model->get_shop($user);
    //   if($result == 'empty') echo "shop vide";
    //   else 
    //   {
    //       $template['title']='Shop list';
    //       $template['view']='shop/shop_view';
    //       $template['data']=$result;
    //       $this->load->view('template',$template);
    //   }	
      $template['title']='Shop list';
      $template['page']='shop/shop_view';
      $template['data']="";
      $this->load->view('template',$template);
    }

    public function do_upload(){
        
        
        }

    public function create(){
       
        

            $template['title']='Products';
            $template['page']="shop/add_shop.php";
            $template['data']="";
            $this->load->view("template",$template);

            $submit=$this->input->post('submit');
            
            if(isset($submit)){
                $config = array(
                    'upload_path' => "./uploads/",
                    'allowed_types' => "gif|jpg|png|jpeg",
                    'overwrite' => TRUE,
                    'file_name'=>'first_image'
                    );
                $this->load->library('upload', $config);
                
                if($this->upload->do_upload('userfile'))
                {
                    $data = $this->upload->data();
                    $logo = $data['file_name'];
                    // print_r($this->session->userdata('user'));
                    $id_user=$this->session->userdata('user')['0']->ID_USER;
                    $id_shop=$this->sign_in_model->generate_id();
                    $array=array(
                        'ID_SHOP'=>$id_shop,
                        'ID_USER'=> $id_user,
                        'DOMAINE_SHOP'=> $this->input->post('DOMAINE_SHOP'),
                        'LOGO_SHOP'=> $logo,
                        'LANGUAGE_SHOP'=> $this->input->post('LANGUAGE_SHOP'),
                        'BUSINESS_SHOP'=> $this->input->post('BUSINESS_SHOP'),
                        'VATE_RATE_SHOP'=> $this->input->post('VATE_RATE_SHOP'),
                        'COMPANY_SHOP'=> $this->input->post('COMPANY_SHOP'),
                        'SLOGAN_SHOP'=> $this->input->post('SLOGAN_SHOP'),
                        'SECTOR_SHOP'=> $this->input->post('SECTOR_SHOP')
                    );
                    $result = $this->sign_in_model->create_shop($array);
                    print_r($result);
                }else{
                    print_r($this->upload->display_errors());
                }

            }
       
        
        
    }

    public function update(){

        $template['title']='Products';
        $template['page']="shop/shop.php";
        $template['data']="";
        $this->load->view("template",$template);

        $submit=$this->input->post('submit');
        if(isset($submit)){
            $id_user=$this->session->userdata('user')['0']->ID_USER;
            $array=array(
                'ID_USER'=> $id_user,
                'DOMAINE_SHOP'=> $this->input->post('DOMAINE_SHOP'),
                'LOGO_SHOP'=> $this->input->post('LOGO_SHOP'),
                'LANGUAGE_SHOP'=> $this->input->post('LANGUAGE_SHOP'),
                'BUSINESS_SHOP'=> $this->input->post('BUSINESS_SHOP'),
                'VATE_RATE_SHOP'=> $this->input->post('VATE_RATE_SHOP'),
                'COMPANY_SHOP'=> $this->input->post('COMPANY_SHOP'),
                'SLOGAN_SHOP'=> $this->input->post('SLOGAN_SHOP'),
                'SECTOR_SHOP'=> $this->input->post('SECTOR_SHOP')
            );
            $result = $this->sign_in_model->create_shop($array);
            print_r($result);
            

        }
        
        
    }
    

}
?>