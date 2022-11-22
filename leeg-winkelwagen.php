<?php

require 'db.php';

session_start();


if (isset($_SESSION['winkelwagen'])) {
    session_unset();
    header("Location: http://localhost/Website-Roset/order.php");
}
