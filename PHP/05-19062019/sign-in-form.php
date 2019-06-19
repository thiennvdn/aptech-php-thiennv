<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIGN IN</title>
</head>
<body>
    <!-- <h2>SIGN IN:</h2>
    <form action="welcome.php" method="POST">
        Name: <input type="text" name="name" id=""><br><br>
        E-mail: <input type="email" name="email" id=""><br><br>
        Password: <input type="password" name="password" id=""><br><br>
        <input type="submit" value="submit"><br><br>
    </form> -->
    <?php
        require "php-connect-mysql.php";
        $conn = connectDB();
        $select = "SELECT id, name, password FROM ap_18_4.users";
        $result = mysqli_query($conn, $select);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                echo "Name: " . $row["name"]. " - Email: " . $row["email"]. " - Password: " . $row["password"]. "<br>";
            }
        } else {
            echo "0 results";
        }
        
        mysqli_close($conn);
    ?>
</body>
</html>