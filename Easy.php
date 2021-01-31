<?php
include "ObjectMysqli.php";
$mysqli= new mysql();
date_default_timezone_set("Asia/Jerusalem");
$_GET["start"] =date("H:i");
$_GET["time"] =date("l"); 
$_GET["allDay"] =isset($_GET["allDay"])?"True":"False";
echo "<h1 style='color:LightSlateGray; right:500px;'>".date("H:i")."<br/>";
if(isset($_GET['end'])){
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
        left:765px;
        top:185px;
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
        height: 300px;
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
<body >
<h1 class='h1' align='center'>שעון שבת</h1>
<div class='odd' ></div>
<div>
      <form method="get" action="">
      <h1>:שעת סיום</h1>
      <input type='time' name="end" value=""/>
      <hr/>
      <button>בצע</button>
      </form>
      <tbody>
      <a href='AllSetting.php'>לכל ההגדרות</a>
      <a href='IsActive.php'>סטטוס</a>
      <a href='Custom.php'>ההזנה רגילה</a>
      </tbody>
        </div>
</body>
</html>