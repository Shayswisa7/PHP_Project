   <?php date_default_timezone_set("Asia/Jerusalem");                             //Get time zone
      echo "<h1 style='color:LightSlateGray; right:500px;'>".date("H:i")."<br/>"; //Display Current date when the user check if this active or not
   ?>
      <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSSPage.css">
        <title>Document</title>
</head>
<body id='body'>
<h1 class='h1' align='center'>Shabat Clock</h1>
<div>
      <?php 
      include "ObjectMysqli.php";
      $mysqli= new mysql();
      date_default_timezone_set("Asia/Jerusalem");
      $dayName=date("l");
      $clock=date("H:i");
      $isActive = $mysqli->checkIfInDB($dayName,$clock);                          // Check if is active
      if($isActive){?>
      <h1 style='background-color: red;border: 4px outset black;border-radius:10px;'>On</h1>
      <h1 style='background-color: red;color:black; font-size: 110px; border: 4px outset black;border-radius:10px;'>O</h1>
      <?php }else{?>
        <h1 style='background-color: DarkRed;border: 4px outset black;border-radius:10px;'>Off</h1>
      <h1 style='background-color: DarkRed;color:black; font-size: 110px; border: 4px outset black;border-radius:10px;'>O</h1>
      <?php }?>
      <tbody>
      <a href='AllSetting.php'>All Settings</a>
      <a href='Custom.php'>Custom</a>
      <a href='Easy.php'>Easy</a>
      <a href='StartPage.php'>Start Page</a>
      </tbody>
        </div>
  </body>
</html>