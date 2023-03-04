<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jon04</title>
</head>
<body>
<textarea id="keylogger"></textarea>

<script>
var keylogger = document.getElementById("keylogger");

document.addEventListener("keydown", function(event) {
  var key = event.key;
  if (/[a-z]/i.test(key)) {
    if (document.activeElement === keylogger) {
      keylogger.value += key + key;
    } else {
      keylogger.value += key;
    }
  }
});
</script>

    
</body>
</html>