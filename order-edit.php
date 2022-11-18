<?php

session_start();

if(empty($_SESSION['userData']) || ($_SESSION['userData']['role'] == "klant")){

    header("Location: index.html");
 }

require 'db.php';

$id = $_GET["id"];

$sql = "SELECT * FROM orders WHERE id = $id LIMIT 1";

if ($result = mysqli_query($conn, $sql)) {

    $order = mysqli_fetch_assoc($result);

    if (is_null($order)) {
        header("location: order-overview.php");
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
                        <li><a href="index.html">Terug naar Normaal</a></li>
                      </ul>
                </div> 
                <div class="main-content">
                    <h1 style="text-align: center;">Status van Bestelling aanpassen</h1>
                    
                        <form action="order-edit-process.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $order["id"] ?>">
                            <h2>
                                <p>orderID : <?php echo $order["id"] ?></p> 
                                <label for="name">Status</label>
                                <input type="text" class="form-control" name="status" value="<?php echo $order["status"] ?>"><br>
                            </h2>
                            <br>
                            <button type="submit" class="button" name="submit">Bewerk Status</button>
                        </form>
                    </div>       
                </div>         
    </body>
</html>