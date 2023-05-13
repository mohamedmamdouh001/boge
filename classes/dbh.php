<?php

class Dbh{
    private $host = "localhost";
    private $username = "root";
    private $psw = "" ;
    private $dbName = "boge";
    protected function connect(){
        try{
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbName;
            $conn = new PDO($dsn, $this->username, $this->psw);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e){
            echo "Connection failed: " .$e->getMessage();
        }
    }
}