<?php
    $days=Array();
    $days=['Sunday'=>'ראשון','Monday'=>'שני','Tuesday'=>'שלישי','Wednesday'=>'רביעי','Thursday'=>'חמישי','Friday'=>'שישי','Saturday'=>'שבת'];
    
    class mysql{

        private $mysqli;
        function __construct(){
            $this->mysqli= $this->CreateConnectionToDB();
        }
        function CreateConnectionToDB(){
            include 'db_connect.php';
            $mysqli = new mysqli($db_host, $db_user, $db_pass, $db_schema);
            return $mysqli;
        }
        function delSetting($get){
            $data1=Array();
            $query1="DELETE FROM `setting_of_saturday_time` WHERE `id`='".$get['value']."'";
            $result= mysqli_query($this->mysqli,$query1);
         
            $data1=$this->getAllSetting();
            return $data1;
        }
        function getAllSetting(){
            $data=Array();
            $query="SELECT * FROM `setting_of_saturday_time`";
            $result= mysqli_query($this->mysqli,$query);
            while($row= mysqli_fetch_assoc($result)){
                    $data[]=['id'=>$row['id'],'Date'=>$row['Date'],'Start'=>$row['Start'],'end'=>$row['end'],'Active_all_day'=>$row['Active_all_day']];
                }
            
                return $data;
        }
        function insertNewSetting($get){
            $query="INSERT INTO `setting_of_saturday_time` (`Date`, `Start`, `end`, `Active_all_day`) VALUES ('".$get['time']."','".$get['start']."','".$get['end']."','".$get['allDay']."');";
            $result = mysqli_query($this->mysqli,$query);
            return $result;
        }
        function checkIfInDB($dayName,$clock){
            $q1="SELECT* FROM `setting_of_saturday_time` WHERE (`Date`='".$dayName."' OR `Active_all_day`='True') AND ((`Start`>`end` AND `Start`<='".$clock."') OR ( `Start`<='".$clock."' AND `end` >'".$clock."'))";
            $r1 = mysqli_query($this->mysqli,$q1);
            $ret=(mysqli_num_rows($r1) > 0) ? true : false;
            return $ret;
        }
    }