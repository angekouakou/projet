<?php

htmlspecialchars(isset($_POST["nom"]));
htmlspecialchars(isset($_POST["prenom"]));
htmlspecialchars(isset($_POST["email"]));
htmlspecialchars(isset($_POST["password"]));

if (isset($_POST['password']) AND $_POST['password'] ==  "kangourou") 
   
 {

    echo "afficher les codes de la nasa ";
}

else  {
    echo " votre mot de passe est incorret";
}

?>