<?php

function fetchDatabase($connect, $tableName){
    $defVar = $connect->prepare("SELECT * FROM $tableName");
    return $defVar->execute();
};