<?php

$pdo = new PDO("mysql:host=localhost;dbname=bd_simplon;charset=utf8;", "root","");

$pdostatement = $pdo->prepare($requeteSQL);

$pdostatement -> execute($tabloAssos);
