<?php
if(isset($_GET['id'])){
  require_once('dbcon.php');
  $id = base64_decode($_GET['id']);
  $d_result = $dbcon->query("DELETE FROM students WHERE id='$id'");
  header('location: all_student.php');


}

?>
