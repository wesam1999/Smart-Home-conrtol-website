<?php
  include_once "../Database/device.php";
  include_once "../Database/DAL_device.php";
  include_once "../Database/Database.php";


  $device=new Device();
 $database = new Database();
  $DAL_device = new DAL_device(); 
  $db = $database->getConnection();
  $updateOrInsert=$_POST["updateOrInsert"];
if(strval($updateOrInsert)=="Insert"){
  $devicename=$_POST["deviceName"];
  $Maker=$_POST["Make"];
  $locationInHouse=$_POST["locationInHouse"];
  $type=$_POST["type"];
  $CustomDevice=$_POST["CustomDevice"];
  
  if( strlen($CustomDevice)=== 0){
    $DAL_device->Create($db,$devicename,$type,1,$Maker,$locationInHouse);

  }else{
    $DAL_device->Create($db,$devicename,$CustomDevice,1,$Maker,$locationInHouse);

  }


}else if(strval($updateOrInsert)=="Update"){
  $deviceId=$_POST["deviceId"];
  $deviceUpdateName=$_POST["deviceUpdateName"];
  $updateMake=$_POST["updateMake"];
  $updateLocationInHouse=$_POST["updateLocationInHouse"];
  $updateType=$_POST["updateType"];
  $DAL_device->update($db,$deviceId,$deviceUpdateName,$updateType,1,$updateMake,$updateLocationInHouse);

}
  header("Location: ../dashboard.php");
exit();
?>