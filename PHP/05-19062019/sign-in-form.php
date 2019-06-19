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
        $select = "SELECT * FROM ap_18_4.users";
        $result = mysqli_query($conn, $select);
        $arr = mysqli_fetch_all($result,MYSQLI_ASSOC);
        // var_dump ($result);
        // $a = [];
        // var_dump("aa");
        // var_dump($_POST);
        // echo "<br>";
        $email = $_POST["email"];
        $password = $_POST["password"];
        $a = count($arr);
        var_dump($arr);
        for ($i=0; $i < $a; $i++) { 
            echo $arr[$i]["email"] . "<br>";
        } 
        // if ($email == $arr[$i]["email"] && $password == $arr[$i]["password"]) {
        //     echo "Dang nhap thanh cong";
        // } else {
        //     echo "Dang nhap that bai";
        // }
        
       
    
        
        // if (mysqli_num_rows($result) > 0) {
        //     // output data of each row
        //     while($row = mysqli_fetch_assoc($result)) {
        //         echo "Name: " . $row["name"]. " - Email: " . $row["email"]. " - Password: " . $row["password"]. "<br>";
        //     }
        // } else {
        //     echo "0 results";
        // }
        
        mysqli_close($conn);
    ?>
</body>
</html>