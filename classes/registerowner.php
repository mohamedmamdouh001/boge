<?php
session_start();
class RegisterOwner extends Dbh{
    public function __construct($first_name, $last_name, $email, $ssn, $age, $city, $phone){
        $sql = "SELECT * FROM `event's owner` WHERE `ssn` = '$ssn'";
        $result = $this->conn()->query($sql);
        $count = mysqli_num_rows($result);
        if($count == 0){
            $sql = "INSERT INTO `event's owner` (`first_name`, `last_name`, `email`, `ssn`, `age`, `city`, `phone`) VALUES ('$first_name', '$last_name', '$email', '$ssn', '$age', '$city', '$phone')";
            $this->conn()->query($sql);
            $_SESSION['full_name'] = $first_name . " " . $last_name;
            $sql = "SELECT * FROM `event's owner` WHERE `ssn`= '$ssn'";
            $result = $this->conn()->query($sql);
            $row = mysqli_fetch_assoc($result);
            $_SESSION['owner_id'] = $row["id"];
           header("location:../assets/owner-dashboard.php");
        }
        else{
            $_SESSION['error'] = "This National ID is already exist";
            header("location:../assets/owner-signup.php");
        }
    }
}