<?php

class My_Controller extends CI_Controller{


   public function __construct(){
    
        parent:: __construct();
        $languages = array("UK","AR","FR");
        if(in_array($this->uri->segment(1),$languages))
        {
        $this->load->language($this->uri->segment(1),$this->uri->segment(1));
        }
        

   }


}



?>