<?php
    $host = 'localhost';
    $username = "root";
    $password = "";
    $database = "crime_reporting";

    $conn = mysqli_connect($host,$username,$password,$database);

    if(!$conn){
        die();
    }