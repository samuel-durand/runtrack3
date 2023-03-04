<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>job02</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss"></style>

  </style>
</head>
<body>
    <header>
        <nav class="flex justify-evenly bg-gradient-to-r from-purple-500 to-pink-500 w-100 h-16 text-white" >
            <a class="mt-4 mx-8 cursor-pointer ">Acceuil</a>
            <a class="mt-4 mx-8 cursor-pointer" >Inscription</a>
            <a class="mt-4 mx-8 cursor-pointer">Connexion</a>
            <a class="mt-4 mx-8 cursor-pointer">Rechercher</a>
        </nav>
 
    </header>

        <form >
            <label for="name">entrer votre nom</label><br>
            <input type="text" placeholder="nom" required><br>

            <label for="prénom">votre prénom</label><br>
            <input type="text" placeholder="prénom" required><br>

            <label for="adresse">votre adresse</label><br>
            <input type="text" placeholder="adresse" required><br>

            <label for="password">votre mot de pass</label><br>
            <input type="password" placeholder="mot de pass" required><br>

            <label for="homme">Homme</label><br>
            <input type="radio" name="homme" value="homme">

            <label for="Femme">Femme</label><br>
            <input type="radio" name="Femme" value="Femme">

            <label>vos passions ! :</label>

            <input type="checkbox">
            <label for="informatique">informatique</label>

            <input type="checkbox">
            <label for="voyage">voyage</label>

            <input type="checkbox">
            <label for="sport">sport</label>
            <br>
            <input type="submit" value="envoyer !">
            <br>

    <footer class="flex items-center justify-evenly	 bg-gradient-to-r from-purple-500 to-pink-500  absolute inset-x-0 bottom-0 h-16 text-white ">
        <a class="cursor-pointer">Acceuil</a>
        <a class="cursor-pointer">Inscription</a>
        <a class="cursor-pointer">Connexion</a>
        <a class="cursor-pointer">Rechercher</a>
    </footer>
    
</body>
</html>

