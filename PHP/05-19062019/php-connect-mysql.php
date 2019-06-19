<?php
    function connectDB($servername, $username, $password) {
        $servername = "localhost";
        $username = "root";
        $password = "abc@123";
        // Create connection
        $conn = mysqli_connect($servername, $username, $password);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $conn;
        }
        
?>