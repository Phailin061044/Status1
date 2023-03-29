<?php
include_once "../model/ConDB.php";
include_once "../model/Status.php";
$obj_name = new Status();
$user1= $obj_name->getStatus();
?>

