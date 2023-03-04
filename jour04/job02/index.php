<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Exemple de jsonValueKey()</title>
</head>
<body>
  <p>Chaîne JSON : <span id="json-str">{ "name": "La Plateforme_", "address": "8 rue d'hozier", "city": "Marseille", "nb_staff": "11", "creation":"2019" }</span></p>
  <p>Clé : <input type="text" id="key-input" value="city"></p>
  <button id="submit-button">Afficher la valeur</button>
  <p>Valeur : <span id="value-display"></span></p>

  <script>
    function jsonValueKey(jsonStr, key) {
      const obj = JSON.parse(jsonStr);
      return obj[key];
    }

    const submitButton = document.getElementById("submit-button");
    submitButton.addEventListener("click", () => {
      const jsonStr = document.getElementById("json-str").textContent;
      const key = document.getElementById("key-input").value;
      const value = jsonValueKey(jsonStr, key);
      document.getElementById("value-display").textContent = value;
    });
  </script>
</body>
</html>
