<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input data</title>
</head>
<body>
    <?php
        // require "php-connect-mysql.php";
        // $conn = connectDB();
        // $name = $email = $password = "";
        // if ($_SERVER["REQUEST_METHOD"]) {
        //     $name = testInput($_POST["name"]);
        //     $email = testInput($_POST["email"]);
        //     $password = testInput($_POST["password"]);
        // }
        // function testInput($data) {
        //     $data = trim($data);//remove whitespace
        //     $data = stripslashes($data);//remove the backslash
        //     $data = htmlspecialchars($data);
        //     return $data;
        // }
    ?>
    <h2>PHP Form Input Data:</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Name: <input type="text" name="name" id=""><br><br>
        E-mail: <input type="email" name="email" id=""><br><br>
        Password: <input type="password" name="password" id=""><br><br>
        <input type="submit" value="submit"><br><br>
    </form>
    <?php
        require "php-connect-mysql.php";
        $conn = connectDB();
        if(!empty($_POST)){
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"]; 
            $user = "INSERT INTO ap_18_4.users (name, email, password)
            VALUES ('$name','$email','$password')";
            if (mysqli_query($conn, $user)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $user . "<br>" . mysqli_error($conn);
            }
        } else {
            echo 'GET';
        }
        mysqli_close($conn);
    ?>
</body>
</html>