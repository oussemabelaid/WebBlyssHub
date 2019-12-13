<?PHP
include "../../entities/livraison.php";
include "../../core/livraisonCrud.php";
include "../config.php";





if (isset($_POST['adresse'])  and isset($_POST['ville']) and isset($_POST['region']) and isset($_POST['telephone']) and isset($_POST['email']) and isset($_POST['iduser']))
{
 if(strlen(strval($_POST['telephone']))!=12){
 		//header('Location: create.php');

 	?>
	<script type="text/javascript">
  location.replace("create.php");

	alert("veuillez saisir un numero valide");</script>
	<?PHP
	}
	else {
	$adresse=$_POST['adresse'];
$ville=$_POST['ville'];
$region=$_POST['region'];
$telephone=$_POST['telephone'];
$email=$_POST['email'];
$commentaire=$_POST['commentaire'];
$iduser=$_POST['iduser'];
//var_dump($_POST['adresse']);
//var_dump(($adresse));
$livraison=new livraison($adresse,$ville,$region,$telephone,$email,$commentaire,$iduser);
//var_dump($region);
$livraison->setville($ville);
$livraison->setregion($region);
$livraison->settelephone($telephone);
$livraison->setemail($email);
$livraison->setcommentaire($commentaire);
$livraison->setiduser($iduser);
$livraison->setadresse($adresse);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$livraisonCrud=new livraisonCrud();
$livraisonCrud->ajouterlivraison($livraison);
//header('Location: display.php');
	//var_dump($livraison);
header('Location: display.php');
}
	//
	


}


?> 