<?php
if (isset($_POST["submit"])) {
    $id = $_POST["id"];

    if (
        //als alles ingevuld is ga dan verder
        !empty($_POST["id"])
        && !empty($_POST["status"])
        ) {
  
            //waarde geven aan variables
        $id = $_POST["id"];    
        $status = $_POST["status"];

        require 'db.php';
        
        $sql = "UPDATE orders SET 
        id = '$id',
        status =  '$status' 
        WHERE id = '$id'";
        
        if (mysqli_query($conn, $sql)) {
            header("location: order-overview.php");
        }

        mysqli_close($conn); 
    }
}