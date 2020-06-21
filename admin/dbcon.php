<?php
const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DBNAME = 'result_db';

$dbcon = new mysqli(HOST,USERNAME,PASSWORD,DBNAME);

if ($dbcon->connect_error) {
  die("connection failed".$dbcon->connect_error);
}


?>
