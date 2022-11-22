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
    <script src="../Website-Roset/javascript/main.js" async></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
                        <li><a href="order.php">Bestellen</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="account.php">Account</a></li>
                        <li><a href="winkelwagen.php"><i style='font-size:24px' class='fas'>&#xf07a;</i></a></li>
                      </ul>
                </div> 
                <div class="content-a">
                    <h3>Smaak van de week</h3> 
                    <img id="bestel-image" src="../Website-Roset/images/smaken/yoghurt.png" alt="Smaak van de week" class="img-a">
                    <p>De smaak van de week is Griekse Yoghurt</p>
                    <button id="foto-bestel" class="bestel-button" type="submit" value="griekseYoghurt">Bestel Nu!!!</button>                  
                </div>
                <div class="content-b" style="grid-area: 2 / 2 / 8 / 5;">
                    <h2>Bestel hieronder je ijs in bakken van 1KG</h2>
                    <div class="besteldiv">
                        <div class="rij1"> 
                            <form action="add-flavor.php" method="POST">
                            <button id="foto-bestel" class="bestel-button" type="submit" name="vanille" value="vanille"><p>Vanille</p> 
                                <img id="bestel-image" src="../Website-Roset/images/smaken/vanille.png" class="img-ice">
                            </button>               
                            <button id="foto-bestel" class="bestel-button" type="submit" name="aardbei" value="aardbei"><p>Aardbei</p> 
                                <img id="bestel-image" src="../Website-Roset/images/smaken/aardbei.png" class="img-ice">
                            </button>
                            <button id="foto-bestel" class="bestel-button" type="submit" name="straciatella" value="smaak[straciatella]"><p>Straciatella</p> 
                                <img src="../Website-Roset/images/smaken/straciatella.png" class="img-ice">
                            </button>
                            <button id="foto-bestel" class="bestel-button" type="submit" name="caramel" value="smaak[caramel]"><p>Caramel</p> 
                                <img id="bestel-image" src="../Website-Roset/images/smaken/caramel.png" class="img-ice">
                            </button>
                            <button id="foto-bestel" class="bestel-button" type="submit" name="kokos" value="smaak[kokos]"><p>Kokos</p> 
                                <img id="bestel-image" src="../Website-Roset/images/smaken/kokos.png" class="img-ice">
                            </button>
                            <button id="foto-bestel"  class="bestel-button" type="submit" name="koekjes" value="smaak[koekjes]"><p>Koekjes</p> 
                                <img id="bestel-image" src="../Website-Roset/images/smaken/koekjes.png" class="img-ice">
                            </button>
                        </div>
                        <div class="rij2">
                            <button id="foto-bestel" class="bestel-button" type="submit" name="banaan" value="banaan"><p>Banaan</p> 
                                <img id="bestel-image" src="../Website-Roset/images/smaken/banaan.png" class="img-ice">
                            </button>
                            <!-- <button id="foto-bestel" class="bestel-button" type="submit" name="nutella"><p>Nutella</p> 
                                <img id="bestel-image" src="../Website-Roset/images/smaken/nutella.png" class="img-ice">
                            </button>
                            <button id="foto-bestel" class="bestel-button" type="submit" name="chocolade"><p>Chocolade</p> 
                                <img id="bestel-image" src="../Website-Roset/images/smaken/chocolade.png" class="img-ice">
                            </button>
                            <button id="foto-bestel" class="bestel-button" type="submit" name="citroen"><p>Citroen</p> 
                                <img id="bestel-image" src="../Website-Roset/images/smaken/citroen.png" class="img-ice">
                            </button>
                            <button id="foto-bestel" class="bestel-button" type="submit" name="kers"><p>Kers</p> 
                                <img id="bestel-image" src="../Website-Roset/images/smaken/kers.png" class="img-ice">
                            </button>
                            <button id="foto-bestel" class="bestel-button" type="submit" name="griekseYoghurt"><p>Yoghurt</p> 
                                <img id="bestel-image" src="../Website-Roset/images/smaken/yoghurt.png" class="img-ice">
                            </button> -->
                        </div> 
                        <div class="rij3">
                            <button id="foto-bestel" class="bestel-button" type="submit" name="oreo"><p>Oreo</p> 
                                <img id="bestel-image" src="../Website-Roset/images/smaken/oreo.png" class="img-ice">
                            </button>
                            <!-- <button id="foto-bestel" class="bestel-button" type="submit" name="mango"><p>Mango</p> 
                                <img id="bestel-image" src="../Website-Roset/images/smaken/mango.png" class="img-ice">
                            </button>
                            <button id="foto-bestel" class="bestel-button" type="submit" name="marsepein"><p>Marsepein</p> 
                                <img id="bestel-image" src="../Website-Roset/images/smaken/marsepein.png" class="img-ice">
                            </button>       
                            <button id="foto-bestel" class="bestel-button" type="submit" name="snicker"><p>Snicker</p> 
                                <img id="bestel-image" src="../Website-Roset/images/smaken/snicker.png" class="img-ice">
                            </button>    
                            <button id="foto-bestel" class="bestel-button" type="submit" name="marsepein"><p>M&M</p> 
                                <img id="bestel-image" src="../Website-Roset/images/smaken/m&m.png" class="img-ice">
                            </button>    
                            <button id="foto-bestel" class="bestel-button" type="submit" name="cookiedough"><p>Cookie Dough</p> 
                                <img id="bestel-image" src="../Website-Roset/images/smaken/cookiedough.png" class="img-ice">
                            </button> -->
                        </form>                             
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