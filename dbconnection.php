<?php

$host = "localhost";
$database = "db";
$username = "root";
$password = "";

$bridge = mysqli_connect($host, $database, $username, $password);

if(!$bridge)
    die("· Connection with the Database Failed.");

echo "· Connection with the Database Established.";

mysqli_close($bridge);

?>