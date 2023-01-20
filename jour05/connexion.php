<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>login</title>
</head>
<body>
    
    <header>
        <?php include('./header.php')?>
    </header>

    <main>
        <form>
            
            <label for="nom">votre nom</label>
            <input type="text" id="nom" name="nom" placeholder="nom">
            
            <label for="password">votre mot de pass</label>
            <input type="password" id="password" name="password" placeholder="mot de pass">

            <input type="submit" value="se connecter">

        </form>
    </main>

    <footer>
        <? include('') ?>
    </footer>
    
</body>
</html>