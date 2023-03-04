<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>job01</title>
</head>
<body>
<div id="rainbow-container">
  <img src="./arc1.png" />
  <img src="./arc2.png" />
  <img src="./arc3.png" />
  <img src="./arc4.png" />
  <img src="./arc5.png" />
  <img src="./arc6.png" />
</div>
<button id="shuffle-btn">Mélanger</button>
<div id="message"></div>

    <script>
// Récupérer les éléments HTML
const rainbowContainer = document.getElementById("rainbow-container");
const shuffleBtn = document.getElementById("shuffle-btn");
const message = document.getElementById("message");

// Mélanger les images de l'arc-en-ciel
shuffleBtn.addEventListener("click", function() {
  for (let i = rainbowContainer.children.length; i >= 0; i--) {
    rainbowContainer.appendChild(rainbowContainer.children[Math.random() * i | 0]);
  }
});

// Vérifier si les images sont dans le bon ordre
function checkOrder() {
  const images = rainbowContainer.querySelectorAll("img");
  let isOrdered = true;
  for (let i = 0; i < images.length - 1; i++) {
    if (images[i].src > images[i+1].src) {
      isOrdered = false;
      break;
    }
  }
  return isOrdered;
}

// Ajouter la possibilité de réordonner les images
let draggedImage = null;

rainbowContainer.addEventListener("dragstart", function(event) {
  if (event.target.tagName === "IMG") {
    draggedImage = event.target;
    event.dataTransfer.setData("text/plain", "");
  }
});

rainbowContainer.addEventListener("dragover", function(event) {
  event.preventDefault();
});

rainbowContainer.addEventListener("drop", function(event) {
  if (event.target.tagName === "IMG" && event.target !== draggedImage) {
    rainbowContainer.insertBefore(draggedImage, event.target.nextSibling);
    if (checkOrder()) {
      message.textContent = "Vous avez gagné";
      message.style.color = "green";
    } else {
      message.textContent = "";
    }
  }
  draggedImage = null;
});


    </script>
</body>
</html>