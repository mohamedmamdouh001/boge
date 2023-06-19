<?php

$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
require_once("{$base_dir}includes{$ds}classAutoLoader.inc.php");



$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$fullName = $firstName . " " . $lastName;
$age = $_POST['age'];
$nationalID = $_POST['national_id'];
$email = $_POST['email'];
$password = $_POST['password'];
$city = $_POST['address'];
$gender = $_POST['occupation'];
$position = $_POST['position'];
$phone = $_POST['phone'];

$newUser = new RegisterUser($fullName, $age, $nationalID, $email, $password, $city, $gender, $position, $phone);

