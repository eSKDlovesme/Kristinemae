<?php
$host = "localhost";
$dbname = "kristinelogin";
$username = "root";
$password = "";

$mysqli = new mysqli($host, $username, $password, $dbname);

if($mysqli->connect_error)
{
  die("Connection Error: " . $mysqli->connect_error);
}

$mysqli->autocommit(true);
?>
