<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'adivaaram';

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn) {
    die("error");
} 

?>