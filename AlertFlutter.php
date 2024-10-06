<?php
include_once 'Database/Database.php';
include_once 'Database/DAL_alert.php';
$database =new Database();
$DAL_alert =new DAL_alert();
$sql=$database->getConnection();
 $result=$DAL_alert->read($sql);
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