<?php
class Register extends Dbh{
    public function __construct($fullName, $age, $nationalID, $email, $password, $city, $gender, $position){
        $sql = "SELECT COUNT(`ssn`) FROM `user` WHERE `ssn` = ?";
        $result = $this->connect()->prepare($sql);
        $result->execute([$nationalID]);
        $numberOfRows = $result->fetchColumn();
        if($numberOfRows == 1){
            echo "sorry user already exists";
        }
        else{
            $sql = "INSERT INTO `user` (`name`, `age`, `ssn`, `email`, `pw_u`, `city`, `gender`, `position`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$fullName, $age, $nationalID, $email, $password, $city, $gender, $position]);
        }
    }
}