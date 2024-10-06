<?php
class Database
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "smarthome";

    function getConnection()
    {
        $con = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($con->connect_error) {
            die("connection faild" . $con->connect_error);
        }
        return $con;
    }
}
