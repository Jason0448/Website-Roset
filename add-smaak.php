<?php
session_start();
require 'db.php';



if(empty($_SESSION['winkelwagen'])){
$_SESSION['winkelwagen'] = array();
}

array_push($_SESSION['winkelwagen'], $_GET['id']);

?>

<a>
    Smaak toegevoegd
    <a href="winkelwagen.php">Bekijk Winkelwagen</a>
</a>
