<?php



if (isset($_POST["submit"])) {

    $pickup = $_POST['pickup'];
    $name = $_POST['firstname'];
    // $address= $_POST[]
    $prods = $_POST['productid'];
    require "db.php";

    //maakt van een string een array
    $product = explode(",", $prods);

    foreach ($product as $prod) :

        $sql = "INSERT INTO orders (product_id, name)
        VALUES ('$prod', '$name')";

        // Voer de INSERT INTO STATEMENT uit/ execute de query in het database
        mysqli_query($conn, $sql);
    endforeach;
    //database connectie




    unset($_SESSION['winkelwagen']); // To delete a session var
    echo "Inserted successfully";
    mysqli_close($conn); // Sluit de database verbinding want er hoeven geen queries meer uitgevoerd te worden
    header("Location: index.html");





    // $sql = "INSERT INTO orders ()
    // VALUES ()";

    // if (mysqli_query($conn, $sql) === TRUE) {
    //     header("Location: index.html");
    //     echo "Je bestelling is ontvangen en word verwerkt!";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
    // mysqli_close($conn);
}
