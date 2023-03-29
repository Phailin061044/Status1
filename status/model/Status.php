<?php
class Status{
    private $ConDB;
    public function __construct(){
        $con = new ConDB();
        $con->connect();
        $this->ConDB = $con->conn;
    }

    public function getStatus()
    {
        $sql = "SELECT * FROM status_room order by number_id asc";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }else {
            return false;
        }
    }

    
    public function addUser($data_users)
    {
        $sql =  "INSERT INTO `status_room`(id, fname, lname, study_group, tell, time_open, room, teacher, name_close, time_close, )  
        $sql .= ('$id', '$fname', '$lname','$study_group', '$tell', '$time_open', '$room', '$teacher', '$name_close', '$time_close')";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute($data_users)){
            return true;
        }else {
            return false;
        }
    }

    
    
    
    
    
    public function delCourse($k_id)
    {
        $sql = "DELETE FROM `agency` WHERE `agency_id`='".$k_id."'";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            return true;
        }else {
            return false;
        }
    }

    public function editCourse($a_id, $a_name, $a_context, $a_pic, $a_location)
    {
        $sql = "UPDATE `agency` SET `agency_name` = '". $a_name ."', `agency_context` = '". $a_context ."', `agency_pic` = '". $a_pic ."', `agency_location` = '". $a_location ."' WHERE `agency_id` = '". $a_id ."'";
        $query = $this->ConDB->prepare($sql);
        if( $query->execute()){
            return true;
        }else {
            return false;
        }
    }
	
}
?>