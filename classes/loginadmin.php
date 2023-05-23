<?php
session_start();
?>
<?php
class LoginAdmin extends Dbh{
    public function __construct($email, $pw_a){
        $sql = "SELECT * FROM `admin` WHERE `email` = '$email' AND `pw_a`= '$pw_a'";
        $result= $this->conn()->query($sql);
        $row = mysqli_num_rows($result);
        if($row == 1 ){
            $row = mysqli_fetch_assoc($result);
            $_SESSION['admin_id'] = $row['id'];
            header("location:../assets/admindashboard.php");
        }
        else{
            $_SESSION['error'] = "Login is Failed";
            header("location:../assets/admin-login.php");
        }
    }
}