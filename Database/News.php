<?php
class news
{
    private $id;
    private $title;
    private $description;
    private $time;
    private $img;
    private $name;
    private $shortDescription;
    private $Status;
    public function alert($id, $title, $description, $time, $img, $name, $shortDescription, $Status)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->time = $time;
        $this->img = $img;
        $this->name = $name;
        $this->shortDescription = $shortDescription;
        $this->Status = $Status;
    }

    function _getid()
    {
        return $this->id;
    }
    function _gettitle()
    {
        return $this->title;
    }
    function _getdescription()
    {
        return $this->description;
    }
    function _gettime()
    {
        return $this->time;
    }
    function _getimg()
    {
        return $this->img;
    }
    function _getname()
    {
        return $this->name;
    }
    function _getshortDescription()
    {
        return $this->shortDescription;
    }
    function _getStatus()
    {
        return $this->Status;
    }
    function _setid($id)
    {
        $this->id = $id;
    }

    function _settitle($title)
    {
        $this->title = $title;
    }
    function _setdescription($description)
    {
        $this->description = $description;
    }
    function _settime($time)
    {
        $this->time = $time;
    }
    function _setimg($img)
    {
        $this->img = $img;
    }
    function _setname($name)
    {
        $this->name = $name;
    }
    function _setshortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;
    }
    function _setStatus($Status)
    {
        $this->Status = $Status;
    }
}
