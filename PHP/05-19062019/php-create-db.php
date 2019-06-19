<?php
    require "php-connect-mysql.php";
    $conn = connectDB();
    $sql = "CREATE DATABASE ap_18_4";
    if (mysqli_query($conn,$sql)) {
        echo "<br>";
        echo "Database created successfully";
    } else {
        echo "Error creating database: ". mysqli_error($conn);
    }
    mysqli_close($conn);
?>