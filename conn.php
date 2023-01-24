<?php
// set session true
session_start();

// set timezone jakarta
date_default_timezone_set('Asia/Jakarta');

// database
$host   = 'localhost';
$user   = 'root';
$pass   = '';
$db     = 'undangan';

// connection
$conn = mysqli_connect($host, $user, $pass, $db);

// Check connection
if (mysqli_connect_errno()) {
  echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
  exit();
}
?>