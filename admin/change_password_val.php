<?php 
session_start();
require_once 'dbcon.php';

if (isset($_POST['submit'])) {
	$password = $_POST['old_password'];
	$new_password = $_POST['new_password'];
	$confirm_password = $_POST['confirm_password'];

// ================= check old password match or note ===

	$user_name = $_SESSION['user_login'];
	$username_check = "SELECT * FROM users WHERE username='$user_name'";
	$user_check_result = $dbcon->query($username_check);
	$row = $user_check_result->fetch_assoc();
	if(!password_verify($password,$row['password'])){
		$_SESSION['wrong_password'] = "Enter a right password";
		header('location: change_password.php');
		
	}
// ============= new and old password match or not check ==

	else if(password_verify($new_password,$row['password'])){
		$_SESSION['new_old_match_err'] = "You can't set old password as new password";
		header('location: change_password.php');
	}

	// new password validation

	else if(strlen($new_password) <8 || !preg_match('@[0-9]@',$new_password) || !preg_match('@[a-z]@',$new_password) || !preg_match('@[A-Z]@',$new_password)){
		$_SESSION['new_pass_val'] = "Enter a 8 length password with uppercase(A,B,..) and lowercase (a,b,..) letter";
				header('location: change_password.php');
	}

	// new and confirm pass match or not 

	else if($new_password != $confirm_password){
		$_SESSION['new_con_not_match'] = "Confirm password not matched";
		header('location: change_password.php');
	}
	else{
		$hash_new_password = password_hash($new_password,PASSWORD_BCRYPT);
		$pass_update = "UPDATE users SET password='$hash_new_password' WHERE username='$user_name'";
		$update_result = $dbcon->query($pass_update);
		

			$_SESSION['pass_change_success'] = "Your password change successfully.You login now";
				header("location: logout.php");
		
	}
}





?>