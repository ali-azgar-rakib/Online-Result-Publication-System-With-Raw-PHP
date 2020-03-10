<?php
session_start();
session_destroy();
$_SESSION['pass_change_success'] = "Your password change successfully.You can login now";
header('location: logout_page.php');

?>
