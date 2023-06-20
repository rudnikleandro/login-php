<?php

$name = "localhost";
$user = "root";
$password = "";
$dbname = "loginsystem_db";

$conn = mysqli_connect($name, $user, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}