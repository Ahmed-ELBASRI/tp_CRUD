<?php
session_start();
if(isset($_COOKIE['nbrProduits'])) {
	echo "Nombre de produits : ".$_COOKIE['nbrProduits']."<br><br>";
}
if(isset($_SESSION['produits'])) {
	for ($i = 0; $i < count($_SESSION['produits']); $i++) {
		$produit = $_SESSION['produits'][$i];
		echo ($i+1)." - ".$produit['libelle']." ".$produit['pu']." DH ";
		echo "<a href='update.php?id=".$i."'>Modifier</a> ";
		echo "<a href='delete.php?id=".$i."'>Supprimer</a><br>";
	}
}
else {
	echo "Aucun produit";
}
?>