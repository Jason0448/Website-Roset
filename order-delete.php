<?php

print_r($_GET["id"]);

require 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM orders WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    header("location: order-overview.php");
}
?>