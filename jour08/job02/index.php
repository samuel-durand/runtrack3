<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job02</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.17/tailwind.min.css">
</head>
<body>
    <header class="bg-gradient-to-r from-purple-500 to-pink-500 fixed top-0 left-0 right-0 h-16 text-white">
        <nav class="flex justify-evenly h-full items-center">
            <a class="cursor-pointer">Accueil</a>
            <a class="cursor-pointer">Inscription</a>
            <a class="cursor-pointer">Connexion</a>
            <a class="cursor-pointer">Rechercher</a>
        </nav>
    </header>
    <main class="container mx-auto my-16 max-w-md">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="name">Entrer votre nom :</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Nom" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="prenom">Entrer votre prénom :</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="prenom" type="text" placeholder="Prénom" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="adresse">Entrer votre adresse :</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="adresse" type="text" placeholder="Adresse" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="password">Entrer votre mot de passe :</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="Mot de passe" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2">Sexe :</label>
                <div class="mt-2">
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio" name="sexe" value="homme">
                        <span class="ml-2">Homme</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" name="sexe" value="femme">
                        <span class="ml-2">Femme</span>
                    </label>
                </div>
            </div>
            <div class="mb-4">
                <label for="inline-flex items-center ml-6">
                <input type="radio" name="passion" value="infomatique">
                <span>infomatique</span>
                <input type="radio" name="passion" value="sport">
                <span>sport</span>
                </label>
            </div>
        </form>
</main>

    <footer class="flex items-center justify-evenly	 bg-gradient-to-r from-purple-500 to-pink-500  absolute inset-x-0 bottom-0 h-16 text-white ">
        <a class="cursor-pointer">Acceuil</a>
        <a class="cursor-pointer">Inscription</a>
        <a class="cursor-pointer">Connexion</a>
        <a class="cursor-pointer">Rechercher</a>
    </footer>
    
</body>
</html>

