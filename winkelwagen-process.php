<?php

session_start();

if (isset($_POST["submit"])) {

    $user = $_SESSION['user_id'];
    $name = $_POST['fullname'];
    $prods = $_POST['productid'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $method = $_POST['method'];
    //$pickup = $_POST['pickup'];

    require "db.php";

    //maakt van een string een array
    $product = explode(",", $prods);

    foreach ($product as $prod) :

        $sql = "INSERT INTO orders (user_id, product_id, name, city, address, method)
        VALUES ('$user','$prod', '$name', '$city', '$address', '$method')";

        // Voer de INSERT INTO STATEMENT uit/ execute de query in het database
        mysqli_query($conn, $sql);
    endforeach;
    //database connectie




    unset($_SESSION['winkelwagen']); // To delete a session var
    mysqli_close($conn); // Sluit de database verbinding want er hoeven geen queries meer uitgevoerd te worden

    header("Location: index.html");
}
