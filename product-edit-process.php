<?php
if (isset($_POST["submit"])) {
    $id = $_POST["id"];

    if (
        //als alles ingevuld is ga dan verder
        !empty($_POST["id"])
        && !empty($_POST["name"])
        && !empty($_POST["price_per_kg"])
        && !empty($_POST["is_flavor_ot_week"])
        && !empty($_POST["category"])
        
        ) {
  
            //waarde geven aan variables
        $id = $_POST["id"];    
        $name = $_POST["name"];
        $price_per_kg = $_POST["price_per_kg"];
        $is_flavor_ot_week = ($_POST["is_flavor_ot_week"]== "NO") ? 0: 1;
        $category = $_POST["category"];

        require 'db.php';
        
        $sql = "UPDATE products SET 
        id = '$id',
        name = '$name', 
        price_per_kg = '$price_per_kg', 
        is_flavor_ot_week = '$is_flavor_ot_week',
        category =  '$category' 
        WHERE id = '$id'";
        
        if (mysqli_query($conn, $sql)) {
            header("location: product-overview.php");
        }

        mysqli_close($conn); 
    }
}
