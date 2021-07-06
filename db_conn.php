<?php

class DB {

    private $username;
    private $password;

    protected function connect() 
    {
        $this->username = "root";
        $this->password = "";

        $conn = new PDO('mysql:host=localhost;dbname=test', $this->username, $this->password);
        return $conn;
    }
}      
?>
