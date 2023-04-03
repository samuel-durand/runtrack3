document.addEventListener("DOMContentLoaded", function() {
    var tiles = document.querySelectorAll(".tile");
    var emptyTile = document.querySelector(".empty");
    var moves = 0;
  
    function shuffle() {
      for (var i = 0; i < 100; i++) {
        var randomIndex = Math.floor(Math.random() * tiles.length);
        var randomTile = tiles[randomIndex];
        swapTiles(randomTile);
      }
      moves = 0;
    }
  
    function swapTiles(tile) {
      if (canMove(tile)) {
        emptyTile.parentNode.insertBefore(tile, emptyTile);
        emptyTile = tile.nextElementSibling;
        moves++;
        if (isSolved()) {
          document.getElementById("board").classList.add("solved");
          document.getElementById("message").textContent = "Vous avez gagné en " + moves + " coups !";
        }
      }
    }
  
    function canMove(tile) {
      var tileIndex = Array.prototype.indexOf.call(tiles, tile);
      var emptyIndex = Array.prototype.indexOf.call(tiles, emptyTile);
      var distance = Math.abs(tileIndex - emptyIndex);
      return distance == 1 || distance == 3;
    }
  
    function isSolved() {
      for (var i = 0; i < tiles.length; i++) {
        var tile = tiles[i];
        var correctIndex = i + 1;
        if (tile !== emptyTile && Array.prototype.indexOf.call(tiles, tile) !== correctIndex) {
          return false;
        }
      }
      return true;
    }
  
    shuffle();
  
    var images = ["logo1.PNG", "logo2.PNG", "logo3.PNG", "logo4.PNG", "logo5.PNG", "logo6.PNG", "logo7.PNG", "logo8.PNG"];
  
    for (var i = 0; i < tiles.length; i++) {
      var tile = tiles[i];
      if (!tile.classList.contains("empty")) {
        var randomIndex = Math.floor(Math.random() * images.length);
        var randomImage = images[randomIndex];
        tile.style.backgroundImage = "url(" + randomImage + ")";
        images.splice(randomIndex, 1);
      }
      tile.addEventListener("click", function() {
        swapTiles(this);
      });
    }
  
    var resetButton = document.getElementById("reset");
    resetButton.addEventListener("click", function() {
      document.getElementById("board").classList.remove("solved");
      document.getElementById("message").textContent = "";
      shuffle();
    });
  });
  
  
  