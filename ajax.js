/**
 * But : Que la soumission du formulaire n'entraîne pas un rechargement complet de la page, mais juste de la partie nécessaire.
 *
 * LES ÉTAPES :
 * 
 * 1/Empêcher le déroulement par défaut de la soumission du formulaire (càd qu'il n'y ait pas rechargement complet de la page) ==> récupérer le form, écouter sur le bon évènement
 *
 * 2/Récupère les données du formulaire en JS
 * 
 * 3/Envoyer les données à un fichier PHP
 * 
 * 4/Traitement en PHP
 * 
 * 5/On écoute l'événement readystatechange sur l'objet XMLHttpRequest
 * 
 * 6/Quand le readyState est à 4 et que le status est à 200 on peut récupérer les données et faire l'affichage désirée
 * 
 * ps : () => { } c'est une arrow function
 */

//Récupérer les éléments HTML dont on aura besoin
const form = document.querySelector("form");
const responsesDiv = document.getElementById("responses");
const scoreSpan = document.getElementById("score");
const scoreParagraph = document.getElementById("scoreParagraph");

//On fait disparaître le paragraphe
scoreParagraph.style.display = "none";

//On écoute l'événement submit sur le formulaire, "e" est l'événement, on peut le récupérer dans la fonction de callback d'un addEventListener
form.addEventListener("submit", e => {
  //Empêche le comportement par défaut de l'événement submit (rafraîchissement de la page, envoie des données,...)  
  e.preventDefault();
  //On récupère les données du formulaire (une fois celui-ci soumis) grâce à une instance de FormData
  const formData = new FormData(form);
  //On instancie un objet XMLHttpRequest qui nous servira pour l'asynchrone
  const xhr = new XMLHttpRequest();
  //la méthode open nous permet de préciser la méthode avec laquelle on désire travailler et le fichier (endpoint, destination,...) avec lequel on désire travailler
  xhr.open("post", "ajax.php");
  //La méthode send envoie la requête au serveur, nous pouvons lui passer un paramètre optionnel qui sont les données à envoyer au serveur
  xhr.send(formData);
  //On écoute l'événement readystatechange sur l'objet XMLHttpRequest
  xhr.addEventListener("readystatechange", () => {
    //Si tout s'est bien passé
    if (xhr.readyState === 4 && xhr.status === 200) {
      //On parse la réponse JSON (responseText est le texte reçu suite à l'envoi d'une requête) envoyé par le serveur afin d'obtenir un objet JavaScript que l'on peut facilement manipuler  
      const data = JSON.parse(xhr.responseText);
      //On vide la div qui va recevoir nos phrases de réponse
      responsesDiv.innerHTML = "";
      //Pour chaque réponse
      data.results.forEach(result => {
          //On concatène en contenu HTML ladite réponse
        responsesDiv.innerHTML += result;
      });
      //On fait apparaître le paragraphe
      scoreParagraph.style.display = "block";
      //On met le contenu textuel du score dans la span correspondante
      scoreSpan.innerText = data.rightAnswers;
      //On met la span a la couleur correspondante
      scoreSpan.style.color = data.color;
    }
  });
});
