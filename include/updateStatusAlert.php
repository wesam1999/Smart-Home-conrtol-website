<?php 
 include_once  '../Database/alert.php';
 include_once  '../Database/Database.php';
 include_once  '../Database/DAL_alert.php';

 $database = new Database();
 $db = $database->getConnection();
 $DAL_alert = new DAL_alert();
$id=$_GET["id"];

 $DAL_alert->update($db,$id);
 $db->close();
 header("Location: ../dashboard.php");
exit();
?>