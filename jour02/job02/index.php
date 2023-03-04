<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <title>Job02</title>
</head>
<button id="button" onclick="showhide()">Afficher/ Masquer l'article</button>
<article id="article"></article>

<script>
function showhide() {
  var article = document.getElementById("article");
  if (article.style.display === "none") {
    article.style.display = "block";
    article.innerHTML = "L'important n'est pas la chute, mais l'atterrissage.";
  } else {
    article.style.display = "none";
    article.innerHTML = "";
  }
}
</script>


</body>
</html>