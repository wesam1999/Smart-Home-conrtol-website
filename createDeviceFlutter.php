<?php
include_once 'Database/Database.php';
include_once 'Database/DAL_device.php';

$database =new Database();
$DAL_device =new DAL_device();
$sql=$database->getConnection();
$devicename=$_POST["devicename"];
$type=$_POST["type"];
$Maker=$_POST["Maker"];
$locationInHouse=$_POST["locationInHouse"];

$DAL_device->Create($sql,$devicename,$type,1,$Maker,$locationInHouse);

?>