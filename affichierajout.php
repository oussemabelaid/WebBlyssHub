<?PHP
include "config.php";
include "../core/ajouterC.php";

$adoption1C = new adoptionC();
$listeadoption = $adoption1C->afficherado();

?>


<table border="1">
	<tr>

		<td>Type</td>
		<td>Id</td>
        <td>Age</td>
        <td>Gender</td>
        <td>vaccination</td>
		<td>supprimer</td>
		<td>modifier</td>
	</tr>

	<?PHP
	foreach ($listeadoption as $row) {
		?>
		<tr>
			
			<td><?PHP echo $row['type']; ?></td>
			<td><?PHP echo $row['id'] ; ?></td>
            <td><?PHP echo $row['age']; ?></td>
            <td><?PHP echo $row['gender']; ?></td>
           
            <td><?PHP echo $row['vaccination']; ?></td>

			<td>
				<form method="POST">
					<input type="submit" name="supprimer" value="supprimer">
					<input type="hidden" name="id" value="<?PHP echo $row['id'];  ?>">
				</form>
			</td>
			<td><a href="modif.php?cinUtilisateur=<?PHP echo $row['id']; ?>">
					Modifier</a></td>
		</tr>
	<?PHP
	}

	if (isset($_POST["supprimer"])) {
		$adoption1C->supprimeradoption($_POST["id"]);
		header('Location:affichierajout.php');
    }
    
    
	?>
</table>

<a href="ajout.html"> Ajouter Commande </a>