<?php

$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
require_once("{$base_dir}includes{$ds}classAutoLoader.inc.php");

$email = $_POST['email'];
$password = $_POST['password'];
$login = new LoginAdmin($email, $password);


?>