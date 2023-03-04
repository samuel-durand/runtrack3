<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job03</title>
</head>
<body>
<button id="button">Cliquez-moi</button>
<p id="compteur">0</p>

<script>
  var compteur = document.getElementById("compteur");
  var button = document.getElementById("button");
  var count = 0;

  function addone() {
    count++;
    compteur.innerHTML = count;
  }

  button.addEventListener("click", addone);
</script>

    
</body>
</html>