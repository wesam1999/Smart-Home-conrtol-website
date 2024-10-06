<?php
class DAL_device
{
    public function read($con)
    {
        $sql =  "SELECT * FROM  device";
        $result = $con->query($sql);
        if (!$result) {
            die("INvalid query:"  . $con->error);
        }
        return $result;
    }
    public function readWhenID($con,$id)
    {
        $sql =  "SELECT * FROM device WHERE id=$id";
        $result = $con->query($sql);
        if (!$result) {
            die("INvalid query:"  . $con->error);
        }
        return $result;
    }

    
    public function Delete($id, $con)
    {
        $sql = "DELETE FROM device WHERE id=$id";
        $result = $con->query($sql);
        if (!$result) {
            die("INvalid query:"  . $con->error);  
        }
        $con->close();
        echo "User deleted successfully!";
        
    }
    public function Create($con,$devicename,$type,$controlDeviceId,$Maker,$locationInHouse)
 
    {
       
        $sql = "INSERT INTO `device` (`diviceName`, `type`, `controlDeviceId`, `maker`, `locationInHouse`) VALUES ('".$devicename."', '".$type."', '".$controlDeviceId."', '".$Maker."','".$locationInHouse."')";
        $result = $con->query($sql);
        if (!$result) {
            die("INvalid query:"  . $con->error);  
        }
        $con->close();
        echo "Device add successfully!";
        
    }
    public function update($con,$id,$devicename,$type,$controlDeviceId,$Maker,$locationInHouse)
 
    {
       
        $sql = "UPDATE `device` SET `diviceName`='$devicename',`type`='$type',`controlDeviceId`='$controlDeviceId',`maker`='$Maker',`locationInHouse`='$locationInHouse'  WHERE id='$id'";
        $result = $con->query($sql);
        if (!$result) {
            die("INvalid query:"  . $con->error);  
        }
        $con->close();
        echo "Device update successfully!";
        
    }
}