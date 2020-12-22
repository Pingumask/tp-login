<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
  </head>
  <body>
    <header><a href="deco" class="button">Deconnexion</a></header>
    <table id="userInfo"><?php
      foreach ($_SESSION['user'] as $property => $value){
        echo "<tr>
                <th>$property</th>
                <td>$value</td>
              </tr>";
      }?>  
    </table>
      
  </body>
</html>
