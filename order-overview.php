<?php

require 'db.php';

session_start();

if(empty($_SESSION['userData']) || ($_SESSION['userData']['role'] == "klant")){

    header("Location: index.html");
 }


$sql = "SELECT *, orders.name, products.name, orders.id AS order_id FROM users 
JOIN orders on orders.user_id = users.id
JOIN products on products.id = orders.product_id; ";

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
                        <li><a href="order-overview.php">Bestellingen</a></li>
                        <li><a href="index.html">Terug naar Normaal</a></li>
                      </ul>
                </div> 
                <div class="main-content">
                    <h1 style="text-align: center;">Bestellingen</h1>
                    <table class="table">
                            <thead>
                                <tr>
                                    <th>OrderID</th>
                                    <th>Name</th>
                                    <th>ProductNaam</th>
                                    <th>PickupTijd</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($orders as $order) : ?>
                                    <tr style="text-align: center;">
                                        <td><?php echo $order["order_id"] ?></td>
                                        <td><?php echo $order["firstname"] ?></td>
                                        <td><?php echo $order["name"] ?></td>
                                        <td><?php echo $order["pickup"] ?></td>
                                        <td><?php echo $order["status"] ?></td>
                                        <td><a href="order-edit.php?id=<?php echo $order["order_id"] ?>" class="btn btn-danger">Verander Status</a></td>
                                        <td><a style="color:red;" href="order-delete.php?id=<?php echo $order["order_id"] ?>" class="btn btn-danger">Annuleer</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>  
                </div>         
    </body>
</html>