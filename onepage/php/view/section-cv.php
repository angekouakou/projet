<section id="section1">

    <div class="contain1">


    </div>

</section>

<section id="section2">


    <div class="contain2">


    </div>
</section>

<section id="section3">
    <h2>MES COMPETENCES </h2>


    <div class="container1">

        <?php

        $tableau = [
            "assets/img/html.png",
            "assets/img/css.png",
            "assets/img/php.png"
        ];

        foreach ($tableau as $img) {

            echo
                <<<CODEHTML
 <img src="$img" alt="">
 CODEHTML;
        }

        ?>

    </div>




</section>

<section id="section4">

    <h2> MES LOISIRS </h2>

    <div class="container2">

        <?php
        $tableau1 = [
            "assets/img/football.jpeg",
            "assets/img/voyage.jpeg",
            "assets/img/internet.jpeg"
        ];

        for ($i = 0; $i < count($tableau1); $i = $i + 1) {
            echo
                <<<CODEHTM
    <img src="$tableau1[$i]" alt="">

    CODEHTM;
        }

        ?>

    </div>
</section>

<section id="section5">
    <div class="container3">
        <form action="#section5" method="GET">

            <input type="text" name="nom" placeholder="entrer votre nom" required>
            <input type="text" name="prenom" placeholder="entrer votre prenom" required>
            <input type="text" name="telephone" placeholder="entrer votre telephone" required>
            <input type="email" name="email" placeholder="entrer votre mail" required>
            <textarea name="message" cols="10" rows="10" required>  entrer votre message </textarea>
            <button type="submit"> Envoyer </button>

        </form>

        <?php

        $infoform = count($_REQUEST);

        if ($infoform > 0) {
            $nom       = $_REQUEST["nom"];
            $prenom    = $_REQUEST["prenom"];
            $telephone = $_REQUEST["telephone"];
            $email     = $_REQUEST["email"];
            $message   = $_REQUEST["message"];

            echo " votre message a été envoyé ";
        }


        ?>
    </div>
</section>