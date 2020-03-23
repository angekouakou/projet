<section id="section_contact">

<h2>FORMULAIRE </h2>
<form action="#section_contact" method="POST">

    <input type="text" name="nom" placeholder="entrer votre nom" required>
    <input type="email" name="email" placeholder="entrer votre email" required>
    <textarea name="message" cols="50" rows="10" placeholder="entrer votre message" required></textarea>
    <button type="submit">Envoyer </button>
</form>

<div class="traitement_php">

    <?php
       if (count($_REQUEST) > 0) {

           $nom = $_REQUEST['nom'];
           $email = $_REQUEST['email'];
           $message = $_REQUEST['message'];


           $_requeteSql =
<<<CODESQL

INSERT INTO contact 
(nom, email, message)
values
('$nom','$email','$message');

CODESQL;


           $pdo = new PDO("mysql:dbname=bd_simplon;host=localhost;charset=utf8;", "root", "");
           $pdo->exec($_requeteSql);
       }
       ?>


</div>



</section>