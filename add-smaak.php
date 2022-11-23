<?php
session_start();

require 'db.php';


//als de sessie leeg is maak winkelwagen een array.
if(empty($_SESSION['winkelwagen'])){

$_SESSION['winkelwagen'] = array();
}
//voegt elementen/waardes aan de array, zet id in de array.
array_push($_SESSION['winkelwagen'], $_GET['id']);

header("Location: winkelwagen.php");
?>
