<?php
    $servername = "localhost";
    $username = "root";
    $password = "";


    // Connection
    $connection = mysqli_connect($servername, $username, $password);

    // checking connection establish or not
    if(!$connection){
        die("connection error:" .mysqli_connect_error());
    }

    // creating new database

    $sql = "CREATE DATABASE halaman_bookstore";
    if (mysqli_query($connection, $sql)) {
        echo "Database creatde succesfully";
    } else {
        echo "Error creating database: ". mysqli_error($connection);
    }
    

    // close connection
    mysqli_close($connection);
?>