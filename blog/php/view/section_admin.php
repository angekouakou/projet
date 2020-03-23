<section>

<form class="form_admin" id="admin" action="#admin" method="POST">


<label for="PAGE ADMIN"></label>

<input type="text" name="titrePublication" placeholder="entrer un titre" required>

<textarea name="contenuPublication" cols="50" rows="10" placeholder="entrer le contenu"></textarea>

<input type="text" name="categoriePublication" placeholder="entrer un titre" required>

<input type="text" name="imagePublication" placeholder="entrer le chemin image" required>
<button type="submit"> Envoyer </button>


<?php require_once "php/controllers/traitement_form_articles.php" ?>



</form>




</section>