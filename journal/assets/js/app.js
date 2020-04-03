



const clique=document.querySelector(".formulaire")
//const description=document.querySelector("#description")



clique.addEventListener("submit",function(event){
    var motCle=description.value
    event.preventDefault()
   fetch(`https://newsapi.org/v2/top-headlines?q=${motCle}&apiKey=48ac9af2a813496f9e9a4564bc3a1837`)
    .then(function(response){
        return response.json()
    })
    .then(function(data){

    //    const title= data.article[0].id;

    const title = document.querySelector("h2");
    const description = document.querySelector("h3");

    //difficulté a acceder a la valeur de article 
    const title1 = data.article.title
    const description2 = data.article.description 


        title.innerText += title1;
        description.innerText += description2;
        
        console.log(data);
    })

})