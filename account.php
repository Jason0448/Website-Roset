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
    <body>
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
                        <li><a href="account.php">Account</a></li>
                      </ul>
                </div> 
                <div class="content-a">
                    <h3>Smaak van de week</h3> 
                        <img src="../Website-Roset/images/smaken/yoghurt.png" class="img-a">
                    <p>De Smaak van de week is Griekse yoghurt</p>
                    <button class="button1" type="submit">BESTEL NU!</button>              
                </div>
                <div class="content-b">
                    <h1>Uw gegevens</h1>
                    <?php
                            if (!empty($_SESSION["userData"])) {
                                echo "<h4>";
                                echo "Rol: " .$_SESSION['userData']['role'];
                                echo "<br>";
                                echo "<br>";
                                echo "ID : " . $_SESSION['userData']['id'];
                                echo "<br>";
                                echo "Voornaam : " . $_SESSION['userData']['firstname'];
                                echo "<br>";
                                echo "Achternaam : " . $_SESSION['userData']['lastname'];
                                echo "<br>";
                                echo "Email : " . $_SESSION['userData']['email'];
                                echo "<br>";
                                echo "Telefoonnummer : " . $_SESSION['userData']['phonenumber'];
                                echo "<br>";
                                echo "Geboortedatum : " .$_SESSION['userData']['date_of_birth'];
                                echo "<br>";
                                echo "<br>";
                                echo "Adres : " .$_SESSION['userData']['address'];
                                echo "<br>";
                                echo "Postcode : " .$_SESSION['userData']['zipcode'];
                                echo "<br>";
                                echo "Stad : " .$_SESSION['userData']['city'];
                                echo "<br>";
                                echo "</h4>";
                    ?>
                    <a href="account-update.php?id=<?php echo $_SESSION['userData']['id']?>" style="color: green;">Gegevens Updaten</a>
                    <a href="account-delete.php?id=<?php echo $_SESSION['userData']['id']?>" style="color: red;">Account Verwijderen</a>
                    <td><a href="logout.php"style="color: orange;">Uitloggen</a></td>

                    <?php
                    if ($_SESSION['userData']['role'] == 'medewerker' || $_SESSION['userData']['role'] == 'manager' ){
                        echo "<a href=dashboard.php>Dashboard voor medewerkers</a>";
                    }
                    ?>
                    

                        <?php } else {
                        echo "Je bent nog niet ingelogd, log in om uw informatie te zien."; 
                        echo ' <a href="login.php" target="_blank">Klik om in te loggen</a>'; 
                        echo ' of <a href="registreren.html" target="_blank">hier (Registreren)</a> om een account aan te maken';
                    }  ?> 
                </div>
                <div class="content-c">
                    <h4>Populaire Smaken</h4>
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
                    </aside>
                    <aside class="footer-right">
                        <h3 style="text-decoration: underline; color:blue;">Onze voorwaarden</h3>
                    </aside>
                </div>
            </div>
    </body>
</html>