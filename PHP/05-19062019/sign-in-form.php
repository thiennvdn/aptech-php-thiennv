<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIGN IN</title>
</head>
<body>
    <h2>SIGN IN:</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        E-mail: <input type="email" name="email" id=""><br><br>
        Password: <input type="password" name="password" id=""><br><br>
        <input type="submit" value="submit"><br><br>
    </form>
    <?php
        require "php-connect-mysql.php";
        $conn = connectDB();
        $email = $_POST["email"];
        $password = $_POST["password"];
        $select = "SELECT * FROM ap_18_4.users WHERE email='$email' AND password = '$password'";
        $result = mysqli_query($conn, $select);
        $row = mysqli_num_rows($result);
        // $arr = mysqli_fetch_all($result,MYSQLI_ASSOC); 
        if ($row == 1) {
            // $selectData = "SELECT * FROM ap_18_4.users";
            // $resultData = mysqli_query($conn, $selectData);
            // while($rowData = mysqli_fetch_assoc($resultData)) {
            //     echo "Name: " . $rowData["name"]. " - Email: " . $rowData["email"]. " - Password: " . $rowData["password"]. "<br>";    
            //     }
            header("Location: welcome.php");
            } else {
            echo "Dang nhap that bai";
            }
        
        mysqli_close($conn);
    ?>
</body>
</html>