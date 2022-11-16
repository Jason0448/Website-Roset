<?php
require 'db.php';

session_start();

if($_SESSION['userData'] == 0 || $_SESSION['userData']['role'] == "klant"){

    header("Location : index.html");
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
                    <h1 style="text-align: center;">Dashboard</h1>
                    <p style="text-align: center; font-size:30px;">Dit is het dashboard voor de medewerkers en de manager. Klanten hebben geen toegang tot het dashboard.</p>
                </div>         
    </body>
</html>