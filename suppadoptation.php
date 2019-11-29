<?PHP
include "ajouterC.php";

$adoption1C=new  adoptionC();
if (isset($_POST["id"])){
	$adoptionC->supprimeradoption($_POST["id"]);
	header('Location:affichierajout.php');
}

?>