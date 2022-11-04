<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "halaman_bookstore";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn) {
        die("Connection lost. Ther error: ". mysqli_connect_error());
    }

    $id = $_REQUEST['id'];

    $sql = "DELETE FROM customer_db WHERE id=$id";

    if(mysqli_query($conn, $sql)) {
        echo "record was successfully deleted";
        header("Location: view_data.php");
    } else {
        echo "could not delete database: ". mysqli_error($conn);
    }

    mysqli_close($conn);
?>