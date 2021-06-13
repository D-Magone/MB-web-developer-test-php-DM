<?php
    require_once ('uservalidator.php');
    require_once ('newuser.php');

    class Form {

        public function FormAction() {
            if(isset($_POST['submit'])) {
            
                $this->FormErrors();
                return;
            }
        }

        function FormErrors() {
            $validation = new UserValidator($_POST);
            $errors = $validation->validateForm();
            
            if($errors) {

                $error = implode(" ",$errors);
                echo $error;

            } else {
                $subscriber = new NewUser();
                header("Location: success.php");
                exit();
            }
        }
    }

?>