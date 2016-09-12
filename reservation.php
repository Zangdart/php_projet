<?php
require_once('views/page_top.php');// Inclusion des defines
require_once('data/forfaits.php');// Inclusion des forfaits

$id_forfait=$_GET['forfait_id']; /*faire un if array key exist */
$forfait=get_forfaits()[$id_forfait];
//var_dump($id_forfait);
?>
<h2>Réservation</h2>

<?php
echo "<div id='dynamique'>";
echo "<p> Vous avez choisi : <span>",$forfait['nom'],"</span></p>";
echo "<p> De la catégorie : <span>",$forfait['categorie'],"</span></p>";
echo "<p> Récapitulatif de votre forfait :<span> ",$forfait['description'],"</span></p>";
echo "<p> La durée de votre voyage sera de :<span> ",$forfait['duree']," jours </span></p>";
echo "<p> Entre les dates suivantes :<span> ",$forfait['debut_saison']," et ", $forfait['fin_saison'],"</span></p>";
echo "<p> Pour la modique somme de :<span> ",$forfait['prix']," $ </span></p>";
echo "<p> Vous pouvez amener :<span> ",$forfait['nbr_max_animaux']," animaux </span></p>";
echo "<p> Avec un coût de  :<span> ",$forfait['prix_animal']," $ par animal </span></p>";
//echo "<p> Un aperçu de votre voyage :<span> ",$forfait['photo1'],"</span></p>";
//var_dump($forfait);
echo "</div>";

//?>

<!-------------------------------------------PARTIE DYNAMIQUE ICI (TOP)------------------------------------------------>


<main>
    <div id="wrapper">
        <div id="contenu">
            <form id="form_resa" name="form_resa" method="post">
                <div>
                    <label for="nom">Nom:</label>
                    <input name="nom" id="nom" type="text" required="required" pattern="[a-zA-Z]{1,20}" title="Mettre une majuscule en début de nom"/>
                </div>
                <div>
                    <label for="prenom">Prénom:</label>
                    <input name="prenom" id="prenom" type="text" required="required" pattern="[a-zA-Z]{1,20}" title="Mettre une majuscule en début de prénom"/>
                </div>
                <div>
                    <label for="adresse">Adresse:</label>
                    <input name="adresse" id="adresse" type="text" required="required" pattern="[a-zA-Z0-9]{1,}" title="Mettre une adresse avec chiffre et lettres"/>
                </div>
                <div>
                    <label for="email">Courriel:</label>
                    <input name="email" id="email" type="text" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  title="Mettre un @ dans votre adresse"/>
                </div>
                <div>
                    <label for="tel">#tel:</label>
                    <input name="tel" id="tel" type="text" required="required" pattern="\d{3}[\-]\d{3}[\-]\d{4}" title="Format : 514-555-5555"/>
                </div>
                <div>
                    <input type="submit" value="Réserver"/>
                </div>

            </form>
        </div>

</main>

<?php
require_once('views/page_bottom.php');// Inclusion des defines
?>



