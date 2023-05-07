<?php
session_start();
if(isset($_GET['id']) && isset($_SESSION['produits'][$_GET['id']])) {
	unset($_SESSION['produits'][$_GET['id']]);
}
header('Location: liste.php');
?>