<?PHP
include "../entities/livraison.php";
include "../core/livraisonCrud.php";



if (isset($_POST['adresse'])  and isset($_POST['ville']) and isset($_POST['region']) and isset($_POST['telephone']) and isset($_POST['email']) and isset($_POST['iduser']))
{$adresse=$_POST['adresse'];
$ville=$_POST['ville'];
$region=$_POST['region'];
$telephone=$_POST['telephone'];
$email=$_POST['email'];
$commentaire=$_POST['commentaire'];
$iduser=$_POST['iduser'];
var_dump($_POST['adresse']);
var_dump(($adresse));
$livraison=new livraison($adresse,$ville,$region,$telephone,$email,$commentaire,$iduser);
var_dump($livraison);
$livraison->setville($ville);
$livraison->setregion("ben arous");
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
	var_dump($livraison);
	header('Location: display.php');
}else{
	header('Location: create.php');
}


?> 