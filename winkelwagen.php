 <?php
    require "db.php";

    session_start();

    print_r($_SESSION['winkelwagen']);

    //veranderd elk item in de array naar een string
    $whereIn = implode(',', $_SESSION['winkelwagen']);
    // die($whereIn);
    $sql =
        "SELECT * FROM products WHERE id in ($whereIn)";

    if ($result = mysqli_query($conn, $sql)) {
        $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    if(empty($_SESSION['userData'])){

        header("Location: login.php");
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
             <button id="foto-bestel" class="bestel-button" type="submit">Bestel Nu!!!</button>
         </div>
         <div class="content-b" style="display: block;">
             <p id="items"></p>
             <a href="leeg-winkelwagen.php">Delete</a>
            <p style="text-align: left;">UserID : <?php echo $_SESSION['user_id']?></p>
             <form action="winkelwagen-process.php" method="post" name="submit">
                 <h1>Bestellen</h1>
                 <h2 style="text-align: left;">Jouw bestelling : </h2>
                 <?php foreach ($products as $product) : ?>
                     <p style="text-align: left;"><?php echo $product['name'] ?> </p>

                 <?php endforeach; ?>

                 <input type="hidden" id="winkelmandids" name="productid" value="<?php echo $whereIn ?> ">
                 <input type="hidden" id="userids" name="userid" value="<?php echo $_SESSION['user_id'] ?> ">
                 <p style="text-align: left;">
                     Kies of je het ijs wil laten bezorgen of zelf af wilt halen.
                     <select name="method" id="method">
                     <option value="LatenBezorgen">Laten bezorgen (Tegen extra kosten)</option>
                     <option value="Afhalen">Zelf Afhalen (Gratis)</option>
                 </select><br>
                 </p>

                 <label style="font-weight: 600;" for="fname">Volledige Naam :</label>
                 <input type="text" id="fullname" name="fullname"><br>
                 <!--
                 <label style="font-weight: 600;" for="zipcode">Postcode :</label>
                 !-->
                 <label style="font-weight: 600;" for="zipcode">Plaats :</label>
                 <select name="city" id="city">
                     <option value="Heiloo">Heiloo</option>
                     <option value="Limmen">Limmen</option>
                     <option value="Akersloot">Akersloot</option>
                 </select><br>

                 <label style="font-weight: 600;" for="address">Adres :</label>
                 <input type="text" id="address" name="address"><br>
                 <!-- <label style="font-weight: 600;" for="pickup">Bezorg of Afhaaltijd : </label>
                 <input type="time" id="zipcode" name="pickup"> <br>  -->
                 <input type="submit" name="submit" value="Plaats bestelling" style="background-color: rgb(6, 153, 221); color:black;">
             </form>
         </div>


         <div class="content-c">
             <h3>Populaire Smaken</h3>
             <p>Aardbei</p>
             <img src="../Website-Roset/images/smaken/aardbei.png" alt="Populaire smaken 1" class="img-c">
             <p>Mango</p>
             <img src="../Website-Roset/images/smaken/mango.png" alt="Populaire smaken 2" class="img-c">
         </div>
         <div class="content-footer">
             <aside class="footer-left">
                 <h3>Ons Adres:</h3>
                 <p>Castricum</p>
                 <p>Burgemeester Mooijstraat 17</p>
                 <p>1901 EP Castricum</p>
             </aside>
             <aside class="footer-center">
                 <h3>Wij bezorgen in...</h3>
                 <p>Heiloo $12</p>
                 <p>Limmen $12</p>
                 <p>Akersloot $15</p>
             </aside>
             <aside class="footer-right">
                 <h3 style="text-decoration: underline; color:blue;">Onze voorwaarden</h3>
                 <p>Bestel minimaal 2 smaken</p>
                 <p>Deel met je matties</p>
                 <p>Wees niet gierig</p>
             </aside>
         </div>
     </div>
 </body>

 </html>