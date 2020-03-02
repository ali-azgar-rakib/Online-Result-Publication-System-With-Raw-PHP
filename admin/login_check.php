<?php
session_start();
require_once 'dbcon.php';


if (isset($_SESSION['user_login'])) {
  header('location: index.php');
}

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
 

  $check_user_name = $dbcon->query("SELECT * FROM users WHERE username='$username'");
  
 

  if ($check_user_name->num_rows > 0) {
    $result = $check_user_name->fetch_assoc();
    if (password_verify($password, $result['password'])) {
      if ($result['status'] == 1) {
        $_SESSION['user_login'] = $username;
        $_SESSION['user_name'] = $result['name'];
        $_SESSION['user_photo'] = "images/". $result['photo'];
        

        header('location: index.php');
      } else {
        $_SESSION['waithing_for_approval']= "waiting for admin approval";
      }
    } else {
      $password_not_match = "password not found";
      header("location: login.php?username=$username&password=".base64_encode($password)."&password_not_match=$password_not_match");
    }
  } else {
    $user_not_match = "user name not found";
    header("location: login.php?username=$username&password=".base64_encode($password)."&user_not_match=$user_not_match");
  }
}


?>




