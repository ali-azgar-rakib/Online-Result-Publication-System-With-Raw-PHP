<?php
require_once 'dbcon.php'; 
$id = base64_decode($_GET['id']);
echo $deactive_query = "UPDATE users SET status=2 WHERE id=$id";
$result = $dbcon->query($deactive_query);
header('location: approve_user.php');
?>