<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js"></script>
</head>
<body>
<article id="citation">
  La vie a beaucoup plus d'imagination que nous.
</article>

<button id="button" onclick="citation()">Afficher la citation</button>

<script>
  function citation() {
    var citation = document.getElementById("citation").textContent;
    console.log(citation);
  }
</script>

    
</body>
</html>