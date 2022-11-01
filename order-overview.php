<?php

require 'db.php';

$sql = "SELECT * FROM orders ";

if ($result = mysqli_query($conn, $sql)) {
    $orders = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="media.css">
    <title>Home</title>
</head>
    <body>
            <div class="container">
                <div class="logo">
                    <h2>De Roset</h2>
                    <img src="../Website-Roset/images/Logo.png" alt="Logo" class="img-logo">
                </div>
                 <div class="header">
                    <ul class="menu-lijst">
                        <li><a href="dashboard.php">Home</a></li>
                        <li><a href="user-overview.php">Gebruikers</a></li>
                        <li><a href="product-overview.php">Producten</a></li>
                        <li><a href="bestel-overzicht.php">Bestellingen</a></li>
                        <li><a href="account.php">Account</a></li>
                      </ul>
                </div> 
                <div class="main-content">
                    <h1 style="text-align: center;">Bestellingen</h1>
                    <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User id</th>
                                    <th>Product id</th>
                                    <th>Pickup</th>
                                    <th>Due Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($orders as $order) : ?>
                                    <tr>
                                        <td><?php echo $order["id"] ?></td>
                                        <td><?php echo $order["user_id"] ?></td>
                                        <td><?php echo $order["product_id"] ?></td>
                                        <td><?php echo $order["pickup"] ?></td>
                                        <td><?php echo $order["due_datetime"] ?></td>
                                        <td><a style="color: red;" href="order-delete.php?id=<?php echo $order["id"] ?>" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>  
                </div>         
    </body>
</html>