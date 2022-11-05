<?php
    $servername ="localhost";
    $username = "root";
    $password = "";
    $database = "halaman_bookstore";

    // creating connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // checking connection
    if(!$conn) {
        die("Unable to connect: ".mysqli_connect_error());
    }

    // creating new table in database
    $sql = "CREATE TABLE customer_db (
                id INT(10) PRIMARY KEY AUTO_INCREMENT,
                name VARCHAR(255),
                email VARCHAR(255),
                address VARCHAR(255),
                phone VARCHAR(255)

    )";

    if (mysqli_query($conn, $sql)) {
        echo "Table created sucessfully";
    } else {
        echo "error in creating table: ". mysqli_error($conn);
    }

    mysqli_close($conn);
    

?>