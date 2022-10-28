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
                        <li><a href="bestel-overzicht.php">Bestellingen</a></li>
                        <li><a href="account.php">Account</a></li>
                      </ul>
                </div> 
                <div class="main-content">
                    <h1 style="text-align: center;">Product toevoegen</h1>
                    
                        <form action="product-add-process.php" method="post">
                            <h2>
                                <label for="name">Naam van het product</label>
                                <input type="text" id="name" name="name" placeholder="Voer de naam in"> <br>
                                <label for="name">Prijs per kilo</label>
                                <input type="text" id="price_per_kg" name="price_per_kg" placeholder="Voer de prijs in"> <br>
                                <label for="name">Categorie</label>
                                <input type="text" id="category" name="category" placeholder="Voer de categorie in">
                            </h2>
                            <button type="submit" class="button">Voeg toe</button>
                        </form>
                    </div>       
                </div>         
    </body>
</html>