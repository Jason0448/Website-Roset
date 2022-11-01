<?php 
session_start();

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
    <body style="background-color: beige;">
            <div class="container">
                <div class="logo">
                    <h2>De Roset</h2>
                    <img src="../Website-Roset/images/Logo.png" alt="Logo" class="img-logo">
                </div>
                <div class="header">
                    <ul class="menu-lijst">
                        <li><a href="index.html">Over ons</a></li>
                        <li><a href="bestellen.php">Bestellen</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="winkelmand.php">Winkelmandje</a></li>
                        <li><a href="account.php">Account</a></li>
                      </ul>
                </div>
                <div class="content-a">
                    <h3>Smaak van de week</h3> 
                    <img src="../Website-Roset/images/smaken/yoghurt.png" alt="Smaak van de week" class="img-a">
                    <p>De smaak van de week is Griekse Yoghurt</p>
                    <button class="bestel-button" type="submit">Bestel Nu!!!</button>               
                </div>
                <div class="content-b">
                <form action="login-check.php" method="post">
                    <h2>Login Scherm</h2>
                    <div class="loginform">
                        <label for="email">Email :</label>
                            <input type="text" id="email" name="email" placeholder="Voer uw Email in">
                        <label for="password">Wachtwoord :</label> 
                            <input type="password" id="password" name="password" placeholder="Voer uw Wachtwoord in">
                            <a href="registreren.html">Nog geen account? Klik hier</a>
                            <?php
                            if (!empty($_SESSION["wrong_pas"])) {
                                if ($_SESSION["wrong_pas"] == true) {
                                echo "<p style=color:red>Gegevens kloppen niet</p>";
                                }
                            } ?>
                        <input type="submit" value="Submit" style="background-color: rgb(6, 153, 221); color:black;">
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
                        <h3>
                        Ons Adres: <br>
                        <br>
                        <br>
                        Castricum
                        </h3>
                    </aside>         
                    <aside class="footer-center">
                        <h3>Wij bezorgen in...</h3>
                        <p>Heiloo $12</p>
                        <p>Limmen $12</p>
                        <p>Akersloot $15</p>
                    </aside>
                    <aside class="footer-right">
                        <h3 style="text-decoration: underline; color:blue;">Onze voorwaarden</h3>
                    </aside>
                </div>
            </div>
    </body>
</html>