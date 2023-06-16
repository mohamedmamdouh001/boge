<?php
session_start();
require_once("../config/config.php");
$id = $_GET['id'];
$sql = "UPDATE `reqeust`
        SET `status` = 'accepted'
        WHERE `id` = '$id'";
$result = mysqli_query($conn, $sql);
$sql = "SELECT * FROM `event` WHERE id ='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$event_name =  $row ['name'];
$_SESSION['success'] = "Your Event {$event_name} is accepted";
header("location:../assets/admindashboard.php");