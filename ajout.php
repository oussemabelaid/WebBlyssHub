<?PHP
include "ajouterC.php";
include "ajouterA.php";

if (isset($_POST['type']) and isset($_POST['id']) and isset($_POST['age']) and isset($_POST['gender']) and isset($_POST['vaccination']))
{
$ajouterA1=new adoption($_POST['type'],$_POST['id'],$_POST['age'],$_POST['gender'],$_POST['vaccination']);
$ajouter1C=new adoptionC();
$ajouter1C->ajouteradoption($ajouterA1);
header('Location: ajout.html');
	
}
else{
	echo "vérifier les champs";
}


?>