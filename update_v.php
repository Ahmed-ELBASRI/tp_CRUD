<?php
session_start();
if(isset($_POST['id']) && isset($_SESSION['produits'][$_POST['id']])) {
	$_SESSION['produits'][$_POST['id']]['libelle'] = $_POST['libelle'];
	$_SESSION['produits'][$_POST['id']]['pu'] = $_POST['pu'];
}
header('Location: liste.php');
?>