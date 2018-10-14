<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page1 extends CI_Controller{


    public function __construct()
    {
       parent::__construct();
       $this->load->model('login_model');
       $this->load->library('facebook');
       $this->facebook->enable_debug(TRUE);
       
    }

    function index(){

        $loginfacebook=$this->input->post('loginfacebook');
        if(isset($loginfacebook)){ redirect($this->facebook->login_url());}

        $this->load->view('page1');
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $submit=$this->input->post('submit');
        if(isset($submit)){
        $array=array('username'=> $username,'password'=>$password);
        $result=$this->login_model->login($array);
        if($result == false) echo 'this is not you!!!';
        else echo 'hello';}else 'emplis le formulaire plz';


        $opengraph = 	array(
            'type'				=> 'website',
            'title'				=> 'My Awesome Site',
            'url'				=> site_url(),
            'image'				=> '',
            'description'		=> 'The best site in the whole world'
        );

        $this->load->vars('opengraph', $opengraph);
        $this->load->view('facebook_view');
         
        
    }
  
    function login()
    {
        // This is the easiest way to keep your code up-to-date. Use git to checkout the 
        // codeigniter-facebook repo to a location outside of your site directory.
        // 
        // Add the 'application' directory from the repo as a package path:
        // $this->load->add_package_path('/var/www/haughin.com/codeigniter-facebook/application/');
        // 
        // Then when you want to grab a fresh copy of the code, you can just run a git pull 
        // on your codeigniter-facebook directory.

        if ( !$this->facebook->logged_in() )
        {
            // From now on, when we call login() or login_url(), the auth
            // will redirect back to this url.

            $this->facebook->set_callback(site_url('index.php/page1'));

            // Header redirection to auth.

            $this->facebook->login();

            // You can alternatively create links in your HTML using
            // $this->facebook->login_url(); as the href parameter.
        }
        else
        {
            redirect('index.php/page1');
        }
    }
    
    function logout()
    {
        $this->facebook->logout();
        redirect('index.php/page1');
    }

   
}




?>