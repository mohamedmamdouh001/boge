<?php
include 'dbh.php';
session_start();
class LoginOwner extends Dbh{
    public function __construct($email, $ssn){
        $sql = "SELECT * FROM `event's owner` WHERE `email` = '$email' AND `ssn`= '$ssn'";
        $result = $this->conn()->query($sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            $row = mysqli_fetch_assoc($result);
            $_SESSION['owner_id'] = $row['id'];
            $_SESSION['full_name'] = $row['first_name'] . " " . $row["last_name"];
            header("location:../assets/owner-dashboard.php");
        }
        else{
            $_SESSION["error"] = "Login is Failed";
            header("location:../assets/owner-login.php");
        }
    }
}