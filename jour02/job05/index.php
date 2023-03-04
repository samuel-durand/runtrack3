<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<h1>Lorem ipsum dolor sit amet</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lacinia quam ac nisi tristique hendrerit. Aenean vitae congue metus. Fusce et urna vel est sagittis maximus. Proin gravida eros at arcu auctor consectetur.</p>
  <!-- ... -->
  <footer></footer>

  <script>
    var footer = document.querySelector("footer");
    var body = document.body;
    var html = document.documentElement;
    var windowHeight = window.innerHeight;
    var docHeight = Math.max(body.scrollHeight, body.offsetHeight, html.clientHeight, html.scrollHeight, html.offsetHeight);
    var trackLength = docHeight - windowHeight;
    
    window.addEventListener("scroll", function() {
      var percent = (window.pageYOffset / trackLength) * 100;
      var color = "hsl(" + percent + ", 100%, 50%)";
      footer.style.backgroundColor = color;
    });
  </script>
</body>
</html>