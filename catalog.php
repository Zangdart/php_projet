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
                        <div><p><?= $forfait[FORF_DESCRIPTION] ?></p></div>
                        <a href="reservation.php?forfait_id=<?=$id?>">Réserver</a>
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


<?php
require_once('views/page_bottom.php');// Inclusion des defines
?>