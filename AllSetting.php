<?php
include "ObjectMysqli.php";
  $mysqli= new mysql();
   $data=Array();
   if(isset($_GET['value']))
   {
       $date=$mysqli->delSetting($_GET);
       header("location:AllSetting.php");
   }
   else{
        $data= $mysqli->getAllSetting();
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
        border-radius: 7px;
        width: auto;
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
        width: 400px;
        left:0;
        top:0;
        bottom:0;
        right:0;
        margin:auto;
        text-align: center;
    }
    #ts{
        border: 1px solid black;
        border-radius: 7px;
        width: auto;    
        position:absolute;
        color: light
    }
    tr{
        text-align: center;
    }
    tr:hover{
        background-color: SlateGray;
    }
    
    </style>
</head>
<body id='body'>
<h1 class='h1' align='center'>שעון שבת</h1>

<div>
    <table class='table' align='center'>
        <tr style="background-color:DarkRed"><td>מועד</td><td>שעת התחלה</td><td>שעת סיום</td><td>כל יום</td></tr>
        <?php 
        foreach($data as $r){?>
        <tr>
        <td><?php echo $days[$r['Date']]?></td>
        <td><?php echo $r['Start']?></td>
        <td><?php echo $r['end']?></td>
        <?php if($r['Active_all_day']=="True"){?>
        <td style='background-color:DarkGreen'><?php echo $r['Active_all_day']?></td>
        <?php }?>
        <?php if($r['Active_all_day']=="False"){?>
        <td style='background-color:DarkRed'><?php echo $r['Active_all_day']?></td>
        <?php }?>
        <td>
        
        <form method="get" action="">
        <button  name='value' value='<?php echo $r['id'] ?>'> מחק </button>
         </form>
        </td>
        </tr>
        <?php }?>
    </table>

      <tbody>
      <a href='Custom.php'>הזנה רגילה</a>
      <a href='IsActive.php'>סטטוס</a>
      <a href='Easy.php'>ההזנה בדקות</a>
      </tbody>
        </div>

    </body>
</html>