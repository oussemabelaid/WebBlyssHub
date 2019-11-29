<HTML>

<head>
</head>
<h1>Ajouter adoption</h1>
<?php
include "../config.php";

	include "../entities/ajouterA.php";
	

	
	  //connection au serveur
	  $cnx = mysql_connect( "localhost", "root", "" ) ;
 
	  //sélection de la base de données:
	  $db  = mysql_select_db( "projet" ) ;
	 
	  //récupération des valeurs des champs:    
		
	 
	  $id  = $_POST["id"] ;
	  
	  $type = $_POST["type"] ;
	
	  $_age = $_POST["age"] ;
	
	  $Gender   = $_POST["Gender"] ;
	  
	  $vaccination  = $_POST["vaccination"] ;
	 
	 
	  //création de la requête SQL:
	  $sql = "INSERT  INTO adoption (id, type, age, Gender, vaccination)
				VALUES ( '$id', '$type', '$age', '$Gender', '$vaccination') " ;
	 
	  //exécution de la requête SQL:
	  $requete = mysql_query($sql, $cnx) or die( mysql_error() ) ;
	 
	  //affichage des résultats, pour savoir si l'insertion a marchée:
	  if($requete)
	  {
		echo("L'insertion a été correctement effectuée") ;
	  }
	  else
	  {
		echo("L'insertion à échouée") ;
	  }

	



	
?>
<form form name="insertion" action="ajoutcommande.php" method="POST">
	<table>
    <tr>
<td>saisir votre CIN</td>
<td><input type="number" name="cinUtilisateur"></td>
</tr>
<tr>
<td>ref de la commande</td>
<td><input type="number" name="ref"></td>
</tr>
<tr>
<td>payment</td>
<td><input type="number" name="payment"></td>
</tr>
<tr>
<td>la description</td>
<td><input type="text" name="description"></td>
</tr>
<tr>
<td>date</td>
<td><input type="date" name="date"></td>
</tr>
<tr>
<td>prix</td>
<td><input type="number" name="prix"></td>
</tr>

<tr>

<td><input type="submit" name="ajouter" value="ajouter"></td>
</tr>

	</table>
</form>
</body>

