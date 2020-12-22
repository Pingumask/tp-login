<?php
session_start();

$users = json_decode(file_get_contents('user.json'));

if (!(isset($_POST['login']) && isset($_POST['password']))){
  $_SESSION['error'] = "all fields are required";
  header('location: ./');
}

foreach($users as $user){
  if ($_POST['login'] == $user->pseudo && $_POST['password']== $user->password){
    $_SESSION['user'] = $user;
    header('location: ./home');
    exit;
  }
}

$_SESSION['error'] = "unknown user";
header('location: ./');
exit;
?>