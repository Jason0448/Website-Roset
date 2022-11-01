<?php

require 'db.php';

$sql = "SELECT * FROM users ";

if ($result = mysqli_query($conn, $sql)) {
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
                        <li><a href="account.php">Account</a></li>
                        <li><a href="index.html">Terug naar Normaal</a></li>
                      </ul>
                </div> 
                <div class="main-content">
                    <h1 style="text-align: center;">Gebruikers overzicht</h1>
                    <table class="table">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Voornaam</th>
                                    <th>Achternaam</th>
                                    <th>email</th>
                                    <th>Rol</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $user) : ?>
                                    <tr>
                                        <td><?php echo $user["id"] ?></td>
                                        <td><?php echo $user["firstname"] ?></td>
                                        <td><?php echo $user["lastname"] ?></td>
                                        <td><?php echo $user["email"] ?></td>
                                        <td><?php echo $user["role"] ?></td>
                                        <td><a style="color: red;" href="user-delete.php?id=<?php echo $user["id"] ?>" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>  
                </div>         
    </body>
</html>