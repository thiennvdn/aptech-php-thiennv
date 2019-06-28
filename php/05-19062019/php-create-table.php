<?php 
    require "php-connect-mysql.php";
    $conn = connectDB();
    $table = "CREATE TABLE ap_18_4.users(
        id int auto_increment primary key,
        name varchar(50),
        email varchar(100) unique,
        password varchar(50)
    )";
    if (mysqli_query($conn,$table)) {
        echo "Table users created successfully";
    } else {
        echo "Error creating table: ". mysqli_error($conn);
    }

    mysqli_close($conn);
?>