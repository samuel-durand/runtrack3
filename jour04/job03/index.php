<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Exemple de filtrage de données Pokemon</title>
</head>
<body>
  <form id="filter-form">
    <label for="id-input">ID :</label>
    <input type="text" id="id-input" name="id">
    <br>
    <label for="name-input">Nom :</label>
    <input type="text" id="name-input" name="name">
    <br>
    <label for="type-select">Type :</label>
    <select id="type-select" name="type">
      <option value="">--Tous--</option>
      <option value="Normal">Normal</option>
      <option value="Fire">Feu</option>
      <option value="Water">Eau</option>
      <option value="Grass">Plante</option>
      <option value="Electric">Electrik</option>
      <option value="Ice">Glace</option>
      <option value="Fighting">Combat</option>
      <option value="Poison">Poison</option>
      <option value="Ground">Sol</option>
      <option value="Flying">Vol</option>
      <option value="Psychic">Psy</option>
      <option value="Bug">Insecte</option>
      <option value="Rock">Roche</option>
      <option value="Ghost">Spectre</option>
      <option value="Dragon">Dragon</option>
      <option value="Dark">Ténèbres</option>
      <option value="Steel">Acier</option>
      <option value="Fairy">Fée</option>
    </select>
    <br>
    <input type="button" id="filter-button" value="Filtrer">
  </form>
  
  <div id="pokemon-list"></div>

  <script>
    const filterForm = document.getElementById("filter-form");
    const filterButton = document.getElementById("filter-button");
    const pokemonList = document.getElementById("pokemon-list");

    filterButton.addEventListener("click", () => {
      const id = document.getElementById("id-input").value;
      const name = document.getElementById("name-input").value;
      const type = document.getElementById("type-select").value;
      fetch("pokemon.json")
        .then(response => response.json())
        .then(data => {
          let filteredData = data;
          if (id) {
            filteredData = filteredData.filter(pokemon => pokemon.id.includes(id));
          }
          if (name) {
            filteredData = filteredData.filter(pokemon => pokemon.name.toLowerCase().includes(name.toLowerCase()));
          }
          if (type) {
            filteredData = filteredData.filter(pokemon => pokemon.type.includes(type));
          }
          const pokemonHtml = filteredData.map(pokemon => `<div>${pokemon.name} (${pokemon.type})</div>`).join("");
          pokemonList.innerHTML = pokemonHtml;
        })
        .catch(error => console.error(error));
    });
  </script>
</body>
</html>
