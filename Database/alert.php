<?php
class alert
{
    private $id;
    private $name;
    private $notificraion;
    private $description;
    private $dateTime;
    private $img;
    private $shortDescription;
    private $status;

    public function alert($id, $name, $notificraion, $description, $dateTime,$img,$shortDescription,$status)
    {
        $this->id = $id;
        $this->name = $name;
        $this->notificraion = $notificraion;
        $this->description = $description;
        $this->dateTime = $dateTime;
        $this->img = $img;
        $this->shortDescription = $shortDescription;
        $this->status = $status;
    }

    function _getid()
    {
        return $this->id;
    }

    function _getname()
    {
        return $this->name;
    }
    function _getnotificraion()
    {
        return $this->notificraion;
    }
    function _getdescription()
    {
        return $this->description;
    }
    function _getdateTime()
    {
        return $this->dateTime;
    }
    function _getimg()
    {
        return $this->img;
    }
    function _getshortDescription()
    {
        return $this->shortDescription;
    }
    function _getstatus()
    {
        return $this->status;
    }
    function _setid($id)  {
        $this->id=$id;
    }
    function _setname($name)  {
        $this->name=$name;
    }
    function _setnotificraion($notificraion)  {
        $this->notificraion=$notificraion;
    }
    function _setdescription($description)  {
        $this->description=$description;
    }
    function _setdateTime($dateTime)  {
        $this->dateTime=$dateTime;
    }
    function _setimg($img)  {
        $this->img=$img;
    }
    function _setshortDescription($shortDescription)  {
        $this->shortDescription=$shortDescription;
    }
    function _setstatus($status)  {
        $this->status=$status;
    }
}
