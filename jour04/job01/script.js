const button = document.getElementById("button");
button.addEventListener("click", () => {
  fetch("expression.txt")
    .then(response => response.text())
    .then(data => {
      const p = document.createElement("p");
      p.innerText = data;
      document.body.appendChild(p);
    })
    .catch(error => {
      console.error("Error:", error);
    });
});
