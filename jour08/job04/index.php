<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>job04</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss"></style>

  </style>
</head>
<body class="bg-cyan-400 ">
    <header>
        <nav class="flex justify-evenly  bg-gradient-to-r from-purple-500 to-pink-500 w-100 h-16 text-white" >
            <a class="mt-4 mx-8 cursor-pointer ">Acceuil</a>
            <a class="mt-4 mx-8 cursor-pointer" >Inscription</a>
            <a class="mt-4 mx-8 cursor-pointer">Connexion</a>
            <a class="mt-4 mx-8 cursor-pointer">Rechercher</a>
        </nav>
 
    </header>

        <form  class=" flex flex-col justify-center items-center fixed top-30 left-20 right-460 h-120 w-1/2  bg-red-600 outline outline-offset-2 outline-yellow-500 ml-8 px-8 shadow-lg shadow-yellow-500/80 rounded">

            <label for="name">entrer votre nom</label>
            <input class="rounded" type="text" placeholder="nom" required>

            <label for="prénom">votre prénom</label>
            <input class="rounded" type="text" placeholder="prénom" required>

            <label for="adresse">votre adresse</label>
            <input class="rounded" type="text" placeholder="adresse" required>

            <label for="password">votre mot de pass</label>
            <input class="rounded" type="password" placeholder="mot de pass" required>

            <input type="radio" name="homme" value="homme">
            <label class="rounded" for="homme">Homme</label><br>

            <input type="radio" name="Femme" value="Femme">
            <label class="rounded" for="Femme">Femme</label>

            <label>vos passions ! :</label>

            <input class="rounded" type="checkbox">
            <label for="informatique">informatique</label>

            <input type="checkbox">
            <label for="voyage">voyage</label>

            <input type="checkbox">
            <label for="sport">sport</label>
            <br>
            <input class="rounded bg-cyan-500 hover:bg-cyan-600"   type="submit" value="envoyer !">
            <br>
        </form>

    <footer class="flex items-center justify-evenly	 bg-gradient-to-r from-purple-500 to-pink-500 w-100 h-16  absolute inset-x-0 bottom-0 h-16 text-white ">
        <a class="cursor-pointer">Acceuil</a>
        <a class="cursor-pointer">Inscription</a>
        <a class="cursor-pointer">Connexion</a>
        <a class="cursor-pointer">Rechercher</a>
    </footer>
    
</body>
</html>

