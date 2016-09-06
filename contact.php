<?php
require_once('views/page_top.php');// Inclusion des defines
?>
<main>
    <h1>Contact</h1>
</main>
<?php
require_once('views/page_bottom.php');// Inclusion des defines
?>


<!--Debut du forrmulaire -->

<body>
<div id="wrapper">
    <h2>Les formulaires</h2>
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
</body>
