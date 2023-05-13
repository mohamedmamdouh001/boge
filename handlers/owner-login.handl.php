<?php

$ds = DIRECTORY_SEPARATOR;
$base_dir = realpath(dirname(__FILE__)  . $ds . '..') . $ds;
require_once("{$base_dir}includes{$ds}classAutoLoader.inc.php");

$email = $_POST['email'];
$ssn = $_POST['ssn'];
$login = new LoginOwner($email, $ssn);


?>
