<?php
require_once('views/page_top.php');// Inclusion des defines
?>
<main xmlns="http://www.w3.org/1999/html">
    <h1>Bienvenue chez Sky is the limit ! </h1>

<!--   debut du projet-->
    <div id="container">
        <div id="slider">
            <a id="prev" href="javascript:void(0);" data-sens="-1"></a>
            <a id="next" href="javascript:void(0);" data-sens="+1"></a>
            <ul id="sContent">
                <li><img class="toto" src="images/categorie/Banff_Parke.jpg" alt="Image 0" /></li><!--
			--><li><img class="toto" src="images/categorie/iceberg_02.jpg" alt="Image 1" /></li><!--
			--><li><img class="toto" src="images/categorie/nature.jpg" alt="Image 2"/></li><!--
			--><li><img class="toto" src="images/categorie/ski.jpg" alt="Image 3" /></li><!--
			--><li><img class="toto" src="images/categorie/lac_louise.jpg" alt="Image 4" /></li>
            </ul>
        </div>
    </div>
    <div id="propos">
        <h1>A propos</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec laoreet nisl nunc, eu suscipit enim pretium in. Curabitur nec eleifend velit, vitae tristique ex. Sed laoreet eu ex nec tristique. Duis vulputate semper lectus a maximus. Etiam quis justo malesuada, congue lacus ac, interdum lacus. Proin non nisl ut ante finibus condimentum. Aliquam erat volutpat. Integer quis blandit nisl. Cras finibus, nisl non cursus fringilla, justo nulla sagittis nibh, varius cursus velit quam sed nisl. Sed elit dui, condimentum sed arcu a, vestibulum accumsan sapien. Duis sit amet ornare dui. Donec porttitor urna sit amet enim faucibus, eget porta sem pretium. Nullam est ante, interdum eget neque vitae, ullamcorper accumsan nibh. In vitae lacus id orci placerat imperdiet ac tempus urna.Sed elit dui, condimentum sed arcu a, vestibulum accumsan sapien. Duis sit amet ornare dui.Nullam  ante, interdum eget neque vitae, ullamcorper accumsan.</p>
        <p> Proin non nisl ut ante finibus condimentum. Aliquam erat volutpat. Integer quis blandit nisl. Cras finibus, nisl non cursus fringilla, justo nulla sagittis nibh, varius cursus velit quam sed nisl. Sed elit dui, condimentum sed arcu a, vestibulum accumsan sapien. Duis sit amet ornare dui. Donec porttitor urna sit amet enim faucibus, eget porta sem pretium. Nullam est ante, interdum eget neque vitae, ullamcorper accumsan nibh.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec laoreet nisl nunc, eu suscipit enim pretium in. Curabitur nec eleifend velit, vitae tristique ex. Sed laoreet eu ex nec tristique. Duis vulputate semper lectus a maximus. Etiam quis justo malesuada, congue lacus ac, interdum lacus. In vitae lacus id orci placerat imperdiet ac tempus urna.Sed elit dui, condimentum sed arcu a, vestibulum accumsan sapien. Duis sit amet ornare dui.Nullam  ante, interdum eget neque vitae, ullamcorper accumsan.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec laoreet nisl nunc, eu suscipit enim pretium in. Curabitur nec eleifend velit, vitae tristique ex. Sed laoreet eu ex nec tristique. Duis vulputate semper lectus. </p>
    </div>
    <div id="categories">
    <div>
        <h2>Les Croisières</h2>
        <p><a href="catalog.php?categorie=Croisières"><img src="images/images-modal/croisiere_01.jpg"></a></p>
    </div>
    <div>
        <h2>Les Sports d'hiver</h2>
        <p><a href="catalog.php?categorie=Sports d'hiver"><img src="images/video-img.png"></a></p>
    </div>
    <div><h2>La Nature</h2>
        <p><a href="catalog.php?categorie=Nature"><img src="images/images-modal/nature.jpg"></a></p>
    </div>
    </div>



</main>
<?php
require_once('views/page_bottom.php');// Inclusion des defines
?>
