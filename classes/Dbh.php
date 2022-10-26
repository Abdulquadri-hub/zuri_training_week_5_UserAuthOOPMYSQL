<?php

class Dbh {

    private $hostname = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "zuriphp";

    public function connect(){
        $conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
        if($conn){
            return $conn;
        }else {
            die("Connection failed");
        }
    }
}

