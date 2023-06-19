<?php
session_start();
$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
require_once("{$base_dir}includes{$ds}classAutoLoader.inc.php");

if(isset($_POST['request'])){

    $date = $_POST['event_date'];
    $name = $_POST['event_name'];
    $ticket_num = $_POST['ticket_num'];
    $category = $_POST['category'];
    $host_days = $_POST['host_days'];
    $price = $_POST['price'];

    $image = $_FILES['image']['name'];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "../assets/event_img/" . $image;
    move_uploaded_file($tempname, $folder);

    $description = $_POST['description'];
    $owner_id = $_SESSION['owner_id'];
    $social_media_url = $_POST['social'];
    $event = new Event();
    $event->setEvent($name, $date, $price, $category, $image, $host_days, $description, $ticket_num, $owner_id, $social_media_url);
    $_SESSION["success"] = "Event is sent to Admin successfully";
    header('location:../assets/EVENTDETIALFORM.php');
}