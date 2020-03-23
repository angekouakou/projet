


// pour creer une alerte apres avoir envoyer le formulaire 
let element = document.getElementById('envoyer');

element.onclick = function() {
    alert("Votre message a ete envoyé!! Merci");
};

// pour creer une couleur lorsque la souris efflore le titre h1 
let titre = document.querySelector("h1")
titre.addEventListener('mouseover', function(){this.style.backgroundColor ='blue'});
titre.addEventListener('mouseover', function(){this.style.fontWeight ='bold'});
titre.addEventListener('mouseout', function(){this.style.backgroundColor='white'});




function openNav() {
    document.getElementById("sideNavigation").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}
 
function closeNav() {
    document.getElementById("sideNavigation").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}





  const  utilisateur = [
    {
      id: 1,
      name: "Leanne Graham",
      username: "Bret",
      email: "Sincere@april.biz",
      address: {
        street: "Kulas Light",
        suite: "Apt. 556",
        city: "Gwenborough",
        zipcode: 92998-3874,  
      },
     
    },
    {
      id: 2,
      name: "Ervin Howell",
      username: "Antonette",
      email: "Shanna@melissa.tv",
      address: {
      street: "Victor Plains",
        suite: "Suite 879",
        city: "Wisokyburgh",
        "zipcode": 90566-7771,
       },

    },

    {
      id: 3,
      name: "Clementine Bauch",
      username: "Samantha",
      email: "Nathan@yesenia.net",
      address: {
        street: "Douglas Extension",
        suite: "Suite 847",
        city: "McKenziehaven",
        zipcode: 59590-4157,
       
      },
  
    },
    {
      id: 4,
      name: "Patricia Lebsack",
      username: "Karianne",
      email: "Julianne.OConner@kory.org",
      address: {
        street: "Hoeger Mall",
        suite: "Apt. 692",
        city: "South Elvis",
        zipcode: 53919-4257,
      },
     
    },


    {
      id: 5,
      name: "Chelsey Dietrich",
      username: "Kamren",
      email: "Lucio_Hettinger@annie.ca",
      address: {
        street: "Skiles Walks",
        suite: "Suite 351",
        city: "Roscoeview",
        zipcode: 33263,    
      },
      
    },
    {
      id: 6,
      name: "Mrs. Dennis Schulist",
    username: "Leopoldo_Corkery",
      email: "Karley_Dach@jasper.info",
      address: {
        street: "Norberto Crossing",
        suite: "Apt. 950",
        city: "South Christy",
        zipcode: 23505-1337,  
      },
    
    },
    {
      id: 7,
      name: "Kurtis Weissnat",
      username: "Elwyn.Skiles",
      email: "Telly.Hoeger@billy.biz",
      address: {
        street: "Rex Trail",
        suite: "Suite 280",
        city: "Howemouth",
        zipcode: 58804-1099, 
      },
      
    },
    {
      id: 8,
      name: "Nicholas Runolfsdottir V",
      username: "Maxime_Nienow",
      email: "Sherwood@rosamond.me",
      address: {
        street: "Ellsworth Summit",
        suite: "Suite 729",
        city: "Aliyaview",
        zipcode: 45169,
      },
     
    },
    {
      id: 9,
      name: "Glenna Reichert",
      username: "Delphine",
      email: "Chaim_McDermott@dana.io",
      address: {
        street: "Dayna Park",
        suite: "Suite 449",
        city: "Bartholomebury",
        zipcode: 76495-3109,
    },  

},

    {
      id: 10,
      name: "Clementina DuBuque",
      username: "Moriah.Stanton",
      email: "Rey.Padberg@karina.biz",
      address: {
        street: "Kattie Turnpike",
        suite: "Suite 198",
        city: "Lebsackbury",
        zipcode: 31428-2261,
        
      },
      
    }
  ]

  function Utilisateur(id, name, username,email) {

    this.id = "id";
    this.name = "name";
    this.username = "username";
    this.email = "email";

   console.log(Utilisateur);

}

// utilisateur.forEach(function() {
//     new Utilisateur()
// });

function generateRandomNumber(max) {
    return Math.floor(Math.random() * max)
}

console.log(generateRandomNumber(50))

function getUser() {
    // générer un nombre entier aléatoire entre 0 et la longueur max du tableau utilisateur
    const random = generateRandomNumber(utilisateur.length)
    // const random = Math.floor(Math.random() * utilisateur.length)
    console.log(utilisateur[random])

    // utiliser ce nombre aléatoire pour récupérer un user grace à cet index
}

getUser()



  let elem = document.getElementById('afficher');
