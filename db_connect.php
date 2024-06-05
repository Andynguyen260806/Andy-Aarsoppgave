<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);


    $server = "localhost";
    $user = "root";
    $pw = "admin";
    $db = "Oppdrag";

    $conn = mysqli_connect($server, $user, $pw, $db);

    if(!$conn) {
        echo "Connection failed!";        
    }
