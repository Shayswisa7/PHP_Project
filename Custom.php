<?php
  include "ObjectMysqli.php";
  $mysqli= new mysql();
  date_default_timezone_set("Asia/Jerusalem");
  $_GET["allDay"] =isset($_GET["allDay"])?"True":"False";
  echo "<h1 style='color:LightSlateGray; right:500px;'>".date("H:i")."<br/>";
  $timeNow=date("Y-m-d");
  if(!empty($_GET['time']) && $_GET['time']>=$timeNow){
   $result= $mysqli->insertNewSetting($_GET);
  if($result){
      echo "<h1>בוצע</h1>";
  }
  else{
      echo "<h1>לא בוצע</h1>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body{
        background: url('pik.jpg');

    }
    td{
        border: 1px solid black;
        width: 20px;
        color: white;
    }
    h1{
        color: black;
    }
    .f{
        color: white;
    }
    .h1{
        z-index:2;
        background-color:LightSlateGray;
        border: 5px outset red; 
        border-radius:15px; 
        position:absolute;
        height: 40px;
        width: 200px;
        left:767px;
        top:98px;
        bottom:0;
        right:0;
        text-align: center;
    }
    div{
        z-index:1;
        background-color:LightSlateGray;
        border: 5px outset DarkRed; 
        border-radius:15px; 
        position:absolute;
        height: 480px;
        width: 250px;
        left:0;
        top:0;
        bottom:0;
        right:0;
        margin:auto;
        text-align: center;
    }
    </style>
</head>
<body id='body'>
<h1 class='h1' align='center'>שעון שבת</h1>
<div class='odd' ></div>
<div>
      <h1>יום בשבוע</h1>
      <form method="get" action="">
      <select type='date' name="time" value=""> 
      <option value="Sunday">ראשון</option>
      <option value="Monday">שני</option>
      <option value="Tuesday">שלישי</option>
      <option value="Wednesday">רביעי</option>
      <option value="Thursday">חמישי</option>
      <option value="Friday">שישי</option>
      <option value="Saturday">שבת</option>
      </select>
      <hr/>
      <input type='checkbox' name='allDay' value="True" />
      <label for="allDay">כל יום</label>
      <hr/>
      <h1>:שעת התחלה</h1>
      <input type='time' name="start" value=""/>
      <hr/>
      <h1>:שעת סיום </h1>
      <input type='time' name="end" value=""/>
      <hr/>
      <button>בצע</button>
      </form>
      <tbody>
      <a href='AllSetting.php'>לכל ההגדרות</a>
      <a href='IsActive.php'>סטטוס</a>
      <a href='Easy.php'>ההזנה מיידית</a>
      </tbody>
        </div>
</body>
</html>
    