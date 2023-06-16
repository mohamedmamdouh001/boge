<?php
session_start();
class RegisterUser extends Dbh{
    public function __construct($fullName, $age, $nationalID, $email, $password, $city, $gender, $position){
        $sql = "SELECT * FROM `user` WHERE `ssn` = '$nationalID'";
        $result = $this->conn()->query($sql);
        $count = mysqli_num_rows($result);
        if($count == 0){
            $sql = "INSERT INTO `user` (`name`, `age`, `ssn`, `email`, `pw_u`, `city`, `gender`, `position`) VALUES ('$fullName', '$age', '$nationalID', '$email', '$password', '$city', '$gender', '$position')";
            $stmt = $this->conn()->query($sql);
            $_SESSION['success'] = "Registration is done successfully";
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $fullName;
            $sql_2 = "SELECT * FROM `user` WHERE `email`='$email'";
            $result = $this->conn()->query($sql_2);
            $row = mysqli_fetch_assoc($result);
            $_SESSION['user_id'] = $row['user_id'];
            header("location:../assets/user-events.php");
        }
        else{
            $_SESSION['error'] = "This National ID is already exist";
            header("location:../assets/user-signup.php");
        }
    }
}