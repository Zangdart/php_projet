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
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec laoreet nisl nunc, eu suscipit enim pretium in. Curabitur nec eleifend velit, vitae tristique ex. Sed laoreet eu ex nec tristique. Duis vulputate semper lectus a maximus. Etiam quis justo malesuada, congue lacus ac, interdum lacus. Proin non nisl ut ante finibus condimentum. Aliquam erat volutpat. Integer quis blandit nisl. Cras finibus, nisl non cursus fringilla, justo nulla sagittis nibh, varius cursus velit quam sed nisl. Sed elit dui, condimentum sed arcu a, vestibulum accumsan sapien. Duis sit amet ornare dui. Donec porttitor urna sit amet enim faucibus, eget porta sem pretium. Nullam est ante, interdum eget neque vitae, ullamcorper accumsan nibh. In vitae lacus id orci placerat imperdiet ac tempus urna.Sed elit dui, condimentum sed arcu a, vestibulum accumsan sapien. Duis sit amet ornare dui.Nullam  ante, interdum eget neque vitae, ullamcorper accumsan.   </p>
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