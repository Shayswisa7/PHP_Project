<?php
include "ObjectMysqli.php";               //Create a include for craeting connection object to data baes
  $mysqli= new mysql();                   //Create a connection to database 
   $data=Array();                         //Create array for display all the setting in the database
   if(isset($_GET['value']))              //If value exists then the the line is deleted
   {
       $date=$mysqli->delSetting($_GET);
       header("location:AllSetting.php"); //Return to sime page after deleted
   }
   else{
        $data= $mysqli->getAllSetting(); //Insert all setting to $data 
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
<body id='body'>
<h1 class='h1' align='center'>Shabat Clock</h1>
<div>
    <table class='table' align='center'>
        <tr style="background-color:DarkRed"><td>Day</td><td>Start</td><td>End</td><td>All day</td></tr>
        <?php 
        foreach($data as $r){?>
        <tr>
        <td><?php echo $r['Date']?></td>
        <td><?php echo $r['Start']?></td>
        <td><?php echo $r['end']?></td>
        <?php if($r['Active_all_day']=="True"){?>
        <td style='background-color:DarkGreen'>V</td>
        <?php }?>
        <?php if($r['Active_all_day']=="False"){?>
        <td style='background-color:DarkRed'>-</td>
        <?php }?>
        <td>
        <form method="get" action="">
        <button  name='value' value='<?php echo $r['id'] ?>' style='border-radius: 5px; background-color:DarkRed; color: white;'> X</button>
         </form>
        </td>
        </tr>
        <?php }?>
    </table>
      <tbody>
      <a href='Custom.php'>Custom</a>
      <a href='IsActive.php'>Is Active</a>
      <a href='Easy.php'>Easy</a>
      <a href='StartPage.php'>Start Page</a>
      </tbody>
        </div>

    </body>
</html>