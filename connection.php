<?php
    // Database connection settings
    $host = 'localhost';  // Replace with your database host
    $username = "root";  // Replace with your database username
    $password = "Papidm@462002";  // Replace with your database password
    $database = 'durga';  // Replace with your database name

    // Create database connection
    $conn = mysqli_connect($host, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    // else{
    //     echo "Connected successfully";      
    // }

    


    ?>

