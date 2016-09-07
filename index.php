<?php
require_once('views/page_top.php');// Inclusion des defines
?>
<main>
    <h1>Bienvenue chez Sky is the limit ! </h1>
<!--   debut du projet-->
    <div id="container">
        <div id="slider">
            <a id="prev" href="javascript:void(0);" data-sens="-1"></a>
            <a id="next" href="javascript:void(0);" data-sens="+1"></a>
            <ul id="sContent">
                <li><img src="images/categorie/Banff_Parke.jpg" alt="Image 0" /></li><!--
			--><li><img src="images/categorie/croisiere_01.jpg" alt="Image 1" /></li><!--
			--><li><img src="images/categorie/iceberg_01.jpg" alt="Image 2"/></li><!--
			--><li><img src="images/categorie/ski.jpg" alt="Image 3" /></li><!--
			--><li><img src="images/categorie/lac_louise.jpg" alt="Image 4" /></li>
            </ul>
        </div>
    </div>
</main>
<?php
require_once('views/page_bottom.php');// Inclusion des defines
?>
