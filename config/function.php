<?php
session_start();
require 'dbcon.php';

function validate($inputData){
    global $conn;
    return mysqli_real_escape_string($conn, $inputData);
}
function redirect($url, $status){
    $_SESSION['status'] = "Please fill all the fields.";
    header('location:'.$url);
    exit(0);
}

function getAll($tableName){
    global $conn;
    $table = validate($tableName);

    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    return $result;
}

function getCount($tableName)
{
    global $conn;
    $table = validate($tableName); 
    $query = "SELECT * FROM $table";
    $result = mysqli_query($conn, $query);
    $totalCount = mysqli_num_rows($result);
    return $totalCount;
}
?>