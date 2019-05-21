<?php
/**
 * Created by PhpStorm.
 * User: hj
 * Date: 8/16/2017
 * Time: 2:43 AM
 */

require_once "DAL.php";
class BL
{
    public $dal;
    function __construct()
    {
        $this->dal=new DAL("localhost","root","","dr");
    }//construct


    public function checkUser($username,$password)
    { $sql2 = "select * from doct WHERE username='".$username ."'and password='".$password ."'";
       return $result= $this->dal->executeSelect($sql2);
    }

    public function SignUp($name,$username,$id,$password)
    { $sql = "INSERT INTO doct(DocName,username,id,password)".
        "VALUES ('".$name."','".$username."',".$id.",'".$password."');";

        return $this->dal->executeSelect($sql);
    }

    public function DR_dropdown_menu()
    { $sql = "select * from doct";
        return $this->dal->executeSelect($sql);
    }

    public function make_appointment($name,$id,$age,$major,$phone,$time,$doc)
    { $sql = "INSERT INTO appointment(name,id_num,age,major,phone_no,date,doc_name)".
        "VALUES ('".$name."',".$id.",".$age.",'".$major."',".$phone.",'".$time."','".$doc."');";
        return $this->dal->executeSelect($sql);
    }
    public function booked_appointment($name)
    {     $sql = "SELECT * FROM appointment where doc_name='$name'";
        return $this->dal->executeSelect($sql);
    }


}//end class