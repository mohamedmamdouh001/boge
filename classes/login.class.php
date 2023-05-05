<?php

class Login extends Dbh{
    public function __construct($email, $password){
        $sql = "SELECT * FROM `user` WHERE `email` = '$email' AND `pw_u`= '$password'";
        $result = $this->connect()->query($sql);
        $numberOfRows = $result->fetchColumn();
        if(!$numberOfRows){
            echo "Error";
        }
        else{
            echo "login is successful";
        }
    }
}