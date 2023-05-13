<?php
session_start();
class RegisterOwner extends Dbh{
    public function __construct($first_name, $last_name, $email, $ssn, $age, $city){
        $sql = "SELECT COUNT(`ssn`) FROM `event's owner` WHERE `ssn` = ?";
        $result = $this->connect()->prepare($sql);
        $result->execute([$ssn]);
        $numberOfRows = $result->fetchColumn();
        if($numberOfRows == 0){
            $sql = "INSERT INTO `event's owner` (`first_name`, `last_name`, `email`, `ssn`, `age`, `city`) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$first_name, $last_name, $email, $ssn, $age, $city, $documentation]);
           echo  "Registration is done successfully";
        }
        else{
            echo"This National ID is already exist";
        }
    }
}