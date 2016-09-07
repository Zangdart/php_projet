<?php
require_once(dirname(__FILE__).'/defines.php');
require_once(dirname(__FILE__).'/data/forfaits.php');
$forfaits_data = get_forfaits();

$categorie_page = false;
// Si une catégorie est précisée dans la QueryString ET que sa valeur est connue
if (array_key_exists('categorie', $_GET) && in_array($_GET['categorie'], get_categories()) ) {
	$categorie_page = $_GET['categorie'];
}

?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<div id="wrapper">

	<?php
	foreach ($forfaits_data as $id => $forfait) {
		// On affiche le forfait si il n'y a pas de categorie de page
		// ou bien si le forfait appartient à la categorie demandée
		if (($categorie_page === false) || ($forfait[FORF_CATEGORY] == $categorie_page)) {
			?>
			<div class="forfait">
				<h2><?= $forfait[FORF_NOM] ?></h2>
				<p><?= $forfait[FORF_DESCRIPTION] ?></p>
				<p><img src="<?= IMG_PATH . $forfait[FORF_PHOTO1] ?>" alt=""/></p>

			</div>
			<?php
		} // if
	}; // foreach
	?>

	<?php
	foreach (get_categories() as $categorie) { // Boucle sur les 3 categories
		?>
		<div class="categorie">
			<h2><?= $categorie ?></h2>
			<?php
			foreach ($forfaits_data as $id => $forfait) {
				// On affiche le forfait si il n'y a pas de categorie de page
				// ou bien si le forfait appartient à la categorie demandée
				if ($forfait[FORF_CATEGORY] == $categorie) {
					?>
					<p><?= $forfait[FORF_NOM] ?></p>
					<p><img style="width: 50px;" src="<?= IMG_PATH . $forfait[FORF_PHOTO1] ?>" alt=""/></p>
					<?php
				} // if
			}; // foreach forfait
			?>
		</div>

		<?php
	}; // foreach categories
	?>

</div>
</body>
</html>