<?php

class Dbh{
    private $host = "localhost";
    private $username = "root";
    private $psw = "";
    private $dbName = "boge";
    protected function conn(){
        try{
            $conn = mysqli_connect($this->host, $this->username, $this->psw, $this->dbName);
            return $conn;
        }
        catch(Exception $e){
            echo "Error! :" .$e->getMessage();
        }
    }
}