<?php 

print_r($_POST);

if ($_POST['pickup'] != '') {

    $pickup = $_POST['pickup'];


    require "db.php";

    $sql = "INSERT INTO orders ()
    VALUES ()";

    if (mysqli_query($conn, $sql) === TRUE) {
        header("Location: index.html");
        echo "Je bestelling is ontvangen en word verwerkt!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    mysqli_close($conn);
}
?>
