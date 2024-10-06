<?php
 include_once "../Database/device.php";
 include_once "../Database/DAL_device.php";
 include_once "../Database/Database.php";

 $database = new Database();
  $DAL_device = new DAL_device();
  $db = $database->getConnection();
$id=$_GET["id"];
$DAL_device->Delete($id,$db);
$db->close();
header('Location: '.$_SERVER['REQUEST_URI']);
exit();

?>