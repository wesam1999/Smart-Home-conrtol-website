<?php
class DAL_news
{
    public function read($con)
    {
        $sql =  "SELECT * FROM news";
        $result = $con->query($sql);
        if (!$result) {
            die("INvalid query:"  . $con->error);
        }
        return $result;
    }
    public function readOne($con,$id)
    {
        $sql =  "SELECT * FROM news WHERE $id";
        $result = $con->query($sql);
        if (!$result) {
            die("INvalid query:"  . $con->error);
        }
        return $result;
    }
    public function update($con,$id)
    {
        if (!$con) {
            return " Database connceted is failed";
        }
        $sql =  "UPDATE news SET `Status`=false WHERE id=$id";
         $con->query($sql);
         $con->close(); 
        return "Update access";
    }
    public function Delete($id, $con)
    {
        $sql = "DELETE FROM news WHERE id=$id";
        $result = $con->query($sql);
        if (!$result) {
            die("INvalid query:"  . $con->error);  
        }
        $con->close();
        echo "User deleted successfully!";
        
    }
}