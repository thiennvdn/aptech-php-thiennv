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
            for ($i=0; $i < count($users); $i++) { ?>
                <tr>
                    <td><?php echo $users[$i] -> id ?></td>
                    <td><?php echo $users[$i] -> name ?></td>
                    <td><?php echo $users[$i] -> email ?></td>
                    <td><?php echo $users[$i] -> password ?></td>
                </tr>   <?php
            }
        ?>
        </tbody>
    </table>

</body>
</html>
