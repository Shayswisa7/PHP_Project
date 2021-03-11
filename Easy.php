<?php
include "ObjectMysqli.php";                                                    //Create a include for craeting connection object to data baes
$mysqli= new mysql();                                                          //Create a connection to database 
date_default_timezone_set("Asia/Jerusalem");                                   //Get time zone
$sum=0;
    if(isset($_GET['end']))
    $sum+=15;
    if(isset($_GET['end1']))
    $sum+=30;
    if(isset($_GET['end2']))
    $sum+=60;
    if(isset($_GET['end3']))
    $sum+=120;
$_GET["start"] =date("H:i");                                                   //Default value .The time now
$_GET["time"] =date("l");                                                      //Default value The dayname now
$_GET["allDay"] =isset($_GET["allDay"])?"True":"False";                        //Difeult value for the option AllDay is false 
echo "<h1 style='color:LightSlateGray; right:500px;'>".date("H:i")."<br/>";    //Display Current date when the user choose the time
if($sum>0){                                                                    //Check if $GET['end'] is not empty
    $_GET['end']=date("H:i",strtotime("+".$sum."minutes"));
    $result= $mysqli->insertNewSetting($_GET);                                 //Insert into the database all the value then in array $GET
    if($result){                                                               //Check if the query is complete
        echo "<h1>בוצע</h1>";
    }
  
}
    else if(isset($_GET['butt'])){                                                                      //show an error
        echo "<h1>לא בוצע</h1>";
    }
?>
<!DOCTYPE html>
<html  lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSSPage.css">
    <title>Document</title>
</head>
<body >
<h1 class='h1' align='center'>Shabat Clock</h1>
<div class='odd' ></div>
<div>
      <form method="get" action="">
      <h1>Range:</h1>
      <input type='checkbox' name="end" value="1"/>15 min
      <input type='checkbox' name="end1" value="2"/>30 min
      <input type='checkbox' name="end2" value="3"/>60 min 
      <input type='checkbox' name="end3" value="4" />120 min
      <hr/>
      <button style="background-color: rgb(91, 187, 91); border-radius: 5px;" name="butt">Send</button>
      </form>
      <tbody>
      <a href='AllSetting.php'>All Settings</a>
      <a href='IsActive.php'>Is Active</a>
      <a href='Custom.php'>Custom</a>
      <a href='StartPage.php'>Start Page</a>
      </tbody>
        </div>
</body>
</html>
