   <?php date_default_timezone_set("Asia/Jerusalem");
      echo "<h1 style='color:LightSlateGray; right:500px;'>".date("H:i")."<br/>";
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
        background: LightSlateGray;
        border: 5px outset red; 
        border-radius:15px; 
        position:absolute;
        height: 40px;
        width: 200px;
        left:765px;
        top:73px;
        bottom:0;
        right:0;
        text-align: center;
    }
    div{
        z-index:1;
        background: LightSlateGray;
        border: 5px outset DarkRed; 
        border-radius:15px; 
        position:absolute;
        height: 480px;
        width: 253px;
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
<div id="pik">
      <?php 
      include "ObjectMysqli.php";
      $mysqli= new mysql();
      date_default_timezone_set("Asia/Jerusalem");
      $dayName=date("l");
      $clock=date("H:i");
      $isActive = $mysqli->checkIfInDB($dayName,$clock);
      if($isActive){?>
      <h1 style='background-color: red;border: 4px outset black;border-radius:10px;'>OnLine</h1>
      <h1 style='background-color: white;color:red; font-size: 110px; border: 4px outset black;border-radius:10px;'>O</h1>
      <?php }else{?>
        <h1 style='background-color: DarkRed;border: 4px outset black;border-radius:10px;'>OffLine</h1>
      <h1 style='background-color: white;color:black; font-size: 110px; border: 4px outset black;border-radius:10px;'>O</h1>
      <?php }?>
      <tbody>
      <a href='AllSetting.php'>לכל ההגדרות</a>
      <a href='Custom.php'>הזנה רגילה</a>
      <a href='Easy.php'>הזנה מיידית</a>
      </tbody>
        </div>
  </body>
</html>