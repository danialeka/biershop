<!-- <?php -->


// $pdo = new PDO("mysql:host=localhost;dbname=biercompany", "root", "");


// $query = $pdo->prepare('SELECT * FROM products WHERE id=:id');
// $query->execute([
//     'id' => $_GET['id']
// ]);

// $ 

// if ($_POST) {

// }

// $connect = mysqli_connect('localhost', "root", "", "biercompany");
// $query = "SELECT * FROM products ORDER by id ASC";
// $result = mysqli_query($connect, $query);

// if ($result) {
//     if (mysqli_num_rows($result) > 0) {
//         while ($product = mysqli_fetch_assoc($result)) {
//             print_r($product);
//         }
//     }
// }
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoping cart</title>
    <link rel="stylesheets" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="cart.css">
</head>
<body>
<div class="container">
<?php

$connect = mysqli_connect('localhost', "root", "", "biercompany");
$query = "SELECT * FROM products ORDER by id ASC";
$result = mysqli_query($connect, $query);

if ($result): 
    if (mysqli_num_rows($result) > 0) :
        while ($product = mysqli_fetch_assoc($result)):
            ?>
            <div class="col-sm-4 col-md3">

        </div>
       

            <?php
        endwhile;
    endif;

?>

</div>
</body>
</html>
