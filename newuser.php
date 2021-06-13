<?php

require_once ('database.php');

class NewUser {
    function __construct() {
        $email  = $_POST['email'];
        $sql = "INSERT INTO user (email) VALUES ('$email')";

        $this->conn = new Database();
        $this->conn = $this->conn->__connect();
       
        $result = $this->conn->query($sql);
        return $result;
    }
}    
?>