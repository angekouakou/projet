<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/weather-icons/2.0.10/css/weather-icons.min.css"
    />
  </head>
  <body>
    <h1>Nom de la ville :&nbsp;</h1>
    <p>Température du jour : &nbsp;</p>
    <!-- lien vers les entités HTML : https://www.freeformatter.com/html-entities.html -->
    <i class="wi"></i>

    <script>
      // step 1 : obtenir son adresse ip
      // pour ça on va utiliser l'API ipify (gratuite) qui va récupérer notre adresse ip
      fetch("https://api.ipify.org?format=json")
        // version javascript classique
        .then(function(response) {
          // on récupère la réponse et on la formatte en objet javascript
          return response.json();
        })

        // version ES6 (fonctions fléchées)
        // si on a qu'un seul paramètre à passer à la fonction on peut se passer des parenthèses. Elles seront obligatoires s'il y en a plusieurs
        // si la fonction n'exécute qu'une seule instruction, on peut aussi se passer des {}. Sinon elles seront obligatoires
        // dans le code à la ligne suivante le return est implicite, on n'a pas besoinde le spécifier

        // .then(response => response.json())

        .then(function(data) {
          // une fois qu'on a notre objet js, on peut accéder à ses propriétés
          // on récupère la valeur de la propriété ip de l'objet data et on le stocke dans une variable qu'on utilisera dans notre prochain call API
          const ip = data.ip;

          // step 2 :  récupérer un nom de ville en fonction de l'adresse ip obtenue
          // pour ça on va utiliser l'API ipstack à laquelle on va passer 2 paramètres :
          // l'ip
          //  une clé API

          // utilisation des backticks (string litterals) pour interpoler les variables (ES6)

          // fetch(
          //   `http://api.ipstack.com/${ip}?access_key=30c029b1d2a8dcdcdf26ac5a0e07b914`
          // );

          // méthode classique avec concaténation de chaînes de caractères
          fetch(
            "http://api.ipstack.com/" +
              ip +
              "?access_key=30c029b1d2a8dcddf26ac5a0e07b914"
          )
            .then(function(response) {
              // on récupère la réponse et on la formatte en objet javascript
              return response.json();
            })
            .then(function(data) {
              // on accède à la propriété city de l'objet data et on stocke sa valeur dans une variable
              let city = data.city;

              // on s'assure que le nom de la ville a le bon format
              // par exemple pour Marseille, l'API va retourner "Marseille 01" qu'on doit transformer en marseille
              // étape 1 : on utilise la fonction js split() pour découper une chaîne de caratères en sous chaînes en fonction d'un délimiteur. Ici en fonction d'un " ". split() retourne un tableau
              // étape 2 : on récupère le premier élément du tableau (le nom de la ville)
              // étape 3 : on transforme la chaîne de caractères en minuscules avec la fonction toLowerCase()
              // on peut chaîner les méthodes en 1 seule ligne de code
              city = city.split(" ")[0].toLowerCase();

              // step 3 : récupérer les conditions météo pour la ville
              // on utilise l'API openweathermap à laquelle on passe 2 paramètres :
              // un nom de ville
              // une clé API
              fetch(
                `http://api.openweathermap.org/data/2.5/weather?q=${city}&appid=8e602b9ea28ed4f9f8fc97a5f6d1105c&lang=fr&units=metric`
              )
                .then(function(response) {
                  // on transforme la réponse en objet javascript
                  return response.json();
                })
                .then(function(data) {
                  // on récupère un objet js, on peut maintenant accéder à ses propriétés
                  // debug
                  console.log(data);

                  // ici je récupère les éléments du DOM dans lesquels je veux afficher la valeur des infos météo que je récupère
                  const city = document.querySelector("h1");
                  const temp = document.querySelector("p");
                  const conditions = document.querySelector("i");

                  // ensuite j'injecte ces valeurs dans le DOM
                  // par ex : je vais chercher la valeur de la propriété temp de la propriété main de l'objet data

                  const ville = data.name;
                  const temperature = Math.round(data.main.temp);
                  const icon = data.weather[0].id;

                  // console.log("La ville est ", ville);
                  // console.log("La température est ", temperature);
                  // propriétés possibles affichage icone : description, id, icon, main
                  // console.log(icon);

                  // on peut maintenant afficher les informations dans les éléments du DOM qui nous intéressent
                  //city.innerText = city.innerText + ville;
                  // on peut aussi l'écrire de manière raccourcie
                  city.innerText += ville;
                  temp.innerText += temperature;
                  // console.log(conditions.classList);
                  // format des classes css de la librairie weather icons pour openweathermap : wi-owm-id
                  const conditionsClass = "wi-owm-" + icon; // va afficher wi-owm-500
                  // méthode ES6 d'interpolation des variables dans une chaîne de caractères
                  //  const conditionsClass = `wi-owm-${icon}`
                  conditions.classList.add(conditionsClass);
                });
            });
        });
    </script>
  </body>
</html>