<?php
ob_start();
require_once('database.php');
require_once('Functions.php');
require_once('AllFruits.php');
ob_end_clean();
clearCart();

header("Location: cartview.php");
?>