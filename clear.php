<?php
session_start();
session_destroy();
setcookie('nbrProduits', "",1);
header('Location: liste.php');
?>