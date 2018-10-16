<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    include('./vendor/autoload.php');

class stripe{
    
    function __construct(){
        $stripe = array(
            "secret_key"=>"sk_test_bcqJD0EF8O5lJirqaAHpbIQz",
            "public_key"=>"pk_test_QwMYFbprjQaQQWZ0qyUTZ5zw"
            );
        \Stripe\Stripe::setApiKey($stripe["secret_key"]);
    }

    function create_token($user){
        $result = Stripe\Token::create(
            array(
                "card" => array(
                    "name" => $user['name'],
                    "number" => $user['number'],
                    "exp_month" => $user['exp_month'],
                    "exp_year" => $user['exp_year'],
                    "cvc" => $user['cvc']
                )
            )
        );
        return $result;
    }

    function charge($data_input){
        try {
            $charge = Stripe\Charge::create(array(
                "amount" => $data_input['amount']*100,
                "currency" => "usd",
                "card" => $data_input['token'],
                "description" => $data_input['description'] 
          ));
          if($charge){
            return "success";
          }else{
            return "error";
          }
          
        } catch(Stripe_CardError $e) {
            return "error";
        }
    }
}