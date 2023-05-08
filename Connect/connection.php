<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tgsindividu";

    // Menyambungkan Database
    $connect = mysqli_connect($host, $username, $password, $dbname);
    if(!$connect) 
    {
        die("Tidak Dapat Terhubung ke Database: " . mysqli_connect_error());
    }
