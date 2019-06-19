<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $name = $email = $gender = $comment = $website = "";
        if ($_SERVER["REQUEST_METHOD"]) {
            $name = testInput($_POST["name"]);
            $email = testInput($_POST["email"]);
            $gender = testInput($_POST["gender"]);
            $comment = testInput($_POST["comment"]);
            $website = testInput($_POST["website"]);
        }
        function testInput($data) {
            $data = trim($data);//remove whitespace
            $data = stripslashes($data);//remove the backslash
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <h2>PHP Form Validation Example:</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        Name: <input type="text" name="name" id=""><br><br>
        E-mail: <input type="email" name="email" id=""><br><br>
        Website: <input type="text" name="website" id=""><br><br>
        Comment: <textarea name="comment" id="" cols="30" rows="10"></textarea><br><br>
        Gender: <input type="radio" name="gender" id="" value="Female">Female
        <input type="radio" name="gender" id="" value="Male">Male
        <input type="radio" name="gender" id="" value="Other">Other
        <br><br>
        <input type="submit" value="submit"><br><br>
    </form>
    <?php 
        echo "<h2>Your Input:</h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $gender;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comment;
        echo "<br>";
    ?>
</body>
</html>