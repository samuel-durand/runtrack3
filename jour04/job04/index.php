<!DOCTYPE html>
<html>
<head>
	<title>Liste des utilisateurs</title>
	<meta charset="utf-8">
</head>
<body>
	<button onclick="updateTable()">Update</button>
	<table id="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nom</th>
				<th>Prénom</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			<!-- Les utilisateurs seront ajoutés ici via JavaScript -->
		</tbody>
	</table>
	<script>
		function updateTable() {
			// Requête Fetch pour récupérer les données des utilisateurs
			fetch('users.php')
				.then(response => response.json())
				.then(data => {
					// Suppression des anciennes lignes de la table
					document.querySelectorAll('#table tbody tr').forEach(tr => tr.remove());
					// Ajout des nouvelles lignes avec les données des utilisateurs
					data.forEach(utilisateur => {
						const tr = document.createElement('tr');
						tr.innerHTML = `
							<td>${utilisateur.id}</td>
							<td>${utilisateur.nom}</td>
							<td>${utilisateur.prenom}</td>
							<td>${utilisateur.email}</td>
						`;
						document.querySelector('#table tbody').appendChild(tr);
					});
				})
				.catch(error => console.error(error));
		}
	</script>
</body>
</html>
