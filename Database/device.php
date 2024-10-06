<?php
class Device{
private $id;
private $deviceName;
private $type;
private $controlDeviceId;
private $maker;
private $locationInHome;
public function device($deviceName,$type,$controlDeviceId,$maker,$locationInHome){
$this->deviceName=$deviceName;
$this->type=$type;
$this->controlDeviceId=$controlDeviceId;
$this->maker=$maker;
$this->locationInHome=$locationInHome;
} 
function _getid()
{
    return $this->id;
}
function _getdeviceName(){
    return $this->deviceName;

}
function _gettype(){
    return $this->type;
}
function _getcontrolDeviceId(){
    return $this->controlDeviceId;
}

function _getmaker(){
    return $this->maker;
}
function _getlocationInHome(){
    return $this->locationInHome;
}

function _setid($id)  {
    $this->id=$id;
}
function _setdeviceName($deviceName){
$this->deviceName=$deviceName;

}
function _setcontrolDeviceId($controlDeviceId){
    $this->controlDeviceId=$controlDeviceId;
}
function _setmaker($maker){
$this->maker->$maker;
}
function _setlocationInHome($locationInHome){
$this->locationInHome=$locationInHome;
}
}
?>