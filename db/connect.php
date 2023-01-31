<?php
$mysqli = new mysqli("localhost","root","","website_shoppedemo");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
// $mysqli -> set_charset("utf8");

// echo "Current character set is: " . $mysqli -> character_set_name();

session_start();
// 
?>