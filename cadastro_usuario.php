<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = 'ludofashion';

$connect = mysqli_connect($servername,$username,$password,$db_name);
if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}