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
 <?php if (isset($_SESSION['error'])) echo '<div id="error">'.$_SESSION['error'].'</div>';?>
  <form action="login" method="post">
    <h1>Identification</h1>
    <input type="text" name="login" placeholder="login"/>
    <input type="password" name="password" placeholder="password"/>
    <button type="submit">login</button>
  </form>
</body>
</html>
<?php unset($_SESSION['error']);?>