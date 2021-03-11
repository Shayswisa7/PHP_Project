<?php
  include "ObjectMysqli.php";                                                 //Create a include for craeting connection object to data baes
  $mysqli= new mysql();                                                       //Create a connection to database 
  date_default_timezone_set("Asia/Jerusalem");                                //Get time zone
  $_GET["allDay"] =isset($_GET["allDay"])?"True":"False";                     //Difeult value for the option AllDay is false 
  echo "<h1 style='color:LightSlateGray; right:500px;'>".date("H:i")."<br/>"; //Display Current date when the user choose the time
  if(!(empty($_GET['time']) || empty($_GET['start']) || empty($_GET['end']))){//Check that the user did not leave details
   $result= $mysqli->insertNewSetting($_GET);                                 //Insert into the database all the value then in array $GET
  if($result){                                                                //Check if the query is complete
      echo "<h1>בוצע</h1>";
  }
  else{
      echo "<h1>לא בוצע</h1>";
  }
}
  else if(isset($_GET['start'])) {                                            //A test that actually showed an error
    echo "<h1>לא בוצע</h1>";
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSSPage.css">
    <title>Document</title>
</head>
<body>
<h1 class='h1' align='center'>Shabat Clock</h1>
<div>
      <h1>Day:</h1>
      <form method="get" action="">
      <select type='date' name="time" value=""> 
      <option value="Sunday">Sunday</option>
      <option value="Monday">Monday</option>
      <option value="Tuesday">Tuesday</option>
      <option value="Wednesday">Wednesday</option>
      <option value="Thursday">Thursday</option>
      <option value="Friday">Friday</option>
      <option value="Saturday">Saturday</option>
      </select>
      <hr/>
      <input type='checkbox' name='allDay' value="True" />
      <label for="allDay">All Day</label>
      <hr/>
      <h1>Start:</h1>
      <input type='time' name="start" value=""/>
      <hr/>
      <h1> End: </h1>
      <input type='time' name="end" value=""/>
      <hr/>
      <button style="background-color: rgb(91, 187, 91); border-radius: 5px;">Send</button>
      </form>
      <tbody>
      <a href='AllSetting.php'>All Settings</a>
      <a href='IsActive.php'>Is Active</a>
      <a href='Easy.php'>Easy</a>
      <a href='StartPage.php'>Start Page</a>
      </tbody>
        </div>
</body>
</html>
    