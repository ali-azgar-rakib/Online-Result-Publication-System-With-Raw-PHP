<?php
require_once 'dbcon.php'; 
$id = base64_decode($_GET['id']);
echo $active_query = "UPDATE users SET status=1 WHERE id=$id";
$result = $dbcon->query($active_query);
header('location: approve_user.php');
?>