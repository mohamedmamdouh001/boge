<?php
session_start();
class RegisterUser extends Dbh{
    public function __construct($fullName, $age, $nationalID, $email, $password, $city, $gender, $position){
        $sql = "SELECT COUNT(`ssn`) FROM `user` WHERE `ssn` = ?";
        $result = $this->connect()->prepare($sql);
        $result->execute([$nationalID]);
        $numberOfRows = $result->fetchColumn();
        if($numberOfRows == 0){
            $sql = "INSERT INTO `user` (`name`, `age`, `ssn`, `email`, `pw_u`, `city`, `gender`, `position`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$fullName, $age, $nationalID, $email, $password, $city, $gender, $position]);
            $_SESSION['success'] = "Registration is done successfully";
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $fullName;
            header("location:../assets/user-events.php");
        }
        else{
            $_SESSION['error'] = "This National ID is already exist";
            header("location:../assets/user-signup.php");
            die();
        }
    }
}