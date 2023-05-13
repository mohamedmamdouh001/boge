<?php
session_start();
class LoginAdmin extends Dbh{
    public function __construct($email, $pw_a){
        $sql = "SELECT * FROM `admin` WHERE `email` = '$email' AND `pw_a`= '$pw_a'";
        $result = $this->connect()->query($sql);
        $row = $result->fetchAll(PDO::FETCH_ASSOC);

        if(!$row){
            echo "Login is Failed";
        }
        else{
            echo "Login is success";
        }
    }
}