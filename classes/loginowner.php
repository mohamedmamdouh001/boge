<?php
session_start();
class LoginOwner extends Dbh{
    public function __construct($email, $ssn){
        $sql = "SELECT * FROM `event's owner` WHERE `email` = '$email' AND `ssn`= '$ssn'";
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