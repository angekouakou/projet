// on  selectionne le boutton afficher 
let b1 = document.querySelector('#api-call');




//On utilise la méthode addEventListener 
b1.addEventListener('click', requete);

const data_countries = document.getElementById("data_countries");

      function requete() {
        fetch("https://restcountries.eu/rest/v2/all")
          .then(function(response) {
            return response.json();
          })
          .then(function(data) {
            
        for (let index = 0; index < data.length; index++) {
           const div = document.createElement("div");
           div.innerHTML = `

           <h4> ${data[index].name} </h4> `;

           data_countries.append(div);
        }

        

      
          });
      }