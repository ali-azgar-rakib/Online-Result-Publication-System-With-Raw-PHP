<?php
session_start();
require_once 'dbcon.php';
$user_name = $_SESSION['user_login'];

if(isset($_POST['upload'])){
    $photo= $_FILES['photo']['name'];
    $photo_ext = explode('.',$photo);
    $photo_temp = end($photo_ext);
    $photo_name = $user_name.'.'.$photo_temp;
    $photo_query = $dbcon->query("UPDATE users SET photo='$photo_name' WHERE username='$user_name'");
    if($photo_query){
        move_uploaded_file($_FILES['photo']['tmp_name'],'images/'.$photo_name);
        header("location: profile.php");
    }
}
?>