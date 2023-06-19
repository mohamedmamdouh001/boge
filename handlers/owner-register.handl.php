<?php

$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
require_once("{$base_dir}includes{$ds}classAutoLoader.inc.php");



$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$email = $_POST['email'];
$ssn = $_POST['ssn'];
$age = $_POST['age'];
$city = $_POST['city'];
$phone =$_POST['phone'];



$newUser = new RegisterOwner($firstname, $lastname, $email, $ssn, $age, $city, $phone);

