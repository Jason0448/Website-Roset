<?php
//moet gebeuren
require "db.php";

//sessie starten om sessions te kunnen gebruiken
session_start();

//als er niks ingevuld word en op de button word geklikt is dit true
$_SESSION["wrong_password"] = true;

//info uit form halen
$email = $_POST["email"];
$password = $_POST["password"];

//email halen uit tabel users, 1 niet meer.
$result = $conn->query("SELECT * FROM users WHERE email = '$email' LIMIT 1");

//de data omzetten naar een assosciative array 
$user = $result->fetch_assoc();

//als $user niet leeg is check of het ingevoerde password hetzelfde is als die vannuit de db 
if (!empty($user)) {

    if ($user['email'] == $email && $user['password'] == $password) {
        //session maken van userData zodat we die bij het melding overzicht ook kunnen gebruiken.
        $_SESSION["userData"] = $user;
        $_SESSION["wrong_pas"] = false;

        $_SESSION['user_id'] = $user['id']; 

        $_SESSION['name'] = $user['firstname']; 
        //als alles is uitgevoerd ga naar account.php.
        header("Location: account.php");
        exit();
    } else {
        $_SESSION["wrong_pas"] = true;
        header("Location: login.php");
        exit();
    }
}