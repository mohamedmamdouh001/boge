<?php
session_start();
class LoginUser extends Dbh{
    public function __construct($email, $password){
        $sql = "SELECT * FROM `user` WHERE `email` = '$email' AND `pw_u`= '$password'";
        $result = $this->connect()->query($sql);
        $row = $result->fetchAll(PDO::FETCH_ASSOC);

        if(!$row){
            $_SESSION['error'] = "Email or password is wrong, Please try again";
            header("location:../assets/user-login.php");
        }
        else{
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $email;
            header("location:../assets/user-events.php");
        }
    }
}