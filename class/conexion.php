<?php

    $servername = "localhost";
    $username = "rok";
    $password = "admin";
    $dbname = "mi_base";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

  
    
?>