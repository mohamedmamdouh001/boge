<?php
require_once("../config/config.php");
$id = $_GET['id'];
$sql = "DELETE FROM `event` WHERE `id` = '$id'";
$result = mysqli_query($conn, $sql);
header("Location:../assets/owner-dashboard.php");