<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Welcome</title>
</head>
<body>
    <?php
        require "php-connect-mysql.php";
        $conn = connectDB();
        $select = "SELECT * FROM ap_18_4.users";
        $result = mysqli_query($conn, $select);
        // $row = mysqli_num_rows($result);
        // $arr = mysqli_fetch_all($result,MYSQLI_ASSOC);
    ?>
    <table class="table table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["password"] ?></td>
            </tr>
        <?php       
        }
        mysqli_close($conn);
        // echo "hello";
        ?>
        </tbody>
    </table>
    
</body>
</html>