<?php
include_once 'Database/Database.php';
include_once 'Database/DAL_device.php';

$database =new Database();
$DAL_device =new DAL_device();
$sql=$database->getConnection();
$id=$_GET["id"];
$devicename=$_GET["devicename"];
$type=$_GET["type"];
$Maker=$_GET["Maker"];
$locationInHouse=$_GET["locationInHouse"];

$DAL_device->update($sql,$id,$devicename,$type,1,$Maker,$locationInHouse);

?>