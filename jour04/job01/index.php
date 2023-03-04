<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job01</title>

</head>
<body>
<button id="button">Cliquez-moi !</button>
<p id="expression"></p>

<script >const button = document.getElementById("button");
const expression = document.getElementById("expression");

button.addEventListener("click", () => {
  fetch("expression.txt")
    .then(response => response.text())
    .then(data => {
      expression.textContent = data;
    })
    .catch(error => console.error(error));
});
</script>
</body>
</html>