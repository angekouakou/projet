<?php
require_once "php/model/glossaire.php";
//  print_r($glossaire);

function displayRandomTerm($array)
{
    $length = count($array);

    $index = mt_rand(0, $length - 1);

    $title = $array[$index]["title"];
    $description =  $array[$index]["description"];

    //echo '<pres>';
    //print_r($array[$index]["title"]);
    //echo '<br>';
    //print_r($array[$index]["drescrption"]);
    //echo '</pres>';


    $html =

        <<<CODE


<div> 
 <h1> le terme est : {$title} </h1>
 <p> la definition est :  {$description} </p>
</div>


CODE;


    echo $html;
}

displayRandomTerm($glossaire);


?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glossaire des termes OPQUAST</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link href="assets/css/style.css" >
</head>

<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0" wtx-context="185FDF71-40B9-4D10-857E-A1702599E708">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" wtx-context="A78721F0-5F1D-47BD-AA27-1EEE0488E9AE">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


</header>
<main>
    <form action="">
        <button type="submit">Afficher un terme aleatoires</button>

    </form>
    <?php displayRandomTerm($glossaire); ?>


    </main>

    <footer>

    </footer>
</body>

</html>


<?php

function direBonjour($nom){

  echo "Bonjour". $nom . "vous etes la bienvenue";
}
direBonjour("Martial");

?>