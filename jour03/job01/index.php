<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job01</title>
</head>
<body>
<button id="show-quote">Afficher la citation</button>
<button id="hide-quote">Cacher la citation</button>
<p id="quote" style="display: none">Les logiciels et les cathédrales, c'est un peu la même chose - d'abord on les construit, ensuite on prie.</p>

<script>// Récupérer les boutons et l'élément à cacher
const showBtn = document.getElementById("show-quote");
const hideBtn = document.getElementById("hide-quote");
const quote = document.getElementById("quote");

// Ajouter un écouteur d'événement sur le bouton d'affichage
showBtn.addEventListener("click", function() {
  // Afficher l'élément
  quote.style.display = "block";
});

// Ajouter un écouteur d'événement sur le bouton de masquage
hideBtn.addEventListener("click", function() {
  // Cacher l'élément
  quote.style.display = "none";
});
</script>
    
</body>
</html>