<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Sign_in_model extends CI_Model{

    function __construct() {
        

        $this->load->database();
        parent::__construct();

  }


    
   function login($array){
   
    $email=$array['EMAIL_USER'];
    $password=$array['PASSWORD_USER'];
    $where= array('EMAIL_USER'=> $email,'PASSWORD_USER'=>$password);
    $this->db->where($where);
    $query=$this->db->get('user');
    $result=$query->result();
    if(empty($result)) return array('status'=>'error','message'=>'email or password does not match');
    else return array('status'=>'success','message'=>'you are logged','data'=>$result); 
  }

  function get_user($array){
    $id = $array['ID_USER'];
    $where = array('ID_USER'=>$id);
    $this->db->where($where);
    $query=$this->db->get('user');
    $result=$query->result();
    if(empty($result)) return false;
    else return (array)$result['0']; 
  }

  function create_user($array){
    $num1 = $this->db->where('EMAIL_USER', $array['EMAIL_USER'])->get('user')->num_rows();
    if($num1>1){
      return array('status'=>'error','message'=>'This email is already used');
    }
    if($this->db->insert('user',$array)) return array('status'=>'success','message'=>'you have created a new account');
    else return array('status'=>'error','message'=>'error in connectio with database');

  }


  function delete_user($user){
    
    $this->db->where('ID_USER',$user);
    if($this->db->delete('user')) return true;
    else return false;

  }

  function update_user($array){
    
    $this->db->where('ID_USER',$array['ID_USER']);
    if($this->db->update('user',$array)) return true;
    else return false;

  }

  function create_shop($array){
   
    if($this->db->insert('shop',$array)) return true;
    else return false;

  }
   
  function get_shop($id){
   
    $this->db->where('ID_USER',$id);
    $query=$this->db->get('shop');
    $result=$query->result();
    if(!empty($result)) return $result;
    else return 'empty';
    

  }


  function delete_shop($id){
    
    $this->db->where('ID_SHOP',$id);
    if($this->db->delete('shop')) return true;
    else return false;

  }
  

  function generate_id(){
    return uniqid(time().mt_rand(), true);
  }

  function send_mail($receiver){
    $message = 'Dear User,<br><br> Please click on the below activation link to verify your email address<br><br>
    <a href=\'http://localhost/projet1/registration/confirm_mail/'.md5($receiver).'\'>Confirm mail</a><br><br>Thanks';
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'kaous.nadir.hatem@gmail.com';                 // SMTP username
        $mail->Password = 'fidjoqnpkctbmwhx';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        //Recipients
        $mail->setFrom('kaous.nadir.hatem@gmail.com');
        $mail->addAddress($receiver);     // Add a recipient
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = $message;
 

        if($mail->send()){
          return array('status'=>'success','message'=>'Message has been sent');
        }else{
          return array('status'=>'error','message'=>'Message could not be sent');
        }
        
    } catch (Exception $e) {
        return array('status'=>'error','message'=>'Message could not be sent. Mailer Error: '.$mail->ErrorInfo);
    }
  }

  function verify_email($email){
    return true;
  }
}

?>