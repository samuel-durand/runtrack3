<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Code Konami</title>
    <link rel="stylesheet" href="style.css">
  </head> 
  <body>
    <h1>Code Konami</h1>
    <p>Entrez le code Konami pour activer le thème La Plateforme_.</p>
    <script>
      // Code Konami : ↑ ↑ ↓ ↓ ← → ← → B A
      const codeKonami = [
        "ArrowUp", "ArrowUp", "ArrowDown", "ArrowDown",
        "ArrowLeft", "ArrowRight", "ArrowLeft", "ArrowRight",
        "KeyB", "KeyA"
      ];
      let codeKonamiIndex = 0;
      function handleCodeKonami(event) {
        if (event.code === codeKonami[codeKonamiIndex]) {
          codeKonamiIndex++;
          if (codeKonamiIndex === codeKonami.length) {
            document.body.classList.add("konami");
            document.removeEventListener("keydown", handleCodeKonami);
          }
        } else {
          codeKonamiIndex = 0;
        }
      }
      document.addEventListener("keydown", handleCodeKonami);
    </script>
  </body>
</html>
