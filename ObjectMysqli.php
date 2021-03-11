<?php
    /*$days=Array();                                                              // Create array for display all daynames 
    $days=['Sunday'=>'ראשון','Monday'=>'שני','Tuesday'=>'שלישי','Wednesday'=>'רביעי','Thursday'=>'חמישי','Friday'=>'שישי','Saturday'=>'שבת'];*/  // not used 
    
    class mysql{

        private $mysqli;
        function __construct(){ 
            $this->mysqli= $this->CreateConnectionToDB();                      //Create "object connection"
        }
        function CreateConnectionToDB(){                                       // Create connection to the database
            include 'db_connect.php';                                          // Include all the parameter for the connection 
            $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_schema);    // Create new object mysqli
            return $mysqli;                                                    //Return the object
        }
        function delSetting($get){                                             //delete function get orgument with id for delete line in database
            $data1=Array();                                                    //Create an array of all new settings
            $query1="DELETE FROM `setting_of_saturday_time` WHERE `id`='".$get['value']."'";//Create cuery 
            $result= mysqli_query($this->mysqli,$query1);
         
            $data1=$this->getAllSetting();                                 
            return $data1;                             
        }
        function getAllSetting(){ 
            $data=Array();
            $query="SELECT * FROM `setting_of_saturday_time`";                 //Create cuery 
            $result= mysqli_query($this->mysqli,$query);
            while($row= mysqli_fetch_assoc($result)){                          //Create array for display all setting
                    $data[]=['id'=>$row['id'],'Date'=>$row['Date'],'Start'=>$row['Start'],'end'=>$row['end'],'Active_all_day'=>$row['Active_all_day']];
                }
            
                return $data;
        }
        function insertNewSetting($get){                                       // Insert function ,get argument to insert into databse
            $query="INSERT INTO `setting_of_saturday_time` (`Date`, `Start`, `end`, `Active_all_day`) VALUES ('".$get['time']."','".$get['start']."','".$get['end']."','".$get['allDay']."');";
            $result = mysqli_query($this->mysqli,$query);
            return $result;
        }
        function checkIfInDB($dayName,$clock){                                 //A function that accepts two arguments of the time and day now and checks if there is activity
            $q1="SELECT* FROM `setting_of_saturday_time` WHERE (`Date`='".$dayName."' OR `Active_all_day`='True') AND ((`Start`>`end` AND `Start`<='".$clock."') OR ( `Start`<='".$clock."' AND `end` >'".$clock."'))";
            $r1 = mysqli_query($this->mysqli,$q1);
            $ret=(mysqli_num_rows($r1) > 0) ? true : false;
            return $ret;
        }
    }