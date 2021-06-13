<?php

class Database {

    private $servername;
    private $username;
    private $password;
    private $dbname;

    public $conn;
   
    function __connect() {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "mb_pineapple";

        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname); //$pdo = new PDO("mysql:host=localhost;dbname=database", 'username', 'password'); https://code.tutsplus.com/en/tutorials/pdo-vs-mysqli-which-should-you-use--net-24059
        
        return $this->conn;
    }
}