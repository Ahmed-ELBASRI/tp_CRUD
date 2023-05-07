<?php
session_start();
if(isset($_POST['libelle']) && isset($_POST['pu'])) {
	$produit = array();
	$produit['libelle'] = $_POST['libelle'];
	$produit['pu'] = $_POST['pu'];
	if(isset($_SESSION['produits'])) {
		array_push($_SESSION['produits'], $produit);
	}
	else {
		$_SESSION['produits'] = array();
		array_push($_SESSION['produits'], $produit);
	}
}
if(isset($_SESSION['produits'])) {
	$nbrProduits = count($_SESSION['produits']);
	setcookie('nbrProduits', $nbrProduits);
}
header('Location: liste.php');
?>