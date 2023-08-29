<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'angela_fan_community_ispm_test';

$connection = mysqli_connect($host, $user, $pass, $database);

if($connection->connect_error){
    die("Connection failed".$connection->connect_error);
}


?>