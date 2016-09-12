<?php
require_once('views/page_top.php');// Inclusion des defines
require_once('data/forfaits.php');// Inclusion des forfaits

$id_forfait=$_GET['forfait_id']; /*faire un if array key exist */
$forfait=get_forfaits()[$id_forfait];
//var_dump($id_forfait);
?>
<main>
    <div id="wrapper">




        <h2>Formulaires</h2>
        <div id="contenu">
            <form id="form_resa" name="form_resa">
                <div>
                    <label for="nom">Nom:</label>
                    <input name="nom" id="nom" type="text"/>
                </div>
                <div>
                    <label for="prenom">Prénom:</label>
                    <input name="prenom" id="prenom" type="text"/>
                </div>
                <div>
                    <label for="adresse">Adresse:</label>
                    <input name="adresse" id="adresse" type="text"/>
                </div>
                <div>
                    <label for="email">Courriel:</label>
                    <input name="email" id="email" type="text"/>
                </div>
                <div>
                    <label for="tel">#tel:</label>
                    <input name="tel" id="tel" type="text"/>
                </div>
                <div>
                    <input type="submit" value="Réserver"/>
                    <input type="submit" value="Annuler"/>
                </div>

            </form>
        </div>

</main>

<!--PARTIE DYNAMIQUE ICI-->

<?php
echo "<p> Vous avez choisi : ",$forfait['nom'],"</p>";
echo "<p> De la catégorie : ",$forfait['categorie'],"</p>";
echo "<p> Récapitulatif de votre forfait : ",$forfait['description'],"</p>";
echo "<p> La durée de votre voyage sera de : ",$forfait['duree']," jours </p>";
echo "<p> Pour la modique somme de : ",$forfait['prix']," $ </p>";
echo "<p> Un aperçu de votre voyage : ",$forfait['photo1'],"</p>";
//var_dump($forfait);

//?>


<?php
require_once('views/page_bottom.php');// Inclusion des defines
?>



