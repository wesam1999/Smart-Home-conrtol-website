<?php
class DAL_alert
{
    public function read($con)
    {
        $sql =  "SELECT * FROM alert";
        $result = $con->query($sql);
        if (!$result) {
            die("INvalid query:"  . $con->error);
        }
        return $result;
    }
    public function readWhenID($con,$id)
    {
        $sql =  "SELECT * FROM alert WHERE id=$id";
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
        $sql =  "UPDATE alert SET Status=FALSE WHERE id=$id";
         $con->query($sql);
         $con->close(); 
        return "Update access";
    }
    
    public function Delete($id, $con)
    {
        $sql = "DELETE FROM alert WHERE id=$id";
        $result = $con->query($sql);
        if (!$result) {
            die("INvalid query:"  . $con->error);  
        }
        $con->close();
        echo "User deleted successfully!";
        
    }
}
