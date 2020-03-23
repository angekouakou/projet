<?php


if (count($_REQUEST) > 0) {

    $tabloAssos = [

        "titrePublication"    =>  $_REQUEST["titrePublication"],
        "contenuPublication"  =>  $_REQUEST["contenuPublication"],
        "categoriePublication" =>  $_REQUEST["categoriePublication"],
        "imagePublication"    =>  $_REQUEST["imagePublication"],

    ];

    $requeteSQL =

        <<<CODESQL

INSERT INTO articles 
(titrePublication, contenuPublication, categoriePublication, imagePublication)
VALUES
(:titrePublication, :contenuPublication, :categoriePublication, :imagePublication )

CODESQL;

    require_once "php/models/envoyer_sql.php";
}
