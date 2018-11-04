<?php
//Jackie Salim
//This creates a connection to the database with the specified parameters

$host = 'courses';
$user = 'z1761458';
$password='1997Jul16';
$db = 'z1761458';
$conn = new PDO("mysql:host=$host;dbname=$db",$user,$password);
try
{
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
  echo 'ERROR: ' . $e->getMessage();
}
?>




