<?php
require_once(dirname(__FILE__).'/defines.php');
require_once(dirname(__FILE__).'/data/forfaits.php');
require_once(dirname(__FILE__).'/views/page_top.php');// Inclusion des defines

$forfaits_data = get_forfaits();

$categorie_page = false;
// Si une catégorie est précisée dans la QueryString ET que sa valeur est connue
if (array_key_exists('categorie', $_GET) && in_array($_GET['categorie'], get_categories()) ) {
	$categorie_page = $_GET['categorie'];
}

?>
<?php
//	foreach ($forfaits_data as $id => $forfait) {
//		// On affiche le forfait si il n'y a pas de categorie de page
//		// ou bien si le forfait appartient à la categorie demandée
//		if (($categorie_page === false) || ($forfait[FORF_CATEGORY] == $categorie_page)) {
//			?>
<!--			<div class="forfait">-->
<!--				<h2>--><?//= $forfait[FORF_NOM] ?><!--</h2>-->
<!--				<p>--><?//= $forfait[FORF_DESCRIPTION] ?><!--</p>-->
<!--				<p><img src="--><?//= IMG_PATH . $forfait[FORF_PHOTO1] ?><!--" alt=""/></p>-->
<!---->
<!--			</div>-->
<!--			--><?php
//		} // if
//	}; // foreach
//	?>

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
					<div class="container">
					<div><p><?= $forfait[FORF_NOM] ?></p>
					<p><img src="<?= IMG_PATH . $forfait[FORF_PHOTO1] ?>" alt="belle image"/></p>
					</div>
						<div>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec laoreet nisl nunc, eu suscipit enim pretium in.Duis vulputate semper . Duis vulputate semper .Etiam quis justo malesuada, congue lacus ac, interdum lacus. Curabitur nec eleifend velit, vitae tristique ex. Sed laoreet eu ex nec tristique. Duis vulputate semper lectus .   </p>
						</div>
						<div>
							<p><img src="<?= IMG_PATH . $forfait[FORF_PHOTO2] ?>" alt="belle image"/></p>
						</div>

					</div>
					<?php
				} // if
			}; // foreach forfait
			?>
		</div>

		<?php
	}; // foreach categories
	?>

<!--</div>-->
<!--</body>-->
<!--</html>-->


<?php
require_once('views/page_bottom.php');// Inclusion des defines
?>