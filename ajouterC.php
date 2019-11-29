<?PHP
include "config.php";
class adoptionC{
    function afficheradoption($adoption)
    {
        echo "type: ".$adoption->gettype()."<br>";
        echo "Id: ".$adoption->getid()."<br>";
        echo "age: ".$adoption->getage()."<br>";
        echo ": Gender".$adoption->getGender()."<br>";
        echo "Vaccination: ".$adoption->getVaccination()."<br>";
       
    }
    
    function ajouteradoption($ado){
		$sql="INSERT INTO `adoption` (`type`, `id`, `age`, `gender`, `vaccination`) VALUES (:type,:id,:age,:gender,:vaccination)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
  
        $type= $ado->gettype();
        $id= $ado->getid();
        $age = $ado->getage();
        $gender= $ado->getgender();
        $vaccination = $ado->getvaccination();
       
        
		$req->bindValue(':type',$type);
		$req->bindValue(':id',$id);
		$req->bindValue(':age',$age);
		$req->bindValue(':gender',$gender);
		$req->bindValue(':vaccination',$vaccination);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
    
    function ajouterAdmin($ado)
    {
		$sql="insert into abonne (type, id, Age, Gender,Vaccination) values (:type, :id,:age,:Gender,:Vaccination ,'admin')";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
  
        $type= $ado->gettype();
        $id= $ado->getid();
        $age = $ado->getage();
        $gender= $ado->getgender();
        $vaccination = $ado->getvaccination();
        
        
        $req->bindValue(':tye',$type);
		$req->bindValue(':id',$id);
		$req->bindValue(':age',$age);
		$req->bindValue(':Gender',$Gender);
		$req->bindValue(':vaccination',$vaccination);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	} 
    
    function afficherado(){
        $sortBy = (isset($_POST['sortBy']) ? $_POST['sortBy'] : NULL);
		$sql="SElECT * From adoption";
        if($sortBy != NULL)
        {
            $sql.=" ORDER BY ".$sortBy;
        }
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
    
    function supprimeradoption($id){
		$sql="DELETE FROM adoption where id= $id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}/***/
    
    function modifieradoption($adoption,$id){
		$sql="UPDATE `adoption` SET `type`=:type,`id`=:id,`age`=:age,`gender`=:gender,`vaccination`=:vaccination WHERE id=$id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
    
        $type= $adoption->gettype();
        $id= $adoption->getid();
        $age = $adoption->getage();
        $gender= $adoption->getgender();
        $vaccination = $adoption->getvaccination();
        $username = $adoption->getUsername();
        $email = $adoption->getEmail();
        $password = $adoption->getPassword();
       
    
		$datas = array(':type'=>$type, ':id'=>$id, ':age'=>$age,':gender'=>$gender,':vaccination'=>$vaccination,':username'=>$username, ':email'=>$email, ':password'=>$password);
    
		$req->bindValue(':type',$type);
		$req->bindValue(':id',$id);
		$req->bindValue(':age',$age);
		$req->bindValue(':gender',$gender);
        $req->bindValue(':vaccination',$vaccination);
        $req->bindValue(':vaccination',$vaccination);
		$req->bindValue(':username',$username);
		$req->bindValue(':email',$email);
		$req->bindValue(':password',$password);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo " Les datas : " ;
            print_r($datas);
        }
		
	}
    
    //
    function recupereradoption($id){
		$sql="SELECT * from adoption where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}
?>