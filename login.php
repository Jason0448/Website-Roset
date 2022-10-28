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
                    <img src="../Website-Roset/images/Logo.png" alt="" class="img-logo">
                </div>
                <div class="header">
                    <ul class="menu-lijst">
                        <li><a href="index.html">Over ons</a></li>
                        <li><a href="bestellen.php">Bestellen</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Winkelmandje</a></li>
                        <li><a href="account.php">Account</a></li>
                      </ul>
                </div>
                <div class="content-a">
                    <h3>Smaak van de week</h3> 
                    <img src="../Website-Roset/images/scoops.jpg" class="img-a">
                    <p>De flavorr of the week is ....</p>
                    <button class="button1" type="submit">BESTEL NU!</button>              
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
                    <h4>Populaire Smaken</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, eaque enim? Minima ipsum laudantium cumque ex! Fugit eveniet accusantium, ex obcaecati ducimus delectus! Mollitia vero natus, impedit vel reprehenderit voluptatibus.</p> <br>

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
                    </aside>
                    <aside class="footer-right">
                        <h3 style="text-decoration: underline; color:blue;">Onze voorwaarden</h3>
                    </aside>
                </div>
            </div>
    </body>
</html>