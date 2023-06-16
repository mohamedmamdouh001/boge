
<?php
session_start();
include '../config/config.php'
?>
<?php

if (isset($_POST['pay'])){

    $event_id = $_POST['event_id'];
    $tickets_num = $_POST['tickets_num'];
    $user_id = $_POST['user_id'];

    $stmt_1 = "SELECT * FROM `event` WHERE `id`='$event_id'";
    $result = mysqli_query($conn, $stmt_1);
    $row = mysqli_fetch_assoc($result);
    $row['sold_tickets'] += $tickets_num;
    $sold_tickets = $row['sold_tickets'];

    $stmt_2 = " UPDATE `event`
                SET `sold_tickets`='$sold_tickets'
                WHERE `id`='$event_id'";
    mysqli_query($conn, $stmt_2);

    $stmt_3 = "INSERT INTO `payment`(`user_id`, `event_id`, `tickets_res`)
          VALUES('$user_id', '$event_id', '$tickets_num')";
    mysqli_query($conn, $stmt_3); 
    header("location:../assets/USERBOOKEDEVENTS.php");

}
?>
