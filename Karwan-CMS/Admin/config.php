<?php
session_start();

global $connection;


$connection = mysqli_connect('localhost', 'root', '', 'karawan_lab');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'karawan_lab');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}


?>