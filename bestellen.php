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
    <script src="../Website-Roset/javascript/main.js"></script>
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
                <div class="content-b" style="grid-area: 2 / 2 / 8 / 5;">
                    <h2>Bestel hieronder je ijs in bakken van 1KG</h2>
                    <div class="besteldiv">
                        <div class="rij1"> 
                            <button onclick="zetIn('vanille')" class="bestel-button" class="add-cart" type="submit" name="vanille"><p>Vanille</p> 
                                <img src="../Website-Roset/images/smaken/vanille.png" class="img-ice">
                            </button>               
                            <button class="bestel-button" type="submit" name="aardbei"><p>Aardbei</p> 
                                <img src="../Website-Roset/images/smaken/aardbei.png" class="img-ice">
                            </button>
                            <button class="bestel-button" type="submit" name="straciatella"><p>Straciatella</p> 
                                <img src="../Website-Roset/images/smaken/straciatella.png" class="img-ice">
                            </button>
                            <button class="bestel-button" type="submit" name="caramel"><p>Caramel</p> 
                                <img src="../Website-Roset/images/smaken/caramel.png" class="img-ice">
                            </button>
                            <button class="bestel-button" type="submit" name="kokos"><p>Kokos</p> 
                                <img src="../Website-Roset/images/smaken/kokos.png" class="img-ice">
                            </button>
                            <button class="bestel-button" type="submit" name="koekjes"><p>Koekjes</p> 
                                <img src="../Website-Roset/images/smaken/koekjes.png" class="img-ice">
                            </button>
                        </div>
                        <div class="rij2">
                            <button class="bestel-button" type="submit" name="banaan"><p>Banaan</p> 
                                <img src="../Website-Roset/images/smaken/banaan.png" class="img-ice">
                            </button>
                            <button class="bestel-button" type="submit" name="nutella"><p>Nutella</p> 
                                <img src="../Website-Roset/images/smaken/nutella.png" class="img-ice">
                            </button>
                            <button class="bestel-button" type="submit" name="chocolade"><p>Chocolade</p> 
                                <img src="../Website-Roset/images/smaken/chocolade.png" class="img-ice">
                            </button>
                            <button class="bestel-button" type="submit" name="citroen"><p>Citroen</p> 
                                <img src="../Website-Roset/images/smaken/citroen.png" class="img-ice">
                            </button>
                            <button class="bestel-button" type="submit" name="kers"><p>Kers</p> 
                                <img src="../Website-Roset/images/smaken/kers.png" class="img-ice">
                            </button>
                            <button class="bestel-button" type="submit" name="yoghurt"><p>Yoghurt</p> 
                                <img src="../Website-Roset/images/smaken/yoghurt.png" class="img-ice">
                            </button>
                        </div> 
                        <div class="rij3">
                            
                            <button class="bestel-button" type="submit" name="oreo"><p>Oreo</p> 
                                <img src="../Website-Roset/images/smaken/oreo.png" class="img-ice">
                            </button>
                            <button class="bestel-button" type="submit" name="mango"><p>Mango</p> 
                                <img src="../Website-Roset/images/smaken/mango.png" class="img-ice">
                            </button>
                            <button class="bestel-button" type="submit" name="marsepein"><p>Marsepein</p> 
                                <img src="../Website-Roset/images/smaken/marsepein.png" class="img-ice">
                            </button>       
                            <button class="bestel-button" type="submit" name="snicker"><p>Snicker</p> 
                                <img src="../Website-Roset/images/smaken/snicker.png" class="img-ice">
                            </button>    
                            <button class="bestel-button" type="submit" name="marsepein"><p>M&M</p> 
                                <img src="../Website-Roset/images/smaken/m&m.png" class="img-ice">
                            </button>    
                            <button class="bestel-button" type="submit" name="cookiedough"><p>Cookie Dough</p> 
                                <img src="../Website-Roset/images/smaken/cookiedough.png" class="img-ice">
                            </button>                             
                        </div>     
                    </div>
                              
                </div>
                <div class="content-c" style="grid-area: 4 / 1 / 8 / 2;">
                    <h3>Populaire Smaken</h3>
                        <p>Aardbei</p>
                        <img src="../Website-Roset/images/smaken/aardbei.png" class="img-c">
                        <p>Mango</p>
                        <img src="../Website-Roset/images/smaken/mango.png" class="img-c">
                </div>
                <div class="content-footer" style="display: none;">
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