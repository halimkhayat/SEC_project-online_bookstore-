<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "halaman_bookstore";

            // create connection
            $conn = mysqli_connect($servername, $username, $password, $database);
            // check connection
            if(!$conn) {
                die("connection errror: ". mysqli_connect_error());
            }

            // get info from the form below:
            $id = $_REQUEST['id'];
            $query = "SELECT * FROM customer_db WHERE id='".$id."' ";
            $result = mysqli_query($conn, $query) or die(mysqli_error());
            $row = mysqli_fetch_assoc($result);

            if(isset($_POST['new']) && $_POST['new'] == 1) {
                $id = $_REQUEST['id'];
                $name = $_REQUEST['name'];
                $address = $_REQUEST['address'];
                $email = $_REQUEST['email'];
                $phone = $_REQUEST['phone'];

                // database update with query
                $sql = "UPDATE customer_db SET name='".$name."', address='".$address."', email='".$email."', phone='".$phone."'
                        WHERE id='".$id."' ";

                if (mysqli_query($conn, $sql)) {
                    echo "database was updated successfully";
                    echo "<a href='view_data.php'>View update here</a>";
                } else {
                    echo "could not execute query: $sql". mysqli_error($conn);
                    }
            }
        
        ?>

        <form action="" method="post">
            <input type="hidden" name="new" value="1">
            <input type="hidden" name="id" value="<?php echo $row['id']?>">

            <p> <input type="text" name="name" placeholder="name" value="<?php echo $row['name']; ?>"> </p>
            <p> <input type="text" name="email" placeholder="say@mail.com" value="<?php echo $row['email']; ?>"> </p>
            <p> <input type="text" name="address" placeholder="address" value="<?php echo $row['address']; ?>"> </p>
            <p> <input type="text" name="phone" placeholder="+60121111" value="<?php echo $row['phone']; ?>"> </p>
            <p> <input type="submit" name="submit" value="update"> </p>
        </form>
    </body>
</html>