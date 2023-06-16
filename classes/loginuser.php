<?php
session_start();
class LoginUser extends Dbh{
    public function __construct($email, $password){
        $sql = "SELECT * FROM `user` WHERE `email` = '$email' AND `pw_u`= '$password'";
        $result= $this->conn()->query($sql);
        $row = mysqli_num_rows($result);
        if($row == 1 ){
            $_SESSION['user_email'] = $email;
            $user_arr = mysqli_fetch_assoc($result);
            $_SESSION['user_id'] = $user_arr['user_id'];
            header("location:../assets/index.php");
        }
        else{
            $_SESSION['error'] = "Email or Password is incorrect, Please Try again";
            header("location:../assets/user-login.php");
        }
    }
}