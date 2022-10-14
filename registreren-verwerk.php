<?php

require 'db.php';

if ($_POST['firstname'] != '' && $_POST['lastname'] != '' && $_POST['phonenumber'] != '' && $_POST['email'] != '' && $_POST['password'] != '' 
 && $_POST['date_of_birth'] != '' && $_POST['address'] != '' && $_POST['zipcode'] != '' && $_POST['city'] != '') {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $date_of_birth = $_POST['date_of_birth'];
    $address = $_POST['address'];
    $zipcode = $_POST['zipcode'];
    $city = $_POST['city'];
    

$sql = "INSERT INTO users (firstname, lastname, email, password, date_of_birth, phonenumber, address, zipcode, city, role)
VALUES ('$firstname', '$lastname', '$email', '$password', '$date_of_birth', '$phonenumber', '$address', '$zipcode', '$city', 'klant')";

if (mysqli_query($conn, $sql) === TRUE) {
    header("Location: account.php");
} else {
    echo "Foutmelding: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);

}


?>
