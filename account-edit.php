<?php

require 'db.php';

$id = $_GET["id"];

$sql = "SELECT * FROM users WHERE id = $id LIMIT 1";


if ($result = mysqli_query($conn, $sql)) {

    $user = mysqli_fetch_assoc($result);

    

    if (is_null($user)) {
        header("location: account.php");
    }
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
                <li><a href="bestellen.php">Bestellen</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="account.php">Account</a></li>
            </ul>
        </div>
        <div class="content-a">
                <h3>Smaak van de week</h3> 
                <img src="../Website-Roset/images/smaken/yoghurt.png" class="img-a">
                <p>De smaak van de week is Griekse Yoghurt</p>
                <button class="bestel-button" type="submit">Bestel Nu!!!</button>    
        </div>
        <div class="content-b">
            <h2>Je gegevens bewerken</h2>
            <form action="account-edit-process.php" method="post">
                <input type="hidden" name="id" value="<?php echo $user["id"] ?>">
                <div class="form-group">
                    <label for="exampleInputfirstname">Voornaam</label>
                    <input type="text" class="form-control" name="firstname" value="<?php echo $user["firstname"] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputlastname">Achternaam</label>
                    <input type="text" class="form-control" name="lastname" value="<?php echo $user["lastname"] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail">Email</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $user["email"] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputGeboortedatum">Geboortedatum</label>
                    <input type="date" class="form-control" name="date_of_birth" value="<?php echo $user["date_of_birth"] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputTelefoonnummer">Telefoonnummer</label>
                    <input type="text" class="form-control" name="phonenumber" value="<?php echo $user["phonenumber"] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputTelefoonnummer">Adres</label>
                    <input type="text" class="form-control" name="address" value="<?php echo $user["address"] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputTelefoonnummer">Postcode</label>
                    <input type="text" class="form-control" name="zipcode" value="<?php echo $user["zipcode"] ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputTelefoonnummer">Stad</label>
                    <input type="text" class="form-control" name="city" value="<?php echo $user["city"] ?>">
                </div>
                <button name="submit" type="submit" class="button1">Update</button>
            </form>
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