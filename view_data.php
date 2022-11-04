<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "halaman_bookstore";

    // creating connection with server
    $conn = mysqli_connect($servername, $username, $password, $database);

    // check for connection
    if(!$conn){
        die("Connection failed, please check: ". mysqli_connect_error());
    }

    // database query to present data
    $sql = "SELECT * FROM customer_db";
    if($all = mysqli_query($conn, $sql)) {
        if(mysqli_num_rows($all) > 0) {
            echo "<table>";
            // header of the table
            echo "<tr>";
                echo "<th>Name</th>";
                echo "<th>Email</th>";
                echo "<th>Address</th>";
                echo "<th>Phone Number</th>";
            echo "</tr>";

            // data of th table
            while ($row = mysqli_fetch_array($all)) {
                echo "<tr>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['address']."</td>";
                    echo "<td>".$row['phone']."</td>";
                ?>
                    <td> <a href="update_interface.php?id=<?php echo $row['id'];?>">Edit</a></td>
                    <td> <a href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>

                <?php
                echo "</tr>";
            }
            echo "</table>";
            mysqli_free_result($all);
        } else {
            echo "invalid data";
        }
    } else {
        echo "error ocurred. Could not execute: ". mysqli_error($conn);
    }

    mysqli_close($conn);

?>