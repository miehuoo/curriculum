<?php

$hostName = 'localhost';
$dbName = '';
$dbUsername = 'root';
$dbPassword = '';

$conn = mysqli_connect($hostName, $dbUsername, $dbPassword, $dbName);

if(!$conn){
    die("connection failed: ". mysqli_connect_error());
}else{
    echo "Connected successfully";
};

