<html>
	<body>
		<a href="clear.php">Clear</a>
	</body>
</html>
<?php
session_start();
if(isset($_COOKIE['nbrProduits'])) {
	echo "Nombre de produits : ".$_COOKIE['nbrProduits']."<br><br>";
}
if(isset($_SESSION['produits'])) {
	foreach ($_SESSION['produits'] as $key => $produit) {
		$produit = $_SESSION['produits'][$key];
		echo ($key+1)." - ".$produit['libelle']."\t".$produit['pu']." DH ";
		echo "<a href='update.php?id=$key'>Modifier</a> ";
		echo "<a href='delete.php?id=$key'>Supprimer</a><br>";
	}
}
else {
	header('Location: index.html');
}
?>