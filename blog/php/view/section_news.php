
        <section>
            <h2> Titre de page news </h2>
           
<div class="liste_article">

<?php



$pdo = new PDO("mysql:host=localhost; dbname=bd_simplon; charset=utf8;","root" ,"");



                $requeteSQl =

<<<CODESQL
 
select * from `articles`
order by DatePublication DESC 

CODESQL;

$pdoStatement = $pdo->query($requeteSQl);


$recupTable = $pdoStatement->fetchAll();

foreach ($recupTable as $tabloAssos) {

    $id                   = $tabloAssos["id"];
    $titrePublication     = $tabloAssos["titrePublication"];
    $contenuPublication   = $tabloAssos["contenuPublication"];
    $categoriePublication = $tabloAssos["categoriePublication"];
    $imagePublication      = $tabloAssos["imagePublication"];
    $DatePublication      = $tabloAssos["DatePublication"];



    echo 

<<<CODEHTML

<article class="$categoriePublication">
<img src="$imagePublication" alt="">
<h3>$titrePublication</h3>
<p>$contenuPublication</p>
</article>

CODEHTML;

}

?>

</div>
        </section>