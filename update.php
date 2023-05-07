<?php
session_start();
if(isset($_GET['id']) && isset($_SESSION['produits'][$_GET['id']])) {
	$produit = $_SESSION['produits'][$_GET['id']];
?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8">
		<title>Modifier un produit</title>
	</head>
	<body>
		<h1>Modifier un produit</h1>
		<form action="update_v.php" method="post">
			<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
			<label for="libelle">libelle :</label>
			<input type="text" name="libelle" id="libelle" value="<?php echo $produit['libelle']; ?>"><br><br>
			<label for="pu">prix unitaire :</label>
			<input type="text" name="pu" id="pu" value="<?php echo $produit['pu']; ?>"><br><br>
			<input type="submit" value="Modifier">
		</form>
	</body>
	</html>
<?php
} else {
	header('Location: liste.php');
}
?>