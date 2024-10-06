<?php
include_once 'Database/Database.php';
include_once 'Database/DAL_device.php';
$database =new Database();
$DAL_device =new DAL_device();
$sql=$database->getConnection();
 $result=$DAL_device->read($sql);
 $myJSON = '[';
 while($row = $result->fetch_assoc()){ 
    $myJSON = $myJSON.json_encode($row);
    $myJSON = $myJSON.", ";
}
$myJSON = rtrim($myJSON, ', ');
$myJSON = $myJSON."]";  
echo $myJSON;
 $sql->close();
?>