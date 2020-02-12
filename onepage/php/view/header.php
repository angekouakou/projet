<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <header>

        <h1>
            <figure class="contain"><img src="assets/img/moi.png" alt="">
            </figure>
            <?php echo $titrePage ?? "Titre de la page"; ?>
        </h1>


        <nav>

            <a href="#section1">A Propos</a>
            <a href="#section2">Experience</a>
            <a href="#section3">Mes competences</a>
            <a href="#section4">Mes loisirs</a>
        </nav>

    </header>


    <main>