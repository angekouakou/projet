<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JAVASCRIPT</title>
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <header>

    <div id="sideNavigation" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Accueil</a>
  <a href="#">presentation</a>
  <a href="#">Contact</a>
</div>
 
<nav class="topnav">
  <a href="#" onclick="openNav()">
    <svg width="30" height="30" id="icoOpen">
        <path d="M0,5 30,5" stroke="#000" stroke-width="5"/>
        <path d="M0,14 30,14" stroke="#000" stroke-width="5"/>
        <path d="M0,23 30,23" stroke="#000" stroke-width="5"/>
    </svg>
  </a>
</nav>

        <h1 id="titre"> FORMULAIRE JS</h1>
    </header>


    <main>

        <form action="#index.php" method="post">

            <p><label for="nom">Nom </label>
                <input type="text" name="nom" required> </p>
            <p> <label for="prenom">Prenom</label>
                <input type="text" name="prenom" required> </p>
            <p> <label for="mail">Email</label>
                <input type="email" name="email" required> </p>
            <p> <button type="submit" id="envoyer"> ENVOYER</button> </p>


        </form>




        <button type="submit" id="afficher">Afficher</button>

    </main>


    <script src="assets/js/app.js"></script>




</body>

</html>