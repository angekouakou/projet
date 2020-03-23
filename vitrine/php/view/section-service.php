
        <section>
            <h2>Service</h2>
           
            <!-- JE RAJOUTE UNE CLASSE POUR POUVOIR FACILEMENT SELECTIONNER LA BALISE EN JS -->
            <img class="imagePrincipale" src="assets/img/maison1.jpg" alt="maison1">
            <div class="container">
<?php


$listeGalerie = glob("assets/img/maison*.{jpg,jpeg,gif,png}", GLOB_BRACE);

foreach($listeGalerie as $image)
{
    echo 
<<<CODEHTML

    <img src="$image" alt="$image">

CODEHTML;
}

?>
             
            </div>
        </section>

        