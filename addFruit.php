<?php
//require('AllFruits.php');
ob_start();
require_once('database.php');
require_once('Functions.php');
require_once('AllFruits.php');
ob_end_clean();
$itemToAdd =  $_POST['fruitID'];
$quantityToAdd = $_POST['qty'];

addItem($itemToAdd, $quantityToAdd);

header("Location: cartview.php");


?>
