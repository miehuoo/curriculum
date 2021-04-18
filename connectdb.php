<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "universdb";
$dsn = "mysql:host=$db_host;dbname=$db_name";

try{
    $conn = new PDO($dsn, $db_user,$db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    $e->getMessage();
}
  
