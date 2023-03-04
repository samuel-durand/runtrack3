<?php
// Connexion à la base de données
$pdo = new PDO("mysql:host=localhost;dbname=utilisateurs", "root", "");

// Récupération des utilisateurs
$query = "SELECT * FROM utilisateurs";
$stmt = $pdo->prepare($query);
$stmt->execute();
$utilisateurs = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Affichage des résultats en JSON
header('Content-Type: application/json');
echo json_encode($utilisateurs);
?>
