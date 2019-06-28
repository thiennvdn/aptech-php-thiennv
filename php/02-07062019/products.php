<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
        $products = [
            ['iphone', 2000],
            ['samsung', 900],
            ['huawei', 20]
        ]
    ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th> 
            </tr>   
        </thead>
        <tbody>
            <?php
                $total = 0;
                $a = count($products);
                for ($i=0; $i < $a; $i++) { ?>
                <tr>
                    <th><?php echo $i + 1 ?></th>
                    <td><?php echo $products[$i][0]; ?></td>
                    <td><?php
                        $b =  $products[$i][1];
                        $c = 0;
                        if ($products[$i][1] > 500) {
                            echo "$" . ($b + (($b/100)*10));
                            $c = $c + ($b + (($b/100)*10));
                        } else {
                            echo "$" . ($b + (($b/100)*5));
                            $c = $c + ($b + (($b/100)*5));
                        }
                    ?></td>
                </tr>
            <?php
            $total = $total + $c;    
            }
            ?>
            <tr>
                <th colspan ="2">Total</th>
                <td><?php echo "$" . $total ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>