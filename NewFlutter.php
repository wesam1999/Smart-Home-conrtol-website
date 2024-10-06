<?php
include_once 'Database/Database.php';
include_once 'Database/DAL_news.php';
$database =new Database();
$DAL_news =new DAL_news();
$sql=$database->getConnection();
 $result=$DAL_news->read($sql);
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