<?php
session_start();

$users = json_decode(file_get_contents('user.json'));

if (!(isset($_POST['login']) && isset($_POST['password']))){
  $_SESSION['error'] = "Form manipulation detected";
  header('location: ./');
  exit;
}

if (($_POST['login']==null || $_POST['password']==null)){
  $_SESSION['error'] = "All fields are required";
  header('location: ./');
  exit;
}

foreach($users as $user){
  if ($_POST['login'] == $user->pseudo && $_POST['password']== $user->password){
    $_SESSION['user'] = $user;
    header('location: ./home');
    exit;
  }
}

$_SESSION['error'] = "Unknown user";
header('location: ./');
exit;
?>