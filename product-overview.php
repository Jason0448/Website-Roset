<?php

require 'db.php';

$sql = "SELECT * FROM products ";

if ($result = mysqli_query($conn, $sql)) {
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

session_start();

if(empty($_SESSION['userData']) || ($_SESSION['userData']['role'] == "klant")){

    header("Location: index.html");
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
                    <img src="../Website-Roset/images/Logo.png" alt="" class="img-logo">
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
                    <h1 style="text-align: center;">Producten</h1>
                    
                    <table class="table">
                            <thead>
                                <p>
                                <a href="product-add.php" style="font-size: 20px; color:blue;">Nieuw product aanmaken</a>
                                </p>
                                <tr>
                                    <th>id</th>
                                    <th>Naam</th>
                                    <th>Prijs per kg</th>
                                    <th>Categorie</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($products as $product) : ?>
                                    <tr style="text-align: center;">
                                        <td><?php echo $product["id"] ?></td>
                                        <td><?php echo $product["name"] ?></td>
                                        <td><?php echo $product["price_per_kg"] ?></td>
                                        <td><?php echo $product["category"] ?></td>
                                        
                                        <td><a style="color: red;"  href="product-delete.php?id=<?php echo $product["id"] ?>" class="btn btn-danger">Verwijder</a></td>
                                        <td><a style="color: cyan;"  href="product-edit.php?id=<?php echo $product["id"] ?>" class="btn btn-danger">Bewerk Product</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>                     
                </div>         
    </body>
</html>