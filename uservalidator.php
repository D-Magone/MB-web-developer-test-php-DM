<?php

require_once ('database.php');
require_once ('user.php');

class UserValidator {

    private $data;
    private $errors = [];
    private static $fields = ['email', 'checkbox'];

    public function __construct($post_data){
        $this->data = $post_data;
    }

    public function validateForm(){

        $this->validateTerms();
        $this->validateEmail();

        return $this->errors;
    }

    private function validateEmail(){
        $val = trim($this->data['email']);

        if(empty($val)){
            $this->addError('email', 'Email address is required');
        } else if(!filter_var($val, FILTER_VALIDATE_EMAIL)) {
                $this->addError('email', 'Please provide a valid e-mail address');
        } else {
            if(substr($this->data['email'], -3) == ".co"){
                $this->addError('email', 'We are not accepting subscriptions from Colombia
                emails');
            }
        }
    }

    private function validateTerms(){

        if(!isset($_POST['checkbox'])){
            $this->addError('checkbox', 'You must accept the terms and conditions');
        } 
    }

    private function addError($key, $val){
        $this->errors[$key]= $val;
    }
}

?>