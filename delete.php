<?php
session_start();
if(isset($_GET['id']) && isset($_SESSION['produits'][$_GET['id']])) {
	unset($_SESSION['produits'][$_GET['id']]);
	echo "hello";
	$nbrProduits = count($_SESSION['produits']);
	setcookie('nbrProduits', $nbrProduits);
}
// array_values($_SESSION['produits']);
// print_r($_SESSION['produits']);
// header('Location: liste.php');
?>