<?php

require 'db.php';

$id = $_GET["id"];


$sql = "SELECT * FROM products WHERE id = $id LIMIT 1";

if ($result = mysqli_query($conn, $sql)) {

    $product = mysqli_fetch_assoc($result);

    if (is_null($product)) {
        header("location: product-overview.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="style.css">
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
                        <li><a href="account.php">Account</a></li>
                        <li><a href="index.html">Terug naar Normaal</a></li>
                      </ul>
                </div> 
                <div class="main-content">
                    <h1 style="text-align: center;">Product aanpassen</h1>
                    
                        <form action="product-edit-process.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $product["id"] ?>">
                            <h2>
                                <p>Product ID :<?php echo $product["id"]?></p>
                                <label for="name">Naam van het product</label>
                                <input type="text" class="form-control" name="name" value="<?php echo $product["name"] ?>"><br>
                                <label for="name">Prijs per kilo</label>
                                <input type="text" class="form-control" name="price_per_kg" value="<?php echo $product["price_per_kg"] ?>"><br>
                                <label for="name">Smaak van de week</label>
                                <input type="text" class="form-control" name="is_flavor_ot_week" value="<?php echo $product["is_flavor_ot_week"] ?>"><br>
                                <label for="name">Categorie</label>
                                <input type="text" class="form-control" name="category" value="<?php echo $product["category"] ?>">
                            </h2>
                            <br>
                            <button type="submit" class="button">Bewerk Product</button>
                        </form>
                    </div>       
                </div>         
    </body>
</html>