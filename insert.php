<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "halaman_bookstore";

    // creating connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // checking for connection error
    if(!$conn){
        die("there is connection error: ". mysqli_connect_error());
    }

    // request information from the form
    if(isset($_POST['new']) && $_POST['new'] == 1) {

        $person_name = $_REQUEST['person_name'];
        $email = $_REQUEST['email'];
        $address = $_REQUEST['address'];
        $phone = $_REQUEST['phone'];

        //query to insert data into database
        $sql = "INSERT INTO customer_db (name, email, address, phone)
                VALUES ('$person_name', '$email', '$address', '$phone')";

        if(mysqli_query($conn, $sql)) {
            echo "new data successfully added <br>";
            echo "<a href='view_data.php'>View data here</a>";
        } else {
            echo "insert data error: ". mysqli_error($conn);
        }
    }

    mysqli_close($conn);

?>