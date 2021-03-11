<?php date_default_timezone_set("Asia/Jerusalem");                             //Get time zone
      echo "<h1 style='color:LightSlateGray; right:500px;'>".date("H:i")."<br/>"; //Display Current date when the user check if this active or not
   ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSSPage.css">
    <title>Document</title>
</head>
<body>

    <h1 class='h1' align='center'>Shabat Clock</h1>
    <div>
      <br/>
      <a href='AllSetting.php'>All Settings</a>
      <hr/>
      <a href='IsActive.php'>Is Active</a>
      <hr/>
      <a href='Custom.php'>Custom</a>
      <hr/>
      <a href='Easy.php'>Easy</a>
    </div>

</body>
</html>