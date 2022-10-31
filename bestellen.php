<?php

require 'db.php';

$sql = "SELECT * FROM products ";

if ($result = mysqli_query($conn, $sql)) {
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
                        <li><a href="index.html">Over ons</a></li>
                        <li><a href="#">Bestellen</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="account.php">Account</a></li>
                      </ul>
                </div> 
                <div class="content-a">
                    <h3>Smaak van de week</h3> 
                    <img src="../Website-Roset/images/smaken/yoghurt.png" alt="Smaak van de week" class="img-a" >
                    <p>De smaak van de week is Griekse yoghurt</p>
                    <button class="bestel-button" type="submit">Bestel Nu!!!</button>              
                </div>
                <div class="content-b">
                    <h2>Bestel hieronder je ijs in bakken van 1KG</h2>
                    <div class="besteldiv">
                        <div class="rij1">
                            <button class="bestel-button" name="vanille">Voeg toe</button>
                            <img src="../Website-Roset/images/smaken/vanille.png" class="img-ice">
                            <button class="bestel-button" name="aardbei">Voeg toe</button>
                            <img src="../Website-Roset/images/smaken/aardbei.png" class="img-ice">
                            <button class="bestel-button" name="straciatella">Voeg toe</button>
                            <img src="../Website-Roset/images/smaken/straciatella.png" class="img-ice">
                            <button class="bestel-button" name="caramel">Voeg toe</button>
                            <img src="../Website-Roset/images/smaken/caramel.png" class="img-ice">
                            <button class="bestel-button" name="kokos">Voeg toe</button>
                            <img src="../Website-Roset/images/smaken/kokos.png" class="img-ice">
                        </div>
                        <div class="rij2">
                            <button class="bestel-button" name="banaan">Voeg toe</button>
                            <img src="../Website-Roset/images/smaken/banaan.png" class="img-ice">
                            <button class="bestel-button" name="nutella">Voeg toe</button>
                            <img src="../Website-Roset/images/smaken/nutella.png" class="img-ice">
                            <button class="bestel-button" name="chocolade">Voeg toe</button>
                            <img src="../Website-Roset/images/smaken/chocolade.png" class="img-ice">
                            <button class="bestel-button" name="citroen">Voeg toe</button>
                            <img src="../Website-Roset/images/smaken/citroen.png" class="img-ice">
                            <button class="bestel-button" name="kers">Voeg toe</button>
                            <img src="../Website-Roset/images/smaken/kers.png" class="img-ice">
                        </div> 
                        <div class="rij3">
                            <button class="bestel-button" name="koekjes">Voeg toe</button>
                            <img src="../Website-Roset/images/smaken/koekjes.png" class="img-ice">
                            <button class="bestel-button" name="oreo">Voeg toe</button>
                            <img src="../Website-Roset/images/smaken/oreo.png" class="img-ice">
                            <button class="bestel-button" name="mango">Voeg toe</button>
                            <img src="../Website-Roset/images/smaken/mango.png" class="img-ice">
                            <button class="bestel-button" name="yoghurt">Voeg toe</button>
                            <img src="../Website-Roset/images/smaken/yoghurt.png" class="img-ice">
                            <button class="bestel-button" name="marsepein">Voeg toe</button>
                            <img src="../Website-Roset/images/smaken/marsepein.png" class="img-ice">
                        </div>     
                    </div>
                              
                </div>
                <div class="content-c">
                    <h3>Populaire Smaken</h3>
                        <p>Aardbei</p>
                        <img src="../Website-Roset/images/smaken/aardbei.png" class="img-c">
                        <p>Mango</p>
                        <img src="../Website-Roset/images/smaken/mango.png" class="img-c">
                </div>
                <div class="content-footer">
                    <aside class="footer-left">
                        <h3>Ons Adres:</h3>
                        <p>Castricum</p>
                    </aside>         
                    <aside class="footer-center">
                        <h3>Wij bezorgen in...</h3>
                        <p>Heiloo</p>
                        <p>Limmen</p>
                        <p>Akersloot</p>
                    </aside>
                    <aside class="footer-right">
                        <h3 style="text-decoration: underline; color:blue;">Onze voorwaarden</h3>
                    </aside>
                </div>
            </div>
    </body>
</html>